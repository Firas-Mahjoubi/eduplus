<?php

<<<<<<<< HEAD:var/cache/dev/Container5bYnsck/get_Console_Command_MessengerStopWorkers_LazyService.php
namespace Container5bYnsck;

========
namespace ContainerBg3qXMC;
>>>>>>>> 7b24a4db39587ab85a1972100e28e5aa92097661:var/cache/dev/ContainerBg3qXMC/get_Console_Command_MessengerStopWorkers_LazyService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_MessengerStopWorkers_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.messenger_stop_workers.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.console.command.messenger_stop_workers.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('messenger:stop-workers', [], 'Stop workers after their current message', false, #[\Closure(name: 'console.command.messenger_stop_workers', class: 'Symfony\\Component\\Messenger\\Command\\StopWorkersCommand')] fn (): \Symfony\Component\Messenger\Command\StopWorkersCommand => ($container->privates['console.command.messenger_stop_workers'] ?? $container->load('getConsole_Command_MessengerStopWorkersService')));
    }
}
