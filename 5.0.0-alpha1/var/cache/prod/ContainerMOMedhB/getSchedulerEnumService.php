<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchedulerEnumService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ReportBundle\Scheduler\Enum\SchedulerEnum' shared autowired service.
     *
     * @return \Mautic\ReportBundle\Scheduler\Enum\SchedulerEnum
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ReportBundle\\Scheduler\\Enum\\SchedulerEnum'] = new \Mautic\ReportBundle\Scheduler\Enum\SchedulerEnum();
    }
}