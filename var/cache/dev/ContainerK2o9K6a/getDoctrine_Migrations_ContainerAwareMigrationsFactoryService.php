<?php

<<<<<<<< HEAD:var/cache/dev/Container3qZku9y/getDoctrine_Migrations_ContainerAwareMigrationsFactoryService.php
namespace Container3qZku9y;
========
namespace ContainerK2o9K6a;

>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/ContainerK2o9K6a/getDoctrine_Migrations_ContainerAwareMigrationsFactoryService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Migrations_ContainerAwareMigrationsFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.migrations.container_aware_migrations_factory' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\MigrationsFactory\ContainerAwareMigrationFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Version'.\DIRECTORY_SEPARATOR.'MigrationFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-migrations-bundle'.\DIRECTORY_SEPARATOR.'MigrationsFactory'.\DIRECTORY_SEPARATOR.'ContainerAwareMigrationFactory.php';

        $a = ($container->privates['doctrine.migrations.dependency_factory'] ?? $container->load('getDoctrine_Migrations_DependencyFactoryService'));

        if (isset($container->privates['doctrine.migrations.container_aware_migrations_factory'])) {
            return $container->privates['doctrine.migrations.container_aware_migrations_factory'];
        }

        return $container->privates['doctrine.migrations.container_aware_migrations_factory'] = new \Doctrine\Bundle\MigrationsBundle\MigrationsFactory\ContainerAwareMigrationFactory($a->getMigrationFactory(), $container);
    }
}
