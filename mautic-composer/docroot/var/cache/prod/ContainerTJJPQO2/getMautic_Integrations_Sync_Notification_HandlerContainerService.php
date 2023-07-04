<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Integrations_Sync_Notification_HandlerContainerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.integrations.sync.notification.handler_container' shared service.
     *
     * @return \Mautic\IntegrationsBundle\Sync\Notification\Handler\HandlerContainer
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['mautic.integrations.sync.notification.handler_container'] = $instance = new \Mautic\IntegrationsBundle\Sync\Notification\Handler\HandlerContainer();

        $instance->registerHandler(($container->services['mautic.integrations.sync.notification.handler_company'] ?? $container->load('getMautic_Integrations_Sync_Notification_HandlerCompanyService')));
        $instance->registerHandler(($container->services['mautic.integrations.sync.notification.handler_contact'] ?? $container->load('getMautic_Integrations_Sync_Notification_HandlerContactService')));

        return $instance;
    }
}
