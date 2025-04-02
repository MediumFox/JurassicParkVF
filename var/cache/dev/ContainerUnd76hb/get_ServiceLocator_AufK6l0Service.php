<?php

namespace ContainerUnd76hb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AufK6l0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aufK6l0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aufK6l0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'payerBilletRepository' => ['privates', 'App\\Repository\\PayerBilletRepository', 'getPayerBilletRepositoryService', true],
            'remboursementRepository' => ['privates', 'App\\Repository\\RemboursementRepository', 'getRemboursementRepositoryService', true],
        ], [
            'payerBilletRepository' => 'App\\Repository\\PayerBilletRepository',
            'remboursementRepository' => 'App\\Repository\\RemboursementRepository',
        ]);
    }
}
