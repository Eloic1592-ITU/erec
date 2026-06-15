<?php

namespace App\Controller\Back;

use App\Repository\EducationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/etudes')]
class EducationController extends AbstractController 
{
    #[Route('/', name:'admin_education', methods:['GET'])]
    #[IsGranted('ROLE_ADMIN')]
    public function indexEducation(EducationRepository $educationRepository) : Response 
    {   
        // Header Data
        $title = "Diplômes";

        // Breadcrumb data
        $breadcrumbs = [
            ['name' => 'Tableau de bord', 'url' => $this->generateUrl('admin_dashboard')],
            ['name' => $title, 'url' => null]
        ];

        $educations = $educationRepository->findAll();

        return $this->render('back/education/index.html.twig', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'educations' => $educations,
        ]);
    }
}