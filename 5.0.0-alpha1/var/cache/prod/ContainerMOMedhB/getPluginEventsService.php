<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPluginEventsService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PluginBundle\PluginEvents' shared autowired service.
     *
     * @return \Mautic\PluginBundle\PluginEvents
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\PluginBundle\\PluginEvents'] = new \Mautic\PluginBundle\PluginEvents();
    }
}