<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeadListRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Entity\LeadListRepository' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Entity\LeadListRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Entity\\LeadListRepository'] = new \Mautic\LeadBundle\Entity\LeadListRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
