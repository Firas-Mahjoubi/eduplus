<?php

<<<<<<<< HEAD:var/cache/dev/ContainerWS7VQJj/getRessourceTypeService.php
namespace ContainerWS7VQJj;
========
namespace ContainerNE8LIaj;
>>>>>>>> c833b8a74c735c5e13611c5fa5b159719b6f1d30:var/cache/dev/ContainerNE8LIaj/getRessourceTypeService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRessourceTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\RessourceType' shared autowired service.
     *
     * @return \App\Form\RessourceType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'RessourceType.php';

        return $container->privates['App\\Form\\RessourceType'] = new \App\Form\RessourceType();
    }
}
