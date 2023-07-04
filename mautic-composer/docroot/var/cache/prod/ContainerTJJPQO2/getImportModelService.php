<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImportModelService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Model\ImportModel' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Model\ImportModel
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService());

        if (isset($container->services['Mautic\\LeadBundle\\Model\\ImportModel'])) {
            return $container->services['Mautic\\LeadBundle\\Model\\ImportModel'];
        }
        $b = ($container->services['Mautic\\CoreBundle\\Model\\NotificationModel'] ?? $container->getNotificationModelService());

        if (isset($container->services['Mautic\\LeadBundle\\Model\\ImportModel'])) {
            return $container->services['Mautic\\LeadBundle\\Model\\ImportModel'];
        }
        $c = ($container->services['Mautic\\LeadBundle\\Model\\CompanyModel'] ?? $container->getCompanyModelService());

        if (isset($container->services['Mautic\\LeadBundle\\Model\\ImportModel'])) {
            return $container->services['Mautic\\LeadBundle\\Model\\ImportModel'];
        }
        $d = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['Mautic\\LeadBundle\\Model\\ImportModel'])) {
            return $container->services['Mautic\\LeadBundle\\Model\\ImportModel'];
        }
        $e = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['Mautic\\LeadBundle\\Model\\ImportModel'])) {
            return $container->services['Mautic\\LeadBundle\\Model\\ImportModel'];
        }
        $f = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['Mautic\\LeadBundle\\Model\\ImportModel'])) {
            return $container->services['Mautic\\LeadBundle\\Model\\ImportModel'];
        }

        return $container->services['Mautic\\LeadBundle\\Model\\ImportModel'] = new \Mautic\LeadBundle\Model\ImportModel(($container->services['mautic.helper.paths'] ?? $container->getMautic_Helper_PathsService()), $a, $b, ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))), $c, $d, ($container->services['mautic.security'] ?? $container->getMautic_SecurityService()), $e, $f, ($container->services['Mautic\\CoreBundle\\Translation\\Translator'] ?? $container->getTranslatorService()), ($container->services['mautic.helper.user'] ?? $container->getMautic_Helper_UserService()), ($container->services['monolog.logger.mautic'] ?? $container->getMonolog_Logger_MauticService()));
    }
}