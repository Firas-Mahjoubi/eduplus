<?php

<<<<<<<< HEAD:var/cache/dev/Container5bYnsck/getMailer_TransportFactory_NullService.php
namespace Container5bYnsck;

========
namespace ContainerBg3qXMC;
>>>>>>>> 7b24a4db39587ab85a1972100e28e5aa92097661:var/cache/dev/ContainerBg3qXMC/getMailer_TransportFactory_NullService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailer_TransportFactory_NullService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'mailer.transport_factory.null' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\NullTransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mailer'.\DIRECTORY_SEPARATOR.'Transport'.\DIRECTORY_SEPARATOR.'TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mailer'.\DIRECTORY_SEPARATOR.'Transport'.\DIRECTORY_SEPARATOR.'AbstractTransportFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mailer'.\DIRECTORY_SEPARATOR.'Transport'.\DIRECTORY_SEPARATOR.'NullTransportFactory.php';

        $a = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['mailer.transport_factory.null'])) {
            return $container->privates['mailer.transport_factory.null'];
        }

        return $container->privates['mailer.transport_factory.null'] = new \Symfony\Component\Mailer\Transport\NullTransportFactory($a, ($container->privates['.debug.http_client'] ?? self::get_Debug_HttpClientService($container)), ($container->privates['monolog.logger.mailer'] ?? $container->load('getMonolog_Logger_MailerService')));
    }
}
