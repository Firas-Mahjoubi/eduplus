<?php

<<<<<<<< HEAD:Project_clubs/var/cache/dev/ContainerBZ8G0F4/getMaker_FileLinkFormatterService.php
namespace ContainerBZ8G0F4;
========
namespace ContainerXaB92c1;
>>>>>>>> 0700c0c1e442bf75888e33af3dedb90bb9a908c5:Project_clubs/var/cache/dev/ContainerXaB92c1/getMaker_FileLinkFormatterService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_FileLinkFormatterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.file_link_formatter' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Util\MakerFileLinkFormatter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'MakerFileLinkFormatter.php';

        return $container->privates['maker.file_link_formatter'] = new \Symfony\Bundle\MakerBundle\Util\MakerFileLinkFormatter(($container->privates['debug.file_link_formatter'] ?? self::getDebug_FileLinkFormatterService($container)));
    }
}
