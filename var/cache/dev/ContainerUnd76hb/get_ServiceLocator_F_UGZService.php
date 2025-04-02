<?php

namespace ContainerUnd76hb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_F_UGZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.F.u__GZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.F.u__GZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'jour' => ['privates', '.errored..service_locator.F.u__GZ.App\\Entity\\Jour', NULL, 'Cannot autowire service ".service_locator.F.u__GZ": it needs an instance of "App\\Entity\\Jour" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'jour' => 'App\\Entity\\Jour',
        ]);
    }
}
