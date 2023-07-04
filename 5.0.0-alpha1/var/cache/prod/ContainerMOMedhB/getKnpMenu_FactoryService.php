<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnpMenu_FactoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'knp_menu.factory' shared service.
     *
     * @return \Knp\Menu\MenuFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['knp_menu.factory'] = $instance = new \Knp\Menu\MenuFactory();

        $instance->addExtension(new \Knp\Menu\Integration\Symfony\RoutingExtension(($container->services['router'] ?? $container->getRouterService())), 0);

        return $instance;
    }
}
