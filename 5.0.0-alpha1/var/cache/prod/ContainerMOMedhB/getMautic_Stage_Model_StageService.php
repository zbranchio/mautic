<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Stage_Model_StageService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.stage.model.stage' shared service.
     *
     * @return \Mautic\StageBundle\Model\StageModel
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService());

        if (isset($container->services['mautic.stage.model.stage'])) {
            return $container->services['mautic.stage.model.stage'];
        }
        $b = ($container->services['mautic.helper.user'] ?? $container->getMautic_Helper_UserService());

        $container->services['mautic.stage.model.stage'] = $instance = new \Mautic\StageBundle\Model\StageModel($a, ($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()), $b);

        $instance->setEntityManager(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
        $instance->setSecurity(($container->services['mautic.security'] ?? $container->getMautic_SecurityService()));
        $instance->setDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
        $instance->setTranslator(($container->services['translator'] ?? $container->getTranslator2Service()));
        $instance->setUserHelper($b);
        $instance->setCoreParametersHelper(($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))));
        $instance->setRouter(($container->services['router'] ?? $container->getRouterService()));
        $instance->setLogger(($container->services['monolog.logger.mautic'] ?? $container->getMonolog_Logger_MauticService()));

        return $instance;
    }
}
