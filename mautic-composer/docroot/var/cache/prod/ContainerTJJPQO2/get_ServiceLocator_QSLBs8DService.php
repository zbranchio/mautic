<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QSLBs8DService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.QSLBs8D' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QSLBs8D'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'exportHelper' => ['services', 'mautic.helper.export', 'getMautic_Helper_ExportService', true],
        ], [
            'dispatcher' => '?',
            'exportHelper' => '?',
        ]);
    }
}
