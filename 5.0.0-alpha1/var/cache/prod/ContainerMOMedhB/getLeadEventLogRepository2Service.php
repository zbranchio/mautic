<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeadEventLogRepository2Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Entity\LeadEventLogRepository' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Entity\LeadEventLogRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Entity\\LeadEventLogRepository'] = new \Mautic\LeadBundle\Entity\LeadEventLogRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
