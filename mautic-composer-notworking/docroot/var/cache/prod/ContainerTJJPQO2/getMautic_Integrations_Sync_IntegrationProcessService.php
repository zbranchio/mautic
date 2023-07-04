<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Integrations_Sync_IntegrationProcessService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.integrations.sync.integration_process' shared service.
     *
     * @return \Mautic\IntegrationsBundle\Sync\SyncProcess\Direction\Integration\IntegrationSyncProcess
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.integrations.sync.integration_process'] = new \Mautic\IntegrationsBundle\Sync\SyncProcess\Direction\Integration\IntegrationSyncProcess(($container->services['mautic.integrations.helper.sync_date'] ?? $container->load('getMautic_Integrations_Helper_SyncDateService')), ($container->services['mautic.integrations.helper.sync_mapping'] ?? $container->load('getMautic_Integrations_Helper_SyncMappingService')), ($container->services['mautic.integrations.sync.integration_process.object_change_generator'] ?? $container->load('getMautic_Integrations_Sync_IntegrationProcess_ObjectChangeGeneratorService')));
    }
}
