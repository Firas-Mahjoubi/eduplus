<?php

<<<<<<<< HEAD:var/cache/dev/Container5bYnsck/getSecurity_Listener_RememberMe_MainService.php
namespace Container5bYnsck;

========
namespace ContainerBg3qXMC;
>>>>>>>> 7b24a4db39587ab85a1972100e28e5aa92097661:var/cache/dev/ContainerBg3qXMC/getSecurity_Listener_RememberMe_MainService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_RememberMe_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.listener.remember_me.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\RememberMeListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'RememberMeListener.php';

        return $container->privates['security.listener.remember_me.main'] = new \Symfony\Component\Security\Http\EventListener\RememberMeListener(($container->privates['security.authenticator.remember_me_handler.main'] ?? $container->load('getSecurity_Authenticator_RememberMeHandler_MainService')), ($container->privates['monolog.logger.security'] ?? self::getMonolog_Logger_SecurityService($container)));
    }
}
