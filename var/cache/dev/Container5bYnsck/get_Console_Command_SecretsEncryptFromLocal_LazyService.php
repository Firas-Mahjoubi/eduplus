<?php

<<<<<<<< HEAD:var/cache/dev/Container5bYnsck/get_Console_Command_SecretsEncryptFromLocal_LazyService.php
namespace Container5bYnsck;

========
namespace ContainerBg3qXMC;
>>>>>>>> 7b24a4db39587ab85a1972100e28e5aa92097661:var/cache/dev/ContainerBg3qXMC/get_Console_Command_SecretsEncryptFromLocal_LazyService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_SecretsEncryptFromLocal_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.secrets_encrypt_from_local.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.console.command.secrets_encrypt_from_local.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('secrets:encrypt-from-local', [], 'Encrypt all local secrets to the vault', false, #[\Closure(name: 'console.command.secrets_encrypt_from_local', class: 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsEncryptFromLocalCommand')] fn (): \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand => ($container->privates['console.command.secrets_encrypt_from_local'] ?? $container->load('getConsole_Command_SecretsEncryptFromLocalService')));
    }
}
