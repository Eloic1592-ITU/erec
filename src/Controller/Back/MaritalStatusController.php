<?php

namespace App\Controller\Back;

use App\Entity\MaritalStatus;
use App\Form\MaritalStatusType;
use App\Repository\MaritalStatusRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/état-civil')]
class MaritalStatusController extends AbstractController
{
    #[Route('/', name: 'admin_marital_status', methods:['GET', 'POST', 'DELETE'])]
    #[IsGranted('ROLE_ADMIN')]
    public function index(MaritalStatusRepository $maritalStatusRepository): Response
    {
        // Header data
        $title = "Situations familiales";

        // Breadcrumb data
        $breadcrumbs = [
            ['name' => 'Tableau de bord', 'url' => $this->generateUrl('admin_dashboard')],
            ['name' => $title, 'url' => null]
        ];

        $allMaritalStatus = $maritalStatusRepository->findAll();

        $maritalStatusForms = [];
        foreach ($allMaritalStatus as $maritalStatus) {
            $maritalStatusForms[] = $this->createForm(MaritalStatusType::class, $maritalStatus, [
                'action' => $this->generateUrl('admin_marital_status_edit', ['id' => $maritalStatus->getId()]),
                'method' => 'POST',
            ])->createView();
        }

        $newMaritalStatusForm = $this->createForm(MaritalStatusType::class, new MaritalStatus(), [
            'action' => $this->generateUrl('admin_marital_status_new'),
            'method' => 'POST',
        ])->createView();

        return $this->render('back/marital-status/index.html.twig', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'allMaritalStatus' => $allMaritalStatus,
            'maritalStatusForms' => $maritalStatusForms,
            'newMaritalStatusForm' => $newMaritalStatusForm,
        ]);
    }

    #[Route('/nouveau', name: 'admin_marital_status_new', methods:['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $maritalStatus = new MaritalStatus();

        $form = $this->createForm(MaritalStatusType::class, $maritalStatus);
        $form->handleRequest($request);  
        
        try {
            $entityManager->persist($maritalStatus);
            $entityManager->flush();

            $this->addFlash("success", "Données enregistrées.");
            return $this->redirectToRoute('admin_marital_status');

        } catch (\Exception $e) {
            $this->addFlash("error", "Enregistrement échoué.");
        }

        return $this->redirectToRoute('admin_marital_status');
    }

    #[Route('/editer/{id}', name: 'admin_marital_status_edit', methods:['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function edit(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $maritalStatus = $entityManager->getRepository(MaritalStatus::class)->find($id);

        $form = $this->createForm(MaritalStatusType::class, $maritalStatus);
        $form->handleRequest($request);

        try {
            $entityManager->persist($maritalStatus);
            $entityManager->flush();

            $this->addFlash("success", "Données enregistrées.");
            return $this->redirectToRoute('admin_marital_status');

        } catch (\Exception $e) {
            $this->addFlash("error", "Enregistrement échoué.");
        }

        return $this->redirectToRoute('admin_marital_status');
    }

    #[Route('/desactiver/{id}', name: 'admin_marital_status_disable', methods:['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function disable(int $id, EntityManagerInterface $entityManager): Response
    {
        $maritalStatus = $entityManager->getRepository(MaritalStatus::class)->find($id);

        if (!$maritalStatus) {
            $this->addFlash("error", "Données non trouvée.");
            return $this->redirectToRoute('admin_marital_status');
        }

        $maritalStatus->setDeleted(true);

        $entityManager->persist($maritalStatus);
        $entityManager->flush();

        $this->addFlash("success", "La catégorie de situation familiale a été désactivée.");
        return $this->redirectToRoute('admin_marital_status');
    }

    #[Route('/activer/{id}', name: 'admin_marital_status_activate', methods:['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function activate(int $id, EntityManagerInterface $entityManager): Response
    {
        $maritalStatus = $entityManager->getRepository(MaritalStatus::class)->find($id);

        if (!$maritalStatus) {
            $this->addFlash("error", "Données non trouvée.");
            return $this->redirectToRoute('admin_marital_status');
        }

        $maritalStatus->setDeleted(false);

        $entityManager->persist($maritalStatus);
        $entityManager->flush();

        $this->addFlash("success", "La catégorie de situation familiale a été réactivée.");
        return $this->redirectToRoute('admin_marital_status');
    }
}
