<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCompanySubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\EventListener\CompanySubscriber' shared autowired service.
     *
     * @return \Mautic\LeadBundle\EventListener\CompanySubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.core.model.auditlog'] ?? $container->getMautic_Core_Model_AuditlogService());

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\CompanySubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\CompanySubscriber'];
        }

        return $container->services['Mautic\\LeadBundle\\EventListener\\CompanySubscriber'] = new \Mautic\LeadBundle\EventListener\CompanySubscriber(($container->services['mautic.helper.ip_lookup'] ?? $container->getMautic_Helper_IpLookupService()), $a);
    }
}