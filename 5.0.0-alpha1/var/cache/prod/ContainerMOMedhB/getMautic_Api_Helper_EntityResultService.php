<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Api_Helper_EntityResultService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.api.helper.entity_result' shared service.
     *
     * @return \Mautic\ApiBundle\Helper\EntityResultHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.api.helper.entity_result'] = new \Mautic\ApiBundle\Helper\EntityResultHelper();
    }
}
