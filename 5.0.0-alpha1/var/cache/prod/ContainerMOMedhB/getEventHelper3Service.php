<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEventHelper3Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\StageBundle\Helper\EventHelper' shared autowired service.
     *
     * @return \Mautic\StageBundle\Helper\EventHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\StageBundle\\Helper\\EventHelper'] = new \Mautic\StageBundle\Helper\EventHelper();
    }
}
