<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Integration_Amazons3Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.integration.amazons3' shared service.
     *
     * @return \MauticPlugin\MauticCloudStorageBundle\Integration\AmazonS3Integration
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.integration.amazons3'] = new \MauticPlugin\MauticCloudStorageBundle\Integration\AmazonS3Integration(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['mautic.helper.cache_storage'] ?? $container->getMautic_Helper_CacheStorageService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['router'] ?? $container->getRouterService()), ($container->services['translator'] ?? $container->getTranslator2Service()), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), ($container->services['mautic.helper.encryption'] ?? $container->getMautic_Helper_EncryptionService()), ($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService()), ($container->services['mautic.lead.model.company'] ?? $container->getMautic_Lead_Model_CompanyService()), ($container->services['mautic.helper.paths'] ?? $container->getMautic_Helper_PathsService()), ($container->services['mautic.core.model.notification'] ?? $container->getMautic_Core_Model_NotificationService()), ($container->services['mautic.lead.model.field'] ?? $container->getMautic_Lead_Model_FieldService()), ($container->services['mautic.plugin.model.integration_entity'] ?? $container->load('getMautic_Plugin_Model_IntegrationEntityService')), ($container->services['mautic.lead.model.dnc'] ?? $container->getMautic_Lead_Model_DncService()));
    }
}
