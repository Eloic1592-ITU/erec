<?php

namespace App\Controller\Back;

use App\Entity\Civility;
use App\Form\CivilityType;
use App\Repository\CivilityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/civilité')]
class CivilityController extends AbstractController
{
    #[Route('/', name: 'admin_civility', methods:['GET', 'POST', 'DELETE'])]
    #[IsGranted('ROLE_ADMIN')]
    public function index(CivilityRepository $civilityRepository): Response
    {
        // Header data
        $title = "Civilités";

        // Breadcrumb data
        $breadcrumbs = [
            ['name' => 'Tableau de bord', 'url' => $this->generateUrl('admin_dashboard')],
            ['name' => $title, 'url' => null]
        ];

        $civilities = $civilityRepository->findAll();

        $civilityForms = [];
        foreach ($civilities as $civility) {
            $civilityForms[] = $this->createForm(CivilityType::class, $civility, [
                'action' => $this->generateUrl('admin_civility_edit', ['id' => $civility->getId()]),
                'method' => 'POST',
            ])->createView();
        }

        $newCivilityForm = $this->createForm(CivilityType::class, new Civility(), [
            'action' => $this->generateUrl('admin_civility_new'),
            'method' => 'POST',
        ])->createView();

        return $this->render('back/civility/index.html.twig', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'civilities' => $civilities,
            'civilityForms' => $civilityForms,
            'newCivilityForm' => $newCivilityForm,
        ]);
    }

    #[Route('/nouveau', name: 'admin_civility_new', methods:['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $civility = new Civility();

        $form = $this->createForm(CivilityType::class, $civility);
        $form->handleRequest($request);  
        
        try {
            $entityManager->persist($civility);
            $entityManager->flush();

            $this->addFlash("success", "Données enregistrées.");
            return $this->redirectToRoute('admin_civility');

        } catch (\Exception $e) {
            $this->addFlash("error", "Enregistrement échoué.");
        }

        return $this->redirectToRoute('admin_civility');
    }

    #[Route('/editer/{id}', name: 'admin_civility_edit', methods:['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function edit(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $civility = $entityManager->getRepository(Civility::class)->find($id);

        $form = $this->createForm(CivilityType::class, $civility);
        $form->handleRequest($request);

        try {
            $entityManager->persist($civility);
            $entityManager->flush();

            $this->addFlash("success", "Données enregistrées.");
            return $this->redirectToRoute('admin_civility');

        } catch (\Exception $e) {
            $this->addFlash("error", "Enregistrement échoué.");
        }

        return $this->redirectToRoute('admin_civility');
    }

    #[Route('/desactiver/{id}', name: 'admin_civility_disable', methods:['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function disable(int $id, EntityManagerInterface $entityManager): Response
    {
        $civility = $entityManager->getRepository(Civility::class)->find($id);

        if (!$civility) {
            $this->addFlash("error", "Données non trouvée.");
            return $this->redirectToRoute('admin_civility');
        }

        $civility->setDeleted(true);

        $entityManager->persist($civility);
        $entityManager->flush();

        $this->addFlash("success", "La civilité a été désactivée.");
        return $this->redirectToRoute('admin_civility');
    }

    #[Route('/activer/{id}', name: 'admin_civility_activate', methods:['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function activate(int $id, EntityManagerInterface $entityManager): Response
    {
        $civility = $entityManager->getRepository(Civility::class)->find($id);

        if (!$civility) {
            $this->addFlash("error", "Données non trouvée.");
            return $this->redirectToRoute('admin_civility');
        }

        $civility->setDeleted(false);

        $entityManager->persist($civility);
        $entityManager->flush();

        $this->addFlash("success", "La civilité a été réactivée.");
        return $this->redirectToRoute('admin_civility');
    }
}
