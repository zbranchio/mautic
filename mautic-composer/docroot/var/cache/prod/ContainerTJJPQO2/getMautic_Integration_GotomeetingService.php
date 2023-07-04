<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Integration_GotomeetingService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.integration.gotomeeting' shared service.
     *
     * @return \MauticPlugin\MauticCitrixBundle\Integration\GotomeetingIntegration
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.integration.gotomeeting'] = new \MauticPlugin\MauticCitrixBundle\Integration\GotomeetingIntegration(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['mautic.helper.cache_storage'] ?? $container->getMautic_Helper_CacheStorageService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['router'] ?? $container->getRouterService()), ($container->services['translator'] ?? $container->getTranslator2Service()), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), ($container->services['mautic.helper.encryption'] ?? $container->getMautic_Helper_EncryptionService()), ($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService()), ($container->services['Mautic\\LeadBundle\\Model\\CompanyModel'] ?? $container->getCompanyModelService()), ($container->services['mautic.helper.paths'] ?? $container->getMautic_Helper_PathsService()), ($container->services['Mautic\\CoreBundle\\Model\\NotificationModel'] ?? $container->getNotificationModelService()), ($container->services['Mautic\\LeadBundle\\Model\\FieldModel'] ?? $container->getFieldModel2Service()), ($container->services['Mautic\\PluginBundle\\Model\\IntegrationEntityModel'] ?? $container->load('getIntegrationEntityModelService')), ($container->services['Mautic\\LeadBundle\\Model\\DoNotContact'] ?? $container->getDoNotContactService()));
    }
}
