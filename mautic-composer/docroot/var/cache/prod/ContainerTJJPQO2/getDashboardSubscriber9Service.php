<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardSubscriber9Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PointBundle\EventListener\DashboardSubscriber' shared autowired service.
     *
     * @return \Mautic\PointBundle\EventListener\DashboardSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\PointBundle\\Model\\PointModel'] ?? $container->load('getPointModelService'));

        if (isset($container->services['Mautic\\PointBundle\\EventListener\\DashboardSubscriber'])) {
            return $container->services['Mautic\\PointBundle\\EventListener\\DashboardSubscriber'];
        }

        return $container->services['Mautic\\PointBundle\\EventListener\\DashboardSubscriber'] = new \Mautic\PointBundle\EventListener\DashboardSubscriber($a);
    }
}
