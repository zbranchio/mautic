<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHardEvidenceService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\IntegrationsBundle\Sync\SyncJudge\Modes\HardEvidence' shared autowired service.
     *
     * @return \Mautic\IntegrationsBundle\Sync\SyncJudge\Modes\HardEvidence
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\IntegrationsBundle\\Sync\\SyncJudge\\Modes\\HardEvidence'] = new \Mautic\IntegrationsBundle\Sync\SyncJudge\Modes\HardEvidence();
    }
}