<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Report_Model_ReportFileWriterService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.report.model.report_file_writer' shared service.
     *
     * @return \Mautic\ReportBundle\Model\ReportFileWriter
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.report.model.report_file_writer'] = new \Mautic\ReportBundle\Model\ReportFileWriter(($container->services['mautic.report.model.csv_exporter'] ?? $container->load('getMautic_Report_Model_CsvExporterService')), ($container->services['mautic.report.model.export_handler'] ?? $container->load('getMautic_Report_Model_ExportHandlerService')));
    }
}
