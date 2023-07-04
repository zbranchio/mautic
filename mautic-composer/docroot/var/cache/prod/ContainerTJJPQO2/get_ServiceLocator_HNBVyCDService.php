<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HNBVyCDService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.HNBVyCD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HNBVyCD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'segmentDependencyTreeFactory' => ['services', 'mautic.lead.service.segment_dependency_tree_factory', 'getMautic_Lead_Service_SegmentDependencyTreeFactoryService', true],
        ], [
            'segmentDependencyTreeFactory' => '?',
        ]);
    }
}
