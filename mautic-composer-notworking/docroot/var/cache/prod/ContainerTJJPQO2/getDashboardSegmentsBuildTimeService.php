<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardSegmentsBuildTimeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Form\Type\DashboardSegmentsBuildTime' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Form\Type\DashboardSegmentsBuildTime
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\LeadBundle\\Model\\ListModel'] ?? $container->getListModelService());

        if (isset($container->services['Mautic\\LeadBundle\\Form\\Type\\DashboardSegmentsBuildTime'])) {
            return $container->services['Mautic\\LeadBundle\\Form\\Type\\DashboardSegmentsBuildTime'];
        }

        return $container->services['Mautic\\LeadBundle\\Form\\Type\\DashboardSegmentsBuildTime'] = new \Mautic\LeadBundle\Form\Type\DashboardSegmentsBuildTime($a);
    }
}
