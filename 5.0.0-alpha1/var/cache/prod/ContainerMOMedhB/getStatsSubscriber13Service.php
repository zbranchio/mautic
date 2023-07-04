<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStatsSubscriber13Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\SmsBundle\EventListener\StatsSubscriber' shared autowired service.
     *
     * @return \Mautic\SmsBundle\EventListener\StatsSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\SmsBundle\\EventListener\\StatsSubscriber'] = new \Mautic\SmsBundle\EventListener\StatsSubscriber(($container->services['mautic.security'] ?? $container->getMautic_SecurityService()), ($container->services['mautic.permission.manager'] ?? $container->getMautic_Permission_ManagerService()));
    }
}