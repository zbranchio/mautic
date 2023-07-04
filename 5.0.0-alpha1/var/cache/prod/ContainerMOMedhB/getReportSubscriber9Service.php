<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReportSubscriber9Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ReportBundle\EventListener\ReportSubscriber' shared autowired service.
     *
     * @return \Mautic\ReportBundle\EventListener\ReportSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.core.model.auditlog'] ?? $container->getMautic_Core_Model_AuditlogService());

        if (isset($container->services['Mautic\\ReportBundle\\EventListener\\ReportSubscriber'])) {
            return $container->services['Mautic\\ReportBundle\\EventListener\\ReportSubscriber'];
        }

        return $container->services['Mautic\\ReportBundle\\EventListener\\ReportSubscriber'] = new \Mautic\ReportBundle\EventListener\ReportSubscriber(($container->services['mautic.helper.ip_lookup'] ?? $container->getMautic_Helper_IpLookupService()), $a);
    }
}
