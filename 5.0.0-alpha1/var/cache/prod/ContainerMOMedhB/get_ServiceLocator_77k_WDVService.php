<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_77k_WDVService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.77k.WDV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.77k.WDV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doNotContact' => ['services', 'mautic.lead.model.dnc', 'getMautic_Lead_Model_DncService', false],
        ], [
            'doNotContact' => '?',
        ]);
    }
}
