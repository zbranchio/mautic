<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardSubscriber2Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\EventListener\DashboardSubscriber' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\EventListener\DashboardSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.campaign.model.campaign'] ?? $container->getMautic_Campaign_Model_CampaignService());

        if (isset($container->services['Mautic\\CampaignBundle\\EventListener\\DashboardSubscriber'])) {
            return $container->services['Mautic\\CampaignBundle\\EventListener\\DashboardSubscriber'];
        }
        $b = ($container->services['mautic.campaign.model.event'] ?? $container->load('getMautic_Campaign_Model_EventService'));

        if (isset($container->services['Mautic\\CampaignBundle\\EventListener\\DashboardSubscriber'])) {
            return $container->services['Mautic\\CampaignBundle\\EventListener\\DashboardSubscriber'];
        }

        return $container->services['Mautic\\CampaignBundle\\EventListener\\DashboardSubscriber'] = new \Mautic\CampaignBundle\EventListener\DashboardSubscriber($a, $b);
    }
}