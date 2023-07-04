<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2y5WDqBService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.2y5WDqB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2y5WDqB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'slotsHelper' => ['services', 'Mautic\\CoreBundle\\Twig\\Helper\\SlotsHelper', 'getSlotsHelperService', false],
        ], [
            'slotsHelper' => 'Mautic\\CoreBundle\\Twig\\Helper\\SlotsHelper',
        ]);
    }
}