<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMauticChannelBundleService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ChannelBundle\MauticChannelBundle' shared autowired service.
     *
     * @return \Mautic\ChannelBundle\MauticChannelBundle
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ChannelBundle\\MauticChannelBundle'] = new \Mautic\ChannelBundle\MauticChannelBundle();
    }
}
