<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Webhook_Model_WebhookService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.webhook.model.webhook' shared service.
     *
     * @return \Mautic\WebhookBundle\Model\WebhookModel
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['mautic.webhook.model.webhook'])) {
            return $container->services['mautic.webhook.model.webhook'];
        }
        $b = ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container)));

        $container->services['mautic.webhook.model.webhook'] = $instance = new \Mautic\WebhookBundle\Model\WebhookModel($b, ($container->services['jms_serializer'] ?? $container->load('getJmsSerializerService')), ($container->services['mautic.webhook.http.client'] ?? $container->load('getMautic_Webhook_Http_ClientService')), $a);

        $instance->setEntityManager(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
        $instance->setSecurity(($container->services['mautic.security'] ?? $container->getMautic_SecurityService()));
        $instance->setDispatcher($a);
        $instance->setTranslator(($container->services['translator'] ?? $container->getTranslator2Service()));
        $instance->setUserHelper(($container->services['mautic.helper.user'] ?? $container->getMautic_Helper_UserService()));
        $instance->setCoreParametersHelper($b);
        $instance->setRouter(($container->services['router'] ?? $container->getRouterService()));
        $instance->setLogger(($container->services['monolog.logger.mautic'] ?? $container->getMonolog_Logger_MauticService()));

        return $instance;
    }
}
