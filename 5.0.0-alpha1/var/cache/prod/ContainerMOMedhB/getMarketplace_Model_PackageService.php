<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMarketplace_Model_PackageService extends AppKernelProdContainer
{
    /*
     * Gets the public 'marketplace.model.package' shared service.
     *
     * @return \Mautic\MarketplaceBundle\Model\PackageModel
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['marketplace.model.package'] = new \Mautic\MarketplaceBundle\Model\PackageModel(($container->services['marketplace.api.connection'] ?? $container->load('getMarketplace_Api_ConnectionService')), ($container->services['marketplace.service.allowlist'] ?? $container->load('getMarketplace_Service_AllowlistService')));
    }
}