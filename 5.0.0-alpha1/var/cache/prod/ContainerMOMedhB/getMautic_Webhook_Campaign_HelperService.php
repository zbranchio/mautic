<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Webhook_Campaign_HelperService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.webhook.campaign.helper' shared service.
     *
     * @return \Mautic\WebhookBundle\Helper\CampaignHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.lead.model.company'] ?? $container->getMautic_Lead_Model_CompanyService());

        if (isset($container->services['mautic.webhook.campaign.helper'])) {
            return $container->services['mautic.webhook.campaign.helper'];
        }
        $b = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['mautic.webhook.campaign.helper'])) {
            return $container->services['mautic.webhook.campaign.helper'];
        }

        return $container->services['mautic.webhook.campaign.helper'] = new \Mautic\WebhookBundle\Helper\CampaignHelper(($container->services['mautic.http.client'] ?? ($container->services['mautic.http.client'] = new \GuzzleHttp\Client())), $a, $b);
    }
}
