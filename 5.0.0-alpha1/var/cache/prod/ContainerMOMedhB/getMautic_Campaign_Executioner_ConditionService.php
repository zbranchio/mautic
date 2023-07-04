<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Campaign_Executioner_ConditionService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.campaign.executioner.condition' shared service.
     *
     * @return \Mautic\CampaignBundle\Executioner\Event\ConditionExecutioner
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.campaign.dispatcher.condition'] ?? $container->load('getMautic_Campaign_Dispatcher_ConditionService'));

        if (isset($container->services['mautic.campaign.executioner.condition'])) {
            return $container->services['mautic.campaign.executioner.condition'];
        }

        return $container->services['mautic.campaign.executioner.condition'] = new \Mautic\CampaignBundle\Executioner\Event\ConditionExecutioner($a);
    }
}
