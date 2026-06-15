<?php

namespace App\Controller\Back;

use App\Repository\WorkExperienceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/experiences')]
class WorkExperienceController extends AbstractController 
{
    #[Route('/', name:'admin_experience', methods:['GET'])]
    #[IsGranted('ROLE_ADMIN')]
    public function indexWorkExperience(WorkExperienceRepository $workExperienceRepository) : Response 
    {   
        // Header Data
        $title = "Expériences professionnelles";

        // Breadcrumb data
        $breadcrumbs = [
            ['name' => 'Tableau de bord', 'url' => $this->generateUrl('admin_dashboard')],
            ['name' => $title, 'url' => null]
        ];

        $experiences = $workExperienceRepository->findAll();

        return $this->render('back/work-experience/index.html.twig', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'experiences' => $experiences,
        ]);
    }
}