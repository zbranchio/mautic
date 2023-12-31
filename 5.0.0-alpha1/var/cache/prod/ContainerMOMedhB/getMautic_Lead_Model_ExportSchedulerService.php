<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Lead_Model_ExportSchedulerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.lead.model.export_scheduler' shared service.
     *
     * @return \Mautic\LeadBundle\Model\ContactExportSchedulerModel
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService());

        if (isset($container->services['mautic.lead.model.export_scheduler'])) {
            return $container->services['mautic.lead.model.export_scheduler'];
        }
        $b = ($container->services['mautic.helper.mailer'] ?? $container->getMautic_Helper_MailerService());

        if (isset($container->services['mautic.lead.model.export_scheduler'])) {
            return $container->services['mautic.lead.model.export_scheduler'];
        }

        $container->services['mautic.lead.model.export_scheduler'] = $instance = new \Mautic\LeadBundle\Model\ContactExportSchedulerModel(($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), $a, ($container->services['mautic.helper.export'] ?? $container->load('getMautic_Helper_ExportService')), $b);

        $instance->setEntityManager(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
        $instance->setSecurity(($container->services['mautic.security'] ?? $container->getMautic_SecurityService()));
        $instance->setDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
        $instance->setTranslator(($container->services['translator'] ?? $container->getTranslator2Service()));
        $instance->setUserHelper(($container->services['mautic.helper.user'] ?? $container->getMautic_Helper_UserService()));
        $instance->setCoreParametersHelper(($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))));
        $instance->setRouter(($container->services['router'] ?? $container->getRouterService()));
        $instance->setLogger(($container->services['monolog.logger.mautic'] ?? $container->getMonolog_Logger_MauticService()));

        return $instance;
    }
}
