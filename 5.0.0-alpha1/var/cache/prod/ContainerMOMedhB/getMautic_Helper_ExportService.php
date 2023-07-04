<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Helper_ExportService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.helper.export' shared service.
     *
     * @return \Mautic\CoreBundle\Helper\ExportHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.helper.export'] = new \Mautic\CoreBundle\Helper\ExportHelper(($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))), ($container->services['mautic.helper.file_path_resolver'] ?? $container->getMautic_Helper_FilePathResolverService()));
    }
}
