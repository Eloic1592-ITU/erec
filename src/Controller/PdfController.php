<?php

namespace App\Controller;

use App\Repository\CertificationRepository;
use App\Repository\DocumentRepository;
use App\Repository\EducationRepository;
use App\Repository\EngagementRepository;
use App\Repository\InternshipRepository;
use App\Repository\JobApplicationRepository;
use App\Repository\OtherInfoRepository;
use App\Repository\ProfileRepository;
use App\Repository\WorkExperienceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/pdf')]
class PdfController extends AbstractController
{ 
    #[Route('/imprimer-details/{id}', name: 'app_pdf_submission_details', methods: ['GET'])]
    public function printDetails(
        int $id,
        JobApplicationRepository $repository, 
        ProfileRepository $profileRepository, 
        EducationRepository $educationRepository,
        CertificationRepository $certificationRepository,
        InternshipRepository $internshipRepository,
        WorkExperienceRepository $workExperienceRepository,
        OtherInfoRepository $otherInfoRepository,
        DocumentRepository $documentRepository,
        EngagementRepository $engagementRepository,
    ): Response
    {
        $jobApplication = $repository->find($id);
        $profile = $profileRepository->findOneBy(['user' => $this->getUser()]);
        $educations = $educationRepository->findBy(['user' => $this->getUser()]);
        $certifications = $certificationRepository->findBy(['user' => $this->getUser()]);
        $internships = $internshipRepository->findBy(['user' => $this->getUser()]);
        $workExperiences = $workExperienceRepository->findBy(['user' => $this->getUser()]);
        $otherInfo = $otherInfoRepository->findOneBy(['user' => $this->getUser()]);
        $document = $documentRepository->findOneBy(['user' => $this->getUser()]);
        $engagement = $engagementRepository->findOneBy(['user' => $this->getUser()]);

        return $this->render('pdf/submission_details.html.twig', [
            'jobApplication' => $jobApplication,
            'profile' => $profile,
            'educations' => $educations,
            'certifications' => $certifications,
            'internships' => $internships,
            'workExperiences' => $workExperiences,
            'otherInfo' => $otherInfo,
            'document' => $document,
            'engagement' => $engagement,
        ]);
    }
}
