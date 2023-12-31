<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCampaignSubscriber4Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\EventListener\CampaignSubscriber' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\EventListener\CampaignSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.core.model.auditlog'] ?? $container->getMautic_Core_Model_AuditlogService());

        if (isset($container->services['Mautic\\CampaignBundle\\EventListener\\CampaignSubscriber'])) {
            return $container->services['Mautic\\CampaignBundle\\EventListener\\CampaignSubscriber'];
        }
        $b = ($container->services['mautic.campaign.service.campaign'] ?? $container->load('getMautic_Campaign_Service_CampaignService'));

        if (isset($container->services['Mautic\\CampaignBundle\\EventListener\\CampaignSubscriber'])) {
            return $container->services['Mautic\\CampaignBundle\\EventListener\\CampaignSubscriber'];
        }
        $c = ($container->services['mautic.core.service.flashbag'] ?? $container->getMautic_Core_Service_FlashbagService());

        if (isset($container->services['Mautic\\CampaignBundle\\EventListener\\CampaignSubscriber'])) {
            return $container->services['Mautic\\CampaignBundle\\EventListener\\CampaignSubscriber'];
        }

        return $container->services['Mautic\\CampaignBundle\\EventListener\\CampaignSubscriber'] = new \Mautic\CampaignBundle\EventListener\CampaignSubscriber(($container->services['mautic.helper.ip_lookup'] ?? $container->getMautic_Helper_IpLookupService()), $a, $b, $c);
    }
}
