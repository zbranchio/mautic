<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTriggerCampaignCommandService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\Command\TriggerCampaignCommand' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\Command\TriggerCampaignCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CampaignBundle\\Command\\TriggerCampaignCommand'] = new \Mautic\CampaignBundle\Command\TriggerCampaignCommand(($container->services['Mautic\\CampaignBundle\\Entity\\CampaignRepository'] ?? $container->load('getCampaignRepositoryService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['mautic.campaign.executioner.kickoff'] ?? $container->load('getMautic_Campaign_Executioner_KickoffService')), ($container->services['mautic.campaign.executioner.scheduled'] ?? $container->load('getMautic_Campaign_Executioner_ScheduledService')), ($container->services['mautic.campaign.executioner.inactive'] ?? $container->load('getMautic_Campaign_Executioner_InactiveService')), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), ($container->services['mautic.helper.twig.formatter'] ?? $container->getMautic_Helper_Twig_FormatterService()), ($container->services['mautic.lead.model.list'] ?? $container->getMautic_Lead_Model_ListService()), ($container->services['mautic.helper.segment.count.cache'] ?? $container->getMautic_Helper_Segment_Count_CacheService()), ($container->services['mautic.helper.paths'] ?? $container->getMautic_Helper_PathsService()), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))));
    }
}
