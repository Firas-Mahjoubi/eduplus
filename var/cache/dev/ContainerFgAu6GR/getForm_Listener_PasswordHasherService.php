<?php

<<<<<<<< HEAD:var/cache/dev/Container3qZku9y/getForm_Listener_PasswordHasherService.php
namespace Container3qZku9y;
========
namespace ContainerFgAu6GR;

>>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31:var/cache/dev/ContainerFgAu6GR/getForm_Listener_PasswordHasherService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_Listener_PasswordHasherService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.listener.password_hasher' shared service.
     *
     * @return \Symfony\Component\Form\Extension\PasswordHasher\EventListener\PasswordHasherListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'PasswordHasher'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'PasswordHasherListener.php';

        return $container->privates['form.listener.password_hasher'] = new \Symfony\Component\Form\Extension\PasswordHasher\EventListener\PasswordHasherListener(($container->privates['security.user_password_hasher'] ?? $container->load('getSecurity_UserPasswordHasherService')), ($container->privates['property_accessor'] ?? self::getPropertyAccessorService($container)));
    }
}
