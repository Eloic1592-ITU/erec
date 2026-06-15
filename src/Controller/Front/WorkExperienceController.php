<?php

namespace App\Controller\Front;

use App\Entity\WorkExperience;
use App\Form\WorkExperienceType;
use App\Service\FileUploader;
use App\Service\OracleService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class WorkExperienceController extends AbstractController
{

    private OracleService $oracleService;

    public function __construct(OracleService $oracleService)
    {
        $this->oracleService = $oracleService;
    }
    
    #[Route('/experience/nouveau', name:'app_work_experience_new', methods:['POST'])]
    #[IsGranted('ROLE_USER')]
    public function new(Request $request, EntityManagerInterface $entityManager, FileUploader $fileUploader): Response
    {
        $this->oracleService->setOracleSessionParams();

        $workExperience = new WorkExperience();

        $form = $this->createForm(WorkExperienceType::class, $workExperience);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $workExperience->setUser($this->getUser());

            // Upload Attestation de travail
            $workFile = $form->get('workFile')->getData();
            if ($workFile) {
                try {
                    $newFilename = $fileUploader->upload($workFile, $this->getParameter('travail_directory'));
                    $workExperience->setWorkFilename($newFilename);
                } catch (\Exception $e) {
                    return new JsonResponse([
                        'status' => 'error',
                        'message' => $e->getMessage()
                    ]);
                }
            }

            $entityManager->persist($workExperience);
            $entityManager->flush();
            
            // Générer les URL pour le formulaire de modification et la suppression
            $workExperienceEditUrl = $this->generateUrl('app_work_experience_edit', ['id' => $workExperience->getId()]);
            $workExperienceDeleteUrl = $this->generateUrl('app_work_experience_delete', ['id' => $workExperience->getId()]);

            // Réponse JSON de succès avec les données mises à jour du formulaire
            return new JsonResponse([
                'status' => 'success',
                'message' => 'Poste ajouté avec succès.',
                'data' => [
                    'id' => $workExperience->getId(),
                    'html' => $this->renderView('front/partials/forms/work-experience/_form.html.twig', [
                        'form' => $form->createView(),
                        'workExperience' => $workExperience,
                        'work_experience_edit_url' => $workExperienceEditUrl,
                        'work_experience_delete_url' => $workExperienceDeleteUrl,
                    ]),
                    'work_experience_edit_url' => $workExperienceEditUrl,
                    'work_experience_delete_url' => $workExperienceDeleteUrl,
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

    #[Route('/experience/editer/{id}', name:'app_work_experience_edit', methods:['POST'])]
    #[IsGranted('ROLE_USER')]
    public function edit(int $id, Request $request, EntityManagerInterface $entityManager, FileUploader $fileUploader): Response
    {
        $this->oracleService->setOracleSessionParams();

        $workExperience = $entityManager->getRepository(WorkExperience::class)->find($id);

        if (!$workExperience) {
            return new JsonResponse([
                'status' => 'error',
                'message' => 'Poste non trouvé.'
            ]);
        }

        $form = $this->createForm(WorkExperienceType::class, $workExperience);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Upload Attestation de travail
            $workFile = $form->get('workFile')->getData();
            if ($workFile) {
                try {
                    $newFilename = $fileUploader->upload($workFile, $this->getParameter('travail_directory'));
                    $workExperience->setWorkFilename($newFilename);
                } catch (\Exception $e) {
                    return new JsonResponse([
                        'status' => 'error',
                        'message' => $e->getMessage()
                    ]);
                }
            }

            $entityManager->persist($workExperience);
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

    #[Route('/experience/supprimer/{id}', name:'app_work_experience_delete', methods:['DELETE'])]
    #[IsGranted('ROLE_USER')]
    public function delete(int $id, EntityManagerInterface $entityManager): Response
    {
        $this->oracleService->setOracleSessionParams();

        $workExperience = $entityManager->getRepository(WorkExperience::class)->find($id);

        if (!$workExperience) {
            return new JsonResponse([
                'status' => 'error',
                'message' => 'Poste non trouvé.'
            ]);
        }

        $entityManager->remove($workExperience);
        $entityManager->flush();

        return new JsonResponse([
            'status' => 'success',
            'message' => 'Poste supprimé avec succès.',
        ]);
    }

    #[Route('/experiences/supprimer-tous', name: 'app_work_experiences_delete_all', methods: ['DELETE'])]
    #[IsGranted('ROLE_USER')]
    public function deleteAll(EntityManagerInterface $entityManager): JsonResponse
    {
        $this->oracleService->setOracleSessionParams();

        $user = $this->getUser();

        $workExperiences = $entityManager->getRepository(WorkExperience::class)->findBy(['user' => $user]);

        foreach ($workExperiences as $workExperience) {
            $entityManager->remove($workExperience);
        }

        $entityManager->flush();

        return new JsonResponse(['status' => 'success', 'message' => 'Tous les postes ont été supprimés avec succès']);
    }
}
