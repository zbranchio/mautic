<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPointActionHelper2Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\FormBundle\Helper\PointActionHelper' shared autowired service.
     *
     * @return \Mautic\FormBundle\Helper\PointActionHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\FormBundle\\Helper\\PointActionHelper'] = new \Mautic\FormBundle\Helper\PointActionHelper();
    }
}
