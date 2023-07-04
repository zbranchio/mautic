<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReloadCommandService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PluginBundle\Command\ReloadCommand' shared autowired service.
     *
     * @return \Mautic\PluginBundle\Command\ReloadCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\PluginBundle\\Command\\ReloadCommand'] = new \Mautic\PluginBundle\Command\ReloadCommand(($container->services['mautic.plugin.facade.reload'] ?? $container->load('getMautic_Plugin_Facade_ReloadService')));
    }
}
