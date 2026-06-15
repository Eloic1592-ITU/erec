<?php

namespace App\Controller\Back;

use App\Entity\User;
use App\Repository\DegreeRepository;
use App\Repository\FieldOfStudyRepository;
use App\Repository\PositionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/candidats')]
class CandidateController extends AbstractController 
{
    #[Route('/', name:'admin_candidate', methods:['GET'])]
    #[IsGranted('ROLE_ADMIN')]
    public function indexCandidate(
        EntityManagerInterface $entityManager,
        FieldOfStudyRepository $fieldOfStudyRepository,
        DegreeRepository $degreeRepository,
        PositionRepository $positionRepository,
    ) : Response 
    {   
        // Page Title
        $title = "Candidats";

        // Breadcrumb data
        $breadcrumbs = [
            ['name' => 'Tableau de bord', 'url' => $this->generateUrl('admin_dashboard')],
            ['name' => $title, 'url' => null]
        ];

        // Requête DQL pour récupérer les utilisateurs ayant soumis leur candidature
        $query = $entityManager->createQuery(
            'SELECT u
             FROM App\Entity\User u
             WHERE u.hasSubmittedApplication = :status'
        )->setParameter('status', true);

        // Récupération des statistiques sur les domaines d'études
        $allfieldOfStudy = $fieldOfStudyRepository->findAll();
        $studyFieldStats = [];
        foreach ($allfieldOfStudy as $field) {
            $candidateCount = 0;
            foreach ($field->getEducation() as $education) {
                if ($education->getUser()->getHasSubmittedApplication()) {
                    $candidateCount++;
                }
            }

            $studyFieldStats[] = [
                'name' => $field->getName(),
                'candidate_count' => $candidateCount,
            ];
        }

        // Récupération des statistiques sur les diplômes
        $allDegree = $degreeRepository->findAll();
        $degreeStats = [];
        foreach ($allDegree as $degree) {
            $candidateCount = 0;
            foreach ($degree->getEducation() as $education) {
                if ($education->getUser()->getHasSubmittedApplication()) {
                    $candidateCount++;
                }
            }

            $degreeStats[] = [
                'name' => $degree->getName(),
                'candidate_count' => $candidateCount,
            ];
        }

        // Récupération des statistiques sur les postes demandés
        $positions = $positionRepository->findAll();
        $positionStats = [];
        foreach ($positions as $position) {
            $candidateCount = $position->getSubmittedApplicationCount();
            $positionStats[] = [
                'name' => $position->getName(),
                'candidate_count' => $candidateCount,
            ];
        }

        // Tous les domaines
        //$allfieldOfStudy = $fieldOfStudyRepository->findAll();

        // Tous les diplômes
        //$allDegree = $degreeRepository->findAll();

        // Tous les postes
        //$positions = $positionRepository->findAll();

        $candidates = $query->getResult();

        return $this->render('back/candidate/index.html.twig', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'candidates' => $candidates,
            
            'allfieldOfStudy' => $allfieldOfStudy,
            'allDegree' => $allDegree,
            'positions' => $positions,
            
            'studyFieldStats' => $studyFieldStats,
            'degreeStats' => $degreeStats,
            'positionStats' => $positionStats,
        ]);
    }

    #[Route('/etudes/{id}', name:'admin_candidate_education', methods:['GET'])]
    #[IsGranted('ROLE_ADMIN')]
    public function candidateEducation(int $id, EntityManagerInterface $entityManager) : Response 
    {   
        // Page Title
        $title = "Etudes académiques";

        // Breadcrumb data
        $breadcrumbs = [
            ['name' => 'Tableau de bord', 'url' => $this->generateUrl('admin_dashboard')],
            ['name' => 'Candidats', 'url' => $this->generateUrl('admin_candidate')],
            ['name' => $title, 'url' => null]
        ];

        $candidate = $entityManager->getRepository(User::class)->find($id);

        return $this->render('back/candidate/educations.html.twig', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'candidate' => $candidate,
        ]);
    }

    #[Route('/certifications/{id}', name:'admin_candidate_certification', methods:['GET'])]
    #[IsGranted('ROLE_ADMIN')]
    public function candidateCertification(int $id, EntityManagerInterface $entityManager) : Response 
    {   
        // Page Title
        $title = "Certificats & attestations";

        // Breadcrumb data
        $breadcrumbs = [
            ['name' => 'Tableau de bord', 'url' => $this->generateUrl('admin_dashboard')],
            ['name' => 'Candidats', 'url' => $this->generateUrl('admin_candidate')],
            ['name' => $title, 'url' => null]
        ];

        $candidate = $entityManager->getRepository(User::class)->find($id);

        return $this->render('back/candidate/certifications.html.twig', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'candidate' => $candidate,
        ]);
    }

    #[Route('/stages/{id}', name:'admin_candidate_internship', methods:['GET'])]
    #[IsGranted('ROLE_ADMIN')]
    public function candidateInternship(int $id, EntityManagerInterface $entityManager) : Response 
    {   
        // Page Title
        $title = "Stages";

        // Breadcrumb data
        $breadcrumbs = [
            ['name' => 'Tableau de bord', 'url' => $this->generateUrl('admin_dashboard')],
            ['name' => 'Candidats', 'url' => $this->generateUrl('admin_candidate')],
            ['name' => $title, 'url' => null]
        ];

        $candidate = $entityManager->getRepository(User::class)->find($id);

        return $this->render('back/candidate/internships.html.twig', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'candidate' => $candidate,
        ]);
    }

    #[Route('/experiences/{id}', name:'admin_candidate_experience', methods:['GET'])]
    #[IsGranted('ROLE_ADMIN')]
    public function candidateWorkExperience(int $id, EntityManagerInterface $entityManager) : Response 
    {   
        // Page Title
        $title = "Expériences professionnelles";

        // Breadcrumb data
        $breadcrumbs = [
            ['name' => 'Tableau de bord', 'url' => $this->generateUrl('admin_dashboard')],
            ['name' => 'Candidats', 'url' => $this->generateUrl('admin_candidate')],
            ['name' => $title, 'url' => null]
        ];

        $candidate = $entityManager->getRepository(User::class)->find($id);

        return $this->render('back/candidate/work_experiences.html.twig', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'candidate' => $candidate,
        ]);
    }

    #[Route('/compétences/{id}', name:'admin_candidate_skill', methods:['GET'])]
    #[IsGranted('ROLE_ADMIN')]
    public function candidateSkill(int $id, EntityManagerInterface $entityManager) : Response 
    {   
        // Page Title
        $title = "Compétences";

        // Breadcrumb data
        $breadcrumbs = [
            ['name' => 'Tableau de bord', 'url' => $this->generateUrl('admin_dashboard')],
            ['name' => 'Candidats', 'url' => $this->generateUrl('admin_candidate')],
            ['name' => $title, 'url' => null]
        ];

        $candidate = $entityManager->getRepository(User::class)->find($id);

        return $this->render('back/candidate/skills.html.twig', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'candidate' => $candidate,
        ]);
    }
}