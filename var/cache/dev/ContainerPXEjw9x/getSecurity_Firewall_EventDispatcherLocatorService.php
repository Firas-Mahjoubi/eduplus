<?php

<<<<<<< HEAD:var/cache/dev/ContainerPXEjw9x/getSecurity_Firewall_EventDispatcherLocatorService.php
namespace ContainerPXEjw9x;

=======
<<<<<<<< HEAD:var/cache/dev/Container5bYnsck/getSecurity_Firewall_EventDispatcherLocatorService.php
namespace Container5bYnsck;

========
namespace ContainerBg3qXMC;
>>>>>>>> 7b24a4db39587ab85a1972100e28e5aa92097661:var/cache/dev/ContainerBg3qXMC/getSecurity_Firewall_EventDispatcherLocatorService.php
>>>>>>> 2acf55cd003850f9f9b822e41246069addbeb4cb:var/cache/dev/ContainerBg3qXMC/getSecurity_Firewall_EventDispatcherLocatorService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_EventDispatcherLocatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.firewall.event_dispatcher_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.firewall.event_dispatcher_locator'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['main' => #[\Closure(name: 'debug.security.event_dispatcher.main', class: 'Symfony\\Component\\EventDispatcher\\Debug\\TraceableEventDispatcher')] fn () => ($container->privates['debug.security.event_dispatcher.main'] ?? self::getDebug_Security_EventDispatcher_MainService($container))]);
    }
}
