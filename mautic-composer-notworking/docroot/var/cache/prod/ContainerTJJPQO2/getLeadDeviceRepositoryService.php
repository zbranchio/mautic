<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeadDeviceRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Entity\LeadDeviceRepository' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Entity\LeadDeviceRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Entity\\LeadDeviceRepository'] = new \Mautic\LeadBundle\Entity\LeadDeviceRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}