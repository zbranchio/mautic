<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9aQ3t8rService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.9aQ3t8r' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9aQ3t8r'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'assetsHelper' => ['services', 'Mautic\\CoreBundle\\Twig\\Helper\\AssetsHelper', 'getAssetsHelperService', false],
            'formFactory' => ['services', '.container.private.form.factory', 'get_Container_Private_Form_FactoryService', false],
            'mauticLogger' => ['services', 'monolog.logger.mautic', 'getMonolog_Logger_MauticService', false],
            'slotsHelper' => ['services', 'Mautic\\CoreBundle\\Twig\\Helper\\SlotsHelper', 'getSlotsHelperService', false],
            'themeHelper' => ['services', 'mautic.helper.theme', 'getMautic_Helper_ThemeService', false],
        ], [
            'assetsHelper' => 'Mautic\\CoreBundle\\Twig\\Helper\\AssetsHelper',
            'formFactory' => '?',
            'mauticLogger' => '?',
            'slotsHelper' => 'Mautic\\CoreBundle\\Twig\\Helper\\SlotsHelper',
            'themeHelper' => '?',
        ]);
    }
}