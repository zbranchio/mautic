<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardEventsService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\DashboardBundle\DashboardEvents' shared autowired service.
     *
     * @return \Mautic\DashboardBundle\DashboardEvents
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\DashboardBundle\\DashboardEvents'] = new \Mautic\DashboardBundle\DashboardEvents();
    }
}