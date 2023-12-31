<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReportWidgetTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ReportBundle\Form\Type\ReportWidgetType' shared autowired service.
     *
     * @return \Mautic\ReportBundle\Form\Type\ReportWidgetType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.report.model.report'] ?? $container->load('getMautic_Report_Model_ReportService'));

        if (isset($container->services['Mautic\\ReportBundle\\Form\\Type\\ReportWidgetType'])) {
            return $container->services['Mautic\\ReportBundle\\Form\\Type\\ReportWidgetType'];
        }

        return $container->services['Mautic\\ReportBundle\\Form\\Type\\ReportWidgetType'] = new \Mautic\ReportBundle\Form\Type\ReportWidgetType($a);
    }
}
