<?php

namespace ContainerEMn3pBa;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_StWY4DjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.stWY4Dj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.stWY4Dj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'authenticationUtils' => ['privates', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'authenticationUtils' => '?',
            'security' => '?',
        ]);
    }
}
