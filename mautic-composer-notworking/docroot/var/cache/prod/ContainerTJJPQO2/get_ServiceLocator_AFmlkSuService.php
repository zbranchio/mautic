<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AFmlkSuService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.AFmlkSu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.AFmlkSu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'segmentCampaignShare' => ['services', 'mautic.lead.segment.stat.campaign.share', 'getMautic_Lead_Segment_Stat_Campaign_ShareService', true],
            'segmentDependencies' => ['services', 'mautic.lead.segment.stat.dependencies', 'getMautic_Lead_Segment_Stat_DependenciesService', true],
        ], [
            'segmentCampaignShare' => '?',
            'segmentDependencies' => '?',
        ]);
    }
}
