<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Sms_Model_SmsService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.sms.model.sms' shared service.
     *
     * @return \Mautic\SmsBundle\Model\SmsModel
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.page.model.trackable'] ?? $container->getMautic_Page_Model_TrackableService());

        if (isset($container->services['mautic.sms.model.sms'])) {
            return $container->services['mautic.sms.model.sms'];
        }
        $b = ($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService());

        if (isset($container->services['mautic.sms.model.sms'])) {
            return $container->services['mautic.sms.model.sms'];
        }
        $c = ($container->services['mautic.channel.model.queue'] ?? $container->getMautic_Channel_Model_QueueService());

        if (isset($container->services['mautic.sms.model.sms'])) {
            return $container->services['mautic.sms.model.sms'];
        }
        $d = ($container->services['mautic.sms.transport_chain'] ?? $container->load('getMautic_Sms_TransportChainService'));

        if (isset($container->services['mautic.sms.model.sms'])) {
            return $container->services['mautic.sms.model.sms'];
        }
        $e = ($container->services['mautic.helper.cache_storage'] ?? $container->getMautic_Helper_CacheStorageService());

        if (isset($container->services['mautic.sms.model.sms'])) {
            return $container->services['mautic.sms.model.sms'];
        }

        $container->services['mautic.sms.model.sms'] = $instance = new \Mautic\SmsBundle\Model\SmsModel($a, $b, $c, $d, $e);

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
