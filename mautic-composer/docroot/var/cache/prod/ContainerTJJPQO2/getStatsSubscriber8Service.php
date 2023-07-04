<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStatsSubscriber8Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\EventListener\StatsSubscriber' shared autowired service.
     *
     * @return \Mautic\EmailBundle\EventListener\StatsSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\EmailBundle\\EventListener\\StatsSubscriber'] = new \Mautic\EmailBundle\EventListener\StatsSubscriber(($container->services['mautic.security'] ?? $container->getMautic_SecurityService()), ($container->services['mautic.permission.manager'] ?? $container->getMautic_Permission_ManagerService()));
    }
}