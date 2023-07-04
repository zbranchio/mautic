<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConfigChangeLoggerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ConfigBundle\Service\ConfigChangeLogger' shared autowired service.
     *
     * @return \Mautic\ConfigBundle\Service\ConfigChangeLogger
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.core.model.auditlog'] ?? $container->getMautic_Core_Model_AuditlogService());

        if (isset($container->services['Mautic\\ConfigBundle\\Service\\ConfigChangeLogger'])) {
            return $container->services['Mautic\\ConfigBundle\\Service\\ConfigChangeLogger'];
        }

        return $container->services['Mautic\\ConfigBundle\\Service\\ConfigChangeLogger'] = new \Mautic\ConfigBundle\Service\ConfigChangeLogger(($container->services['mautic.helper.ip_lookup'] ?? $container->getMautic_Helper_IpLookupService()), $a);
    }
}