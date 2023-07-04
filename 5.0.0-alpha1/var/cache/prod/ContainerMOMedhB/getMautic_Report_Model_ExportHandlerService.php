<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Report_Model_ExportHandlerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.report.model.export_handler' shared service.
     *
     * @return \Mautic\ReportBundle\Model\ExportHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.report.model.export_handler'] = new \Mautic\ReportBundle\Model\ExportHandler(($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))), ($container->services['mautic.helper.file_path_resolver'] ?? $container->getMautic_Helper_FilePathResolverService()));
    }
}