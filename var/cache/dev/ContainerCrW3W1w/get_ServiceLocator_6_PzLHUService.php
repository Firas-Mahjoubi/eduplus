<?php

namespace ContainerCrW3W1w;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6_PzLHUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6.pzLHU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6.pzLHU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'applicationRepository' => ['privates', 'App\\Repository\\ApplicationRepository', 'getApplicationRepositoryService', true],
            'clubRepository' => ['privates', 'App\\Repository\\ClubRepository', 'getClubRepositoryService', true],
        ], [
            'applicationRepository' => 'App\\Repository\\ApplicationRepository',
            'clubRepository' => 'App\\Repository\\ClubRepository',
        ]);
    }
}
