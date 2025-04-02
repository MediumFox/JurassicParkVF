<?php

namespace ContainerHvyxdw9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DXA_HService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dX_a._H' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dX_a._H'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'enclo' => ['privates', '.errored..service_locator.dX_a._H.App\\Entity\\Enclos', NULL, 'Cannot autowire service ".service_locator.dX_a._H": it needs an instance of "App\\Entity\\Enclos" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'enclo' => 'App\\Entity\\Enclos',
            'entityManager' => '?',
        ]);
    }
}
