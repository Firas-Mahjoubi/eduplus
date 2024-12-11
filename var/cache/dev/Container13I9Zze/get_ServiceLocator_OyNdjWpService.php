<?php

namespace Container13I9Zze;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OyNdjWpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oyNdjWp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oyNdjWp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'clubRepository' => ['privates', 'App\\Repository\\ClubRepository', 'getClubRepositoryService', true],
            'commentaryRepository' => ['privates', 'App\\Repository\\CommentaryRepository', 'getCommentaryRepositoryService', true],
        ], [
            'clubRepository' => 'App\\Repository\\ClubRepository',
            'commentaryRepository' => 'App\\Repository\\CommentaryRepository',
        ]);
    }
}
