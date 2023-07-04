<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Update_Step_RemoveDeletedFilesService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.update.step.remove_deleted_files' shared service.
     *
     * @return \Mautic\CoreBundle\Update\Step\RemoveDeletedFilesStep
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.update.step.remove_deleted_files'] = new \Mautic\CoreBundle\Update\Step\RemoveDeletedFilesStep(($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['mautic.helper.paths'] ?? $container->getMautic_Helper_PathsService()), ($container->services['monolog.logger.mautic'] ?? $container->getMonolog_Logger_MauticService()));
    }
}