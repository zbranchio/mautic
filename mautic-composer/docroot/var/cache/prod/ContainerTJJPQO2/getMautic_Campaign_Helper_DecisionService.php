<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Campaign_Helper_DecisionService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.campaign.helper.decision' shared service.
     *
     * @return \Mautic\CampaignBundle\Executioner\Helper\DecisionHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.campaign.helper.decision'] = new \Mautic\CampaignBundle\Executioner\Helper\DecisionHelper(($container->services['mautic.campaign.repository.lead'] ?? $container->getMautic_Campaign_Repository_LeadService()));
    }
}