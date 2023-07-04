<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChannelSubscriber4Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\NotificationBundle\EventListener\ChannelSubscriber' shared autowired service.
     *
     * @return \Mautic\NotificationBundle\EventListener\ChannelSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.helper.integration'] ?? $container->getMautic_Helper_IntegrationService());

        if (isset($container->services['Mautic\\NotificationBundle\\EventListener\\ChannelSubscriber'])) {
            return $container->services['Mautic\\NotificationBundle\\EventListener\\ChannelSubscriber'];
        }

        return $container->services['Mautic\\NotificationBundle\\EventListener\\ChannelSubscriber'] = new \Mautic\NotificationBundle\EventListener\ChannelSubscriber($a);
    }
}
