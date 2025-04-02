<?php

namespace ContainerUSg4Jyc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5w3tvi_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5w3tvi.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5w3tvi.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'formatChambre' => ['privates', '.errored..service_locator.5w3tvi..App\\Entity\\FormatChambre', NULL, 'Cannot autowire service ".service_locator.5w3tvi.": it needs an instance of "App\\Entity\\FormatChambre" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'formatChambre' => 'App\\Entity\\FormatChambre',
        ]);
    }
}
