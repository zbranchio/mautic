<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Lead_Model_CompanyReportDataService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.lead.model.company_report_data' shared service.
     *
     * @return \Mautic\LeadBundle\Model\CompanyReportData
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.lead.model.field'] ?? $container->getMautic_Lead_Model_FieldService());

        if (isset($container->services['mautic.lead.model.company_report_data'])) {
            return $container->services['mautic.lead.model.company_report_data'];
        }

        return $container->services['mautic.lead.model.company_report_data'] = new \Mautic\LeadBundle\Model\CompanyReportData($a, ($container->services['translator'] ?? $container->getTranslator2Service()));
    }
}
