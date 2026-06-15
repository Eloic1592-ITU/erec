<?php

namespace App\Controller\Back;

use App\Repository\InternshipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/stages')]
class InternshipController extends AbstractController 
{
    #[Route('/', name:'admin_internship', methods:['GET'])]
    #[IsGranted('ROLE_ADMIN')]
    public function indexInternship(InternshipRepository $internshipRepository) : Response 
    {   
        // Header Data
        $title = "Stages";

        // Breadcrumb data
        $breadcrumbs = [
            ['name' => 'Tableau de bord', 'url' => $this->generateUrl('admin_dashboard')],
            ['name' => $title, 'url' => null]
        ];

        $internships = $internshipRepository->findAll();

        return $this->render('back/internship/index.html.twig', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'internships' => $internships,
        ]);
    }
}