<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTrackingPixelHelperService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Helper\TrackingPixelHelper' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Helper\TrackingPixelHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Helper\\TrackingPixelHelper'] = new \Mautic\CoreBundle\Helper\TrackingPixelHelper();
    }
}