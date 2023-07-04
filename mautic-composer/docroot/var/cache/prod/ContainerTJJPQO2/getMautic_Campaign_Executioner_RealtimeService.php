<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Campaign_Executioner_RealtimeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.campaign.executioner.realtime' shared service.
     *
     * @return \Mautic\CampaignBundle\Executioner\RealTimeExecutioner
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService());

        if (isset($container->services['mautic.campaign.executioner.realtime'])) {
            return $container->services['mautic.campaign.executioner.realtime'];
        }
        $b = ($container->services['mautic.campaign.repository.event'] ?? $container->load('getMautic_Campaign_Repository_EventService'));

        if (isset($container->services['mautic.campaign.executioner.realtime'])) {
            return $container->services['mautic.campaign.executioner.realtime'];
        }
        $c = ($container->services['mautic.campaign.event_executioner'] ?? $container->load('getMautic_Campaign_EventExecutionerService'));

        if (isset($container->services['mautic.campaign.executioner.realtime'])) {
            return $container->services['mautic.campaign.executioner.realtime'];
        }
        $d = ($container->services['mautic.campaign.executioner.decision'] ?? $container->load('getMautic_Campaign_Executioner_DecisionService'));

        if (isset($container->services['mautic.campaign.executioner.realtime'])) {
            return $container->services['mautic.campaign.executioner.realtime'];
        }
        $e = ($container->services['mautic.campaign.event_collector'] ?? $container->getMautic_Campaign_EventCollectorService());

        if (isset($container->services['mautic.campaign.executioner.realtime'])) {
            return $container->services['mautic.campaign.executioner.realtime'];
        }
        $f = ($container->services['mautic.campaign.scheduler'] ?? $container->load('getMautic_Campaign_SchedulerService'));

        if (isset($container->services['mautic.campaign.executioner.realtime'])) {
            return $container->services['mautic.campaign.executioner.realtime'];
        }
        $g = ($container->services['mautic.tracker.contact'] ?? $container->getMautic_Tracker_ContactService());

        if (isset($container->services['mautic.campaign.executioner.realtime'])) {
            return $container->services['mautic.campaign.executioner.realtime'];
        }

        return $container->services['mautic.campaign.executioner.realtime'] = new \Mautic\CampaignBundle\Executioner\RealTimeExecutioner(($container->services['monolog.logger.mautic'] ?? $container->getMonolog_Logger_MauticService()), $a, $b, $c, $d, $e, $f, $g, ($container->services['mautic.campaign.helper.decision'] ?? $container->load('getMautic_Campaign_Helper_DecisionService')));
    }
}
