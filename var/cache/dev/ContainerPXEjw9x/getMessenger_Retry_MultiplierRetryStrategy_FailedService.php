<?php

<<<<<<< HEAD:var/cache/dev/ContainerPXEjw9x/getMessenger_Retry_MultiplierRetryStrategy_FailedService.php
namespace ContainerPXEjw9x;

=======
<<<<<<<< HEAD:var/cache/dev/Container5bYnsck/getMessenger_Retry_MultiplierRetryStrategy_FailedService.php
namespace Container5bYnsck;

========
namespace ContainerBg3qXMC;
>>>>>>>> 7b24a4db39587ab85a1972100e28e5aa92097661:var/cache/dev/ContainerBg3qXMC/getMessenger_Retry_MultiplierRetryStrategy_FailedService.php
>>>>>>> 2acf55cd003850f9f9b822e41246069addbeb4cb:var/cache/dev/ContainerBg3qXMC/getMessenger_Retry_MultiplierRetryStrategy_FailedService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Retry_MultiplierRetryStrategy_FailedService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.retry.multiplier_retry_strategy.failed' shared service.
     *
     * @return \Symfony\Component\Messenger\Retry\MultiplierRetryStrategy
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Retry'.\DIRECTORY_SEPARATOR.'RetryStrategyInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Retry'.\DIRECTORY_SEPARATOR.'MultiplierRetryStrategy.php';

        return $container->privates['messenger.retry.multiplier_retry_strategy.failed'] = new \Symfony\Component\Messenger\Retry\MultiplierRetryStrategy(3, 1000, 2, 0);
    }
}
