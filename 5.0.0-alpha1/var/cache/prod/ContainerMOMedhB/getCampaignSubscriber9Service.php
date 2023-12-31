<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCampaignSubscriber9Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\EventListener\CampaignSubscriber' shared autowired service.
     *
     * @return \Mautic\LeadBundle\EventListener\CampaignSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService());

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\CampaignSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\CampaignSubscriber'];
        }
        $b = ($container->services['mautic.lead.model.field'] ?? $container->getMautic_Lead_Model_FieldService());

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\CampaignSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\CampaignSubscriber'];
        }
        $c = ($container->services['mautic.lead.model.list'] ?? $container->getMautic_Lead_Model_ListService());

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\CampaignSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\CampaignSubscriber'];
        }
        $d = ($container->services['mautic.lead.model.company'] ?? $container->getMautic_Lead_Model_CompanyService());

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\CampaignSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\CampaignSubscriber'];
        }
        $e = ($container->services['mautic.campaign.model.campaign'] ?? $container->getMautic_Campaign_Model_CampaignService());

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\CampaignSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\CampaignSubscriber'];
        }

        return $container->services['Mautic\\LeadBundle\\EventListener\\CampaignSubscriber'] = new \Mautic\LeadBundle\EventListener\CampaignSubscriber(($container->services['mautic.helper.ip_lookup'] ?? $container->getMautic_Helper_IpLookupService()), $a, $b, $c, $d, $e, ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))), ($container->services['mautic.lead.model.dnc'] ?? $container->getMautic_Lead_Model_DncService()));
    }
}
