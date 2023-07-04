<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Notification_ApiService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.notification.api' shared service.
     *
     * @return \Mautic\NotificationBundle\Api\OneSignalApi
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\PageBundle\\Model\\TrackableModel'] ?? $container->getTrackableModelService());

        if (isset($container->services['mautic.notification.api'])) {
            return $container->services['mautic.notification.api'];
        }
        $b = ($container->services['mautic.helper.integration'] ?? $container->getMautic_Helper_IntegrationService());

        if (isset($container->services['mautic.notification.api'])) {
            return $container->services['mautic.notification.api'];
        }

        return $container->services['mautic.notification.api'] = new \Mautic\NotificationBundle\Api\OneSignalApi(($container->services['mautic.http.client'] ?? ($container->services['mautic.http.client'] = new \GuzzleHttp\Client())), $a, $b);
    }
}