<?php

<<<<<<< HEAD:var/cache/dev/ContainerPXEjw9x/get_ServiceLocator_JgzxFbeService.php
namespace ContainerPXEjw9x;

=======
<<<<<<<< HEAD:var/cache/dev/Container5bYnsck/get_ServiceLocator_JgzxFbeService.php
namespace Container5bYnsck;

========
namespace ContainerBg3qXMC;
>>>>>>>> 7b24a4db39587ab85a1972100e28e5aa92097661:var/cache/dev/ContainerBg3qXMC/get_ServiceLocator_JgzxFbeService.php
>>>>>>> 2acf55cd003850f9f9b822e41246069addbeb4cb:var/cache/dev/ContainerBg3qXMC/get_ServiceLocator_JgzxFbeService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JgzxFbeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jgzxFbe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jgzxFbe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'ressourceRepository' => ['privates', 'App\\Repository\\RessourcesRepository', 'getRessourcesRepositoryService', true],
        ], [
            'ressourceRepository' => 'App\\Repository\\RessourcesRepository',
        ]);
    }
}
