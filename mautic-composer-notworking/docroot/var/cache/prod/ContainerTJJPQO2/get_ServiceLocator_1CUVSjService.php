<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1CUVSjService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.1_CUVSj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1_CUVSj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'integrationHelper' => ['services', 'mautic.helper.integration', 'getMautic_Helper_IntegrationService', false],
        ], [
            'integrationHelper' => '?',
        ]);
    }
}
