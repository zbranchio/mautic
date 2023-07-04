<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebhookApiControllerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\WebhookBundle\Controller\Api\WebhookApiController' shared autowired service.
     *
     * @return \Mautic\WebhookBundle\Controller\Api\WebhookApiController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['Mautic\\WebhookBundle\\Controller\\Api\\WebhookApiController'] = $instance = new \Mautic\WebhookBundle\Controller\Api\WebhookApiController(($container->services['mautic.security'] ?? $container->getMautic_SecurityService()), ($container->services['Mautic\\CoreBundle\\Translation\\Translator'] ?? $container->getTranslatorService()), ($container->services['mautic.api.helper.entity_result'] ?? ($container->services['mautic.api.helper.entity_result'] = new \Mautic\ApiBundle\Helper\EntityResultHelper())), ($container->services['router'] ?? $container->getRouterService()), ($container->services['.container.private.form.factory'] ?? $container->get_Container_Private_Form_FactoryService()), ($container->services['mautic.helper.app_version'] ?? ($container->services['mautic.helper.app_version'] = new \Mautic\CoreBundle\Helper\AppVersion())), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->services['Mautic\\CoreBundle\\Factory\\ModelFactory'] ?? $container->getModelFactoryService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))), ($container->services['Mautic\\CoreBundle\\Factory\\MauticFactory'] ?? $container->getMauticFactoryService()));

        $instance->setContainer(($container->privates['.service_locator.u9KuSDP'] ?? $container->load('get_ServiceLocator_U9KuSDPService'))->withContext('Mautic\\WebhookBundle\\Controller\\Api\\WebhookApiController', $container));

        return $instance;
    }
}
