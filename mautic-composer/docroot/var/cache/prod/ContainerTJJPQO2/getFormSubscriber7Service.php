<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormSubscriber7Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PluginBundle\EventListener\FormSubscriber' shared autowired service.
     *
     * @return \Mautic\PluginBundle\EventListener\FormSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\PluginBundle\\EventListener\\FormSubscriber'] = new \Mautic\PluginBundle\EventListener\FormSubscriber();
    }
}