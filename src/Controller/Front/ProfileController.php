<?php

namespace App\Controller\Front;

use App\Entity\Profile;
use App\Form\ProfileType;
use App\Service\OracleService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class ProfileController extends AbstractController
{
    private OracleService $oracleService;

    public function __construct(OracleService $oracleService)
    {
        $this->oracleService = $oracleService;
    }

    #[Route('/profil/nouveau', name: 'app_profile_new', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $this->oracleService->setOracleSessionParams();

        $profile = new Profile();

        $form = $this->createForm(ProfileType::class, $profile);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $profile->setUser($this->getUser());
            
            $entityManager->persist($profile);
            $entityManager->flush();

            return new JsonResponse([
                'status' => 'success',
                'message' => "Vos données ont bien été enregistrées.",
                'redirectUrl' => $this->generateUrl('app_profile_edit', ['id' => $profile->getId()]),
            ]);
        }

        if ($form->isSubmitted() && !$form->isValid() && $request->isXmlHttpRequest()) {
            $formErrors = [];
            foreach ($form->getErrors(true) as $error) {
                $formErrors[] = $error->getMessage();
            }
            return new JsonResponse([
                'status' => 'error',
                'message' => $formErrors
            ]);
        }

        return new JsonResponse([
            'status' => 'error',
            'message' => 'Invalid request'
        ]);
    }

    #[Route('/profil/editer/{id}', name: 'app_profile_edit', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function edit(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {   
        $this->oracleService->setOracleSessionParams();

        $profile = $entityManager->getRepository(Profile::class)->find($id);

        if (!$profile) {
            return new JsonResponse([
                'status' => 'error',
                'message' => 'Profil non trouvé.'
            ]);
        }

        $form = $this->createForm(ProfileType::class, $profile);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($profile);
            $entityManager->flush();

            return new JsonResponse([
                'status' => 'success',
                'message' => "Modification enregistrées.",
                'isEdit' => true
            ]);
        }

        if ($form->isSubmitted() && !$form->isValid() && $request->isXmlHttpRequest()) {
            $formErrors = [];
            foreach ($form->getErrors(true) as $error) {
                $formErrors[] = $error->getMessage();
            }
            return new JsonResponse([
                'status' => 'error',
                'message' => $formErrors
            ]);
        }

        return new JsonResponse([
            'status' => 'error',
            'message' => 'Invalid request'
        ]);
    }
}
