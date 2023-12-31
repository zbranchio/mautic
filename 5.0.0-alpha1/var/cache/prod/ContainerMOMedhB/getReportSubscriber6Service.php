<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReportSubscriber6Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\EventListener\ReportSubscriber' shared autowired service.
     *
     * @return \Mautic\LeadBundle\EventListener\ReportSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService());

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\ReportSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\ReportSubscriber'];
        }
        $b = ($container->services['mautic.stage.model.stage'] ?? $container->load('getMautic_Stage_Model_StageService'));

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\ReportSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\ReportSubscriber'];
        }
        $c = ($container->services['mautic.campaign.model.campaign'] ?? $container->getMautic_Campaign_Model_CampaignService());

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\ReportSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\ReportSubscriber'];
        }
        $d = ($container->services['mautic.campaign.event_collector'] ?? $container->getMautic_Campaign_EventCollectorService());

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\ReportSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\ReportSubscriber'];
        }
        $e = ($container->services['mautic.lead.model.company'] ?? $container->getMautic_Lead_Model_CompanyService());

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\ReportSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\ReportSubscriber'];
        }

        return $container->services['Mautic\\LeadBundle\\EventListener\\ReportSubscriber'] = new \Mautic\LeadBundle\EventListener\ReportSubscriber($a, $b, $c, $d, $e, ($container->services['mautic.lead.model.company_report_data'] ?? $container->load('getMautic_Lead_Model_CompanyReportDataService')), ($container->services['mautic.lead.reportbundle.fields_builder'] ?? $container->load('getMautic_Lead_Reportbundle_FieldsBuilderService')), ($container->services['Mautic\\CoreBundle\\Translation\\Translator'] ?? $container->getTranslatorService()));
    }
}
