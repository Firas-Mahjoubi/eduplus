<?php

namespace ContainerUYT4tEs;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3m16UN4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3m16UN4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3m16UN4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\ApplicationController::submit' => ['privates', '.service_locator.xLj1diB', 'get_ServiceLocator_XLj1diBService', true],
            'App\\Controller\\GClubsController::acceptApplication' => ['privates', '.service_locator.Qclnwot', 'get_ServiceLocator_QclnwotService', true],
            'App\\Controller\\GClubsController::clubDetails' => ['privates', '.service_locator.eOJlB0r', 'get_ServiceLocator_EOJlB0rService', true],
            'App\\Controller\\GClubsController::delete' => ['privates', '.service_locator.eLmG6qh', 'get_ServiceLocator_ELmG6qhService', true],
            'App\\Controller\\GClubsController::edit' => ['privates', '.service_locator.eLmG6qh', 'get_ServiceLocator_ELmG6qhService', true],
            'App\\Controller\\GClubsController::index' => ['privates', '.service_locator.koawAmk', 'get_ServiceLocator_KoawAmkService', true],
            'App\\Controller\\GClubsController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GClubsController::rejectApplication' => ['privates', '.service_locator.Qclnwot', 'get_ServiceLocator_QclnwotService', true],
            'App\\Controller\\GClubsController::show' => ['privates', '.service_locator.eAaJ0X7', 'get_ServiceLocator_EAaJ0X7Service', true],
            'App\\Controller\\GClubsController::showClubApplications' => ['privates', '.service_locator.6.pzLHU', 'get_ServiceLocator_6_PzLHUService', true],
            'App\\Controller\\GEventsController::add' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GEventsController::delete' => ['privates', '.service_locator.dANsewa', 'get_ServiceLocator_DANsewaService', true],
            'App\\Controller\\GEventsController::index' => ['privates', '.service_locator.qE8Flyf', 'get_ServiceLocator_QE8FlyfService', true],
            'App\\Controller\\GEventsController::participate' => ['privates', '.service_locator.UItqPak', 'get_ServiceLocator_UItqPakService', true],
            'App\\Controller\\GEventsController::show' => ['privates', '.service_locator.qE8Flyf', 'get_ServiceLocator_QE8FlyfService', true],
            'App\\Controller\\GEventsController::update' => ['privates', '.service_locator.UItqPak', 'get_ServiceLocator_UItqPakService', true],
            'App\\Controller\\GRessourcesController::dashboard' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GRessourcesController::delete' => ['privates', '.service_locator.K7XrrNx', 'get_ServiceLocator_K7XrrNxService', true],
            'App\\Controller\\GRessourcesController::demandeRessource' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GRessourcesController::detailDemande' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GRessourcesController::edit' => ['privates', '.service_locator.K7XrrNx', 'get_ServiceLocator_K7XrrNxService', true],
            'App\\Controller\\GRessourcesController::editStatus' => ['privates', '.service_locator.h.QNgyW', 'get_ServiceLocator_H_QNgyWService', true],
            'App\\Controller\\GRessourcesController::fetchAllNotifications' => ['privates', '.service_locator.eD04aH.', 'get_ServiceLocator_ED04aH_Service', true],
            'App\\Controller\\GRessourcesController::fetchLatestNotifications' => ['privates', '.service_locator.eD04aH.', 'get_ServiceLocator_ED04aH_Service', true],
            'App\\Controller\\GRessourcesController::indexxx' => ['privates', '.service_locator.jgzxFbe', 'get_ServiceLocator_JgzxFbeService', true],
            'App\\Controller\\GRessourcesController::liveSearch' => ['privates', '.service_locator.jgzxFbe', 'get_ServiceLocator_JgzxFbeService', true],
            'App\\Controller\\GRessourcesController::markNotificationRead' => ['privates', '.service_locator.qza7_MB', 'get_ServiceLocator_Qza7MBService', true],
            'App\\Controller\\GUsersController::index' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GUsersController::new' => ['privates', '.service_locator.6fNvpDm', 'get_ServiceLocator_6fNvpDmService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.9raLMXz', 'get_ServiceLocator_9raLMXzService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.stWY4Dj', 'get_ServiceLocator_StWY4DjService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\ApplicationController:submit' => ['privates', '.service_locator.xLj1diB', 'get_ServiceLocator_XLj1diBService', true],
            'App\\Controller\\GClubsController:acceptApplication' => ['privates', '.service_locator.Qclnwot', 'get_ServiceLocator_QclnwotService', true],
            'App\\Controller\\GClubsController:clubDetails' => ['privates', '.service_locator.eOJlB0r', 'get_ServiceLocator_EOJlB0rService', true],
            'App\\Controller\\GClubsController:delete' => ['privates', '.service_locator.eLmG6qh', 'get_ServiceLocator_ELmG6qhService', true],
            'App\\Controller\\GClubsController:edit' => ['privates', '.service_locator.eLmG6qh', 'get_ServiceLocator_ELmG6qhService', true],
            'App\\Controller\\GClubsController:index' => ['privates', '.service_locator.koawAmk', 'get_ServiceLocator_KoawAmkService', true],
            'App\\Controller\\GClubsController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GClubsController:rejectApplication' => ['privates', '.service_locator.Qclnwot', 'get_ServiceLocator_QclnwotService', true],
            'App\\Controller\\GClubsController:show' => ['privates', '.service_locator.eAaJ0X7', 'get_ServiceLocator_EAaJ0X7Service', true],
            'App\\Controller\\GClubsController:showClubApplications' => ['privates', '.service_locator.6.pzLHU', 'get_ServiceLocator_6_PzLHUService', true],
            'App\\Controller\\GEventsController:add' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GEventsController:delete' => ['privates', '.service_locator.dANsewa', 'get_ServiceLocator_DANsewaService', true],
            'App\\Controller\\GEventsController:index' => ['privates', '.service_locator.qE8Flyf', 'get_ServiceLocator_QE8FlyfService', true],
            'App\\Controller\\GEventsController:participate' => ['privates', '.service_locator.UItqPak', 'get_ServiceLocator_UItqPakService', true],
            'App\\Controller\\GEventsController:show' => ['privates', '.service_locator.qE8Flyf', 'get_ServiceLocator_QE8FlyfService', true],
            'App\\Controller\\GEventsController:update' => ['privates', '.service_locator.UItqPak', 'get_ServiceLocator_UItqPakService', true],
            'App\\Controller\\GRessourcesController:dashboard' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GRessourcesController:delete' => ['privates', '.service_locator.K7XrrNx', 'get_ServiceLocator_K7XrrNxService', true],
            'App\\Controller\\GRessourcesController:demandeRessource' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GRessourcesController:detailDemande' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GRessourcesController:edit' => ['privates', '.service_locator.K7XrrNx', 'get_ServiceLocator_K7XrrNxService', true],
            'App\\Controller\\GRessourcesController:editStatus' => ['privates', '.service_locator.h.QNgyW', 'get_ServiceLocator_H_QNgyWService', true],
            'App\\Controller\\GRessourcesController:fetchAllNotifications' => ['privates', '.service_locator.eD04aH.', 'get_ServiceLocator_ED04aH_Service', true],
            'App\\Controller\\GRessourcesController:fetchLatestNotifications' => ['privates', '.service_locator.eD04aH.', 'get_ServiceLocator_ED04aH_Service', true],
            'App\\Controller\\GRessourcesController:indexxx' => ['privates', '.service_locator.jgzxFbe', 'get_ServiceLocator_JgzxFbeService', true],
            'App\\Controller\\GRessourcesController:liveSearch' => ['privates', '.service_locator.jgzxFbe', 'get_ServiceLocator_JgzxFbeService', true],
            'App\\Controller\\GRessourcesController:markNotificationRead' => ['privates', '.service_locator.qza7_MB', 'get_ServiceLocator_Qza7MBService', true],
            'App\\Controller\\GUsersController:index' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GUsersController:new' => ['privates', '.service_locator.6fNvpDm', 'get_ServiceLocator_6fNvpDmService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.9raLMXz', 'get_ServiceLocator_9raLMXzService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.stWY4Dj', 'get_ServiceLocator_StWY4DjService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\ApplicationController::submit' => '?',
            'App\\Controller\\GClubsController::acceptApplication' => '?',
            'App\\Controller\\GClubsController::clubDetails' => '?',
            'App\\Controller\\GClubsController::delete' => '?',
            'App\\Controller\\GClubsController::edit' => '?',
            'App\\Controller\\GClubsController::index' => '?',
            'App\\Controller\\GClubsController::new' => '?',
            'App\\Controller\\GClubsController::rejectApplication' => '?',
            'App\\Controller\\GClubsController::show' => '?',
            'App\\Controller\\GClubsController::showClubApplications' => '?',
            'App\\Controller\\GEventsController::add' => '?',
            'App\\Controller\\GEventsController::delete' => '?',
            'App\\Controller\\GEventsController::index' => '?',
            'App\\Controller\\GEventsController::participate' => '?',
            'App\\Controller\\GEventsController::show' => '?',
            'App\\Controller\\GEventsController::update' => '?',
            'App\\Controller\\GRessourcesController::dashboard' => '?',
            'App\\Controller\\GRessourcesController::delete' => '?',
            'App\\Controller\\GRessourcesController::demandeRessource' => '?',
            'App\\Controller\\GRessourcesController::detailDemande' => '?',
            'App\\Controller\\GRessourcesController::edit' => '?',
            'App\\Controller\\GRessourcesController::editStatus' => '?',
            'App\\Controller\\GRessourcesController::fetchAllNotifications' => '?',
            'App\\Controller\\GRessourcesController::fetchLatestNotifications' => '?',
            'App\\Controller\\GRessourcesController::indexxx' => '?',
            'App\\Controller\\GRessourcesController::liveSearch' => '?',
            'App\\Controller\\GRessourcesController::markNotificationRead' => '?',
            'App\\Controller\\GUsersController::index' => '?',
            'App\\Controller\\GUsersController::new' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ApplicationController:submit' => '?',
            'App\\Controller\\GClubsController:acceptApplication' => '?',
            'App\\Controller\\GClubsController:clubDetails' => '?',
            'App\\Controller\\GClubsController:delete' => '?',
            'App\\Controller\\GClubsController:edit' => '?',
            'App\\Controller\\GClubsController:index' => '?',
            'App\\Controller\\GClubsController:new' => '?',
            'App\\Controller\\GClubsController:rejectApplication' => '?',
            'App\\Controller\\GClubsController:show' => '?',
            'App\\Controller\\GClubsController:showClubApplications' => '?',
            'App\\Controller\\GEventsController:add' => '?',
            'App\\Controller\\GEventsController:delete' => '?',
            'App\\Controller\\GEventsController:index' => '?',
            'App\\Controller\\GEventsController:participate' => '?',
            'App\\Controller\\GEventsController:show' => '?',
            'App\\Controller\\GEventsController:update' => '?',
            'App\\Controller\\GRessourcesController:dashboard' => '?',
            'App\\Controller\\GRessourcesController:delete' => '?',
            'App\\Controller\\GRessourcesController:demandeRessource' => '?',
            'App\\Controller\\GRessourcesController:detailDemande' => '?',
            'App\\Controller\\GRessourcesController:edit' => '?',
            'App\\Controller\\GRessourcesController:editStatus' => '?',
            'App\\Controller\\GRessourcesController:fetchAllNotifications' => '?',
            'App\\Controller\\GRessourcesController:fetchLatestNotifications' => '?',
            'App\\Controller\\GRessourcesController:indexxx' => '?',
            'App\\Controller\\GRessourcesController:liveSearch' => '?',
            'App\\Controller\\GRessourcesController:markNotificationRead' => '?',
            'App\\Controller\\GUsersController:index' => '?',
            'App\\Controller\\GUsersController:new' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
