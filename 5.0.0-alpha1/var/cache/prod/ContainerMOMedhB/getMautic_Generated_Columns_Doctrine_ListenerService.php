<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Generated_Columns_Doctrine_ListenerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.generated.columns.doctrine.listener' shared service.
     *
     * @return \Mautic\CoreBundle\EventListener\DoctrineGeneratedColumnsListener
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.generated.columns.provider'] ?? $container->getMautic_Generated_Columns_ProviderService());

        if (isset($container->services['mautic.generated.columns.doctrine.listener'])) {
            return $container->services['mautic.generated.columns.doctrine.listener'];
        }

        return $container->services['mautic.generated.columns.doctrine.listener'] = new \Mautic\CoreBundle\EventListener\DoctrineGeneratedColumnsListener($a, ($container->services['monolog.logger.mautic'] ?? $container->getMonolog_Logger_MauticService()));
    }
}
