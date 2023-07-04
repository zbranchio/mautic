<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Campaign_Helper_NotificationService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.campaign.helper.notification' shared service.
     *
     * @return \Mautic\CampaignBundle\Executioner\Helper\NotificationHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\UserBundle\\Model\\UserModel'] ?? $container->getUserModelService());

        if (isset($container->services['mautic.campaign.helper.notification'])) {
            return $container->services['mautic.campaign.helper.notification'];
        }
        $b = ($container->services['Mautic\\CoreBundle\\Model\\NotificationModel'] ?? $container->getNotificationModelService());

        if (isset($container->services['mautic.campaign.helper.notification'])) {
            return $container->services['mautic.campaign.helper.notification'];
        }
        $c = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['mautic.campaign.helper.notification'])) {
            return $container->services['mautic.campaign.helper.notification'];
        }

        return $container->services['mautic.campaign.helper.notification'] = new \Mautic\CampaignBundle\Executioner\Helper\NotificationHelper($a, $b, ($container->services['translator'] ?? $container->getTranslator2Service()), $c, ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))));
    }
}
