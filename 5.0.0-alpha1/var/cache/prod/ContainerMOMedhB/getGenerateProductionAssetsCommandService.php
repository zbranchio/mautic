<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGenerateProductionAssetsCommandService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Command\GenerateProductionAssetsCommand' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Command\GenerateProductionAssetsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Command\\GenerateProductionAssetsCommand'] = new \Mautic\CoreBundle\Command\GenerateProductionAssetsCommand(($container->services['Mautic\\CoreBundle\\Helper\\AssetGenerationHelper'] ?? $container->getAssetGenerationHelperService()), ($container->services['mautic.helper.paths'] ?? $container->getMautic_Helper_PathsService()), ($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['mautic.filesystem'] ?? ($container->services['mautic.filesystem'] = new \Mautic\CoreBundle\Helper\Filesystem())));
    }
}
