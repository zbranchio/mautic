<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Campaign_Helper_RemovedContactTrackerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.campaign.helper.removed_contact_tracker' shared service.
     *
     * @return \Mautic\CampaignBundle\Helper\RemovedContactTracker
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.campaign.helper.removed_contact_tracker'] = new \Mautic\CampaignBundle\Helper\RemovedContactTracker();
    }
}
