<?php

namespace ContainerUSg4Jyc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_X5JG17_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.x5JG17.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.x5JG17.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'remboursementRepository' => ['privates', 'App\\Repository\\RemboursementRepository', 'getRemboursementRepositoryService', true],
        ], [
            'remboursementRepository' => 'App\\Repository\\RemboursementRepository',
        ]);
    }
}
