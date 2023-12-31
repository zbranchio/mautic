<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Dashboard_Model_DashboardService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.dashboard.model.dashboard' shared service.
     *
     * @return \Mautic\DashboardBundle\Model\DashboardModel
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container)));

        $container->services['mautic.dashboard.model.dashboard'] = $instance = new \Mautic\DashboardBundle\Model\DashboardModel($a, ($container->services['mautic.helper.paths'] ?? $container->getMautic_Helper_PathsService()), ($container->services['symfony.filesystem'] ?? ($container->services['symfony.filesystem'] = new \Symfony\Component\Filesystem\Filesystem())));

        $instance->setEntityManager(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
        $instance->setSecurity(($container->services['mautic.security'] ?? $container->getMautic_SecurityService()));
        $instance->setDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
        $instance->setTranslator(($container->services['translator'] ?? $container->getTranslator2Service()));
        $instance->setUserHelper(($container->services['mautic.helper.user'] ?? $container->getMautic_Helper_UserService()));
        $instance->setCoreParametersHelper($a);
        $instance->setRouter(($container->services['router'] ?? $container->getRouterService()));
        $instance->setLogger(($container->services['monolog.logger.mautic'] ?? $container->getMonolog_Logger_MauticService()));
        $instance->setSession(($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()));

        return $instance;
    }
}
