<?php

<<<<<<<< HEAD:var/cache/dev/ContainerWS7VQJj/get_ServiceLocator_QclnwotService.php
namespace ContainerWS7VQJj;
========
namespace ContainerNE8LIaj;
>>>>>>>> c833b8a74c735c5e13611c5fa5b159719b6f1d30:var/cache/dev/ContainerNE8LIaj/get_ServiceLocator_QclnwotService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QclnwotService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Qclnwot' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Qclnwot'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'applicationRepository' => ['privates', 'App\\Repository\\ApplicationRepository', 'getApplicationRepositoryService', true],
            'club' => ['privates', '.errored..service_locator.Qclnwot.App\\Entity\\Club', NULL, 'Cannot autowire service ".service_locator.Qclnwot": it needs an instance of "App\\Entity\\Club" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'applicationRepository' => 'App\\Repository\\ApplicationRepository',
            'club' => 'App\\Entity\\Club',
            'entityManager' => '?',
        ]);
    }
}
