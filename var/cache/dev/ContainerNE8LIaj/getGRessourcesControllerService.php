<?php

<<<<<<<< HEAD:var/cache/dev/ContainerWS7VQJj/getGRessourcesControllerService.php
namespace ContainerWS7VQJj;
========
namespace ContainerNE8LIaj;
>>>>>>>> c833b8a74c735c5e13611c5fa5b159719b6f1d30:var/cache/dev/ContainerNE8LIaj/getGRessourcesControllerService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGRessourcesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\GRessourcesController' shared autowired service.
     *
     * @return \App\Controller\GRessourcesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'GRessourcesController.php';

        $container->services['App\\Controller\\GRessourcesController'] = $instance = new \App\Controller\GRessourcesController(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\GRessourcesController', $container));

        return $instance;
    }
}
