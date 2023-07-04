<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeadSubscriber14Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\SmsBundle\EventListener\LeadSubscriber' shared autowired service.
     *
     * @return \Mautic\SmsBundle\EventListener\LeadSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['Mautic\\SmsBundle\\EventListener\\LeadSubscriber'])) {
            return $container->services['Mautic\\SmsBundle\\EventListener\\LeadSubscriber'];
        }

        return $container->services['Mautic\\SmsBundle\\EventListener\\LeadSubscriber'] = new \Mautic\SmsBundle\EventListener\LeadSubscriber(($container->services['translator'] ?? $container->getTranslator2Service()), $a, ($container->services['mautic.permission.manager'] ?? $container->getMautic_Permission_ManagerService()));
    }
}
