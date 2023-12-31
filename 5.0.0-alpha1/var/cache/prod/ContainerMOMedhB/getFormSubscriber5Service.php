<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormSubscriber5Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\FormBundle\EventListener\FormSubscriber' shared autowired service.
     *
     * @return \Mautic\FormBundle\EventListener\FormSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.core.model.auditlog'] ?? $container->getMautic_Core_Model_AuditlogService());

        if (isset($container->services['Mautic\\FormBundle\\EventListener\\FormSubscriber'])) {
            return $container->services['Mautic\\FormBundle\\EventListener\\FormSubscriber'];
        }
        $b = ($container->services['mautic.helper.mailer'] ?? $container->getMautic_Helper_MailerService());

        if (isset($container->services['Mautic\\FormBundle\\EventListener\\FormSubscriber'])) {
            return $container->services['Mautic\\FormBundle\\EventListener\\FormSubscriber'];
        }
        $c = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['Mautic\\FormBundle\\EventListener\\FormSubscriber'])) {
            return $container->services['Mautic\\FormBundle\\EventListener\\FormSubscriber'];
        }

        return $container->services['Mautic\\FormBundle\\EventListener\\FormSubscriber'] = new \Mautic\FormBundle\EventListener\FormSubscriber(($container->services['mautic.helper.ip_lookup'] ?? $container->getMautic_Helper_IpLookupService()), $a, $b, ($container->services['translator'] ?? $container->getTranslator2Service()), $c);
    }
}
