<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMauticUserBundleService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\UserBundle\MauticUserBundle' shared autowired service.
     *
     * @return \Mautic\UserBundle\MauticUserBundle
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\UserBundle\\MauticUserBundle'] = new \Mautic\UserBundle\MauticUserBundle();
    }
}