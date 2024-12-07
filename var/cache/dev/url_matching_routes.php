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
        '/club' => [[['_route' => 'club_index', '_controller' => 'App\\Controller\\GClubsController::index'], null, null, null, true, false, null]],
        '/club/allClubs' => [[['_route' => 'club_manage', '_controller' => 'App\\Controller\\GClubsController::showClubs'], null, null, null, false, false, null]],
        '/club/listallClubs' => [[['_route' => 'club_list', '_controller' => 'App\\Controller\\GClubsController::list'], null, null, null, false, false, null]],
        '/club/new' => [[['_route' => 'club_new', '_controller' => 'App\\Controller\\GClubsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/events' => [
            [['_route' => 'app_g_events', '_controller' => 'App\\Controller\\GEventsController::index'], null, null, null, true, false, null],
            [['_route' => 'app_events', '_controller' => 'App\\Controller\\EventController::index'], null, null, null, false, false, null],
            [['_route' => 'user_dashboard'], null, null, null, false, false, null],
        ],
        '/events/show' => [[['_route' => 'app_g_events_show', '_controller' => 'App\\Controller\\GEventsController::show'], null, null, null, false, false, null]],
        '/g/recrutements/dash' => [[['_route' => 'app_show_all', '_controller' => 'App\\Controller\\GRecrutementsController::show_all'], null, null, null, false, false, null]],
        '/g/recrutements' => [[['_route' => 'app_show_all_user', '_controller' => 'App\\Controller\\GRecrutementsController::show_alluser'], null, null, null, true, false, null]],
        '/g/recrutements/add' => [[['_route' => 'recruitment_add', '_controller' => 'App\\Controller\\GRecrutementsController::recruitmentAdd'], null, null, null, false, false, null]],
        '/g/ressourcess' => [[['_route' => 'app_g_ressourcess', '_controller' => 'App\\Controller\\GRessourcesController::indexxx'], null, null, null, false, false, null]],
        '/dashboard/ressources/new' => [[['_route' => 'ressource_new', '_controller' => 'App\\Controller\\GRessourcesController::new'], null, null, null, false, false, null]],
        '/dashboard/ressources' => [[['_route' => 'app_g_ressources', '_controller' => 'App\\Controller\\GRessourcesController::index'], null, null, null, false, false, null]],
        '/g/ressources/demande' => [[['_route' => 'demande_ressource', '_controller' => 'App\\Controller\\GRessourcesController::demandeRessource'], null, null, null, false, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\GUsersController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/users' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\GUsersController::index'], null, ['GET' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\GusersController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, true, false, null]],
        '/admin/dashboard' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminController::dashboard'], null, null, null, false, false, null]],
        '/admin/event/add' => [[['_route' => 'app_g_events_add', '_controller' => 'App\\Controller\\AdminController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/application/submit/([^/]++)(*:230)'
                .'|/club/(?'
                    .'|rating/([^/]++)(*:262)'
                    .'|([^/]++)(?'
                        .'|(*:281)'
                        .'|/(?'
                            .'|a(?'
                                .'|cceptApplication/([^/]++)(*:322)'
                                .'|pplications(*:341)'
                            .')'
                            .'|search(*:356)'
                            .'|rejectApplication/([^/]++)(*:390)'
                            .'|edit(*:402)'
                        .')'
                    .')'
                    .'|club/([^/]++)(*:425)'
                    .'|delete/([^/]++)(*:448)'
                .')'
                .'|/events/(?'
<<<<<<< HEAD
                    .'|update/([^/]++)(*:483)'
                    .'|show/([^/]++)(*:504)'
                    .'|delete/([^/]++)(*:527)'
                    .'|participate/([^/]++)(*:555)'
                .')'
                .'|/g/ressources/(?'
                    .'|delete/(?'
                        .'|([^/]++)(*:599)'
                        .'|confirm/([^/]++)(*:623)'
                    .')'
                    .'|edit/([^/]++)(*:645)'
                .')'
                .'|/uploads/(.+)(*:667)'
=======
                    .'|update/([^/]++)(*:410)'
                    .'|delete/([^/]++)(*:433)'
                    .'|participate/([^/]++)(*:461)'
                    .'|([^/]++)/cancel(*:484)'
                .')'
                .'|/g(?'
                    .'|/re(?'
                        .'|crutements/(?'
                            .'|de(?'
                                .'|tails/([^/]++)(*:537)'
                                .'|lete/([^/]++)(*:558)'
                            .')'
                            .'|edit/([^/]++)(*:580)'
                            .'|apply/([^/]++)(*:602)'
                        .')'
                        .'|ssources/delete/(?'
                            .'|([^/]++)(*:638)'
                            .'|confirm/([^/]++)(*:662)'
                        .')'
                    .')'
                    .'|_ressources/backOffice/edit/([^/]++)(*:708)'
                .')'
                .'|/uploads/(.+)(*:730)'
>>>>>>> c833b8a74c735c5e13611c5fa5b159719b6f1d30
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
<<<<<<< HEAD
        230 => [[['_route' => 'application_submit_club', '_controller' => 'App\\Controller\\ApplicationController::submitForClub'], ['clubId'], ['POST' => 0], null, false, true, null]],
        262 => [[['_route' => 'rate_club', '_controller' => 'App\\Controller\\GClubsController::rateClub'], ['id'], null, null, false, true, null]],
        281 => [[['_route' => 'club_show', '_controller' => 'App\\Controller\\GClubsController::showMembers'], ['id'], ['GET' => 0], null, false, true, null]],
        322 => [[['_route' => 'club_accept_application', '_controller' => 'App\\Controller\\GClubsController::acceptApplication'], ['id', 'applicationId'], ['POST' => 0], null, false, true, null]],
        341 => [[['_route' => 'club_applications', '_controller' => 'App\\Controller\\GClubsController::showClubApplications'], ['clubId'], null, null, false, false, null]],
        356 => [[['_route' => 'club_search_by_id', '_controller' => 'App\\Controller\\GClubsController::searchById'], ['id'], ['GET' => 0], null, false, false, null]],
        390 => [[['_route' => 'club_reject_application', '_controller' => 'App\\Controller\\GClubsController::rejectApplication'], ['id', 'applicationId'], ['POST' => 0], null, false, true, null]],
        402 => [[['_route' => 'club_edit', '_controller' => 'App\\Controller\\GClubsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        425 => [[['_route' => 'club_details', '_controller' => 'App\\Controller\\GClubsController::clubDetails'], ['id'], null, null, false, true, null]],
        448 => [[['_route' => 'club_delete', '_controller' => 'App\\Controller\\GClubsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        483 => [[['_route' => 'app_g_events_update', '_controller' => 'App\\Controller\\GEventsController::update'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        504 => [[['_route' => 'app_g_events_show', '_controller' => 'App\\Controller\\GEventsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        527 => [[['_route' => 'app_g_events_delete', '_controller' => 'App\\Controller\\GEventsController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        555 => [[['_route' => 'app_event_participate', '_controller' => 'App\\Controller\\GEventsController::participate'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        599 => [[['_route' => 'ressource_delete', '_controller' => 'App\\Controller\\GRessourcesController::delete'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        623 => [[['_route' => 'ressource_delete_confirm', '_controller' => 'App\\Controller\\GRessourcesController::confirmDelete'], ['id'], null, null, false, true, null]],
        645 => [[['_route' => 'ressource_edit', '_controller' => 'App\\Controller\\GRessourcesController::edit'], ['id'], null, null, false, true, null]],
        667 => [
=======
        222 => [[['_route' => 'club_show', '_controller' => 'App\\Controller\\GClubsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        263 => [[['_route' => 'club_accept_application', '_controller' => 'App\\Controller\\GClubsController::acceptApplication'], ['id', 'applicationId'], ['POST' => 0], null, false, true, null]],
        282 => [[['_route' => 'club_applications', '_controller' => 'App\\Controller\\GClubsController::showClubApplications'], ['clubId'], null, null, false, false, null]],
        317 => [[['_route' => 'club_reject_application', '_controller' => 'App\\Controller\\GClubsController::rejectApplication'], ['id', 'applicationId'], ['POST' => 0], null, false, true, null]],
        329 => [[['_route' => 'club_edit', '_controller' => 'App\\Controller\\GClubsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        352 => [[['_route' => 'club_details', '_controller' => 'App\\Controller\\GClubsController::clubDetails'], ['id'], null, null, false, true, null]],
        375 => [[['_route' => 'club_delete', '_controller' => 'App\\Controller\\GClubsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        410 => [[['_route' => 'app_g_events_update', '_controller' => 'App\\Controller\\GEventsController::update'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        433 => [[['_route' => 'app_g_events_delete', '_controller' => 'App\\Controller\\GEventsController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        461 => [[['_route' => 'app_event_participate', '_controller' => 'App\\Controller\\GEventsController::participate'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        484 => [[['_route' => 'app_event_cancel_participation', '_controller' => 'App\\Controller\\GEventsController::cancelParticipation'], ['id'], null, null, false, false, null]],
        537 => [[['_route' => 'recruitement_details', '_controller' => 'App\\Controller\\GRecrutementsController::authorDetails'], ['id'], null, null, false, true, null]],
        558 => [[['_route' => 'Recruitment_delete', '_controller' => 'App\\Controller\\GRecrutementsController::authorDelete1'], ['id'], null, null, false, true, null]],
        580 => [[['_route' => 'recruitment_edit', '_controller' => 'App\\Controller\\GRecrutementsController::edit'], ['id'], null, null, false, true, null]],
        602 => [[['_route' => 'recruitment_apply', '_controller' => 'App\\Controller\\GRecrutementsController::apply'], ['id'], null, null, false, true, null]],
        638 => [[['_route' => 'ressource_delete', '_controller' => 'App\\Controller\\GRessourcesController::delete'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        662 => [[['_route' => 'ressource_delete_confirm', '_controller' => 'App\\Controller\\GRessourcesController::confirmDelete'], ['id'], null, null, false, true, null]],
        708 => [[['_route' => 'ressource_edit', '_controller' => 'App\\Controller\\GRessourcesController::edit'], ['id'], null, null, false, true, null]],
        730 => [
>>>>>>> c833b8a74c735c5e13611c5fa5b159719b6f1d30
            [['_route' => 'uploads', '_public' => true], ['path'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
