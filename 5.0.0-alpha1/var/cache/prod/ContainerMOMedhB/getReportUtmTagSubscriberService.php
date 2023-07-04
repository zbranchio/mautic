<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReportUtmTagSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\EventListener\ReportUtmTagSubscriber' shared autowired service.
     *
     * @return \Mautic\LeadBundle\EventListener\ReportUtmTagSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\EventListener\\ReportUtmTagSubscriber'] = new \Mautic\LeadBundle\EventListener\ReportUtmTagSubscriber(($container->services['mautic.lead.reportbundle.fields_builder'] ?? $container->load('getMautic_Lead_Reportbundle_FieldsBuilderService')), ($container->services['mautic.lead.model.company_report_data'] ?? $container->load('getMautic_Lead_Model_CompanyReportDataService')));
    }
}
