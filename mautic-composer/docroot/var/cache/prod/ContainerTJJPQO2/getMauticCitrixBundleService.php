<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMauticCitrixBundleService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticCitrixBundle\MauticCitrixBundle' shared autowired service.
     *
     * @return \MauticPlugin\MauticCitrixBundle\MauticCitrixBundle
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['MauticPlugin\\MauticCitrixBundle\\MauticCitrixBundle'] = new \MauticPlugin\MauticCitrixBundle\MauticCitrixBundle();
    }
}
