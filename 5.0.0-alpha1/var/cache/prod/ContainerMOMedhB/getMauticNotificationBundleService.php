<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMauticNotificationBundleService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\NotificationBundle\MauticNotificationBundle' shared autowired service.
     *
     * @return \Mautic\NotificationBundle\MauticNotificationBundle
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\NotificationBundle\\MauticNotificationBundle'] = new \Mautic\NotificationBundle\MauticNotificationBundle();
    }
}
