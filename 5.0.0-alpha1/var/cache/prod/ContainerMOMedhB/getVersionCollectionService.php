<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVersionCollectionService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\MarketplaceBundle\Collection\VersionCollection' shared autowired service.
     *
     * @return \Mautic\MarketplaceBundle\Collection\VersionCollection
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\MarketplaceBundle\\Collection\\VersionCollection'] = new \Mautic\MarketplaceBundle\Collection\VersionCollection();
    }
}
