<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaintainerCollectionService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\MarketplaceBundle\Collection\MaintainerCollection' shared autowired service.
     *
     * @return \Mautic\MarketplaceBundle\Collection\MaintainerCollection
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\MarketplaceBundle\\Collection\\MaintainerCollection'] = new \Mautic\MarketplaceBundle\Collection\MaintainerCollection();
    }
}
