<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeadEventLogRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\Entity\LeadEventLogRepository' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\Entity\LeadEventLogRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CampaignBundle\\Entity\\LeadEventLogRepository'] = new \Mautic\CampaignBundle\Entity\LeadEventLogRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
