<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getListLeadRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Entity\ListLeadRepository' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Entity\ListLeadRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Entity\\ListLeadRepository'] = new \Mautic\LeadBundle\Entity\ListLeadRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
