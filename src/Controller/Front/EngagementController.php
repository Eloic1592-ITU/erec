<?php

namespace App\Controller\Front;

use App\Entity\Engagement;
use App\Form\EngagementType;
use App\Service\OracleService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class EngagementController extends AbstractController
{
    private OracleService $oracleService;

    public function __construct(OracleService $oracleService)
    {
        $this->oracleService = $oracleService;
    }

    #[Route('/engagement/nouveau', name: 'app_engagement_new', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $this->oracleService->setOracleSessionParams();

        $engagement = new Engagement();

        $form = $this->createForm(EngagementType::class, $engagement);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {

            $engagement->setUser($this->getUser());
            $engagement->setDateEngagement(new \DateTime());
            
            $entityManager->persist($engagement);
            $entityManager->flush();

            if ($request->isXmlHttpRequest()) {
                return new JsonResponse([
                    'status' => 'success',
                    'message' => "Vos données ont bien été enregistrées.",
                    'redirectUrl' => $this->generateUrl('app_engagement_edit', ['id' => $engagement->getId()]),
                    'detailsUrl' => $this->generateUrl('app_details'),
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

    #[Route('/engagement/editer/{id}', name: 'app_engagement_edit', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function edit(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $this->oracleService->setOracleSessionParams();

        $engagement = $entityManager->getRepository(Engagement::class)->find($id);

        $form = $this->createForm(EngagementType::class, $engagement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $entityManager->persist($engagement);
            $entityManager->flush();

            if ($request->isXmlHttpRequest()) {
                return new JsonResponse([
                    'status' => 'success',
                    'message' => "Modification enregistrées.",
                    'isEdit' => true,
                    'detailsUrl' => $this->generateUrl('app_details'),
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
