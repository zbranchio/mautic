<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeadRepository3Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Entity\LeadRepository' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Entity\LeadRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Entity\\LeadRepository'] = new \Mautic\LeadBundle\Entity\LeadRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}