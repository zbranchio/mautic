<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMauticGmailBundleService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticGmailBundle\MauticGmailBundle' shared autowired service.
     *
     * @return \MauticPlugin\MauticGmailBundle\MauticGmailBundle
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['MauticPlugin\\MauticGmailBundle\\MauticGmailBundle'] = new \MauticPlugin\MauticGmailBundle\MauticGmailBundle();
    }
}
