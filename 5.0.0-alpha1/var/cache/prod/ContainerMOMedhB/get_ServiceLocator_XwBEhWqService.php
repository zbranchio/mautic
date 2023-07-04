<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XwBEhWqService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.XwBEhWq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XwBEhWq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ipLookupHelper' => ['services', 'mautic.helper.ip_lookup', 'getMautic_Helper_IpLookupService', false],
            'model' => ['services', 'mautic.social.model.monitoring', 'getMautic_Social_Model_MonitoringService', true],
        ], [
            'ipLookupHelper' => '?',
            'model' => '?',
        ]);
    }
}
