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

    // #[Route('/engagement/nouveau', name: 'app_engagement_new', methods: ['GET', 'POST'])]
    // #[IsGranted('ROLE_USER')]
    #[Route('/engagement/nouveau/{ref}', name: 'app_engagement_new', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function new(
        Request $request, 
        EntityManagerInterface $entityManager,
        ?string $ref = null 
    ): Response
    {
        $this->oracleService->setOracleSessionParams();

        $engagement = new Engagement();

        // Passer ref au formulaire pour reconstruire les mêmes choix qu'à l'affichage
        $form = $this->createForm(EngagementType::class, $engagement, [
            'ref' => $ref,
        ]);
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
                    'redirectUrl' => $this->generateUrl('app_engagement_edit', ['id' => $engagement->getId(), 'ref' => $ref]),
                    'detailsUrl' => $this->generateUrl('app_details', ['ref' => $ref]),
                    
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

    #[Route('/engagement/editer/{id}/{ref}', name: 'app_engagement_edit', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function edit(
        int $id,
        Request $request,
        EntityManagerInterface $entityManager,
        ?string $ref = null
    ): Response
    {
        $this->oracleService->setOracleSessionParams();

        $engagement = $entityManager->getRepository(Engagement::class)->find($id);

        if (!$engagement) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse([
                    'status' => 'error',
                    'message' => ["Engagement introuvable."],
                ], Response::HTTP_NOT_FOUND);
            }
            throw $this->createNotFoundException('Engagement introuvable.');
        }

        // Sécurité : empêcher un user de modifier l'engagement d'un autre
        if ($engagement->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException("Accès non autorisé.");
        }

        // Passer ref au formulaire pour reconstruire les mêmes choix
        $form = $this->createForm(EngagementType::class, $engagement, [
            'ref' => $ref,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $engagement->setDateEngagement(new \DateTime());

            $entityManager->flush();

            if ($request->isXmlHttpRequest()) {
                return new JsonResponse([
                    'status' => 'success',
                    'message' => "Vos données ont bien été enregistrées.",
                    'redirectUrl' => $this->generateUrl('app_engagement_edit', ['id' => $engagement->getId(), 'ref' => $ref]),
                    'detailsUrl' => $this->generateUrl('app_details', ['ref' => $ref]),
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
