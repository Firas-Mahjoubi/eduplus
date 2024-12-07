<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'application_submit_club' => [['clubId'], ['_controller' => 'App\\Controller\\ApplicationController::submitForClub'], [], [['variable', '/', '[^/]++', 'clubId', true], ['text', '/application/submit']], [], [], []],
    'club_index' => [[], ['_controller' => 'App\\Controller\\GClubsController::index'], [], [['text', '/club/']], [], [], []],
    'rate_club' => [['id'], ['_controller' => 'App\\Controller\\GClubsController::rateClub'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/club/rating']], [], [], []],
    'club_manage' => [[], ['_controller' => 'App\\Controller\\GClubsController::showClubs'], [], [['text', '/club/allClubs']], [], [], []],
    'club_list' => [[], ['_controller' => 'App\\Controller\\GClubsController::list'], [], [['text', '/club/listallClubs']], [], [], []],
    'club_new' => [[], ['_controller' => 'App\\Controller\\GClubsController::new'], [], [['text', '/club/new']], [], [], []],
    'club_show' => [['id'], ['_controller' => 'App\\Controller\\GClubsController::showMembers'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/club']], [], [], []],
    'club_accept_application' => [['id', 'applicationId'], ['_controller' => 'App\\Controller\\GClubsController::acceptApplication'], [], [['variable', '/', '[^/]++', 'applicationId', true], ['text', '/acceptApplication'], ['variable', '/', '[^/]++', 'id', true], ['text', '/club']], [], [], []],
    'club_search_by_id' => [['id'], ['_controller' => 'App\\Controller\\GClubsController::searchById'], [], [['text', '/search'], ['variable', '/', '[^/]++', 'id', true], ['text', '/club']], [], [], []],
    'club_reject_application' => [['id', 'applicationId'], ['_controller' => 'App\\Controller\\GClubsController::rejectApplication'], [], [['variable', '/', '[^/]++', 'applicationId', true], ['text', '/rejectApplication'], ['variable', '/', '[^/]++', 'id', true], ['text', '/club']], [], [], []],
    'club_edit' => [['id'], ['_controller' => 'App\\Controller\\GClubsController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/club']], [], [], []],
    'club_applications' => [['clubId'], ['_controller' => 'App\\Controller\\GClubsController::showClubApplications'], [], [['text', '/applications'], ['variable', '/', '[^/]++', 'clubId', true], ['text', '/club']], [], [], []],
    'club_details' => [['id'], ['_controller' => 'App\\Controller\\GClubsController::clubDetails'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/club/club']], [], [], []],
    'club_delete' => [['id'], ['_controller' => 'App\\Controller\\GClubsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/club/delete']], [], [], []],
    'app_g_events' => [[], ['_controller' => 'App\\Controller\\GEventsController::index'], [], [['text', '/events/']], [], [], []],
    'app_g_events_show' => [[], ['_controller' => 'App\\Controller\\GEventsController::show'], [], [['text', '/events/show']], [], [], []],
    'app_g_events_update' => [['id'], ['_controller' => 'App\\Controller\\GEventsController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/events/update']], [], [], []],
    'app_g_events_delete' => [['id'], ['_controller' => 'App\\Controller\\GEventsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/events/delete']], [], [], []],
    'app_event_participate' => [['id'], ['_controller' => 'App\\Controller\\GEventsController::participate'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/events/participate']], [], [], []],
    'app_event_cancel_participation' => [['id'], ['_controller' => 'App\\Controller\\GEventsController::cancelParticipation'], [], [['text', '/cancel'], ['variable', '/', '[^/]++', 'id', true], ['text', '/events']], [], [], []],
    'app_show_all' => [[], ['_controller' => 'App\\Controller\\GRecrutementsController::show_all'], [], [['text', '/g/recrutements/dash']], [], [], []],
    'app_show_all_user' => [[], ['_controller' => 'App\\Controller\\GRecrutementsController::show_alluser'], [], [['text', '/g/recrutements/']], [], [], []],
    'recruitement_details' => [['id'], ['_controller' => 'App\\Controller\\GRecrutementsController::authorDetails'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/g/recrutements/details']], [], [], []],
    'Recruitment_delete' => [['id'], ['_controller' => 'App\\Controller\\GRecrutementsController::authorDelete1'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/g/recrutements/delete']], [], [], []],
    'recruitment_add' => [[], ['_controller' => 'App\\Controller\\GRecrutementsController::recruitmentAdd'], [], [['text', '/g/recrutements/add']], [], [], []],
    'recruitment_edit' => [['id'], ['_controller' => 'App\\Controller\\GRecrutementsController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/g/recrutements/edit']], [], [], []],
    'recruitment_apply' => [['id'], ['_controller' => 'App\\Controller\\GRecrutementsController::apply'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/g/recrutements/apply']], [], [], []],
    'app_g_ressourcess' => [[], ['_controller' => 'App\\Controller\\GRessourcesController::indexxx'], [], [['text', '/g/ressourcess']], [], [], []],
    'ressource_new' => [[], ['_controller' => 'App\\Controller\\GRessourcesController::new'], [], [['text', '/dashboard/ressources/new']], [], [], []],
    'app_g_ressources' => [[], ['_controller' => 'App\\Controller\\GRessourcesController::index'], [], [['text', '/dashboard/ressources']], [], [], []],
    'ressource_delete' => [['id'], ['_controller' => 'App\\Controller\\GRessourcesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/g/ressources/delete']], [], [], []],
    'ressource_delete_confirm' => [['id'], ['_controller' => 'App\\Controller\\GRessourcesController::confirmDelete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/g/ressources/delete/confirm']], [], [], []],
    'ressource_edit' => [['id'], ['_controller' => 'App\\Controller\\GRessourcesController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/g_ressources/backOffice/edit']], [], [], []],
    'demande_ressource' => [[], ['_controller' => 'App\\Controller\\GRessourcesController::demandeRessource'], [], [['text', '/g/ressources/demande']], [], [], []],
    'user_new' => [[], ['_controller' => 'App\\Controller\\GUsersController::new'], [], [['text', '/user/new']], [], [], []],
    'user_index' => [[], ['_controller' => 'App\\Controller\\GUsersController::index'], [], [['text', '/users']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\GusersController::index'], [], [['text', '/']], [], [], []],
    'uploads' => [['path'], ['_public' => true], ['path' => '.+'], [['variable', '/', '.+', 'path', true], ['text', '/uploads']], [], [], []],
    'app_events' => [[], ['_controller' => 'App\\Controller\\EventController::index'], [], [['text', '/events']], [], [], []],
<<<<<<< HEAD
    'App\Controller\ApplicationController::submitForClub' => [['clubId'], ['_controller' => 'App\\Controller\\ApplicationController::submitForClub'], [], [['variable', '/', '[^/]++', 'clubId', true], ['text', '/application/submit']], [], [], []],
=======
    'user_dashboard' => [[], [], [], [['text', '/events']], [], [], []],
    'app_admin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin/']], [], [], []],
    'admin_dashboard' => [[], ['_controller' => 'App\\Controller\\AdminController::dashboard'], [], [['text', '/admin/dashboard']], [], [], []],
    'app_g_events_add' => [[], ['_controller' => 'App\\Controller\\AdminController::add'], [], [['text', '/admin/event/add']], [], [], []],
    'App\Controller\ApplicationController::submit' => [[], ['_controller' => 'App\\Controller\\ApplicationController::submit'], [], [['text', '/application']], [], [], []],
>>>>>>> c833b8a74c735c5e13611c5fa5b159719b6f1d30
    'App\Controller\GClubsController::index' => [[], ['_controller' => 'App\\Controller\\GClubsController::index'], [], [['text', '/club/']], [], [], []],
    'App\Controller\GClubsController::rateClub' => [['id'], ['_controller' => 'App\\Controller\\GClubsController::rateClub'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/club/rating']], [], [], []],
    'App\Controller\GClubsController::showClubs' => [[], ['_controller' => 'App\\Controller\\GClubsController::showClubs'], [], [['text', '/club/allClubs']], [], [], []],
    'App\Controller\GClubsController::list' => [[], ['_controller' => 'App\\Controller\\GClubsController::list'], [], [['text', '/club/listallClubs']], [], [], []],
    'App\Controller\GClubsController::new' => [[], ['_controller' => 'App\\Controller\\GClubsController::new'], [], [['text', '/club/new']], [], [], []],
    'App\Controller\GClubsController::showMembers' => [['id'], ['_controller' => 'App\\Controller\\GClubsController::showMembers'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/club']], [], [], []],
    'App\Controller\GClubsController::acceptApplication' => [['id', 'applicationId'], ['_controller' => 'App\\Controller\\GClubsController::acceptApplication'], [], [['variable', '/', '[^/]++', 'applicationId', true], ['text', '/acceptApplication'], ['variable', '/', '[^/]++', 'id', true], ['text', '/club']], [], [], []],
    'App\Controller\GClubsController::searchById' => [['id'], ['_controller' => 'App\\Controller\\GClubsController::searchById'], [], [['text', '/search'], ['variable', '/', '[^/]++', 'id', true], ['text', '/club']], [], [], []],
    'App\Controller\GClubsController::rejectApplication' => [['id', 'applicationId'], ['_controller' => 'App\\Controller\\GClubsController::rejectApplication'], [], [['variable', '/', '[^/]++', 'applicationId', true], ['text', '/rejectApplication'], ['variable', '/', '[^/]++', 'id', true], ['text', '/club']], [], [], []],
    'App\Controller\GClubsController::edit' => [['id'], ['_controller' => 'App\\Controller\\GClubsController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/club']], [], [], []],
    'App\Controller\GClubsController::showClubApplications' => [['clubId'], ['_controller' => 'App\\Controller\\GClubsController::showClubApplications'], [], [['text', '/applications'], ['variable', '/', '[^/]++', 'clubId', true], ['text', '/club']], [], [], []],
    'App\Controller\GClubsController::clubDetails' => [['id'], ['_controller' => 'App\\Controller\\GClubsController::clubDetails'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/club/club']], [], [], []],
    'App\Controller\GClubsController::delete' => [['id'], ['_controller' => 'App\\Controller\\GClubsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/club/delete']], [], [], []],
    'App\Controller\GEventsController::index' => [[], ['_controller' => 'App\\Controller\\GEventsController::index'], [], [['text', '/events/']], [], [], []],
    'App\Controller\GEventsController::show' => [[], ['_controller' => 'App\\Controller\\GEventsController::show'], [], [['text', '/events/show']], [], [], []],
    'App\Controller\GEventsController::update' => [['id'], ['_controller' => 'App\\Controller\\GEventsController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/events/update']], [], [], []],
    'App\Controller\GEventsController::delete' => [['id'], ['_controller' => 'App\\Controller\\GEventsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/events/delete']], [], [], []],
    'App\Controller\GEventsController::participate' => [['id'], ['_controller' => 'App\\Controller\\GEventsController::participate'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/events/participate']], [], [], []],
    'App\Controller\GEventsController::cancelParticipation' => [['id'], ['_controller' => 'App\\Controller\\GEventsController::cancelParticipation'], [], [['text', '/cancel'], ['variable', '/', '[^/]++', 'id', true], ['text', '/events']], [], [], []],
    'App\Controller\GRecrutementsController::show_all' => [[], ['_controller' => 'App\\Controller\\GRecrutementsController::show_all'], [], [['text', '/g/recrutements/dash']], [], [], []],
    'App\Controller\GRecrutementsController::show_alluser' => [[], ['_controller' => 'App\\Controller\\GRecrutementsController::show_alluser'], [], [['text', '/g/recrutements/']], [], [], []],
    'App\Controller\GRecrutementsController::authorDetails' => [['id'], ['_controller' => 'App\\Controller\\GRecrutementsController::authorDetails'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/g/recrutements/details']], [], [], []],
    'App\Controller\GRecrutementsController::authorDelete1' => [['id'], ['_controller' => 'App\\Controller\\GRecrutementsController::authorDelete1'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/g/recrutements/delete']], [], [], []],
    'App\Controller\GRecrutementsController::recruitmentAdd' => [[], ['_controller' => 'App\\Controller\\GRecrutementsController::recruitmentAdd'], [], [['text', '/g/recrutements/add']], [], [], []],
    'App\Controller\GRecrutementsController::edit' => [['id'], ['_controller' => 'App\\Controller\\GRecrutementsController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/g/recrutements/edit']], [], [], []],
    'App\Controller\GRecrutementsController::apply' => [['id'], ['_controller' => 'App\\Controller\\GRecrutementsController::apply'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/g/recrutements/apply']], [], [], []],
    'App\Controller\GRessourcesController::indexx' => [[], ['_controller' => 'App\\Controller\\GRessourcesController::index'], [], [['text', '/dashboard/ressources']], [], [], []],
    'App\Controller\GRessourcesController::indexxx' => [[], ['_controller' => 'App\\Controller\\GRessourcesController::indexxx'], [], [['text', '/g/ressourcess']], [], [], []],
    'App\Controller\GRessourcesController::new' => [[], ['_controller' => 'App\\Controller\\GRessourcesController::new'], [], [['text', '/dashboard/ressources/new']], [], [], []],
    'App\Controller\GRessourcesController::delete' => [['id'], ['_controller' => 'App\\Controller\\GRessourcesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/g/ressources/delete']], [], [], []],
    'App\Controller\GRessourcesController::confirmDelete' => [['id'], ['_controller' => 'App\\Controller\\GRessourcesController::confirmDelete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/g/ressources/delete/confirm']], [], [], []],
    'App\Controller\GRessourcesController::edit' => [['id'], ['_controller' => 'App\\Controller\\GRessourcesController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/g_ressources/backOffice/edit']], [], [], []],
    'App\Controller\GRessourcesController::demandeRessource' => [[], ['_controller' => 'App\\Controller\\GRessourcesController::demandeRessource'], [], [['text', '/g/ressources/demande']], [], [], []],
    'App\Controller\GUsersController::new' => [[], ['_controller' => 'App\\Controller\\GUsersController::new'], [], [['text', '/user/new']], [], [], []],
    'App\Controller\GUsersController::index' => [[], ['_controller' => 'App\\Controller\\GUsersController::index'], [], [['text', '/users']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\SecurityController::adminDashboard' => [[], ['_controller' => 'App\\Controller\\AdminController::dashboard'], [], [['text', '/admin/dashboard']], [], [], []],
    'App\Controller\AdminController::index' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin/']], [], [], []],
    'App\Controller\AdminController::dashboard' => [[], ['_controller' => 'App\\Controller\\AdminController::dashboard'], [], [['text', '/admin/dashboard']], [], [], []],
    'App\Controller\AdminController::add' => [[], ['_controller' => 'App\\Controller\\AdminController::add'], [], [['text', '/admin/event/add']], [], [], []],
];
