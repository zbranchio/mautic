<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMauticTagManagerBundleService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticTagManagerBundle\MauticTagManagerBundle' shared autowired service.
     *
     * @return \MauticPlugin\MauticTagManagerBundle\MauticTagManagerBundle
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['MauticPlugin\\MauticTagManagerBundle\\MauticTagManagerBundle'] = new \MauticPlugin\MauticTagManagerBundle\MauticTagManagerBundle();
    }
}
