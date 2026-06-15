<?php

namespace App\Controller\Back;

use App\Repository\CertificationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/certifications')]
class CertificationController extends AbstractController 
{
    #[Route('/', name:'admin_certification', methods:['GET'])]
    #[IsGranted('ROLE_ADMIN')]
    public function indexCertification(CertificationRepository $certificationRepository) : Response 
    {   
        // Header Data
        $title = "Certifications";

        // Breadcrumb data
        $breadcrumbs = [
            ['name' => 'Tableau de bord', 'url' => $this->generateUrl('admin_dashboard')],
            ['name' => $title, 'url' => null]
        ];

        $certifications = $certificationRepository->findAll();

        return $this->render('back/certification/index.html.twig', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'certifications' => $certifications,
        ]);
    }
}