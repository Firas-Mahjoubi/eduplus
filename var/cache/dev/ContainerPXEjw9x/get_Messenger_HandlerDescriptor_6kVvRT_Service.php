<?php

<<<<<<< HEAD:var/cache/dev/ContainerPXEjw9x/get_Messenger_HandlerDescriptor_6kVvRT_Service.php
namespace ContainerPXEjw9x;

=======
<<<<<<<< HEAD:var/cache/dev/Container5bYnsck/get_Messenger_HandlerDescriptor_6kVvRT_Service.php
namespace Container5bYnsck;

========
namespace ContainerBg3qXMC;
>>>>>>>> 7b24a4db39587ab85a1972100e28e5aa92097661:var/cache/dev/ContainerBg3qXMC/get_Messenger_HandlerDescriptor_6kVvRT_Service.php
>>>>>>> 2acf55cd003850f9f9b822e41246069addbeb4cb:var/cache/dev/ContainerBg3qXMC/get_Messenger_HandlerDescriptor_6kVvRT_Service.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_6kVvRT_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.6kVvRT.' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-client'.\DIRECTORY_SEPARATOR.'Messenger'.\DIRECTORY_SEPARATOR.'PingWebhookMessageHandler.php';

        return $container->privates['.messenger.handler_descriptor.6kVvRT.'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \Symfony\Component\HttpClient\Messenger\PingWebhookMessageHandler(($container->privates['.debug.http_client'] ?? self::get_Debug_HttpClientService($container))), []);
    }
}
