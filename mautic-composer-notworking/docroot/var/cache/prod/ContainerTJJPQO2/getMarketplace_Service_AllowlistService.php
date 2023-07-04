<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMarketplace_Service_AllowlistService extends AppKernelProdContainer
{
    /*
     * Gets the public 'marketplace.service.allowlist' shared service.
     *
     * @return \Mautic\MarketplaceBundle\Service\Allowlist
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['marketplace.service.allowlist'] = new \Mautic\MarketplaceBundle\Service\Allowlist(($container->services['marketplace.service.config'] ?? $container->getMarketplace_Service_ConfigService()), ($container->services['mautic.cache.provider'] ?? $container->getMautic_Cache_ProviderService()), ($container->services['mautic.http.client'] ?? ($container->services['mautic.http.client'] = new \GuzzleHttp\Client())));
    }
}
