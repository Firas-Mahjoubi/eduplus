<?php

<<<<<<< HEAD:var/cache/dev/ContainerPXEjw9x/get_ServiceLocator_Q2iM02ZService.php
namespace ContainerPXEjw9x;

=======
<<<<<<<< HEAD:var/cache/dev/Container5bYnsck/get_ServiceLocator_Q2iM02ZService.php
namespace Container5bYnsck;

========
namespace ContainerBg3qXMC;
>>>>>>>> 7b24a4db39587ab85a1972100e28e5aa92097661:var/cache/dev/ContainerBg3qXMC/get_ServiceLocator_Q2iM02ZService.php
>>>>>>> 2acf55cd003850f9f9b822e41246069addbeb4cb:var/cache/dev/ContainerBg3qXMC/get_ServiceLocator_Q2iM02ZService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Q2iM02ZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.q2iM02Z' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.q2iM02Z'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'repo' => ['privates', 'App\\Repository\\RecruitmentRepository', 'getRecruitmentRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\RecruitmentRepository',
        ]);
    }
}
