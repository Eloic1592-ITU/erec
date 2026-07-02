<?php

namespace App\Controller\Back;

use App\Entity\Campaign;
use App\Form\CampaignType;
use App\Repository\CampaignRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use App\Entity\Position;
use App\Form\PositionType;

#[Route('/admin/campaign')]
class CampaignController extends AbstractController
{
    #[Route('/', name: 'admin_campaign', methods:['GET', 'POST', 'DELETE'])]
    #[IsGranted('ROLE_ADMIN')]
    public function index(CampaignRepository $campaignRepository): Response
    {
        // Header data
        $title = "Campagnes";

        // Breadcrumb data
        $breadcrumbs = [
            ['name' => 'Tableau de bord', 'url' => $this->generateUrl('admin_dashboard')],
            ['name' => $title, 'url' => null]
        ];

        $campaigns = $campaignRepository->findAll();

        $campaignForms = [];
        foreach ($campaigns as $campaign) {
            $campaignForms[] = $this->createForm(CampaignType::class, $campaign, [
                'action' => $this->generateUrl('admin_campaign_edit', ['id' => $campaign->getId()]),
                'method' => 'POST',
            ])->createView();
        }

        $newCampaignForm = $this->createForm(CampaignType::class, new Campaign(), [
            'action' => $this->generateUrl('admin_campaign_new'),
            'method' => 'POST',
        ])->createView();

        return $this->render('back/campaign/index.html.twig', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'campaigns' => $campaigns,
            'campaignForms' => $campaignForms,
            'newCampaignForm' => $newCampaignForm,
        ]);
    }

    #[Route('/new', name: 'admin_campaign_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $campaign = new Campaign();
        $form = $this->createForm(CampaignType::class, $campaign);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            // dump($campaign); // Affiche l'objet complet
            $entityManager->persist($campaign);
            $entityManager->flush();

            return $this->redirectToRoute('admin_campaign', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/campaign/new.html.twig', [
            'campaign' => $campaign,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'admin_campaign_show', methods: ['GET'])]
    public function show(Campaign $campaign): Response
    {
        return $this->render('back/campaign/show.html.twig', [
            'campaign' => $campaign,
        ]);
    }

    // Liste des postes par campagne
    #[Route('/{id}/position', name: 'admin_position_per_campaign', methods: ['GET'])]
    public function showPositionCampaign(Campaign $campaign): Response
    {
        // Header data

        $title = "Postes disponibles";
        $positions = $campaign->getPositions();
        // formulaire d'insertion
        $newPositionForm = $this->createForm(PositionType::class, new Position(), [
            'action' => $this->generateUrl('admin_position_new'),
            'method' => 'POST',
        ])->createView();

        // formulaire de modification
        $positionForms = [];
        foreach ($positions as $position) {
            $positionForms[] = $this->createForm(PositionType::class, $position, [
                'action' => $this->generateUrl('admin_position_edit', ['id' => $position->getId()]),
                'method' => 'POST',
            ])->createView();
        }


        return $this->render('back/campaign/show_positions.html.twig', [
            'title' =>$title,
            'campaign' => $campaign,
            'positions' => $positions,
            'positionForms' => $positionForms,
            'newPositionForm' => $newPositionForm,
        ]);
    }


    #[Route('/{id}/edit', name: 'admin_campaign_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Campaign $campaign, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CampaignType::class, $campaign);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('admin_campaign', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/campaign/edit.html.twig', [
            'campaign' => $campaign,
            'form' => $form,
        ]);
    }

    #[Route('/desactiver/{id}', name: 'admin_campaign_disable', methods:['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function disable(int $id, EntityManagerInterface $entityManager): Response
    {
        $campaign = $entityManager->getRepository(Campaign::class)->find($id);

        if (!$campaign) {
            $this->addFlash("error", "Données non trouvée.");
            return $this->redirectToRoute('admin_campaign');
        }

        $campaign->setDeleted(true);

        $entityManager->persist($campaign);
        $entityManager->flush();

        $this->addFlash("success", "La campagne a été désactivée.");
        return $this->redirectToRoute('admin_campaign');
    }


    #[Route('/activer/{id}', name: 'admin_campaign_activate', methods:['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function activate(int $id, EntityManagerInterface $entityManager): Response
    {
        $campaign = $entityManager->getRepository(Campaign::class)->find($id);

        if (!$campaign) {
            $this->addFlash("error", "Données non trouvée.");
            return $this->redirectToRoute('admin_campaign');
        }

        $campaign->setDeleted(false);

        $entityManager->persist($campaign);
        $entityManager->flush();

        $this->addFlash("success", "La campagne a été réactivée.");
        return $this->redirectToRoute('admin_campaign');
    }
}
