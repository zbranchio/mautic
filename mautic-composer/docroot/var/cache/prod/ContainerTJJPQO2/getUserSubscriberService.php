<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\UserBundle\EventListener\UserSubscriber' shared autowired service.
     *
     * @return \Mautic\UserBundle\EventListener\UserSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\CoreBundle\\Model\\AuditLogModel'] ?? $container->getAuditLogModelService());

        if (isset($container->services['Mautic\\UserBundle\\EventListener\\UserSubscriber'])) {
            return $container->services['Mautic\\UserBundle\\EventListener\\UserSubscriber'];
        }

        return $container->services['Mautic\\UserBundle\\EventListener\\UserSubscriber'] = new \Mautic\UserBundle\EventListener\UserSubscriber(($container->services['mautic.helper.ip_lookup'] ?? $container->getMautic_Helper_IpLookupService()), $a);
    }
}
