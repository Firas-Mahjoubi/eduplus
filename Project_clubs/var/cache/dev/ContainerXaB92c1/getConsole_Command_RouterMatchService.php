<?php

<<<<<<<< HEAD:Project_clubs/var/cache/dev/ContainerBZ8G0F4/getConsole_Command_RouterMatchService.php
namespace ContainerBZ8G0F4;
========
namespace ContainerXaB92c1;
>>>>>>>> 0700c0c1e442bf75888e33af3dedb90bb9a908c5:Project_clubs/var/cache/dev/ContainerXaB92c1/getConsole_Command_RouterMatchService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_RouterMatchService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.router_match' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'RouterMatchCommand.php';

        $container->privates['console.command.router_match'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand(($container->services['router'] ?? self::getRouterService($container)), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['router.expression_language_provider'] ?? self::getRouter_ExpressionLanguageProviderService($container));
        }, 1));

        $instance->setName('router:match');
        $instance->setDescription('Help debug routes by simulating a path info match');

        return $instance;
    }
}
