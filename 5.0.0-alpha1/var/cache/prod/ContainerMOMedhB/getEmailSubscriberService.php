<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmailSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\GrapesJsBuilderBundle\EventSubscriber\EmailSubscriber' shared autowired service.
     *
     * @return \MauticPlugin\GrapesJsBuilderBundle\EventSubscriber\EmailSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['grapesjsbuilder.model'] ?? $container->load('getGrapesjsbuilder_ModelService'));

        if (isset($container->services['MauticPlugin\\GrapesJsBuilderBundle\\EventSubscriber\\EmailSubscriber'])) {
            return $container->services['MauticPlugin\\GrapesJsBuilderBundle\\EventSubscriber\\EmailSubscriber'];
        }

        return $container->services['MauticPlugin\\GrapesJsBuilderBundle\\EventSubscriber\\EmailSubscriber'] = new \MauticPlugin\GrapesJsBuilderBundle\EventSubscriber\EmailSubscriber(($container->services['grapesjsbuilder.config'] ?? $container->load('getGrapesjsbuilder_ConfigService')), $a);
    }
}
