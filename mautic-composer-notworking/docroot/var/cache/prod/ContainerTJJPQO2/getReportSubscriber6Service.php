<?php

namespace ContainerTJJPQO2;

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
        $b = ($container->services['Mautic\\StageBundle\\Model\\StageModel'] ?? $container->load('getStageModelService'));

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\ReportSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\ReportSubscriber'];
        }
        $c = ($container->services['Mautic\\CampaignBundle\\Model\\CampaignModel'] ?? $container->getCampaignModelService());

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\ReportSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\ReportSubscriber'];
        }
        $d = ($container->services['mautic.campaign.event_collector'] ?? $container->getMautic_Campaign_EventCollectorService());

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\ReportSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\ReportSubscriber'];
        }
        $e = ($container->services['Mautic\\LeadBundle\\Model\\CompanyModel'] ?? $container->getCompanyModelService());

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\ReportSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\ReportSubscriber'];
        }

        return $container->services['Mautic\\LeadBundle\\EventListener\\ReportSubscriber'] = new \Mautic\LeadBundle\EventListener\ReportSubscriber($a, $b, $c, $d, $e, ($container->services['Mautic\\LeadBundle\\Model\\CompanyReportData'] ?? $container->load('getCompanyReportDataService')), ($container->services['mautic.lead.reportbundle.fields_builder'] ?? $container->load('getMautic_Lead_Reportbundle_FieldsBuilderService')), ($container->services['Mautic\\CoreBundle\\Translation\\Translator'] ?? $container->getTranslatorService()));
    }
}