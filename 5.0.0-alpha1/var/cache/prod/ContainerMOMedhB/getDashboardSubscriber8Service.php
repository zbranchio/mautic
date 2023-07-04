<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardSubscriber8Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PageBundle\EventListener\DashboardSubscriber' shared autowired service.
     *
     * @return \Mautic\PageBundle\EventListener\DashboardSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.page.model.page'] ?? $container->getMautic_Page_Model_PageService());

        if (isset($container->services['Mautic\\PageBundle\\EventListener\\DashboardSubscriber'])) {
            return $container->services['Mautic\\PageBundle\\EventListener\\DashboardSubscriber'];
        }
        $b = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['Mautic\\PageBundle\\EventListener\\DashboardSubscriber'])) {
            return $container->services['Mautic\\PageBundle\\EventListener\\DashboardSubscriber'];
        }

        return $container->services['Mautic\\PageBundle\\EventListener\\DashboardSubscriber'] = new \Mautic\PageBundle\EventListener\DashboardSubscriber($a, $b);
    }
}