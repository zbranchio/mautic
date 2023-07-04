<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeadListSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticCrmBundle\EventListener\LeadListSubscriber' shared autowired service.
     *
     * @return \MauticPlugin\MauticCrmBundle\EventListener\LeadListSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.helper.integration'] ?? $container->getMautic_Helper_IntegrationService());

        if (isset($container->services['MauticPlugin\\MauticCrmBundle\\EventListener\\LeadListSubscriber'])) {
            return $container->services['MauticPlugin\\MauticCrmBundle\\EventListener\\LeadListSubscriber'];
        }
        $b = ($container->services['mautic.lead.model.list'] ?? $container->getMautic_Lead_Model_ListService());

        if (isset($container->services['MauticPlugin\\MauticCrmBundle\\EventListener\\LeadListSubscriber'])) {
            return $container->services['MauticPlugin\\MauticCrmBundle\\EventListener\\LeadListSubscriber'];
        }

        return $container->services['MauticPlugin\\MauticCrmBundle\\EventListener\\LeadListSubscriber'] = new \MauticPlugin\MauticCrmBundle\EventListener\LeadListSubscriber($a, $b, ($container->services['translator'] ?? $container->getTranslator2Service()));
    }
}
