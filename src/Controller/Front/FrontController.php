<?php

namespace App\Controller\Front;

use App\Entity\Certification;
use App\Entity\Document;
use App\Entity\Education;
use App\Entity\Engagement;
use App\Entity\Internship;
use App\Entity\JobApplication;
use App\Entity\OtherInfo;
use App\Entity\Position;
use App\Entity\Profile;
use App\Entity\User;
use App\Entity\WorkExperience;
use App\Form\CertificationType;
use App\Form\DocumentType;
use App\Form\EducationType;
use App\Form\EngagementType;
use App\Form\InternshipType;
use App\Form\JobApplicationType;
use App\Form\OtherInfoType;
use App\Form\ProfileType;
use App\Form\WorkExperienceType;
use App\Repository\CertificationRepository;
use App\Repository\DocumentRepository;
use App\Repository\EducationRepository;
use App\Repository\EngagementRepository;
use App\Repository\InternshipRepository;
use App\Repository\JobApplicationRepository;
use App\Repository\OtherInfoRepository;
use App\Repository\PositionRepository;
use App\Repository\ProfileRepository;
use App\Repository\WorkExperienceRepository;
use App\Service\EmailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/')]
class FrontController extends AbstractController 
{
    #[Route('/', name:'app_index', methods:['GET'])]
    public function default() : Response 
    {
        return $this->redirectToRoute('app_marketing');
    }

    #[Route('/poste', name:'app_positions', methods:['GET'])]
    public function position(EntityManagerInterface $entityManager) : Response 
    {
        // get All Positions
        $query = $entityManager->createQuery(
            'SELECT u
            FROM App\Entity\Position u
            WHERE u.is_deleted = false OR u.is_deleted IS NULL'
        );

        $positions = $query->getResult();

        return $this->render('front/position/index.html.twig', [
            'positions' => $positions
        ]);
    }
    #[Route('/campagne/CAMP{campaign_id}/postes', name: 'app_positions_campaign', methods: ['GET'], requirements: ['campaign_id' => '\d+'])]
    public function position_campaign(
        EntityManagerInterface $entityManager, 
        ?int $campaign_id = null
    ): Response     
    {
        // Si idcampagne est null ou vide → page d'erreur
        if (empty($campaign_id)) {
            return $this->render('security/invalid_campaign.html.twig', [], 
                new Response('', Response::HTTP_BAD_REQUEST)
            );
        }
    
        // Récupérer les positions par campagne
        $query = $entityManager->createQuery(
            'SELECT u
            FROM App\Entity\Position u
            WHERE (u.is_deleted = false OR u.is_deleted IS NULL)
            AND u.campaign = :campaign_id'
        )->setParameter('campaign_id', $campaign_id);
    
        $positions = $query->getResult();
    
        // Si aucune position trouvée pour cette campagne
        if (empty($positions)) {
            throw $this->createNotFoundException('Aucun poste pour cette campagne.');
        }
    
        return $this->render('front/position/index.html.twig', [
            'positions' => $positions,

        ]);
    }

    // Page d'accueil avec passage d'ID d'un poste
    #[Route('/campagne/CAMP{campaign_id}/postes/{ref}/postuler', name:'app_landing', methods:['GET'])]
    public function landing(string $ref, EntityManagerInterface $entityManager) : Response
    {
        $existingPosition = $entityManager->getRepository(Position::class)->findOneBy(['reference' => $ref]);
        if ($existingPosition instanceof Position) {
	    // For existing user and null position
            $oUser = $this->getUser();
            if ($oUser instanceof User && !is_null($oUser->getId())
                && (is_null($oUser->getReferencePosition()) || (!is_null($oUser->getReferencePosition()) && $existingPosition->getId() != $oUser->getReferencePosition()->getId()))
                && is_null($oUser->getHasSubmittedApplication())) {
                $oUser->setReferencePosition($existingPosition);
                $entityManager->persist($oUser);
                $entityManager->flush();
                if ($this->isGranted('ROLE_ADMIN')) {
                    return $this->redirectToRoute('admin_dashboard', [], Response::HTTP_SEE_OTHER);
                } elseif ($this->isGranted('ROLE_USER') && ($oUser->getRoles() === ["ROLE_USER"])) {
                    return $this->redirectToRoute('app_submission', ['ref' => $ref], Response::HTTP_SEE_OTHER);
                }
            }
            return $this->render('front/marketing/index.html.twig', [
                'refPosition' => $ref
            ]);
        }

        return $this->redirectToRoute('app_positions'); // Return to list
    }

    // Page d'accueil sans passer l'ID d'un poste
    #[Route('/accueil', name:'app_marketing', methods:['GET'])]
    public function marketing() : Response 
    {
        return $this->render('front/marketing/index.html.twig');
    }

    #[Route('/home', name:'app_home', methods:['GET'])]
    #[IsGranted('ROLE_USER')]
    public function home() : Response 
    {
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('admin_dashboard');
        } 

        return $this->render('front/submission/index.html.twig');
    }

    // Liste de candidatures de l'utilisateur connecté
    #[Route('/mes-candidatures', name: 'app_job_application_index', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function list(JobApplicationRepository $repository): Response
    {
        $user = $this->getUser();

        if (!$user instanceof \App\Entity\User) {
            throw $this->createAccessDeniedException('Utilisateur invalide.');
        }

        $jobApplications = $repository->findByUser($user);

        return $this->render('front/submission/list.html.twig', [
            'jobApplications' => $jobApplications,
        ]);
    }

    #[Route('/candidature/details/{id}', name: 'app_job_application_details', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function detailsjobapplication(
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
    ) : Response 
    {
        $user = $this->getUser();

        if (!$user instanceof \App\Entity\User) {
            throw $this->createAccessDeniedException('Utilisateur invalide.');
        }

        $jobApplication = $repository->findOneBy(['id' => $id,'user' => $user]);

        if (!$jobApplication) {
            throw $this->createNotFoundException('Candidature introuvable.');
        }

        // Sécurité : empêcher un utilisateur de voir la candidature d'un autre
        if ($jobApplication->getUser() !== $user) {
            throw $this->createAccessDeniedException('Vous n\'avez pas accès à cette candidature.');
        }

        $profile = $profileRepository->findOneBy(['user' => $user]);
        $educations = $educationRepository->findBy(['user' => $user]);
        $certifications = $certificationRepository->findBy(['user' => $user]);
        $internships = $internshipRepository->findBy(['user' => $user]);
        $workExperiences = $workExperienceRepository->findBy(['user' => $user]);
        $otherInfo = $otherInfoRepository->findOneBy(['user' => $user]);
        $document = $documentRepository->findOneBy(['user' => $user]);
        $engagement = $engagementRepository->findOneBy(['user' => $user]);

        return $this->render('front/submission/details.html.twig', [
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

    // #[Route('/details', name:'app_details', methods:['GET'])]
    // #[IsGranted('ROLE_USER')]
    // public function details(
    //     JobApplicationRepository $repository, 
    //     ProfileRepository $profileRepository, 
    //     EducationRepository $educationRepository,
    //     CertificationRepository $certificationRepository,
    //     InternshipRepository $internshipRepository,
    //     WorkExperienceRepository $workExperienceRepository,
    //     OtherInfoRepository $otherInfoRepository,
    //     DocumentRepository $documentRepository,
    //     EngagementRepository $engagementRepository,
    // ) : Response 
    // {
    //     $jobApplication = $repository->findOneBy(['user' => $this->getUser()]);
    //     $profile = $profileRepository->findOneBy(['user' => $this->getUser()]);
    //     $educations = $educationRepository->findBy(['user' => $this->getUser()]);
    //     $certifications = $certificationRepository->findBy(['user' => $this->getUser()]);
    //     $internships = $internshipRepository->findBy(['user' => $this->getUser()]);
    //     $workExperiences = $workExperienceRepository->findBy(['user' => $this->getUser()]);
    //     $otherInfo = $otherInfoRepository->findOneBy(['user' => $this->getUser()]);
    //     $document = $documentRepository->findOneBy(['user' => $this->getUser()]);
    //     $engagement = $engagementRepository->findOneBy(['user' => $this->getUser()]);

    //     return $this->render('front/submission/details.html.twig', [
    //         'jobApplication' => $jobApplication,
    //         'profile' => $profile,
    //         'educations' => $educations,
    //         'certifications' => $certifications,
    //         'internships' => $internships,
    //         'workExperiences' => $workExperiences,
    //         'otherInfo' => $otherInfo,
    //         'document' => $document,
    //         'engagement' => $engagement,
    //     ]);
    // }

    #[Route('/details/{ref}', name:'app_details', methods:['GET'])]
    #[IsGranted('ROLE_USER')]   
    public function details(
        ?string $ref,
        JobApplicationRepository $repository, 
        ProfileRepository $profileRepository, 
        EducationRepository $educationRepository,
        CertificationRepository $certificationRepository,
        InternshipRepository $internshipRepository,
        WorkExperienceRepository $workExperienceRepository,
        OtherInfoRepository $otherInfoRepository,
        DocumentRepository $documentRepository,
        EngagementRepository $engagementRepository,
        PositionRepository $positionRepository,
    ) : Response 
    {
        $position = $positionRepository->findOneBy(['reference' => $ref]);
        $jobApplication = $repository->findOneBy([
            'user' => $this->getUser(),
            'position' => $position,
        ]);
        $profile = $profileRepository->findOneBy(['user' => $this->getUser()]);
        $educations = $educationRepository->findBy(['user' => $this->getUser()]);
        $certifications = $certificationRepository->findBy(['user' => $this->getUser()]);
        $internships = $internshipRepository->findBy(['user' => $this->getUser()]);
        $workExperiences = $workExperienceRepository->findBy(['user' => $this->getUser()]);
        $otherInfo = $otherInfoRepository->findOneBy(['user' => $this->getUser()]);
        $document = $documentRepository->findOneBy(['user' => $this->getUser()]);
        $engagement = $engagementRepository->findOneBy(['user' => $this->getUser()]);

        return $this->render('front/submission/details.html.twig', [
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

    #[Route('/candidature/{ref}', name:'app_submission', methods:['GET'])]
    #[IsGranted('ROLE_USER')]
    public function index(
        ?string $ref,
        JobApplicationRepository $repository, 
        ProfileRepository $profileRepository, 
        EducationRepository $educationRepository,
        CertificationRepository $certificationRepository,
        InternshipRepository $internshipRepository,
        WorkExperienceRepository $workExperienceRepository,
        OtherInfoRepository $otherInfoRepository,
        DocumentRepository $documentRepository,
        EngagementRepository $engagementRepository,
        PositionRepository $positionRepository,
    ): Response {

        // $user = $this->getUser();    

        // if ($user instanceof \App\Entity\User && $user->getHasSubmittedApplication() === true) {
        //     return $this->redirectToRoute('app_details');
        // }

	    // if ($user instanceof \App\Entity\User && is_null($user->getReferencePosition())) {
        //     return $this->redirectToRoute('app_positions');
        // }
        $position = $positionRepository->findOneBy(['reference' => $ref]);
        $jobApplication = $repository->findOneBy([
            'user' => $this->getUser(),
            'position' => $position,
        ]);
        $existingjobApplication = $repository->findOneByCampaignAndUser($position->getCampaign(),  $this->getUser());
        $profile = $profileRepository->findOneBy(['user' => $this->getUser()]);
        $educations = $educationRepository->findBy(['user' => $this->getUser()]);
        $certifications = $certificationRepository->findBy(['user' => $this->getUser()]);
        $internships = $internshipRepository->findBy(['user' => $this->getUser()]);
        $workExperiences = $workExperienceRepository->findBy(['user' => $this->getUser()]);
        $otherInfo = $otherInfoRepository->findOneBy(['user' => $this->getUser()]);
        $document = $documentRepository->findOneBy(['user' => $this->getUser()]);
        $engagement = $engagementRepository->findOneBy(['user' => $this->getUser()]);

        // Job Application form setup
        if ($jobApplication) {
            $jobApplicationForm = $this->createForm(JobApplicationType::class, $jobApplication, [
                'action' => $this->generateUrl('app_job_application_edit', ['id' => $jobApplication->getId()]),
                'method' => 'POST',
                'ref'=> $ref,
            ]);
            $isJobApplicationEdit = true;
        } else {
            $jobApplicationForm = $this->createForm(JobApplicationType::class, new JobApplication(), [
                'action' => $this->generateUrl('app_job_application_new', ['ref' => $ref]), 
                'method' => 'POST',
                'ref' => $ref,
            ]);
            $isJobApplicationEdit = false;
        }

        // Profile form setup
        if ($profile) {
            $profileForm = $this->createForm(ProfileType::class, $profile, [
                'action' => $this->generateUrl('app_profile_edit', ['id' => $profile->getId()]),
                'method' => 'POST',
            ]);
            $isProfileEdit = true;
        } else {
            $profileForm = $this->createForm(ProfileType::class, new Profile(), [
                'action' => $this->generateUrl('app_profile_new'),
                'method' => 'POST',
            ]);
            $isProfileEdit = false;
        }

        // Education forms setup
        $educationForms = [];
        foreach ($educations as $education) {
            $educationForms[] = $this->createForm(EducationType::class, $education, [
                'action' => $this->generateUrl('app_education_edit', ['id' => $education->getId()]),
                'method' => 'POST',
            ])->createView();
        }

        $newEducationForm = $this->createForm(EducationType::class, new Education(), [
            'action' => $this->generateUrl('app_education_new'),
            'method' => 'POST',
        ])->createView();

        // Education forms setup
        $certificationForms = [];
        foreach ($certifications as $certification) {
            $certificationForms[] = $this->createForm(CertificationType::class, $certification, [
                'action' => $this->generateUrl('app_certification_edit', ['id' => $certification->getId()]),
                'method' => 'POST',
            ])->createView();
        }

        $newCertificationForm = $this->createForm(CertificationType::class, new Certification(), [
            'action' => $this->generateUrl('app_certification_new'),
            'method' => 'POST',
        ])->createView();

        // Internship forms setup
        $internshipForms = [];
        foreach ($internships as $internship) {
            $internshipForms[] = $this->createForm(InternshipType::class, $internship, [
                'action' => $this->generateUrl('app_internship_edit', ['id' => $internship->getId()]),
                'method' => 'POST',
            ])->createView();
        }

        $newInternshipForm = $this->createForm(InternshipType::class, new Internship(), [
            'action' => $this->generateUrl('app_internship_new'),
            'method' => 'POST',
        ])->createView();

        // WorkExperience forms setup
        $workExperienceForms = [];
        foreach ($workExperiences as $workExperience) {
            $workExperienceForms[] = $this->createForm(WorkExperienceType::class, $workExperience, [
                'action' => $this->generateUrl('app_work_experience_edit', ['id' => $workExperience->getId()]),
                'method' => 'POST',
            ])->createView();
        }

        $newWorkExperienceForm = $this->createForm(WorkExperienceType::class, new WorkExperience(), [
            'action' => $this->generateUrl('app_work_experience_new'),
            'method' => 'POST',
        ])->createView();

        // Other Info form setup
        if ($otherInfo) {
            $otherInfoForm = $this->createForm(OtherInfoType::class, $otherInfo, [
                'action' => $this->generateUrl('app_other_info_edit', ['id' => $otherInfo->getId()]),
                'method' => 'POST',
            ]);
            $isOtherInfoEdit = true;
        } else {
            $otherInfoForm = $this->createForm(OtherInfoType::class, new OtherInfo(), [
                'action' => $this->generateUrl('app_other_info_new'),
                'method' => 'POST',
            ]);
            $isOtherInfoEdit = false;
        }

        // Document forms setup
        if ($document) {
            $documentForm = $this->createForm(DocumentType::class, $document, [
                'action' => $this->generateUrl('app_document_edit', ['id' => $document->getId()]),
                'method' => 'POST',
            ]);
            $isDocumentEdit = true;
        } else {
            $documentForm = $this->createForm(DocumentType::class, new Document(), [
                'action' => $this->generateUrl('app_document_new'),
                'method' => 'POST',
            ]);
            $isDocumentEdit = false;
        } 

        // Engagement forms setup
        if ($engagement) {
            $engagementForm = $this->createForm(EngagementType::class, $engagement, [
                'action' => $this->generateUrl('app_engagement_edit', ['id' => $engagement->getId(), 'ref' => $ref]),
                'method' => 'POST',
                'ref' => $ref,
             ]);
            $isEngagementEdit = true;
        } else {
            $engagementForm = $this->createForm(EngagementType::class, new Engagement(), [
                'action' => $this->generateUrl('app_engagement_new', ['ref' => $ref]),
                'method' => 'POST',
                'ref' => $ref,
            ]);
            $isEngagementEdit = false;
        }

        // À exploiter dans la navbar [navbar.html.twig], au niveau du lien 'Nouvelle candidature'.
        $isSubmissionPage = true;

        return $this->render('front/submission/submission.html.twig', [
            'is_submission_page' => $isSubmissionPage,

            'jobApplicationForm' => $jobApplicationForm->createView(),
            'jobApplication' => $jobApplication,
            'is_job_application_edit' => $isJobApplicationEdit,
            'existingjobapplication' => $existingjobApplication,

            'profileForm' => $profileForm->createView(),
            'profile' => $profile,
            'is_profile_edit' => $isProfileEdit,

            'educationForms' => $educationForms,
            'newEducationForm' => $newEducationForm,

            'certificationForms' => $certificationForms,
            'newCertificationForm' => $newCertificationForm,

            'internshipForms' => $internshipForms,
            'newInternshipForm' => $newInternshipForm,

            'workExperienceForms' => $workExperienceForms,
            'newWorkExperienceForm' => $newWorkExperienceForm,

            'otherInfoForm' => $otherInfoForm->createView(),
            'otherInfo' => $otherInfo,
            'is_other_info_edit' => $isOtherInfoEdit,

            'documentForm' => $documentForm->createView(),
            'document' => $document,
            'is_document_edit' => $isDocumentEdit,

            'engagementForm' => $engagementForm->createView(),
            'engagement' => $engagement,
            'is_engagement_edit' => $isEngagementEdit,
        ]);
    }

    // #[Route('/utilisateur/envoie-candidature/{id}', name: 'submit_application', methods: ['POST', 'GET'])]
    // #[IsGranted('ROLE_USER')]
    // public function submitApplication(
    //     int $id,
    //     EntityManagerInterface $entityManager, 
    //     EmailService $emailService,
    //     JobApplicationRepository $repository, 
    //     ProfileRepository $profileRepository, 
    //     EducationRepository $educationRepository,
    //     CertificationRepository $certificationRepository,
    //     InternshipRepository $internshipRepository,
    //     WorkExperienceRepository $workExperienceRepository,
    //     OtherInfoRepository $otherInfoRepository,
    //     DocumentRepository $documentRepository,
    //     EngagementRepository $engagementRepository,
    // ): Response
    // {
    //     $user = $entityManager->getRepository(User::class)->find($id);

    //     $jobApplication = $repository->findOneBy(['user' => $this->getUser()]);
    //     $profile = $profileRepository->findOneBy(['user' => $this->getUser()]);
    //     $educations = $educationRepository->findBy(['user' => $this->getUser()]);
    //     $certifications = $certificationRepository->findBy(['user' => $this->getUser()]);
    //     $internships = $internshipRepository->findBy(['user' => $this->getUser()]);
    //     $workExperiences = $workExperienceRepository->findBy(['user' => $this->getUser()]);
    //     $otherInfo = $otherInfoRepository->findOneBy(['user' => $this->getUser()]);
    //     $document = $documentRepository->findOneBy(['user' => $this->getUser()]);
    //     $engagement = $engagementRepository->findOneBy(['user' => $this->getUser()]);

    //     // Vérifier si l'utilisateur existe
    //     if (!$user || !$user instanceof PasswordAuthenticatedUserInterface) {
    //         $this->addFlash('error', 'Accès non autorisé.');
    //         return $this->redirectToRoute('app_home');
    //     }

    //     // Vérifier que l'utilisateur connecté correspond à l'utilisateur dont le profil est édité
    //     if ($this->getUser() !== $user) {
    //         $this->addFlash('error', 'Accès non autorisé.');
    //         return $this->redirectToRoute('app_home');
    //     }

    //     // Vérification du type d'objet
    //     if (!$user instanceof \App\Entity\User) {
    //         throw new \Exception('User object is not an instance of App\Entity\User');
    //     }

    //     if (
    //         $jobApplication && 
    //         $profile && 
    //         $educations && 
    //         $otherInfo && 
    //         $document && 
    //         $engagement
    //     ) {
    //         $user->setHasSubmittedApplication(true);

    //         $entityManager->persist($user);
    //         $entityManager->flush();
    
    //         // Envoi de l'e-mail de notification
    //         try {
    //             $emailService->sendApplicationConfirmationEmail($user);
    //             $this->addFlash(
    //                 'success', 
    //                 'Candidature envoyée avec succès.'
    //             );
    //         } catch (\Exception $e) {
    //             $this->addFlash(
    //                 'error', 
    //                 "Erreur lors de l'envoi de l'e-mail de confirmation."
    //             );
    //         }

    //         $this->addFlash('success', 'Candidature envoyée.');
    //     }

    //     return $this->redirectToRoute('app_home');
    // }

    #[Route('/utilisateur/envoie-candidature/{id}/poste/{ref}', name: 'submit_application', methods: ['POST', 'GET'])]
    #[IsGranted('ROLE_USER')]
    public function submitApplication(
        int $id,
        ?string $ref,
        EntityManagerInterface $entityManager, 
        EmailService $emailService,
        JobApplicationRepository $repository, 
        ProfileRepository $profileRepository, 
        EducationRepository $educationRepository,
        CertificationRepository $certificationRepository,
        InternshipRepository $internshipRepository,
        WorkExperienceRepository $workExperienceRepository,
        OtherInfoRepository $otherInfoRepository,
        DocumentRepository $documentRepository,
        EngagementRepository $engagementRepository,
        PositionRepository $positionRepository,
    ): Response
    {
        $user = $entityManager->getRepository(User::class)->find($id);
        $position = $positionRepository->findOneBy(['reference' => $ref]);
        $jobApplication = $repository->findOneBy([
            'user' => $user,
            'position' => $position,
        ]);
        $profile = $profileRepository->findOneBy(['user' => $this->getUser()]);
        $educations = $educationRepository->findBy(['user' => $this->getUser()]);
        $certifications = $certificationRepository->findBy(['user' => $this->getUser()]);
        $internships = $internshipRepository->findBy(['user' => $this->getUser()]);
        $workExperiences = $workExperienceRepository->findBy(['user' => $this->getUser()]);
        $otherInfo = $otherInfoRepository->findOneBy(['user' => $this->getUser()]);
        $document = $documentRepository->findOneBy(['user' => $this->getUser()]);
        $engagement = $engagementRepository->findOneBy(['user' => $this->getUser()]);

        // Vérifier si l'utilisateur existe
        if (!$user || !$user instanceof PasswordAuthenticatedUserInterface) {
            $this->addFlash('error', 'Accès non autorisé.');
            return $this->redirectToRoute('app_home');
        }

        // Vérifier que l'utilisateur connecté correspond à l'utilisateur dont le profil est édité
        if ($this->getUser() !== $user) {
            $this->addFlash('error', 'Accès non autorisé.');
            return $this->redirectToRoute('app_home');
        }

        // Vérification du type d'objet
        if (!$user instanceof \App\Entity\User) {
            throw new \Exception('User object is not an instance of App\Entity\User');
        }

        if (
            $jobApplication && 
            $profile && 
            $educations && 
            $otherInfo && 
            $document && 
            $engagement
        ) {
            $jobApplication->setHasSubmittedApplication(true);

            $entityManager->persist($jobApplication);
            $entityManager->flush();
    
            // Envoi de l'e-mail de notification
            try {
                $emailService->sendApplicationConfirmationEmail($user);
                $this->addFlash(
                    'success', 
                    'Candidature envoyée avec succès.'
                );
            } catch (\Exception $e) {
                $this->addFlash(
                    'error', 
                    "Erreur lors de l'envoi de l'e-mail de confirmation."
                );
            }

            $this->addFlash('success', 'Candidature envoyée.');
        }

        return $this->redirectToRoute('app_home');
    }
}