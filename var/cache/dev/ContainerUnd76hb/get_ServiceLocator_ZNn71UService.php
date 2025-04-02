<?php

namespace ContainerUnd76hb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZNn71UService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zNn_71U' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zNn_71U'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'remboursement' => ['privates', '.errored..service_locator.zNn_71U.App\\Entity\\Remboursement', NULL, 'Cannot autowire service ".service_locator.zNn_71U": it needs an instance of "App\\Entity\\Remboursement" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'remboursement' => 'App\\Entity\\Remboursement',
        ]);
    }
}
