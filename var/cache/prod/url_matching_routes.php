<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\Back\\BackController::indexDashboard'], null, ['GET' => 0], null, true, false, null]],
        '/admin/candidats' => [[['_route' => 'admin_candidate', '_controller' => 'App\\Controller\\Back\\CandidateController::indexCandidate'], null, ['GET' => 0], null, true, false, null]],
        '/admin/certifications' => [[['_route' => 'admin_certification', '_controller' => 'App\\Controller\\Back\\CertificationController::indexCertification'], null, ['GET' => 0], null, true, false, null]],
        '/admin/civilité' => [[['_route' => 'admin_civility', '_controller' => 'App\\Controller\\Back\\CivilityController::index'], null, ['GET' => 0, 'POST' => 1, 'DELETE' => 2], null, true, false, null]],
        '/admin/civilité/nouveau' => [[['_route' => 'admin_civility_new', '_controller' => 'App\\Controller\\Back\\CivilityController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/diplôme' => [[['_route' => 'admin_degree', '_controller' => 'App\\Controller\\Back\\DegreeController::index'], null, ['GET' => 0, 'POST' => 1, 'DELETE' => 2], null, true, false, null]],
        '/admin/diplôme/nouveau' => [[['_route' => 'admin_degree_new', '_controller' => 'App\\Controller\\Back\\DegreeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/etudes' => [[['_route' => 'admin_education', '_controller' => 'App\\Controller\\Back\\EducationController::indexEducation'], null, ['GET' => 0], null, true, false, null]],
        '/admin/domaines' => [[['_route' => 'admin_field_of_study', '_controller' => 'App\\Controller\\Back\\FieldOfStudyController::index'], null, ['GET' => 0, 'POST' => 1, 'DELETE' => 2], null, true, false, null]],
        '/admin/domaines/nouveau' => [[['_route' => 'admin_field_of_study_new', '_controller' => 'App\\Controller\\Back\\FieldOfStudyController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/stages' => [[['_route' => 'admin_internship', '_controller' => 'App\\Controller\\Back\\InternshipController::indexInternship'], null, ['GET' => 0], null, true, false, null]],
        '/admin/niveau' => [[['_route' => 'admin_level', '_controller' => 'App\\Controller\\Back\\LevelController::index'], null, ['GET' => 0, 'POST' => 1, 'DELETE' => 2], null, true, false, null]],
        '/admin/niveau/nouveau' => [[['_route' => 'admin_level_new', '_controller' => 'App\\Controller\\Back\\LevelController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/état-civil' => [[['_route' => 'admin_marital_status', '_controller' => 'App\\Controller\\Back\\MaritalStatusController::index'], null, ['GET' => 0, 'POST' => 1, 'DELETE' => 2], null, true, false, null]],
        '/admin/état-civil/nouveau' => [[['_route' => 'admin_marital_status_new', '_controller' => 'App\\Controller\\Back\\MaritalStatusController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/poste' => [[['_route' => 'admin_position', '_controller' => 'App\\Controller\\Back\\PositionController::index'], null, ['GET' => 0, 'POST' => 1, 'DELETE' => 2], null, true, false, null]],
        '/admin/poste/nouveau' => [[['_route' => 'admin_position_new', '_controller' => 'App\\Controller\\Back\\PositionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/compétence' => [[['_route' => 'admin_skill', '_controller' => 'App\\Controller\\Back\\SkillController::index'], null, ['GET' => 0, 'POST' => 1, 'DELETE' => 2], null, true, false, null]],
        '/admin/compétence/nouveau' => [[['_route' => 'admin_skill_new', '_controller' => 'App\\Controller\\Back\\SkillController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/etat' => [[['_route' => 'admin_candidate_state', '_controller' => 'App\\Controller\\Back\\StateController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/utilisateurs' => [[['_route' => 'admin_user', '_controller' => 'App\\Controller\\Back\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/experiences' => [[['_route' => 'admin_experience', '_controller' => 'App\\Controller\\Back\\WorkExperienceController::indexWorkExperience'], null, ['GET' => 0], null, true, false, null]],
        '/error' => [[['_route' => 'app_error', '_controller' => 'App\\Controller\\ErrorController::show'], null, null, null, false, false, null]],
        '/certification/nouveau' => [[['_route' => 'app_certification_new', '_controller' => 'App\\Controller\\Front\\CertificationController::new'], null, ['POST' => 0], null, false, false, null]],
        '/certifications/supprimer-tous' => [[['_route' => 'app_certifications_delete_all', '_controller' => 'App\\Controller\\Front\\CertificationController::deleteAll'], null, ['DELETE' => 0], null, false, false, null]],
        '/document/nouveau' => [[['_route' => 'app_document_new', '_controller' => 'App\\Controller\\Front\\DocumentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/diplome/nouveau' => [[['_route' => 'app_education_new', '_controller' => 'App\\Controller\\Front\\EducationController::new'], null, ['POST' => 0], null, false, false, null]],
        '/engagement/nouveau' => [[['_route' => 'app_engagement_new', '_controller' => 'App\\Controller\\Front\\EngagementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_positions', '_controller' => 'App\\Controller\\Front\\FrontController::position'], null, ['GET' => 0], null, false, false, null]],
        '/accueil' => [[['_route' => 'app_marketing', '_controller' => 'App\\Controller\\Front\\FrontController::marketing'], null, ['GET' => 0], null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\Front\\FrontController::home'], null, ['GET' => 0], null, false, false, null]],
        '/details' => [[['_route' => 'app_details', '_controller' => 'App\\Controller\\Front\\FrontController::details'], null, ['GET' => 0], null, false, false, null]],
        '/candidature' => [[['_route' => 'app_submission', '_controller' => 'App\\Controller\\Front\\FrontController::index'], null, ['GET' => 0], null, false, false, null]],
        '/stage/nouveau' => [[['_route' => 'app_internship_new', '_controller' => 'App\\Controller\\Front\\InternshipController::new'], null, ['POST' => 0], null, false, false, null]],
        '/stages/supprimer-tous' => [[['_route' => 'app_internships_delete_all', '_controller' => 'App\\Controller\\Front\\InternshipController::deleteAll'], null, ['DELETE' => 0], null, false, false, null]],
        '/job/nouveau' => [[['_route' => 'app_job_application_new', '_controller' => 'App\\Controller\\Front\\JobApplicationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/autres/nouveau' => [[['_route' => 'app_other_info_new', '_controller' => 'App\\Controller\\Front\\OtherInfoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profil/nouveau' => [[['_route' => 'app_profile_new', '_controller' => 'App\\Controller\\Front\\ProfileController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/experience/nouveau' => [[['_route' => 'app_work_experience_new', '_controller' => 'App\\Controller\\Front\\WorkExperienceController::new'], null, ['POST' => 0], null, false, false, null]],
        '/experiences/supprimer-tous' => [[['_route' => 'app_work_experiences_delete_all', '_controller' => 'App\\Controller\\Front\\WorkExperienceController::deleteAll'], null, ['DELETE' => 0], null, false, false, null]],
        '/pdf/imprimer-details' => [[['_route' => 'app_pdf_submission_details', '_controller' => 'App\\Controller\\PdfController::printDetails'], null, ['GET' => 0], null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/dispatch' => [[['_route' => 'app_dispatch', '_controller' => 'App\\Controller\\SecurityController::dispatch'], null, null, null, false, false, null]],
        '/mot-de-passe-oublie' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\SecurityController::forgotPasswordRequest'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|c(?'
                            .'|andidats/(?'
                                .'|e(?'
                                    .'|tudes/([^/]++)(*:54)'
                                    .'|xperiences/([^/]++)(*:80)'
                                .')'
                                .'|c(?'
                                    .'|ertifications/([^/]++)(*:114)'
                                    .'|ompétences/([^/]++)(*:142)'
                                .')'
                                .'|stages/([^/]++)(*:166)'
                            .')'
                            .'|ivilité/(?'
                                .'|editer/([^/]++)(*:202)'
                                .'|desactiver/([^/]++)(*:229)'
                                .'|activer/([^/]++)(*:253)'
                            .')'
                            .'|ompétence/(?'
                                .'|editer/([^/]++)(*:291)'
                                .'|desactiver/([^/]++)(*:318)'
                                .'|activer/([^/]++)(*:342)'
                            .')'
                        .')'
                        .'|d(?'
                            .'|iplôme/(?'
                                .'|editer/([^/]++)(*:382)'
                                .'|desactiver/([^/]++)(*:409)'
                                .'|activer/([^/]++)(*:433)'
                            .')'
                            .'|omaines/(?'
                                .'|editer/([^/]++)(*:468)'
                                .'|desactiver/([^/]++)(*:495)'
                                .'|activer/([^/]++)(*:519)'
                            .')'
                        .')'
                        .'|niveau/(?'
                            .'|editer/([^/]++)(*:554)'
                            .'|desactiver/([^/]++)(*:581)'
                            .'|activer/([^/]++)(*:605)'
                        .')'
                        .'|état\\-civil/(?'
                            .'|editer/([^/]++)(*:645)'
                            .'|desactiver/([^/]++)(*:672)'
                            .'|activer/([^/]++)(*:696)'
                        .')'
                        .'|poste/(?'
                            .'|editer/([^/]++)(*:729)'
                            .'|desactiver/([^/]++)(*:756)'
                            .'|activer/([^/]++)(*:780)'
                        .')'
                        .'|etat/export/([^/]++)(*:809)'
                        .'|utilisateurs/(?'
                            .'|nouveau/([^/]++)(*:849)'
                            .'|desactiver/([^/]++)(*:876)'
                            .'|activer/([^/]++)(*:900)'
                        .')'
                    .')'
                    .'|ccueil/([^/]++)(*:925)'
                    .'|utres/editer/([^/]++)(*:954)'
                .')'
                .'|/c(?'
                    .'|ertification/(?'
                        .'|editer/([^/]++)(*:999)'
                        .'|supprimer/([^/]++)(*:1025)'
                    .')'
                    .'|onnexion/([^/]++)(*:1052)'
                .')'
                .'|/d(?'
                    .'|ocument/editer/([^/]++)(*:1090)'
                    .'|iplome/(?'
                        .'|editer/([^/]++)(*:1124)'
                        .'|supprimer/([^/]++)(*:1151)'
                    .')'
                .')'
                .'|/e(?'
                    .'|ngagement/editer/([^/]++)(*:1192)'
                    .'|xperience/(?'
                        .'|editer/([^/]++)(*:1229)'
                        .'|supprimer/([^/]++)(*:1256)'
                    .')'
                .')'
                .'|/utilisateur/e(?'
                    .'|nvoie\\-candidature/([^/]++)(*:1311)'
                    .'|dition/(?'
                        .'|profil/([^/]++)(*:1345)'
                        .'|mot\\-de\\-passe/([^/]++)(*:1377)'
                    .')'
                .')'
                .'|/stage/(?'
                    .'|editer/([^/]++)(*:1413)'
                    .'|supprimer/([^/]++)(*:1440)'
                .')'
                .'|/job/editer/([^/]++)(*:1470)'
                .'|/profil/editer/([^/]++)(*:1502)'
                .'|/inscription/([^/]++)(*:1532)'
                .'|/reinitialiser\\-mot\\-de\\-passe/([^/]++)(*:1580)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        54 => [[['_route' => 'admin_candidate_education', '_controller' => 'App\\Controller\\Back\\CandidateController::candidateEducation'], ['id'], ['GET' => 0], null, false, true, null]],
        80 => [[['_route' => 'admin_candidate_experience', '_controller' => 'App\\Controller\\Back\\CandidateController::candidateWorkExperience'], ['id'], ['GET' => 0], null, false, true, null]],
        114 => [[['_route' => 'admin_candidate_certification', '_controller' => 'App\\Controller\\Back\\CandidateController::candidateCertification'], ['id'], ['GET' => 0], null, false, true, null]],
        142 => [[['_route' => 'admin_candidate_skill', '_controller' => 'App\\Controller\\Back\\CandidateController::candidateSkill'], ['id'], ['GET' => 0], null, false, true, null]],
        166 => [[['_route' => 'admin_candidate_internship', '_controller' => 'App\\Controller\\Back\\CandidateController::candidateInternship'], ['id'], ['GET' => 0], null, false, true, null]],
        202 => [[['_route' => 'admin_civility_edit', '_controller' => 'App\\Controller\\Back\\CivilityController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        229 => [[['_route' => 'admin_civility_disable', '_controller' => 'App\\Controller\\Back\\CivilityController::disable'], ['id'], ['POST' => 0], null, false, true, null]],
        253 => [[['_route' => 'admin_civility_activate', '_controller' => 'App\\Controller\\Back\\CivilityController::activate'], ['id'], ['POST' => 0], null, false, true, null]],
        291 => [[['_route' => 'admin_skill_edit', '_controller' => 'App\\Controller\\Back\\SkillController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        318 => [[['_route' => 'admin_skill_disable', '_controller' => 'App\\Controller\\Back\\SkillController::disable'], ['id'], ['POST' => 0], null, false, true, null]],
        342 => [[['_route' => 'admin_skill_activate', '_controller' => 'App\\Controller\\Back\\SkillController::activate'], ['id'], ['POST' => 0], null, false, true, null]],
        382 => [[['_route' => 'admin_degree_edit', '_controller' => 'App\\Controller\\Back\\DegreeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        409 => [[['_route' => 'admin_degree_disable', '_controller' => 'App\\Controller\\Back\\DegreeController::disable'], ['id'], ['POST' => 0], null, false, true, null]],
        433 => [[['_route' => 'admin_degree_activate', '_controller' => 'App\\Controller\\Back\\DegreeController::activate'], ['id'], ['POST' => 0], null, false, true, null]],
        468 => [[['_route' => 'admin_field_of_study_edit', '_controller' => 'App\\Controller\\Back\\FieldOfStudyController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        495 => [[['_route' => 'admin_field_of_study_disable', '_controller' => 'App\\Controller\\Back\\FieldOfStudyController::disable'], ['id'], ['POST' => 0], null, false, true, null]],
        519 => [[['_route' => 'admin_field_of_study_activate', '_controller' => 'App\\Controller\\Back\\FieldOfStudyController::activate'], ['id'], ['POST' => 0], null, false, true, null]],
        554 => [[['_route' => 'admin_level_edit', '_controller' => 'App\\Controller\\Back\\LevelController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        581 => [[['_route' => 'admin_level_disable', '_controller' => 'App\\Controller\\Back\\LevelController::disable'], ['id'], ['POST' => 0], null, false, true, null]],
        605 => [[['_route' => 'admin_level_activate', '_controller' => 'App\\Controller\\Back\\LevelController::activate'], ['id'], ['POST' => 0], null, false, true, null]],
        645 => [[['_route' => 'admin_marital_status_edit', '_controller' => 'App\\Controller\\Back\\MaritalStatusController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        672 => [[['_route' => 'admin_marital_status_disable', '_controller' => 'App\\Controller\\Back\\MaritalStatusController::disable'], ['id'], ['POST' => 0], null, false, true, null]],
        696 => [[['_route' => 'admin_marital_status_activate', '_controller' => 'App\\Controller\\Back\\MaritalStatusController::activate'], ['id'], ['POST' => 0], null, false, true, null]],
        729 => [[['_route' => 'admin_position_edit', '_controller' => 'App\\Controller\\Back\\PositionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        756 => [[['_route' => 'admin_position_disable', '_controller' => 'App\\Controller\\Back\\PositionController::disable'], ['id'], ['POST' => 0], null, false, true, null]],
        780 => [[['_route' => 'admin_position_activate', '_controller' => 'App\\Controller\\Back\\PositionController::activate'], ['id'], ['POST' => 0], null, false, true, null]],
        809 => [[['_route' => 'admin_candidate_state_export', '_controller' => 'App\\Controller\\Back\\StateController::export'], ['id'], ['GET' => 0], null, false, true, null]],
        849 => [[['_route' => 'admin_user_new', '_controller' => 'App\\Controller\\Back\\UserController::new'], ['ref'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        876 => [[['_route' => 'admin_user_disable', '_controller' => 'App\\Controller\\Back\\UserController::disable'], ['id'], ['POST' => 0], null, false, true, null]],
        900 => [[['_route' => 'admin_user_activate', '_controller' => 'App\\Controller\\Back\\UserController::activate'], ['id'], ['POST' => 0], null, false, true, null]],
        925 => [[['_route' => 'app_landing', '_controller' => 'App\\Controller\\Front\\FrontController::landing'], ['ref'], ['GET' => 0], null, false, true, null]],
        954 => [[['_route' => 'app_other_info_edit', '_controller' => 'App\\Controller\\Front\\OtherInfoController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        999 => [[['_route' => 'app_certification_edit', '_controller' => 'App\\Controller\\Front\\CertificationController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        1025 => [[['_route' => 'app_certification_delete', '_controller' => 'App\\Controller\\Front\\CertificationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1052 => [[['_route' => 'app_first_login', '_controller' => 'App\\Controller\\SecurityController::firstLogin'], ['ref'], null, null, false, true, null]],
        1090 => [[['_route' => 'app_document_edit', '_controller' => 'App\\Controller\\Front\\DocumentController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        1124 => [[['_route' => 'app_education_edit', '_controller' => 'App\\Controller\\Front\\EducationController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        1151 => [[['_route' => 'app_education_delete', '_controller' => 'App\\Controller\\Front\\EducationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1192 => [[['_route' => 'app_engagement_edit', '_controller' => 'App\\Controller\\Front\\EngagementController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        1229 => [[['_route' => 'app_work_experience_edit', '_controller' => 'App\\Controller\\Front\\WorkExperienceController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        1256 => [[['_route' => 'app_work_experience_delete', '_controller' => 'App\\Controller\\Front\\WorkExperienceController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1311 => [[['_route' => 'submit_application', '_controller' => 'App\\Controller\\Front\\FrontController::submitApplication'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        1345 => [[['_route' => 'app_user_edit_profile', '_controller' => 'App\\Controller\\UserController::editProfile'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1377 => [[['_route' => 'app_user_edit_password', '_controller' => 'App\\Controller\\UserController::editPassword'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1413 => [[['_route' => 'app_internship_edit', '_controller' => 'App\\Controller\\Front\\InternshipController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        1440 => [[['_route' => 'app_internship_delete', '_controller' => 'App\\Controller\\Front\\InternshipController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1470 => [[['_route' => 'app_job_application_edit', '_controller' => 'App\\Controller\\Front\\JobApplicationController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        1502 => [[['_route' => 'app_profile_edit', '_controller' => 'App\\Controller\\Front\\ProfileController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        1532 => [[['_route' => 'app_registeration', '_controller' => 'App\\Controller\\SecurityController::registeration'], ['ref'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1580 => [
            [['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
