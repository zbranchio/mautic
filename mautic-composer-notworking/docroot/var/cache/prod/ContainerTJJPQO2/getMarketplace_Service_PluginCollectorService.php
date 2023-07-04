<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMarketplace_Service_PluginCollectorService extends AppKernelProdContainer
{
    /*
     * Gets the public 'marketplace.service.plugin_collector' shared service.
     *
     * @return \Mautic\MarketplaceBundle\Service\PluginCollector
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['marketplace.service.plugin_collector'] = new \Mautic\MarketplaceBundle\Service\PluginCollector(($container->services['marketplace.api.connection'] ?? $container->load('getMarketplace_Api_ConnectionService')), ($container->services['marketplace.service.allowlist'] ?? $container->load('getMarketplace_Service_AllowlistService')));
    }
}
