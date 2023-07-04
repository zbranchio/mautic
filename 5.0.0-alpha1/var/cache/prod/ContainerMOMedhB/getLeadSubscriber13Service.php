<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeadSubscriber13Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PointBundle\EventListener\LeadSubscriber' shared autowired service.
     *
     * @return \Mautic\PointBundle\EventListener\LeadSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.point.model.trigger'] ?? $container->load('getMautic_Point_Model_TriggerService'));

        if (isset($container->services['Mautic\\PointBundle\\EventListener\\LeadSubscriber'])) {
            return $container->services['Mautic\\PointBundle\\EventListener\\LeadSubscriber'];
        }

        return $container->services['Mautic\\PointBundle\\EventListener\\LeadSubscriber'] = new \Mautic\PointBundle\EventListener\LeadSubscriber($a, ($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['Mautic\\LeadBundle\\Entity\\PointsChangeLogRepository'] ?? $container->load('getPointsChangeLogRepositoryService')), ($container->services['Mautic\\PointBundle\\Entity\\LeadPointLogRepository'] ?? $container->load('getLeadPointLogRepositoryService')), ($container->services['Mautic\\PointBundle\\Entity\\LeadTriggerLogRepository'] ?? $container->load('getLeadTriggerLogRepositoryService')));
    }
}
