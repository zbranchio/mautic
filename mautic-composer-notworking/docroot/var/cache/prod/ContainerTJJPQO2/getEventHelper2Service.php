<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEventHelper2Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PointBundle\Helper\EventHelper' shared autowired service.
     *
     * @return \Mautic\PointBundle\Helper\EventHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\PointBundle\\Helper\\EventHelper'] = new \Mautic\PointBundle\Helper\EventHelper();
    }
}
