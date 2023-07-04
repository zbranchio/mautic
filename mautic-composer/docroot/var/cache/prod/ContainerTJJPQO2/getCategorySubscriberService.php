<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategorySubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CategoryBundle\EventListener\CategorySubscriber' shared autowired service.
     *
     * @return \Mautic\CategoryBundle\EventListener\CategorySubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\CoreBundle\\Model\\AuditLogModel'] ?? $container->getAuditLogModelService());

        if (isset($container->services['Mautic\\CategoryBundle\\EventListener\\CategorySubscriber'])) {
            return $container->services['Mautic\\CategoryBundle\\EventListener\\CategorySubscriber'];
        }

        return $container->services['Mautic\\CategoryBundle\\EventListener\\CategorySubscriber'] = new \Mautic\CategoryBundle\EventListener\CategorySubscriber(($container->services['mautic.helper.bundle'] ?? $container->getMautic_Helper_BundleService()), ($container->services['mautic.helper.ip_lookup'] ?? $container->getMautic_Helper_IpLookupService()), $a);
    }
}
