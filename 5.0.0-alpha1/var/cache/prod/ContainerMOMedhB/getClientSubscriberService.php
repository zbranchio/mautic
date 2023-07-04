<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClientSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ApiBundle\EventListener\ClientSubscriber' shared autowired service.
     *
     * @return \Mautic\ApiBundle\EventListener\ClientSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.core.model.auditlog'] ?? $container->getMautic_Core_Model_AuditlogService());

        if (isset($container->services['Mautic\\ApiBundle\\EventListener\\ClientSubscriber'])) {
            return $container->services['Mautic\\ApiBundle\\EventListener\\ClientSubscriber'];
        }

        return $container->services['Mautic\\ApiBundle\\EventListener\\ClientSubscriber'] = new \Mautic\ApiBundle\EventListener\ClientSubscriber(($container->services['mautic.helper.ip_lookup'] ?? $container->getMautic_Helper_IpLookupService()), $a);
    }
}
