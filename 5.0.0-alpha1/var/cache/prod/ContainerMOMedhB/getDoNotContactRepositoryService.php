<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoNotContactRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Entity\DoNotContactRepository' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Entity\DoNotContactRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Entity\\DoNotContactRepository'] = new \Mautic\LeadBundle\Entity\DoNotContactRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
