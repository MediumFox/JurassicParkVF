<?php

namespace ContainerUnd76hb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Cf3eNdkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cf3eNdk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cf3eNdk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'formatRepository' => ['privates', 'App\\Repository\\FormatChambreRepository', 'getFormatChambreRepositoryService', true],
        ], [
            'formatRepository' => 'App\\Repository\\FormatChambreRepository',
        ]);
    }
}
