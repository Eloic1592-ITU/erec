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
                            .'|andidats/(?'
                                .'|e(?'
                                    .'|tudes/([^/]++)(*:249)'
                                    .'|xperiences/([^/]++)(*:276)'
                                .')'
                                .'|c(?'
                                    .'|ertifications/([^/]++)(*:311)'
                                    .'|ompétences/([^/]++)(*:339)'
                                .')'
                                .'|stages/([^/]++)(*:363)'
                            .')'
                            .'|ivilité/(?'
                                .'|editer/([^/]++)(*:399)'
                                .'|desactiver/([^/]++)(*:426)'
                                .'|activer/([^/]++)(*:450)'
                            .')'
                            .'|ompétence/(?'
                                .'|editer/([^/]++)(*:488)'
                                .'|desactiver/([^/]++)(*:515)'
                                .'|activer/([^/]++)(*:539)'
                            .')'
                        .')'
                        .'|d(?'
                            .'|iplôme/(?'
                                .'|editer/([^/]++)(*:579)'
                                .'|desactiver/([^/]++)(*:606)'
                                .'|activer/([^/]++)(*:630)'
                            .')'
                            .'|omaines/(?'
                                .'|editer/([^/]++)(*:665)'
                                .'|desactiver/([^/]++)(*:692)'
                                .'|activer/([^/]++)(*:716)'
                            .')'
                        .')'
                        .'|niveau/(?'
                            .'|editer/([^/]++)(*:751)'
                            .'|desactiver/([^/]++)(*:778)'
                            .'|activer/([^/]++)(*:802)'
                        .')'
                        .'|état\\-civil/(?'
                            .'|editer/([^/]++)(*:842)'
                            .'|desactiver/([^/]++)(*:869)'
                            .'|activer/([^/]++)(*:893)'
                        .')'
                        .'|poste/(?'
                            .'|editer/([^/]++)(*:926)'
                            .'|desactiver/([^/]++)(*:953)'
                            .'|activer/([^/]++)(*:977)'
                        .')'
                        .'|etat/export/([^/]++)(*:1006)'
                        .'|utilisateurs/(?'
                            .'|nouveau/([^/]++)(*:1047)'
                            .'|desactiver/([^/]++)(*:1075)'
                            .'|activer/([^/]++)(*:1100)'
                        .')'
                    .')'
                    .'|ccueil/([^/]++)(*:1126)'
                    .'|utres/editer/([^/]++)(*:1156)'
                .')'
                .'|/c(?'
                    .'|ertification/(?'
                        .'|editer/([^/]++)(*:1202)'
                        .'|supprimer/([^/]++)(*:1229)'
                    .')'
                    .'|onnexion/([^/]++)(*:1256)'
                .')'
                .'|/d(?'
                    .'|ocument/editer/([^/]++)(*:1294)'
                    .'|iplome/(?'
                        .'|editer/([^/]++)(*:1328)'
                        .'|supprimer/([^/]++)(*:1355)'
                    .')'
                .')'
                .'|/e(?'
                    .'|ngagement/editer/([^/]++)(*:1396)'
                    .'|xperience/(?'
                        .'|editer/([^/]++)(*:1433)'
                        .'|supprimer/([^/]++)(*:1460)'
                    .')'
                .')'
                .'|/utilisateur/e(?'
                    .'|nvoie\\-candidature/([^/]++)(*:1515)'
                    .'|dition/(?'
                        .'|profil/([^/]++)(*:1549)'
                        .'|mot\\-de\\-passe/([^/]++)(*:1581)'
                    .')'
                .')'
                .'|/stage/(?'
                    .'|editer/([^/]++)(*:1617)'
                    .'|supprimer/([^/]++)(*:1644)'
                .')'
                .'|/job/editer/([^/]++)(*:1674)'
                .'|/profil/editer/([^/]++)(*:1706)'
                .'|/inscription/([^/]++)(*:1736)'
                .'|/reinitialiser\\-mot\\-de\\-passe/([^/]++)(*:1784)'
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
        249 => [[['_route' => 'admin_candidate_education', '_controller' => 'App\\Controller\\Back\\CandidateController::candidateEducation'], ['id'], ['GET' => 0], null, false, true, null]],
        276 => [[['_route' => 'admin_candidate_experience', '_controller' => 'App\\Controller\\Back\\CandidateController::candidateWorkExperience'], ['id'], ['GET' => 0], null, false, true, null]],
        311 => [[['_route' => 'admin_candidate_certification', '_controller' => 'App\\Controller\\Back\\CandidateController::candidateCertification'], ['id'], ['GET' => 0], null, false, true, null]],
        339 => [[['_route' => 'admin_candidate_skill', '_controller' => 'App\\Controller\\Back\\CandidateController::candidateSkill'], ['id'], ['GET' => 0], null, false, true, null]],
        363 => [[['_route' => 'admin_candidate_internship', '_controller' => 'App\\Controller\\Back\\CandidateController::candidateInternship'], ['id'], ['GET' => 0], null, false, true, null]],
        399 => [[['_route' => 'admin_civility_edit', '_controller' => 'App\\Controller\\Back\\CivilityController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        426 => [[['_route' => 'admin_civility_disable', '_controller' => 'App\\Controller\\Back\\CivilityController::disable'], ['id'], ['POST' => 0], null, false, true, null]],
        450 => [[['_route' => 'admin_civility_activate', '_controller' => 'App\\Controller\\Back\\CivilityController::activate'], ['id'], ['POST' => 0], null, false, true, null]],
        488 => [[['_route' => 'admin_skill_edit', '_controller' => 'App\\Controller\\Back\\SkillController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        515 => [[['_route' => 'admin_skill_disable', '_controller' => 'App\\Controller\\Back\\SkillController::disable'], ['id'], ['POST' => 0], null, false, true, null]],
        539 => [[['_route' => 'admin_skill_activate', '_controller' => 'App\\Controller\\Back\\SkillController::activate'], ['id'], ['POST' => 0], null, false, true, null]],
        579 => [[['_route' => 'admin_degree_edit', '_controller' => 'App\\Controller\\Back\\DegreeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        606 => [[['_route' => 'admin_degree_disable', '_controller' => 'App\\Controller\\Back\\DegreeController::disable'], ['id'], ['POST' => 0], null, false, true, null]],
        630 => [[['_route' => 'admin_degree_activate', '_controller' => 'App\\Controller\\Back\\DegreeController::activate'], ['id'], ['POST' => 0], null, false, true, null]],
        665 => [[['_route' => 'admin_field_of_study_edit', '_controller' => 'App\\Controller\\Back\\FieldOfStudyController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        692 => [[['_route' => 'admin_field_of_study_disable', '_controller' => 'App\\Controller\\Back\\FieldOfStudyController::disable'], ['id'], ['POST' => 0], null, false, true, null]],
        716 => [[['_route' => 'admin_field_of_study_activate', '_controller' => 'App\\Controller\\Back\\FieldOfStudyController::activate'], ['id'], ['POST' => 0], null, false, true, null]],
        751 => [[['_route' => 'admin_level_edit', '_controller' => 'App\\Controller\\Back\\LevelController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        778 => [[['_route' => 'admin_level_disable', '_controller' => 'App\\Controller\\Back\\LevelController::disable'], ['id'], ['POST' => 0], null, false, true, null]],
        802 => [[['_route' => 'admin_level_activate', '_controller' => 'App\\Controller\\Back\\LevelController::activate'], ['id'], ['POST' => 0], null, false, true, null]],
        842 => [[['_route' => 'admin_marital_status_edit', '_controller' => 'App\\Controller\\Back\\MaritalStatusController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        869 => [[['_route' => 'admin_marital_status_disable', '_controller' => 'App\\Controller\\Back\\MaritalStatusController::disable'], ['id'], ['POST' => 0], null, false, true, null]],
        893 => [[['_route' => 'admin_marital_status_activate', '_controller' => 'App\\Controller\\Back\\MaritalStatusController::activate'], ['id'], ['POST' => 0], null, false, true, null]],
        926 => [[['_route' => 'admin_position_edit', '_controller' => 'App\\Controller\\Back\\PositionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        953 => [[['_route' => 'admin_position_disable', '_controller' => 'App\\Controller\\Back\\PositionController::disable'], ['id'], ['POST' => 0], null, false, true, null]],
        977 => [[['_route' => 'admin_position_activate', '_controller' => 'App\\Controller\\Back\\PositionController::activate'], ['id'], ['POST' => 0], null, false, true, null]],
        1006 => [[['_route' => 'admin_candidate_state_export', '_controller' => 'App\\Controller\\Back\\StateController::export'], ['id'], ['GET' => 0], null, false, true, null]],
        1047 => [[['_route' => 'admin_user_new', '_controller' => 'App\\Controller\\Back\\UserController::new'], ['ref'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1075 => [[['_route' => 'admin_user_disable', '_controller' => 'App\\Controller\\Back\\UserController::disable'], ['id'], ['POST' => 0], null, false, true, null]],
        1100 => [[['_route' => 'admin_user_activate', '_controller' => 'App\\Controller\\Back\\UserController::activate'], ['id'], ['POST' => 0], null, false, true, null]],
        1126 => [[['_route' => 'app_landing', '_controller' => 'App\\Controller\\Front\\FrontController::landing'], ['ref'], ['GET' => 0], null, false, true, null]],
        1156 => [[['_route' => 'app_other_info_edit', '_controller' => 'App\\Controller\\Front\\OtherInfoController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        1202 => [[['_route' => 'app_certification_edit', '_controller' => 'App\\Controller\\Front\\CertificationController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        1229 => [[['_route' => 'app_certification_delete', '_controller' => 'App\\Controller\\Front\\CertificationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1256 => [[['_route' => 'app_first_login', '_controller' => 'App\\Controller\\SecurityController::firstLogin'], ['ref'], null, null, false, true, null]],
        1294 => [[['_route' => 'app_document_edit', '_controller' => 'App\\Controller\\Front\\DocumentController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        1328 => [[['_route' => 'app_education_edit', '_controller' => 'App\\Controller\\Front\\EducationController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        1355 => [[['_route' => 'app_education_delete', '_controller' => 'App\\Controller\\Front\\EducationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1396 => [[['_route' => 'app_engagement_edit', '_controller' => 'App\\Controller\\Front\\EngagementController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        1433 => [[['_route' => 'app_work_experience_edit', '_controller' => 'App\\Controller\\Front\\WorkExperienceController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        1460 => [[['_route' => 'app_work_experience_delete', '_controller' => 'App\\Controller\\Front\\WorkExperienceController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1515 => [[['_route' => 'submit_application', '_controller' => 'App\\Controller\\Front\\FrontController::submitApplication'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        1549 => [[['_route' => 'app_user_edit_profile', '_controller' => 'App\\Controller\\UserController::editProfile'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1581 => [[['_route' => 'app_user_edit_password', '_controller' => 'App\\Controller\\UserController::editPassword'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1617 => [[['_route' => 'app_internship_edit', '_controller' => 'App\\Controller\\Front\\InternshipController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        1644 => [[['_route' => 'app_internship_delete', '_controller' => 'App\\Controller\\Front\\InternshipController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1674 => [[['_route' => 'app_job_application_edit', '_controller' => 'App\\Controller\\Front\\JobApplicationController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        1706 => [[['_route' => 'app_profile_edit', '_controller' => 'App\\Controller\\Front\\ProfileController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        1736 => [[['_route' => 'app_registeration', '_controller' => 'App\\Controller\\SecurityController::registeration'], ['ref'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1784 => [
            [['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
