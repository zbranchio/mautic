<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContactExportSchedulerRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Entity\ContactExportSchedulerRepository' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Entity\ContactExportSchedulerRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Entity\\ContactExportSchedulerRepository'] = new \Mautic\LeadBundle\Entity\ContactExportSchedulerRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
