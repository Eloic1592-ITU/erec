<?php

namespace App\Controller\Front;

use App\Entity\Education;
use App\Form\EducationType;
use App\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class EducationController extends AbstractController
{
    #[Route('/diplome/nouveau', name:'app_education_new', methods:['POST'])]
    #[IsGranted('ROLE_USER')]
    public function new(Request $request, EntityManagerInterface $entityManager, FileUploader $fileUploader): Response
    {
        $user = $this->getUser();

        $education = new Education();
        
        $form = $this->createForm(EducationType::class, $education);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Récupérer les domaines d'étude déjà sélectionnés par l'utilisateur
            $existingEducations = $entityManager->getRepository(Education::class)->findBy(['user' => $user]);

            $selectedFieldOfStudy = $education->getFieldOfStudy();
            
            if ($selectedFieldOfStudy->getName() !== 'Autre') {
                foreach ($existingEducations as $existingEducation) {
                    $existingFieldOfStudy = $existingEducation->getFieldOfStudy();
        
                    // Exclure également les domaines d'étude existants avec le nom "Autre"
                    if ($existingFieldOfStudy && $existingFieldOfStudy->getName() !== 'Autre' && $existingFieldOfStudy === $selectedFieldOfStudy) {
                        return new JsonResponse([
                            'status' => 'error',
                            'message' => 'Vous avez déjà un diplôme en ' . $selectedFieldOfStudy->getName(),
                        ]);
                    }
                }
            }

//     <parameter key="travail_directory">C:\Users\D3ll\Documents\navantyh\erecrutement/public/uploads/attestation-de-travail</parameter>

            $education->setUser($user);

            // Upload diplôme
            $degreeFile = $form->get('degreeFile')->getData();
            if ($degreeFile) {
                try {
                    $newFilename = $fileUploader->upload($degreeFile, $this->getParameter('diplome_directory'));
                    $education->setDegreeFilename($newFilename);
                } catch (\Exception $e) {
                    return new JsonResponse([
                        'status' => 'error',
                        'message' => $e->getMessage()
                    ]);
                }
            }
            
            // Upload lettre de motivation
            $coverLetterFile = $form->get('coverLetterFile')->getData();
            if ($coverLetterFile) {
                try {
                    $newFilename = $fileUploader->upload($coverLetterFile, $this->getParameter('cover_letter_directory'));
                    $education->setCoverLetterFilename($newFilename);
                } catch (\Exception $e) {
                    return new JsonResponse([
                        'status' => 'error',
                        'message' => $e->getMessage()
                    ]);
                }
            }

            $entityManager->persist($education);
            $entityManager->flush();
            
            // Générer les URL pour le formulaire de modification et la suppression
            $editUrl = $this->generateUrl('app_education_edit', ['id' => $education->getId()]);
            $deleteUrl = $this->generateUrl('app_education_delete', ['id' => $education->getId()]);

            // Réponse JSON de succès avec les données mises à jour du formulaire
            return new JsonResponse([
                'status' => 'success',
                'message' => 'Diplôme ajouté avec succès.',
                'data' => [
                    'id' => $education->getId(),
                    'html' => $this->renderView('front/partials/forms/education/_form.html.twig', [
                        'form' => $form->createView(),
                        'education' => $education,
                        'edit_url' => $editUrl,
                        'delete_url' => $deleteUrl,
                    ]),
                    'edit_url' => $editUrl,
                    'delete_url' => $deleteUrl,
                ],
            ]);
        }

        $errors = [];
        foreach ($form->getErrors(true) as $error) {
            $errors[] = $error->getMessage();
        }

        return new JsonResponse([
            'status' => 'error',
            'message' => implode("\n", $errors),
        ]);
    }

    #[Route('/diplome/editer/{id}', name:'app_education_edit', methods:['POST'])]
    #[IsGranted('ROLE_USER')]
    public function edit(int $id, Request $request, EntityManagerInterface $entityManager, FileUploader $fileUploader): Response
    {
        $education = $entityManager->getRepository(Education::class)->find($id);

        if (!$education) {
            return new JsonResponse([
                'status' => 'error',
                'message' => 'Profil non trouvé.'
            ]);
        }

        // Sauvegarder l'ancien domaine d'étude
        $oldFieldOfStudy = $education->getFieldOfStudy();

        $form = $this->createForm(EducationType::class, $education);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Récupérer le nouveau domaine d'étude après soumission
            $newFieldOfStudy = $education->getFieldOfStudy();

            // Vérifier si le domaine d'étude a été modifié
            if ($oldFieldOfStudy !== $newFieldOfStudy) {
                // Vérifier si le nouveau domaine d'étude n'est pas "Autre"
                if ($newFieldOfStudy->getName() !== 'Autre') {
                    // Récupérer les domaines d'étude déjà sélectionnés par l'utilisateur
                    $existingEducations = $entityManager->getRepository(Education::class)->findBy(['user' => $this->getUser()]);

                    foreach ($existingEducations as $existingEducation) {
                        $existingFieldOfStudy = $existingEducation->getFieldOfStudy();
                        
                        // Exclure également les domaines d'étude existants avec le nom "Autre"
                        if ($existingEducation !== $education && $existingFieldOfStudy && $existingFieldOfStudy->getName() !== 'Autre' && $existingFieldOfStudy === $newFieldOfStudy) {
                            return new JsonResponse([
                                'status' => 'error',
                                'message' => 'Vous avez déjà un diplôme en ' . $newFieldOfStudy->getName(),
                            ]);
                        }
                    }
                }
            }

            // Upload diplôme
            $degreeFile = $form->get('degreeFile')->getData();
            if ($degreeFile) {
                try {
                    $newFilename = $fileUploader->upload($degreeFile, $this->getParameter('diplome_directory'));
                    $education->setDegreeFilename($newFilename);
                } catch (\Exception $e) {
                    return new JsonResponse([
                        'status' => 'error',
                        'message' => $e->getMessage()
                    ]);
                }
            }

            // Upload lettre de motivation
            $coverLetterFile = $form->get('coverLetterFile')->getData();
            if ($coverLetterFile) {
                try {
                    $newFilename = $fileUploader->upload($coverLetterFile, $this->getParameter('cover_letter_directory'));
                    $education->setCoverLetterFilename($newFilename);
                } catch (\Exception $e) {
                    return new JsonResponse([
                        'status' => 'error',
                        'message' => $e->getMessage()
                    ]);
                }
            }

            $entityManager->persist($education);
            $entityManager->flush();

            // Réponse JSON de succès
            return new JsonResponse([
                'status' => 'success',
                'message' => 'Modification enregistrée avec succès.',
            ]);
        }

        $errors = [];
        foreach ($form->getErrors(true) as $error) {
            $errors[] = $error->getMessage();
        }

        return new JsonResponse([
            'status' => 'error',
            'message' => implode("\n", $errors),
        ]);
    }

    #[Route('/diplome/supprimer/{id}', name:'app_education_delete', methods:['DELETE'])]
    #[IsGranted('ROLE_USER')]
    public function delete(int $id, EntityManagerInterface $entityManager): Response
    {
        $education = $entityManager->getRepository(Education::class)->find($id);

        if (!$education) {
            return new JsonResponse([
                'status' => 'error',
                'message' => 'Diplôme non trouvé.'
            ]);
        }

        $entityManager->remove($education);
        $entityManager->flush();

        return new JsonResponse([
            'status' => 'success',
            'message' => 'Diplôme supprimé avec succès.',
        ]);
    }
}
