<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFocusShowTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticFocusBundle\Form\Type\FocusShowType' shared autowired service.
     *
     * @return \MauticPlugin\MauticFocusBundle\Form\Type\FocusShowType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['MauticPlugin\\MauticFocusBundle\\Form\\Type\\FocusShowType'])) {
            return $container->services['MauticPlugin\\MauticFocusBundle\\Form\\Type\\FocusShowType'];
        }

        return $container->services['MauticPlugin\\MauticFocusBundle\\Form\\Type\\FocusShowType'] = new \MauticPlugin\MauticFocusBundle\Form\Type\FocusShowType($a);
    }
}
