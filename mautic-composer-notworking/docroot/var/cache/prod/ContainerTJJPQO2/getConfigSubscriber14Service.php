<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConfigSubscriber14Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\UserBundle\EventListener\ConfigSubscriber' shared autowired service.
     *
     * @return \Mautic\UserBundle\EventListener\ConfigSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\UserBundle\\EventListener\\ConfigSubscriber'] = new \Mautic\UserBundle\EventListener\ConfigSubscriber();
    }
}