<?php

namespace App\Controller\Back;

use App\Entity\Skill;
use App\Form\SkillType;
use App\Repository\SkillRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/compétence')]
class SkillController extends AbstractController
{
    #[Route('/', name: 'admin_skill', methods:['GET', 'POST', 'DELETE'])]
    #[IsGranted('ROLE_ADMIN')]
    public function index(SkillRepository $skillRepository): Response
    {
        // Header data
        $title = "Compétences";

        // Breadcrumb data
        $breadcrumbs = [
            ['name' => 'Tableau de bord', 'url' => $this->generateUrl('admin_dashboard')],
            ['name' => $title, 'url' => null]
        ];

        $skills = $skillRepository->findAll();

        $skillForms = [];
        foreach ($skills as $skill) {
            $skillForms[] = $this->createForm(SkillType::class, $skill, [
                'action' => $this->generateUrl('admin_skill_edit', ['id' => $skill->getId()]),
                'method' => 'POST',
            ])->createView();
        }

        $newSkillForm = $this->createForm(SkillType::class, new Skill(), [
            'action' => $this->generateUrl('admin_skill_new'),
            'method' => 'POST',
        ])->createView();

        return $this->render('back/skill/index.html.twig', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'skills' => $skills,
            'skillForms' => $skillForms,
            'newSkillForm' => $newSkillForm,
        ]);
    }

    #[Route('/nouveau', name: 'admin_skill_new', methods:['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $skill = new Skill();

        $form = $this->createForm(SkillType::class, $skill);
        $form->handleRequest($request);  
        
        try {
            $entityManager->persist($skill);
            $entityManager->flush();

            $this->addFlash("success", "Données enregistrées.");
            return $this->redirectToRoute('admin_skill');

        } catch (\Exception $e) {
            $this->addFlash("error", "Enregistrement échoué.");
        }

        return $this->redirectToRoute('admin_skill');
    }

    #[Route('/editer/{id}', name: 'admin_skill_edit', methods:['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function edit(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $skill = $entityManager->getRepository(Skill::class)->find($id);

        $form = $this->createForm(SkillType::class, $skill);
        $form->handleRequest($request);

        try {
            $entityManager->persist($skill);
            $entityManager->flush();

            $this->addFlash("success", "Données enregistrées.");
            return $this->redirectToRoute('admin_skill');

        } catch (\Exception $e) {
            $this->addFlash("error", "Enregistrement échoué.");
        }

        return $this->redirectToRoute('admin_skill');
    }

    #[Route('/desactiver/{id}', name: 'admin_skill_disable', methods:['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function disable(int $id, EntityManagerInterface $entityManager): Response
    {
        $skill = $entityManager->getRepository(Skill::class)->find($id);

        if (!$skill) {
            $this->addFlash("error", "Données non trouvée.");
            return $this->redirectToRoute('admin_skill');
        }

        $skill->setDeleted(true);

        $entityManager->persist($skill);
        $entityManager->flush();

        $this->addFlash("success", "La compétence a été désactivée.");
        return $this->redirectToRoute('admin_skill');
    }

    #[Route('/activer/{id}', name: 'admin_skill_activate', methods:['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function activate(int $id, EntityManagerInterface $entityManager): Response
    {
        $skill = $entityManager->getRepository(Skill::class)->find($id);

        if (!$skill) {
            $this->addFlash("error", "Données non trouvée.");
            return $this->redirectToRoute('admin_skill');
        }

        $skill->setDeleted(false);

        $entityManager->persist($skill);
        $entityManager->flush();

        $this->addFlash("success", "La compétence a été réactivée.");
        return $this->redirectToRoute('admin_skill');
    }
}
