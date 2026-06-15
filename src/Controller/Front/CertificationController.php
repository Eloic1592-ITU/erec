<?php

namespace App\Controller\Front;

use App\Entity\Certification;
use App\Form\CertificationType;
use App\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class CertificationController extends AbstractController
{
    #[Route('/certification/nouveau', name:'app_certification_new', methods:['POST'])]
    #[IsGranted('ROLE_USER')]
    public function new(Request $request, EntityManagerInterface $entityManager, FileUploader $fileUploader): Response
    {
        $certification = new Certification();

        $form = $this->createForm(CertificationType::class, $certification);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $certification->setUser($this->getUser());

            // Upload Certificat
            $certificationFile = $form->get('certificationFile')->getData();
            if ($certificationFile) {
                try {
                    $newFilename = $fileUploader->upload($certificationFile, $this->getParameter('certification_directory'));
                    $certification->setCertificationFilename($newFilename);
                } catch (\Exception $e) {
                    return new JsonResponse([
                        'status' => 'error',
                        'message' => $e->getMessage()
                    ]);
                }
            }

            $entityManager->persist($certification);
            $entityManager->flush();
            
            // Générer les URL pour le formulaire de modification et la suppression
            $certificationEditUrl = $this->generateUrl('app_certification_edit', ['id' => $certification->getId()]);
            $certificationDeleteUrl = $this->generateUrl('app_certification_delete', ['id' => $certification->getId()]);

            // Réponse JSON de succès avec les données mises à jour du formulaire
            return new JsonResponse([
                'status' => 'success',
                'message' => 'Certification / Attestation ajoutée avec succès.',
                'data' => [
                    'id' => $certification->getId(),
                    'html' => $this->renderView('front/partials/forms/certification/_form.html.twig', [
                        'form' => $form->createView(),
                        'certification' => $certification,
                        'certification_edit_url' => $certificationEditUrl,
                        'certification_delete_url' => $certificationDeleteUrl,
                    ]),
                    'certification_edit_url' => $certificationEditUrl,
                    'certification_delete_url' => $certificationDeleteUrl,
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

    #[Route('/certification/editer/{id}', name:'app_certification_edit', methods:['POST'])]
    #[IsGranted('ROLE_USER')]
    public function edit(int $id, Request $request, EntityManagerInterface $entityManager, FileUploader $fileUploader): Response
    {
        $certification = $entityManager->getRepository(Certification::class)->find($id);

        if (!$certification) {
            return new JsonResponse([
                'status' => 'error',
                'message' => 'Certification / Attestation non trouvée.'
            ]);
        }

        $form = $this->createForm(CertificationType::class, $certification);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Upload Certificat
            $certificationFile = $form->get('certificationFile')->getData();
            if ($certificationFile) {
                try {
                    $newFilename = $fileUploader->upload($certificationFile, $this->getParameter('certification_directory'));
                    $certification->setCertificationFilename($newFilename);
                } catch (\Exception $e) {
                    return new JsonResponse([
                        'status' => 'error',
                        'message' => $e->getMessage()
                    ]);
                }
            }

            $entityManager->persist($certification);
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

    #[Route('/certification/supprimer/{id}', name:'app_certification_delete', methods:['DELETE'])]
    #[IsGranted('ROLE_USER')]
    public function delete(int $id, EntityManagerInterface $entityManager): Response
    {
        $certification = $entityManager->getRepository(Certification::class)->find($id);

        if (!$certification) {
            return new JsonResponse([
                'status' => 'error',
                'message' => 'Certification / Attestation non trouvée.'
            ]);
        }

        $entityManager->remove($certification);
        $entityManager->flush();

        return new JsonResponse([
            'status' => 'success',
            'message' => 'Certification / Attestation supprimé avec succès.',
        ]);
    }

    #[Route('/certifications/supprimer-tous', name: 'app_certifications_delete_all', methods: ['DELETE'])]
    #[IsGranted('ROLE_USER')]
    public function deleteAll(EntityManagerInterface $entityManager): JsonResponse
    {
        $user = $this->getUser();

        $certifications = $entityManager->getRepository(Certification::class)->findBy(['user' => $user]);

        foreach ($certifications as $certification) {
            $entityManager->remove($certification);
        }

        $entityManager->flush();

        return new JsonResponse(['status' => 'success', 'message' => 'Tous les certificats ont été supprimés avec succès']);
    }
}
