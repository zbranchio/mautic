<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWidgetTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\DashboardBundle\Form\Type\WidgetType' shared autowired service.
     *
     * @return \Mautic\DashboardBundle\Form\Type\WidgetType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['Mautic\\DashboardBundle\\Form\\Type\\WidgetType'])) {
            return $container->services['Mautic\\DashboardBundle\\Form\\Type\\WidgetType'];
        }

        return $container->services['Mautic\\DashboardBundle\\Form\\Type\\WidgetType'] = new \Mautic\DashboardBundle\Form\Type\WidgetType($a, ($container->services['mautic.security'] ?? $container->getMautic_SecurityService()));
    }
}
