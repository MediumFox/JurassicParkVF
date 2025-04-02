<?php

namespace ContainerUSg4Jyc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IXScfmaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.IXScfma' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IXScfma'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'file' => ['privates', '.errored..service_locator.IXScfma.Symfony\\Component\\HttpFoundation\\File\\UploadedFile', NULL, 'Cannot autowire service ".service_locator.IXScfma": it references class "Symfony\\Component\\HttpFoundation\\File\\UploadedFile" but no such service exists.'],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'file' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
            'slugger' => '?',
        ]);
    }
}
