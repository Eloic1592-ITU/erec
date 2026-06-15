<?php

namespace App\Controller\Back;

use App\Entity\Level;
use App\Form\LevelType;
use App\Repository\LevelRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/niveau')]
class LevelController extends AbstractController
{
    #[Route('/', name: 'admin_level', methods:['GET', 'POST', 'DELETE'])]
    #[IsGranted('ROLE_ADMIN')]
    public function index(LevelRepository $levelRepository): Response
    {
        // Header data
        $title = "Niveaux";

        // Breadcrumb data
        $breadcrumbs = [
            ['name' => 'Tableau de bord', 'url' => $this->generateUrl('admin_dashboard')],
            ['name' => $title, 'url' => null]
        ];

        $levels = $levelRepository->findAll();

        $levelForms = [];
        foreach ($levels as $level) {
            $levelForms[] = $this->createForm(LevelType::class, $level, [
                'action' => $this->generateUrl('admin_level_edit', ['id' => $level->getId()]),
                'method' => 'POST',
            ])->createView();
        }

        $newLevelForm = $this->createForm(LevelType::class, new Level(), [
            'action' => $this->generateUrl('admin_level_new'),
            'method' => 'POST',
        ])->createView();

        return $this->render('back/level/index.html.twig', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'levels' => $levels,
            'levelForms' => $levelForms,
            'newLevelForm' => $newLevelForm,
        ]);
    }

    #[Route('/nouveau', name: 'admin_level_new', methods:['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $level = new Level();

        $form = $this->createForm(LevelType::class, $level);
        $form->handleRequest($request);  
        
        try {
            $entityManager->persist($level);
            $entityManager->flush();

            $this->addFlash("success", "Données enregistrées.");
            return $this->redirectToRoute('admin_level');

        } catch (\Exception $e) {
            $this->addFlash("error", "Enregistrement échoué.");
        }

        return $this->redirectToRoute('admin_level');
    }

    #[Route('/editer/{id}', name: 'admin_level_edit', methods:['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function edit(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $level = $entityManager->getRepository(Level::class)->find($id);

        $form = $this->createForm(LevelType::class, $level);
        $form->handleRequest($request);

        try {
            $entityManager->persist($level);
            $entityManager->flush();

            $this->addFlash("success", "Données enregistrées.");
            return $this->redirectToRoute('admin_level');

        } catch (\Exception $e) {
            $this->addFlash("error", "Enregistrement échoué.");
        }

        return $this->redirectToRoute('admin_level');
    }

    #[Route('/desactiver/{id}', name: 'admin_level_disable', methods:['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function disable(int $id, EntityManagerInterface $entityManager): Response
    {
        $level = $entityManager->getRepository(Level::class)->find($id);

        if (!$level) {
            $this->addFlash("error", "Données non trouvée.");
            return $this->redirectToRoute('admin_level');
        }

        $level->setDeleted(true);

        $entityManager->persist($level);
        $entityManager->flush();

        $this->addFlash("success", "Le niveau a été désactivé.");
        return $this->redirectToRoute('admin_level');
    }

    #[Route('/activer/{id}', name: 'admin_level_activate', methods:['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function activate(int $id, EntityManagerInterface $entityManager): Response
    {
        $level = $entityManager->getRepository(Level::class)->find($id);

        if (!$level) {
            $this->addFlash("error", "Données non trouvée.");
            return $this->redirectToRoute('admin_level');
        }

        $level->setDeleted(false);

        $entityManager->persist($level);
        $entityManager->flush();

        $this->addFlash("success", "Le niveau a été réactivé.");
        return $this->redirectToRoute('admin_level');
    }
}
