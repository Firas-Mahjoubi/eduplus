<?php

<<<<<<<< HEAD:var/cache/dev/Container5bYnsck/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaListenerService.php
namespace Container5bYnsck;

========
namespace ContainerBg3qXMC;
>>>>>>>> 7b24a4db39587ab85a1972100e28e5aa92097661:var/cache/dev/ContainerBg3qXMC/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaListenerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.orm.listeners.doctrine_token_provider_schema_listener' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'SchemaListener'.\DIRECTORY_SEPARATOR.'AbstractSchemaListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'SchemaListener'.\DIRECTORY_SEPARATOR.'RememberMeTokenProviderDoctrineSchemaListener.php';

        return $container->privates['doctrine.orm.listeners.doctrine_token_provider_schema_listener'] = new \Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaListener(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.authenticator.remember_me_handler.main'] ?? $container->load('getSecurity_Authenticator_RememberMeHandler_MainService'));
        }, 1));
    }
}
