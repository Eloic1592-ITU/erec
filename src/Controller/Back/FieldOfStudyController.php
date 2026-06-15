<?php

namespace App\Controller\Back;

use App\Entity\FieldOfStudy;
use App\Form\FieldOfStudyType;
use App\Repository\FieldOfStudyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/domaines')]
class FieldOfStudyController extends AbstractController
{
    #[Route('/', name: 'admin_field_of_study', methods:['GET', 'POST', 'DELETE'])]
    #[IsGranted('ROLE_ADMIN')]
    public function index(FieldOfStudyRepository $fieldOfStudyRepository): Response
    {
        // Header data
        $title = "Domaines d'études";

        // Breadcrumb data
        $breadcrumbs = [
            ['name' => 'Tableau de bord', 'url' => $this->generateUrl('admin_dashboard')],
            ['name' => $title, 'url' => null]
        ];

        $allfieldOfStudy = $fieldOfStudyRepository->findAll();

        $fieldOfStudyForms = [];
        foreach ($allfieldOfStudy as $fieldOfStudy) {
            $fieldOfStudyForms[] = $this->createForm(FieldOfStudyType::class, $fieldOfStudy, [
                'action' => $this->generateUrl('admin_field_of_study_edit', ['id' => $fieldOfStudy->getId()]),
                'method' => 'POST',
            ])->createView();
        }

        $newFieldOfStudyForm = $this->createForm(FieldOfStudyType::class, new FieldOfStudy(), [
            'action' => $this->generateUrl('admin_field_of_study_new'),
            'method' => 'POST',
        ])->createView();

        return $this->render('back/field-of-study/index.html.twig', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'allfieldOfStudy' => $allfieldOfStudy,
            'fieldOfStudyForms' => $fieldOfStudyForms,
            'newFieldOfStudyForm' => $newFieldOfStudyForm,
        ]);
    }

    #[Route('/nouveau', name: 'admin_field_of_study_new', methods:['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $fieldOfStudy = new FieldOfStudy();

        $form = $this->createForm(FieldOfStudyType::class, $fieldOfStudy);
        $form->handleRequest($request);  
        
        try {
            $entityManager->persist($fieldOfStudy);
            $entityManager->flush();

            $this->addFlash("success", "Données enregistrées.");
            return $this->redirectToRoute('admin_field_of_study');

        } catch (\Exception $e) {
            $this->addFlash("error", "Enregistrement échoué.");
        }

        return $this->redirectToRoute('admin_field_of_study');
    }

    #[Route('/editer/{id}', name: 'admin_field_of_study_edit', methods:['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function edit(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $fieldOfStudy = $entityManager->getRepository(FieldOfStudy::class)->find($id);

        $form = $this->createForm(FieldOfStudyType::class, $fieldOfStudy);
        $form->handleRequest($request);

        try {
            $entityManager->persist($fieldOfStudy);
            $entityManager->flush();

            $this->addFlash("success", "Données enregistrées.");
            return $this->redirectToRoute('admin_field_of_study');

        } catch (\Exception $e) {
            $this->addFlash("error", "Enregistrement échoué.");
        }

        return $this->redirectToRoute('admin_field_of_study');
    }

    #[Route('/desactiver/{id}', name: 'admin_field_of_study_disable', methods:['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function disable(int $id, EntityManagerInterface $entityManager): Response
    {
        $fieldOfStudy = $entityManager->getRepository(FieldOfStudy::class)->find($id);

        if (!$fieldOfStudy) {
            $this->addFlash("error", "Données non trouvée.");
            return $this->redirectToRoute('admin_field_of_study');
        }

        $fieldOfStudy->setDeleted(true);

        $entityManager->persist($fieldOfStudy);
        $entityManager->flush();

        $this->addFlash("success", "Le domaine d'étude a été désactivé.");
        return $this->redirectToRoute('admin_field_of_study');
    }

    #[Route('/activer/{id}', name: 'admin_field_of_study_activate', methods:['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function activate(int $id, EntityManagerInterface $entityManager): Response
    {
        $fieldOfStudy = $entityManager->getRepository(FieldOfStudy::class)->find($id);

        if (!$fieldOfStudy) {
            $this->addFlash("error", "Données non trouvée.");
            return $this->redirectToRoute('admin_field_of_study');
        }

        $fieldOfStudy->setDeleted(false);

        $entityManager->persist($fieldOfStudy);
        $entityManager->flush();

        $this->addFlash("success", "Le domaine d'étude a été réactivé.");
        return $this->redirectToRoute('admin_field_of_study');
    }
}
