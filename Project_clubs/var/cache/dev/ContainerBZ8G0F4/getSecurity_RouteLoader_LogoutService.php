<?php

<<<<<<<< HEAD:Project_clubs/var/cache/dev/ContainerBZ8G0F4/getSecurity_RouteLoader_LogoutService.php
namespace ContainerBZ8G0F4;
========
namespace ContainerXaB92c1;
>>>>>>>> 0700c0c1e442bf75888e33af3dedb90bb9a908c5:Project_clubs/var/cache/dev/ContainerXaB92c1/getSecurity_RouteLoader_LogoutService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_RouteLoader_LogoutService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.route_loader.logout' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Routing\LogoutRouteLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'LogoutRouteLoader.php';

        return $container->privates['security.route_loader.logout'] = new \Symfony\Bundle\SecurityBundle\Routing\LogoutRouteLoader([], 'security.logout_uris');
    }
}
