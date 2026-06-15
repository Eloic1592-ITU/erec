<?php

namespace App\Controller\Back;

use App\Entity\Position;
use App\Form\PositionType;
use App\Repository\PositionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/poste')]
class PositionController extends AbstractController
{
    #[Route('/', name: 'admin_position', methods:['GET', 'POST', 'DELETE'])]
    #[IsGranted('ROLE_ADMIN')]
    public function index(PositionRepository $positionRepository): Response
    {
        // Header data
        $title = "Postes";

        // Breadcrumb data
        $breadcrumbs = [
            ['name' => 'Tableau de bord', 'url' => $this->generateUrl('admin_dashboard')],
            ['name' => $title, 'url' => null]
        ];

        $positions = $positionRepository->findAll();

        $positionForms = [];
        foreach ($positions as $position) {
            $positionForms[] = $this->createForm(PositionType::class, $position, [
                'action' => $this->generateUrl('admin_position_edit', ['id' => $position->getId()]),
                'method' => 'POST',
            ])->createView();
        }

        $newPositionForm = $this->createForm(PositionType::class, new Position(), [
            'action' => $this->generateUrl('admin_position_new'),
            'method' => 'POST',
        ])->createView();

        return $this->render('back/position/index.html.twig', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'positions' => $positions,
            'positionForms' => $positionForms,
            'newPositionForm' => $newPositionForm,
        ]);
    }

    #[Route('/nouveau', name: 'admin_position_new', methods:['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $position = new Position();

        // Vérifier si la référence existe déjà
        $existingUserByReference = $entityManager->getRepository(Position::class)->findOneBy(['reference' => $position->getReference()]);
        if ($existingUserByReference) {
            $this->addFlash('error', 'Cette référence est déjà utilisée.');
            return $this->redirectToRoute('admin_position');
        }

        $form = $this->createForm(PositionType::class, $position);
        $form->handleRequest($request);  
        
        try {
            $entityManager->persist($position);
            $entityManager->flush();

            $this->addFlash("success", "Données enregistrées.");
            return $this->redirectToRoute('admin_position');

        } catch (\Exception $e) {
            $this->addFlash("error", "Enregistrement échoué.");
        }

        return $this->redirectToRoute('admin_position');
    }

    #[Route('/editer/{id}', name: 'admin_position_edit', methods:['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function edit(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $position = $entityManager->getRepository(Position::class)->find($id);

        // Vérifier si la référence existe déjà
        $existingUserByReferences = $entityManager->getRepository(Position::class)->findBy(['reference' => $position->getReference()]);
        if (count($existingUserByReferences) > 1 ) {
            $this->addFlash('error', 'Cette référence est déjà utilisée.');
            return $this->redirectToRoute('admin_position');
        }

        $form = $this->createForm(PositionType::class, $position);
        $form->handleRequest($request);

        try {
            $entityManager->persist($position);
            $entityManager->flush();

            $this->addFlash("success", "Données enregistrées.");
            return $this->redirectToRoute('admin_position');

        } catch (\Exception $e) {
            $this->addFlash("error", "Enregistrement échoué.");
        }

        return $this->redirectToRoute('admin_position');
    }

    #[Route('/desactiver/{id}', name: 'admin_position_disable', methods:['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function disable(int $id, EntityManagerInterface $entityManager): Response
    {
        $position = $entityManager->getRepository(Position::class)->find($id);

        if (!$position) {
            $this->addFlash("error", "Données non trouvée.");
            return $this->redirectToRoute('admin_position');
        }

        $position->setDeleted(true);

        $entityManager->persist($position);
        $entityManager->flush();

        $this->addFlash("success", "Le poste a été désactivé.");
        return $this->redirectToRoute('admin_position');
    }

    #[Route('/activer/{id}', name: 'admin_position_activate', methods:['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function activate(int $id, EntityManagerInterface $entityManager): Response
    {
        $position = $entityManager->getRepository(Position::class)->find($id);

        if (!$position) {
            $this->addFlash("error", "Données non trouvée.");
            return $this->redirectToRoute('admin_position');
        }

        $position->setDeleted(false);

        $entityManager->persist($position);
        $entityManager->flush();

        $this->addFlash("success", "Le poste a été réactivé.");
        return $this->redirectToRoute('admin_position');
    }
}
