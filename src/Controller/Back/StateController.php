<?php

namespace App\Controller\Back;

use App\Repository\PositionRepository;
use App\Service\ExcelExportService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/etat')]
class StateController extends AbstractController
{
    #[Route('/', name: 'admin_candidate_state', methods:['GET'])]
    #[IsGranted('ROLE_ADMIN')]
    public function index(PositionRepository $positionRepository): Response
    {
        // Header data
        $title = "Etat des Candidats";

        // Breadcrumb data
        $breadcrumbs = [
            ['name' => 'Tableau de bord', 'url' => $this->generateUrl('admin_dashboard')],
            ['name' => $title, 'url' => null]
        ];

        $positions = $positionRepository->findAll();

        return $this->render('back/state/index.html.twig', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'positions' => $positions,
        ]);
    }

    #[Route('/export/{id}', name: 'admin_candidate_state_export', methods: ['GET'])]
    #[IsGranted('ROLE_ADMIN')]
    public function export(int $id, PositionRepository $positionRepository, ExcelExportService $excelExportService): Response
    {
        $position = $positionRepository->find($id);

        if (!$position) {
            $this->addFlash("error", "Données non trouvée.");
            return $this->redirectToRoute('admin_candidate_state');
        }

        // Préparez les en-têtes complexes pour l'exportation
        $headers = [
            [
                "Numéro",
                "Civilité",
                "Nom",
                "Prénom(s)",
                "Âge",
                "Téléphone",
                "Email",
                "Lieu d'affectation",
                "2ème lieu d'affectation",
                "3ème lieu d'affectation",
                "2ème poste souhaiter",
                "3ème poste souhaiter",
                "Diplome", "", "",
                "Certification", "", "",
                "Experiences", "", "", "", "", "", "", "",
                "Competences", "",
                "A selectionner", ""
            ],
            [
                "",
                "",
                "",
                "",
                "",
                "",
                "",
                "",
                "",
                "",
                "",
                "",
                "Mention/Domaine", "Spécialité/Option", "Etablissement/Université",
                "Certificat", "Spécialité/Option", "Etablissement",
                "Poste occupé", "Société/Entreprise", "Debut", "Fin", "Nom de la personne de Référence", "Poste de la personne de Référence", "Téléphone de la personne de Référence", "Email de la personne de Référence",
                "Logiciel", "Niveau",
                "OUI", "NON"
            ]
        ];

        // Méthode pour calculer l'âge
        $calculateAge = function($birthDate) {
            if (!$birthDate instanceof \DateTime) {
                $birthDate = new \DateTime($birthDate);
            }
            $today = new \DateTime();
            $age = $today->diff($birthDate)->y;
            return $age . " ans";
        };

        // Préparez les données pour l'exportation
        $data = [];
        
        foreach ($position->getJobApplications() as $jobApplication) {
            $user = $jobApplication->getUser();
            if (!$user || !$jobApplication->getHasSubmittedApplication()) {
                continue;
            }

            $educations = $user->getEducation();
            $certifications = $user->getCertifications();
            $experiences = $user->getWorkExperiences();
            $otherInfo = $user->getOtherInfo();

            // Préparez les compétences
            $skills = [
                ['Microsoft Word', $otherInfo ? $otherInfo->getMicrosoftWordLevel() : ''],
                ['Microsoft Excel', $otherInfo ? $otherInfo->getMicrosoftExcelLevel() : ''],
                ['Microsoft PowerPoint', $otherInfo ? $otherInfo->getMicrosoftPowerPointLevel() : ''],
                ['Microsoft OneNote', $otherInfo ? $otherInfo->getMicrosoftOneNoteLevel() : ''],
                ['Microsoft Outlook', $otherInfo ? $otherInfo->getMicrosoftOutlookLevel() : ''],
                ['Microsoft Publisher', $otherInfo ? $otherInfo->getMicrosoftPublisherLevel() : ''],
                ['Microsoft Access', $otherInfo ? $otherInfo->getMicrosoftAccessLevel() : ''],
                ['Microsoft Visio', $otherInfo ? $otherInfo->getMicrosoftVisioLevel() : ''],
                ['Microsoft Project', $otherInfo ? $otherInfo->getMicrosoftProjectLevel() : ''],
            ];

            $maxCount = max(count($educations), count($certifications), count($experiences), count($skills), 1);

            for ($i = 0; $i < $maxCount; $i++) {
                $education = $educations[$i] ?? null;
                $certificate = $certifications[$i] ?? null;
                $experience = $experiences[$i] ?? null;
                $skill = $skills[$i] ?? ['', ''];

                $fieldOfStudy = '';
                if ($education) {
                    if ($education->getOtherFieldOfStudy()) {
                        $fieldOfStudy = $education->getOtherFieldOfStudy();
                    } else {
                        $fieldOfStudy = $education->getFieldOfStudy()->getName();
                    }
                }

                $row = [
                    $i === 0 ? $user->getId() : '',
                    $i === 0 ? $user->getProfile()->getCivility()->getName() : '',
                    $i === 0 ? $user->getLastName() : '',
                    $i === 0 ? $user->getFirstName() : '',
                    $i === 0 ? $calculateAge($user->getBirthDate()) : '',
                    $i === 0 ? $user->getProfile()->getPhone1() : '',
                    $i === 0 ? $user->getEmail() : '',
                    $i === 0 ? $jobApplication->getPrimaryLocation() : '',
                    $i === 0 ? $jobApplication->getSecondaryLocation() : '',
                    $i === 0 ? $jobApplication->getTertiaryLocation() : '',
                    $i === 0 ? $user->getEngagement()->getSecondPosition() : '',
                    $i === 0 ? $user->getEngagement()->getThirdPosition() : '',
                    
                    // Diplome
                    $education ? $education->getDegree()->getName() : '',
                    $fieldOfStudy,
                    $education ? $education->getInstitution() : '',
                    
                    // Certificats
                    $certificate ? $certificate->getCertification() : '',
                    $certificate ? $certificate->getSpecialty() : '',
                    $certificate ? $certificate->getInstitution() : '',
                   
                    // Experiences
                    $experience ? $experience->getPosition() : '',
                    $experience ? $experience->getOrganization() : '',
                    $experience && $experience->getStartDate()? $experience->getStartDate()->format('d-m-Y') : '',
                    $experience && $experience->getEndDate()? $experience->getEndDate()->format('d-m-Y') : '',
                    $experience ? $experience->getReferenceName() : '',
                    $experience ? $experience->getReferencePosition() : '',
                    $experience ? $experience->getReferencePhone() : '',
                    $experience ? $experience->getReferenceEmail() : '',
                    
                    // Competences
                    $skill[0],
                    $skill[1],
                    
                    // A selectionner
                    '',
                    '',
                ];
                
                // dd($row);
                $data[] = $row;

            }
            
        }
        // dd($data);

        return $excelExportService->exportWithHeaders($headers, $data, 'poste_' . $position->getId() . '_candidats.xlsx');
    }

}
