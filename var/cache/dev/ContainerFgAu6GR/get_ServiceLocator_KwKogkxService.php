<?php

namespace ContainerFgAu6GR;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KwKogkxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kwKogkx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kwKogkx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'clubRepository' => ['privates', '.errored..service_locator.kwKogkx.App\\Repository\\clubRepository', NULL, 'Cannot autowire service ".service_locator.kwKogkx": it references class "App\\Repository\\clubRepository" but no such service exists. Did you mean "App\\Repository\\ClubRepository"?'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'clubRepository' => 'App\\Repository\\clubRepository',
            'entityManager' => '?',
        ]);
    }
}
