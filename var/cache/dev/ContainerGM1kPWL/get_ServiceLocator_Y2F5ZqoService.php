<?php

namespace ContainerGM1kPWL;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Y2F5ZqoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Y2F5Zqo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Y2F5Zqo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'event' => ['privates', '.errored..service_locator.Y2F5Zqo.App\\Entity\\Event', NULL, 'Cannot autowire service ".service_locator.Y2F5Zqo": it needs an instance of "App\\Entity\\Event" but this type has been excluded in "config/services.yaml".'],
        ], [
            'event' => 'App\\Entity\\Event',
        ]);
    }
}
