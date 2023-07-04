<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Campaign_LegacyEventDispatcherService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.campaign.legacy_event_dispatcher' shared service.
     *
     * @return \Mautic\CampaignBundle\Executioner\Dispatcher\LegacyEventDispatcher
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['mautic.campaign.legacy_event_dispatcher'])) {
            return $container->services['mautic.campaign.legacy_event_dispatcher'];
        }
        $b = ($container->services['mautic.campaign.scheduler'] ?? $container->load('getMautic_Campaign_SchedulerService'));

        if (isset($container->services['mautic.campaign.legacy_event_dispatcher'])) {
            return $container->services['mautic.campaign.legacy_event_dispatcher'];
        }
        $c = ($container->services['mautic.tracker.contact'] ?? $container->getMautic_Tracker_ContactService());

        if (isset($container->services['mautic.campaign.legacy_event_dispatcher'])) {
            return $container->services['mautic.campaign.legacy_event_dispatcher'];
        }

        return $container->services['mautic.campaign.legacy_event_dispatcher'] = new \Mautic\CampaignBundle\Executioner\Dispatcher\LegacyEventDispatcher($a, $b, ($container->services['monolog.logger.mautic'] ?? $container->getMonolog_Logger_MauticService()), ($container->services['mautic.campaign.helper.notification'] ?? $container->load('getMautic_Campaign_Helper_NotificationService')), ($container->services['Mautic\\CoreBundle\\Factory\\MauticFactory'] ?? $container->getMauticFactoryService()), $c);
    }
}
