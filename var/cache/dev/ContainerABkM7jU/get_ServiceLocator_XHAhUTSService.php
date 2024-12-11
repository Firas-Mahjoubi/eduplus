<?php

namespace ContainerABkM7jU;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XHAhUTSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xHAhUTS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xHAhUTS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'csrfTokenManager' => ['privates', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'event' => ['privates', '.errored..service_locator.xHAhUTS.App\\Entity\\Event', NULL, 'Cannot autowire service ".service_locator.xHAhUTS": it needs an instance of "App\\Entity\\Event" but this type has been excluded in "config/services.yaml".'],
        ], [
            'csrfTokenManager' => '?',
            'entityManager' => '?',
            'event' => 'App\\Entity\\Event',
        ]);
    }
}
