<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Report_Model_ScheduleModelService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.report.model.schedule_model' shared service.
     *
     * @return \Mautic\ReportBundle\Model\ScheduleModel
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.report.model.schedule_model'] = new \Mautic\ReportBundle\Model\ScheduleModel(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['mautic.report.model.scheduler_planner'] ?? $container->load('getMautic_Report_Model_SchedulerPlannerService')));
    }
}
