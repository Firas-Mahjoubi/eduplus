<?php

<<<<<<<< HEAD:Project_clubs/var/cache/dev/ContainerBZ8G0F4/getTwig_Form_RendererService.php
namespace ContainerBZ8G0F4;
========
namespace ContainerXaB92c1;
>>>>>>>> 0700c0c1e442bf75888e33af3dedb90bb9a908c5:Project_clubs/var/cache/dev/ContainerXaB92c1/getTwig_Form_RendererService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_Form_RendererService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'twig.form.renderer' shared service.
     *
     * @return \Symfony\Component\Form\FormRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRendererInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRenderer.php';

        $a = ($container->privates['twig.form.engine'] ?? $container->load('getTwig_Form_EngineService'));

        if (isset($container->privates['twig.form.renderer'])) {
            return $container->privates['twig.form.renderer'];
        }

        return $container->privates['twig.form.renderer'] = new \Symfony\Component\Form\FormRenderer($a, ($container->privates['security.csrf.token_manager'] ?? $container->load('getSecurity_Csrf_TokenManagerService')));
    }
}
