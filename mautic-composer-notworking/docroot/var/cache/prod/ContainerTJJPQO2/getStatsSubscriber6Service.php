<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStatsSubscriber6Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\EventListener\StatsSubscriber' shared autowired service.
     *
     * @return \Mautic\CoreBundle\EventListener\StatsSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\EventListener\\StatsSubscriber'] = new \Mautic\CoreBundle\EventListener\StatsSubscriber(($container->services['mautic.security'] ?? $container->getMautic_SecurityService()), ($container->services['mautic.permission.manager'] ?? $container->getMautic_Permission_ManagerService()));
    }
}