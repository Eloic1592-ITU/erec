<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\Back\\BackController::indexDashboard'], null, ['GET' => 0], null, true, false, null]],
        '/admin/campaign' => [[['_route' => 'admin_campaign', '_controller' => 'App\\Controller\\Back\\CampaignController::index'], null, ['GET' => 0, 'POST' => 1, 'DELETE' => 2], null, true, false, null]],
        '/admin/campaign/new' => [[['_route' => 'admin_campaign_new', '_controller' => 'App\\Controller\\Back\\CampaignController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|c(?'
                            .'|a(?'
                                .'|mpaign/(?'
                                    .'|([^/]++)(?'
                                        .'|(*:244)'
                                        .'|/edit(*:257)'
                                    .')'
                                    .'|desactiver/([^/]++)(*:285)'
                                    .'|activer/([^/]++)(*:309)'
                                .')'
                                .'|ndidats/(?'
                                    .'|e(?'
                                        .'|tudes/([^/]++)(*:347)'
                                        .'|xperiences/([^/]++)(*:374)'
                                    .')'
                                    .'|c(?'
                                        .'|ertifications/([^/]++)(*:409)'
                                        .'|ompétences/([^/]++)(*:437)'
                                    .')'
                                    .'|stages/([^/]++)(*:461)'
                                .')'
                            .')'
                            .'|ivilité/(?'
                                .'|editer/([^/]++)(*:498)'
                                .'|desactiver/([^/]++)(*:525)'
                                .'|activer/([^/]++)(*:549)'
                            .')'
                            .'|ompétence/(?'
                                .'|editer/([^/]++)(*:587)'
                                .'|desactiver/([^/]++)(*:614)'
                                .'|activer/([^/]++)(*:638)'
                            .')'
                        .')'
                        .'|d(?'
                            .'|iplôme/(?'
                                .'|editer/([^/]++)(*:678)'
                                .'|desactiver/([^/]++)(*:705)'
                                .'|activer/([^/]++)(*:729)'
                            .')'
                            .'|omaines/(?'
                                .'|editer/([^/]++)(*:764)'
                                .'|desactiver/([^/]++)(*:791)'
                                .'|activer/([^/]++)(*:815)'
                            .')'
                        .')'
                        .'|niveau/(?'
                            .'|editer/([^/]++)(*:850)'
                            .'|desactiver/([^/]++)(*:877)'
                            .'|activer/([^/]++)(*:901)'
                        .')'
                        .'|état\\-civil/(?'
                            .'|editer/([^/]++)(*:941)'
                            .'|desactiver/([^/]++)(*:968)'
                            .'|activer/([^/]++)(*:992)'
                        .')'
                        .'|poste/(?'
                            .'|editer/([^/]++)(*:1025)'
                            .'|desactiver/([^/]++)(*:1053)'
                            .'|activer/([^/]++)(*:1078)'
                        .')'
                        .'|etat/export/([^/]++)(*:1108)'
                        .'|utilisateurs/(?'
                            .'|nouveau/([^/]++)(*:1149)'
                            .'|desactiver/([^/]++)(*:1177)'
                            .'|activer/([^/]++)(*:1202)'
                        .')'
                    .')'
                    .'|ccueil/([^/]++)(*:1228)'
                    .'|utres/editer/([^/]++)(*:1258)'
                .')'
                .'|/c(?'
                    .'|ertification/(?'
                        .'|editer/([^/]++)(*:1304)'
                        .'|supprimer/([^/]++)(*:1331)'
                    .')'
                    .'|onnexion/([^/]++)(*:1358)'
                .')'
                .'|/d(?'
                    .'|ocument/editer/([^/]++)(*:1396)'
                    .'|iplome/(?'
                        .'|editer/([^/]++)(*:1430)'
                        .'|supprimer/([^/]++)(*:1457)'
                    .')'
                .')'
                .'|/e(?'
                    .'|ngagement/editer/([^/]++)(*:1498)'
                    .'|xperience/(?'
                        .'|editer/([^/]++)(*:1535)'
                        .'|supprimer/([^/]++)(*:1562)'
                    .')'
                .')'
                .'|/utilisateur/e(?'
                    .'|nvoie\\-candidature/([^/]++)(*:1617)'
                    .'|dition/(?'
                        .'|profil/([^/]++)(*:1651)'
                        .'|mot\\-de\\-passe/([^/]++)(*:1683)'
                    .')'
                .')'
                .'|/stage/(?'
                    .'|editer/([^/]++)(*:1719)'
                    .'|supprimer/([^/]++)(*:1746)'
                .')'
                .'|/job/editer/([^/]++)(*:1776)'
                .'|/profil/editer/([^/]++)(*:1808)'
                .'|/inscription/([^/]++)(*:1838)'
                .'|/reinitialiser\\-mot\\-de\\-passe/([^/]++)(*:1886)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        244 => [[['_route' => 'admin_campaign_show', '_controller' => 'App\\Controller\\Back\\CampaignController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        257 => [[['_route' => 'admin_campaign_edit', '_controller' => 'App\\Controller\\Back\\CampaignController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        285 => [[['_route' => 'admin_campaign_disable', '_controller' => 'App\\Controller\\Back\\CampaignController::disable'], ['id'], ['POST' => 0], null, false, true, null]],
        309 => [[['_route' => 'admin_campaign_activate', '_controller' => 'App\\Controller\\Back\\CampaignController::activate'], ['id'], ['POST' => 0], null, false, true, null]],
        347 => [[['_route' => 'admin_candidate_education', '_controller' => 'App\\Controller\\Back\\CandidateController::candidateEducation'], ['id'], ['GET' => 0], null, false, true, null]],
        374 => [[['_route' => 'admin_candidate_experience', '_controller' => 'App\\Controller\\Back\\CandidateController::candidateWorkExperience'], ['id'], ['GET' => 0], null, false, true, null]],
        409 => [[['_route' => 'admin_candidate_certification', '_controller' => 'App\\Controller\\Back\\CandidateController::candidateCertification'], ['id'], ['GET' => 0], null, false, true, null]],
        437 => [[['_route' => 'admin_candidate_skill', '_controller' => 'App\\Controller\\Back\\CandidateController::candidateSkill'], ['id'], ['GET' => 0], null, false, true, null]],
        461 => [[['_route' => 'admin_candidate_internship', '_controller' => 'App\\Controller\\Back\\CandidateController::candidateInternship'], ['id'], ['GET' => 0], null, false, true, null]],
        498 => [[['_route' => 'admin_civility_edit', '_controller' => 'App\\Controller\\Back\\CivilityController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        525 => [[['_route' => 'admin_civility_disable', '_controller' => 'App\\Controller\\Back\\CivilityController::disable'], ['id'], ['POST' => 0], null, false, true, null]],
        549 => [[['_route' => 'admin_civility_activate', '_controller' => 'App\\Controller\\Back\\CivilityController::activate'], ['id'], ['POST' => 0], null, false, true, null]],
        587 => [[['_route' => 'admin_skill_edit', '_controller' => 'App\\Controller\\Back\\SkillController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        614 => [[['_route' => 'admin_skill_disable', '_controller' => 'App\\Controller\\Back\\SkillController::disable'], ['id'], ['POST' => 0], null, false, true, null]],
        638 => [[['_route' => 'admin_skill_activate', '_controller' => 'App\\Controller\\Back\\SkillController::activate'], ['id'], ['POST' => 0], null, false, true, null]],
        678 => [[['_route' => 'admin_degree_edit', '_controller' => 'App\\Controller\\Back\\DegreeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        705 => [[['_route' => 'admin_degree_disable', '_controller' => 'App\\Controller\\Back\\DegreeController::disable'], ['id'], ['POST' => 0], null, false, true, null]],
        729 => [[['_route' => 'admin_degree_activate', '_controller' => 'App\\Controller\\Back\\DegreeController::activate'], ['id'], ['POST' => 0], null, false, true, null]],
        764 => [[['_route' => 'admin_field_of_study_edit', '_controller' => 'App\\Controller\\Back\\FieldOfStudyController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        791 => [[['_route' => 'admin_field_of_study_disable', '_controller' => 'App\\Controller\\Back\\FieldOfStudyController::disable'], ['id'], ['POST' => 0], null, false, true, null]],
        815 => [[['_route' => 'admin_field_of_study_activate', '_controller' => 'App\\Controller\\Back\\FieldOfStudyController::activate'], ['id'], ['POST' => 0], null, false, true, null]],
        850 => [[['_route' => 'admin_level_edit', '_controller' => 'App\\Controller\\Back\\LevelController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        877 => [[['_route' => 'admin_level_disable', '_controller' => 'App\\Controller\\Back\\LevelController::disable'], ['id'], ['POST' => 0], null, false, true, null]],
        901 => [[['_route' => 'admin_level_activate', '_controller' => 'App\\Controller\\Back\\LevelController::activate'], ['id'], ['POST' => 0], null, false, true, null]],
        941 => [[['_route' => 'admin_marital_status_edit', '_controller' => 'App\\Controller\\Back\\MaritalStatusController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        968 => [[['_route' => 'admin_marital_status_disable', '_controller' => 'App\\Controller\\Back\\MaritalStatusController::disable'], ['id'], ['POST' => 0], null, false, true, null]],
        992 => [[['_route' => 'admin_marital_status_activate', '_controller' => 'App\\Controller\\Back\\MaritalStatusController::activate'], ['id'], ['POST' => 0], null, false, true, null]],
        1025 => [[['_route' => 'admin_position_edit', '_controller' => 'App\\Controller\\Back\\PositionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1053 => [[['_route' => 'admin_position_disable', '_controller' => 'App\\Controller\\Back\\PositionController::disable'], ['id'], ['POST' => 0], null, false, true, null]],
        1078 => [[['_route' => 'admin_position_activate', '_controller' => 'App\\Controller\\Back\\PositionController::activate'], ['id'], ['POST' => 0], null, false, true, null]],
        1108 => [[['_route' => 'admin_candidate_state_export', '_controller' => 'App\\Controller\\Back\\StateController::export'], ['id'], ['GET' => 0], null, false, true, null]],
        1149 => [[['_route' => 'admin_user_new', '_controller' => 'App\\Controller\\Back\\UserController::new'], ['ref'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1177 => [[['_route' => 'admin_user_disable', '_controller' => 'App\\Controller\\Back\\UserController::disable'], ['id'], ['POST' => 0], null, false, true, null]],
        1202 => [[['_route' => 'admin_user_activate', '_controller' => 'App\\Controller\\Back\\UserController::activate'], ['id'], ['POST' => 0], null, false, true, null]],
        1228 => [[['_route' => 'app_landing', '_controller' => 'App\\Controller\\Front\\FrontController::landing'], ['ref'], ['GET' => 0], null, false, true, null]],
        1258 => [[['_route' => 'app_other_info_edit', '_controller' => 'App\\Controller\\Front\\OtherInfoController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        1304 => [[['_route' => 'app_certification_edit', '_controller' => 'App\\Controller\\Front\\CertificationController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        1331 => [[['_route' => 'app_certification_delete', '_controller' => 'App\\Controller\\Front\\CertificationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1358 => [[['_route' => 'app_first_login', '_controller' => 'App\\Controller\\SecurityController::firstLogin'], ['ref'], null, null, false, true, null]],
        1396 => [[['_route' => 'app_document_edit', '_controller' => 'App\\Controller\\Front\\DocumentController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        1430 => [[['_route' => 'app_education_edit', '_controller' => 'App\\Controller\\Front\\EducationController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        1457 => [[['_route' => 'app_education_delete', '_controller' => 'App\\Controller\\Front\\EducationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1498 => [[['_route' => 'app_engagement_edit', '_controller' => 'App\\Controller\\Front\\EngagementController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        1535 => [[['_route' => 'app_work_experience_edit', '_controller' => 'App\\Controller\\Front\\WorkExperienceController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        1562 => [[['_route' => 'app_work_experience_delete', '_controller' => 'App\\Controller\\Front\\WorkExperienceController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1617 => [[['_route' => 'submit_application', '_controller' => 'App\\Controller\\Front\\FrontController::submitApplication'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        1651 => [[['_route' => 'app_user_edit_profile', '_controller' => 'App\\Controller\\UserController::editProfile'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1683 => [[['_route' => 'app_user_edit_password', '_controller' => 'App\\Controller\\UserController::editPassword'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1719 => [[['_route' => 'app_internship_edit', '_controller' => 'App\\Controller\\Front\\InternshipController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        1746 => [[['_route' => 'app_internship_delete', '_controller' => 'App\\Controller\\Front\\InternshipController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1776 => [[['_route' => 'app_job_application_edit', '_controller' => 'App\\Controller\\Front\\JobApplicationController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        1808 => [[['_route' => 'app_profile_edit', '_controller' => 'App\\Controller\\Front\\ProfileController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        1838 => [[['_route' => 'app_registeration', '_controller' => 'App\\Controller\\SecurityController::registeration'], ['ref'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1886 => [
            [['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
