<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchedulerWeeklyBuilderService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ReportBundle\Scheduler\Builder\SchedulerWeeklyBuilder' shared autowired service.
     *
     * @return \Mautic\ReportBundle\Scheduler\Builder\SchedulerWeeklyBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ReportBundle\\Scheduler\\Builder\\SchedulerWeeklyBuilder'] = new \Mautic\ReportBundle\Scheduler\Builder\SchedulerWeeklyBuilder();
    }
}