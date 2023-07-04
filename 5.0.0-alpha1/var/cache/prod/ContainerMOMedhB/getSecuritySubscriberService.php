<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecuritySubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\UserBundle\EventListener\SecuritySubscriber' shared autowired service.
     *
     * @return \Mautic\UserBundle\EventListener\SecuritySubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.core.model.auditlog'] ?? $container->getMautic_Core_Model_AuditlogService());

        if (isset($container->services['Mautic\\UserBundle\\EventListener\\SecuritySubscriber'])) {
            return $container->services['Mautic\\UserBundle\\EventListener\\SecuritySubscriber'];
        }

        return $container->services['Mautic\\UserBundle\\EventListener\\SecuritySubscriber'] = new \Mautic\UserBundle\EventListener\SecuritySubscriber(($container->services['mautic.helper.ip_lookup'] ?? $container->getMautic_Helper_IpLookupService()), $a);
    }
}
