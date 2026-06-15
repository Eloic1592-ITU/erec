<?php

namespace App\Controller\Back;

use App\Repository\CertificationRepository;
use App\Repository\CivilityRepository;
use App\Repository\DegreeRepository;
use App\Repository\EducationRepository;
use App\Repository\FieldOfStudyRepository;
use App\Repository\InternshipRepository;
use App\Repository\LevelRepository;
use App\Repository\MaritalStatusRepository;
use App\Repository\PositionRepository;
use App\Repository\SkillRepository;
use App\Repository\UserRepository;
use App\Repository\WorkExperienceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin')]
class BackController extends AbstractController 
{
    #[Route('/', name:'admin_dashboard', methods:['GET'])]
    #[IsGranted('ROLE_ADMIN')]
    public function indexDashboard(
        UserRepository $userRepository,
        EducationRepository $educationRepository,
        CertificationRepository $certificationRepository,
        InternshipRepository $internshipRepository,
        WorkExperienceRepository $workExperienceRepository,
        FieldOfStudyRepository $fieldOfStudyRepository,
        DegreeRepository $degreeRepository,
        PositionRepository $positionRepository,
        LevelRepository $levelRepository,
        SkillRepository $skillRepository,
        CivilityRepository $civilityRepository,
        MaritalStatusRepository $maritalStatusRepository
    ) : Response 
    {   
        // Header Data
        $title = "Tableau de bord";

        // Nombre total des utilisateurs
        $users = $userRepository->countAllUsers();

        // Nombre total des Candidats
        $candidats = $userRepository->countAllUsersHasSubmitApplication();

        // Nombre total des diplômes
        $educations = $educationRepository->countAllEducation();

        // Nombre total des certifications
        $certifications = $certificationRepository->countAllCertification();

        // Nombre total des stages
        $internships = $internshipRepository->countAllInternship();

        // Nombre total des expériences
        $experiences = $workExperienceRepository->countAllWorkExperience();

        // Nombre total des domaines
        $allfieldOfStudy = $fieldOfStudyRepository->countAllFieldStudies();

        // Nombre total des diplômes
        $allDegree = $degreeRepository->countDegree();

        // Nombre total des postes
        $positions = $positionRepository->countPosition();

        // Nombre total des niveau
        $levels = $levelRepository->countLevel();

        // Nombre total des compétences
        $skills = $skillRepository->countSkills();

        // Nombre total des civilité
        $civilities = $civilityRepository->countCivility();

        // Nombre total des état civil
        $allMaritalStatus = $maritalStatusRepository->countMartialStatus();

        return $this->render('back/dashboard/index.html.twig', [
            'title' => $title,
            'users' => $users,
            'candidats' => $candidats,
            'educations' => $educations,
            'certifications' => $certifications,
            'internships' => $internships,
            'experiences' => $experiences,
            'allfieldOfStudy' => $allfieldOfStudy,
            'allDegree' => $allDegree,
            'positions' => $positions,
            'levels' => $levels,
            'skills' => $skills,
            'civilities' => $civilities,
            'allMaritalStatus' => $allMaritalStatus,
        ]);
    }
}