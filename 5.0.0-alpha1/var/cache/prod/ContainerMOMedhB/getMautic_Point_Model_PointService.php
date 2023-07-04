<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Point_Model_PointService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.point.model.point' shared service.
     *
     * @return \Mautic\PointBundle\Model\PointModel
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService());

        if (isset($container->services['mautic.point.model.point'])) {
            return $container->services['mautic.point.model.point'];
        }
        $b = ($container->services['mautic.tracker.contact'] ?? $container->getMautic_Tracker_ContactService());

        if (isset($container->services['mautic.point.model.point'])) {
            return $container->services['mautic.point.model.point'];
        }

        $container->services['mautic.point.model.point'] = $instance = new \Mautic\PointBundle\Model\PointModel(($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()), ($container->services['mautic.helper.ip_lookup'] ?? $container->getMautic_Helper_IpLookupService()), $a, ($container->services['Mautic\\CoreBundle\\Factory\\MauticFactory'] ?? $container->getMauticFactoryService()), $b);

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
