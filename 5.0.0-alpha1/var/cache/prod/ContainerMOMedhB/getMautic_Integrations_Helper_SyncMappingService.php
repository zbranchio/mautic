<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Integrations_Helper_SyncMappingService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.integrations.helper.sync_mapping' shared service.
     *
     * @return \Mautic\IntegrationsBundle\Sync\Helper\MappingHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.integrations.helper.sync_mapping'] = new \Mautic\IntegrationsBundle\Sync\Helper\MappingHelper(($container->services['mautic.lead.model.field'] ?? $container->getMautic_Lead_Model_FieldService()), ($container->services['mautic.integrations.repository.object_mapping'] ?? $container->load('getMautic_Integrations_Repository_ObjectMappingService')), ($container->services['mautic.integrations.internal.object_provider'] ?? $container->load('getMautic_Integrations_Internal_ObjectProviderService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
