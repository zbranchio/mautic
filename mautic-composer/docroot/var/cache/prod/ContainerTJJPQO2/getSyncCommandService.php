<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSyncCommandService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticCitrixBundle\Command\SyncCommand' shared autowired service.
     *
     * @return \MauticPlugin\MauticCitrixBundle\Command\SyncCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['MauticPlugin\\MauticCitrixBundle\\Command\\SyncCommand'] = new \MauticPlugin\MauticCitrixBundle\Command\SyncCommand(($container->services['mautic.citrix.model.citrix'] ?? $container->load('getMautic_Citrix_Model_CitrixService')), ($container->services['mautic.helper.paths'] ?? $container->getMautic_Helper_PathsService()), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))));
    }
}