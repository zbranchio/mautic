<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Integrations_Helper_SyncJudgeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.integrations.helper.sync_judge' shared service.
     *
     * @return \Mautic\IntegrationsBundle\Sync\SyncJudge\SyncJudge
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.integrations.helper.sync_judge'] = new \Mautic\IntegrationsBundle\Sync\SyncJudge\SyncJudge();
    }
}
