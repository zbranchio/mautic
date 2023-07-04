<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Update_Step_InstallNewFilesService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.update.step.install_new_files' shared service.
     *
     * @return \Mautic\CoreBundle\Update\Step\InstallNewFilesStep
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.update.step.install_new_files'] = new \Mautic\CoreBundle\Update\Step\InstallNewFilesStep(($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['mautic.helper.update'] ?? $container->getMautic_Helper_UpdateService()), ($container->services['mautic.helper.paths'] ?? $container->getMautic_Helper_PathsService()));
    }
}
