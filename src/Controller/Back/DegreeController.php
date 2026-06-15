<?php

namespace App\Controller\Back;

use App\Entity\Degree;
use App\Form\DegreeType;
use App\Repository\DegreeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/diplôme')]
class DegreeController extends AbstractController
{
    #[Route('/', name: 'admin_degree', methods:['GET', 'POST', 'DELETE'])]
    #[IsGranted('ROLE_ADMIN')]
    public function index(DegreeRepository $degreeRepository): Response
    {
        // Header data
        $title = "Diplômes";

        // Breadcrumb data
        $breadcrumbs = [
            ['name' => 'Tableau de bord', 'url' => $this->generateUrl('admin_dashboard')],
            ['name' => $title, 'url' => null]
        ];

        $allDegree = $degreeRepository->findAll();

        $degreeForms = [];
        foreach ($allDegree as $degree) {
            $degreeForms[] = $this->createForm(DegreeType::class, $degree, [
                'action' => $this->generateUrl('admin_degree_edit', ['id' => $degree->getId()]),
                'method' => 'POST',
            ])->createView();
        }

        $newDegreeForm = $this->createForm(DegreeType::class, new Degree(), [
            'action' => $this->generateUrl('admin_degree_new'),
            'method' => 'POST',
        ])->createView();

        return $this->render('back/degree/index.html.twig', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'allDegree' => $allDegree,
            'degreeForms' => $degreeForms,
            'newDegreeForm' => $newDegreeForm,
        ]);
    }

    #[Route('/nouveau', name: 'admin_degree_new', methods:['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $degree = new Degree();

        $form = $this->createForm(DegreeType::class, $degree);
        $form->handleRequest($request);  
        
        try {
            $entityManager->persist($degree);
            $entityManager->flush();

            $this->addFlash("success", "Données enregistrées.");
            return $this->redirectToRoute('admin_degree');

        } catch (\Exception $e) {
            $this->addFlash("error", "Enregistrement échoué.");
        }

        return $this->redirectToRoute('admin_degree');
    }

    #[Route('/editer/{id}', name: 'admin_degree_edit', methods:['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function edit(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $degree = $entityManager->getRepository(Degree::class)->find($id);

        $form = $this->createForm(DegreeType::class, $degree);
        $form->handleRequest($request);

        try {
            $entityManager->persist($degree);
            $entityManager->flush();

            $this->addFlash("success", "Données enregistrées.");
            return $this->redirectToRoute('admin_degree');

        } catch (\Exception $e) {
            $this->addFlash("error", "Enregistrement échoué.");
        }

        return $this->redirectToRoute('admin_degree');
    }

    #[Route('/desactiver/{id}', name: 'admin_degree_disable', methods:['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function disable(int $id, EntityManagerInterface $entityManager): Response
    {
        $degree = $entityManager->getRepository(Degree::class)->find($id);

        if (!$degree) {
            $this->addFlash("error", "Données non trouvée.");
            return $this->redirectToRoute('admin_degree');
        }

        $degree->setDeleted(true);

        $entityManager->persist($degree);
        $entityManager->flush();

        $this->addFlash("success", "Le diplômes a été désactivé.");
        return $this->redirectToRoute('admin_degree');
    }

    #[Route('/activer/{id}', name: 'admin_degree_activate', methods:['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function activate(int $id, EntityManagerInterface $entityManager): Response
    {
        $degree = $entityManager->getRepository(Degree::class)->find($id);

        if (!$degree) {
            $this->addFlash("error", "Données non trouvée.");
            return $this->redirectToRoute('admin_degree');
        }

        $degree->setDeleted(false);

        $entityManager->persist($degree);
        $entityManager->flush();

        $this->addFlash("success", "Le diplômes a été réactivé.");
        return $this->redirectToRoute('admin_degree');
    }
}
