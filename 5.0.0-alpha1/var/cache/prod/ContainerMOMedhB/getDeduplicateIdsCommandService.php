<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeduplicateIdsCommandService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Command\DeduplicateIdsCommand' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Command\DeduplicateIdsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Command\\DeduplicateIdsCommand'] = new \Mautic\LeadBundle\Command\DeduplicateIdsCommand(($container->services['mautic.lead.deduper'] ?? $container->load('getMautic_Lead_DeduperService')));
    }
}
