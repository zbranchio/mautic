<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFocusEventsService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticFocusBundle\FocusEvents' shared autowired service.
     *
     * @return \MauticPlugin\MauticFocusBundle\FocusEvents
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['MauticPlugin\\MauticFocusBundle\\FocusEvents'] = new \MauticPlugin\MauticFocusBundle\FocusEvents();
    }
}
