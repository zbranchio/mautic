<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Integrations_Sync_Notification_HelperUserNotificationService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.integrations.sync.notification.helper_user_notification' shared service.
     *
     * @return \Mautic\IntegrationsBundle\Sync\Notification\Helper\UserNotificationHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.integrations.sync.notification.helper_user_notification'] = new \Mautic\IntegrationsBundle\Sync\Notification\Helper\UserNotificationHelper(($container->services['mautic.integrations.sync.notification.writer'] ?? $container->load('getMautic_Integrations_Sync_Notification_WriterService')), ($container->services['mautic.integrations.sync.notification.user_notification_builder'] ?? $container->load('getMautic_Integrations_Sync_Notification_UserNotificationBuilderService')));
    }
}
