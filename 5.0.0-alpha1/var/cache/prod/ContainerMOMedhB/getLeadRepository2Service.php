<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeadRepository2Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\Entity\LeadRepository' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\Entity\LeadRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CampaignBundle\\Entity\\LeadRepository'] = new \Mautic\CampaignBundle\Entity\LeadRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
