<?php

<<<<<<<< HEAD:Project_clubs/var/cache/dev/ContainerPVouLNZ/getMonolog_Logger_MailerService.php
namespace ContainerPVouLNZ;
========
namespace ContainerApeXifR;
>>>>>>>> 0700c0c1e442bf75888e33af3dedb90bb9a908c5:Project_clubs/var/cache/dev/ContainerApeXifR/getMonolog_Logger_MailerService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMonolog_Logger_MailerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'monolog.logger.mailer' shared service.
     *
     * @return \Monolog\Logger
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['monolog.logger.mailer'] = $instance = new \Monolog\Logger('mailer');

        $instance->pushHandler(($container->privates['monolog.handler.console'] ?? self::getMonolog_Handler_ConsoleService($container)));
        $instance->pushHandler(($container->privates['monolog.handler.main'] ?? self::getMonolog_Handler_MainService($container)));
        ($container->privates['debug.debug_logger_configurator'] ?? self::getDebug_DebugLoggerConfiguratorService($container))->pushDebugLogger($instance);

        return $instance;
    }
}
