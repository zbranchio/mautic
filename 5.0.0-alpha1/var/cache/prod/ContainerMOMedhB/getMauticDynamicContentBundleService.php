<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMauticDynamicContentBundleService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\DynamicContentBundle\MauticDynamicContentBundle' shared autowired service.
     *
     * @return \Mautic\DynamicContentBundle\MauticDynamicContentBundle
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\DynamicContentBundle\\MauticDynamicContentBundle'] = new \Mautic\DynamicContentBundle\MauticDynamicContentBundle();
    }
}
