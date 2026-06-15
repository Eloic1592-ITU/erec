<?php

namespace App\Controller\Front;

use App\Entity\JobApplication;
use App\Form\JobApplicationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class JobApplicationController extends AbstractController
{
    #[Route('/job/nouveau', name: 'app_job_application_new', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $jobApplication = new JobApplication();

        $form = $this->createForm(JobApplicationType::class, $jobApplication);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $jobApplication->setUser($this->getUser());
            
            $entityManager->persist($jobApplication);
            $entityManager->flush();

            if ($request->isXmlHttpRequest()) {
                return new JsonResponse([
                    'status' => 'success',
                    'message' => "Vos données ont bien été enregistrées.",
                    'redirectUrl' => $this->generateUrl('app_job_application_edit', ['id' => $jobApplication->getId()]),
                ]);
            }
        }

        if ($request->isXmlHttpRequest()) {
            $formErrors = [];
            foreach ($form->getErrors(true) as $error) {
                $formErrors[] = $error->getMessage();
            }
            return new JsonResponse([
                'status' => 'error',
                'message' => $formErrors
            ]);
        }
    }

    #[Route('/job/editer/{id}', name: 'app_job_application_edit', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function edit(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $jobApplication = $entityManager->getRepository(JobApplication::class)->find($id);

        $form = $this->createForm(JobApplicationType::class, $jobApplication);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($jobApplication);
            $entityManager->flush();

            if ($request->isXmlHttpRequest()) {
                return new JsonResponse([
                    'status' => 'success',
                    'message' => "Modification enregistrées.",
                    'isEdit' => true
                ]);
            }
        }

        if ($request->isXmlHttpRequest()) {
            $formErrors = [];
            foreach ($form->getErrors(true) as $error) {
                $formErrors[] = $error->getMessage();
            }
            return new JsonResponse([
                'status' => 'error',
                'message' => $formErrors
            ]);
        }
    }
}
