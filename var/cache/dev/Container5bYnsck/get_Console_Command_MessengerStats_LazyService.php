<?php

<<<<<<<< HEAD:var/cache/dev/Container5bYnsck/get_Console_Command_MessengerStats_LazyService.php
namespace Container5bYnsck;

========
namespace ContainerBg3qXMC;
>>>>>>>> 7b24a4db39587ab85a1972100e28e5aa92097661:var/cache/dev/ContainerBg3qXMC/get_Console_Command_MessengerStats_LazyService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_MessengerStats_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.messenger_stats.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.console.command.messenger_stats.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('messenger:stats', [], 'Show the message count for one or more transports', false, #[\Closure(name: 'console.command.messenger_stats', class: 'Symfony\\Component\\Messenger\\Command\\StatsCommand')] fn (): \Symfony\Component\Messenger\Command\StatsCommand => ($container->privates['console.command.messenger_stats'] ?? $container->load('getConsole_Command_MessengerStatsService')));
    }
}
