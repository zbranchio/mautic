<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChannelSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticSocialBundle\EventListener\ChannelSubscriber' shared autowired service.
     *
     * @return \MauticPlugin\MauticSocialBundle\EventListener\ChannelSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.helper.integration'] ?? $container->getMautic_Helper_IntegrationService());

        if (isset($container->services['MauticPlugin\\MauticSocialBundle\\EventListener\\ChannelSubscriber'])) {
            return $container->services['MauticPlugin\\MauticSocialBundle\\EventListener\\ChannelSubscriber'];
        }

        return $container->services['MauticPlugin\\MauticSocialBundle\\EventListener\\ChannelSubscriber'] = new \MauticPlugin\MauticSocialBundle\EventListener\ChannelSubscriber($a);
    }
}
