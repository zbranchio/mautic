<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeadTriggerLogRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PointBundle\Entity\LeadTriggerLogRepository' shared autowired service.
     *
     * @return \Mautic\PointBundle\Entity\LeadTriggerLogRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\PointBundle\\Entity\\LeadTriggerLogRepository'] = new \Mautic\PointBundle\Entity\LeadTriggerLogRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
