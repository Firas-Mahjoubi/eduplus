<?php

<<<<<<< HEAD:var/cache/dev/ContainerPXEjw9x/getApplicationControllerService.php
namespace ContainerPXEjw9x;

=======
<<<<<<<< HEAD:var/cache/dev/Container5bYnsck/getApplicationControllerService.php
namespace Container5bYnsck;

========
namespace ContainerBg3qXMC;
>>>>>>>> 7b24a4db39587ab85a1972100e28e5aa92097661:var/cache/dev/ContainerBg3qXMC/getApplicationControllerService.php
>>>>>>> 2acf55cd003850f9f9b822e41246069addbeb4cb:var/cache/dev/ContainerBg3qXMC/getApplicationControllerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApplicationControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ApplicationController' shared autowired service.
     *
     * @return \App\Controller\ApplicationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ApplicationController.php';

        $container->services['App\\Controller\\ApplicationController'] = $instance = new \App\Controller\ApplicationController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\ApplicationController', $container));

        return $instance;
    }
}
