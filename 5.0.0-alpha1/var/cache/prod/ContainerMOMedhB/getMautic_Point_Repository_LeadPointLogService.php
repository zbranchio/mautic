<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Point_Repository_LeadPointLogService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.point.repository.lead_point_log' shared service.
     *
     * @return \Doctrine\ORM\EntityRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.point.repository.lead_point_log'] = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService())->getRepository('Mautic\\PointBundle\\Entity\\LeadPointLog');
    }
}