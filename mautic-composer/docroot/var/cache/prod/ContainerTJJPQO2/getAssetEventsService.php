<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetEventsService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\AssetBundle\AssetEvents' shared autowired service.
     *
     * @return \Mautic\AssetBundle\AssetEvents
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\AssetBundle\\AssetEvents'] = new \Mautic\AssetBundle\AssetEvents();
    }
}