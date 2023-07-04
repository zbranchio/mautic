<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBuildJsSubscriber2Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\DynamicContentBundle\EventListener\BuildJsSubscriber' shared autowired service.
     *
     * @return \Mautic\DynamicContentBundle\EventListener\BuildJsSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\CoreBundle\\Twig\\Helper\\AssetsHelper'] ?? $container->getAssetsHelperService());

        if (isset($container->services['Mautic\\DynamicContentBundle\\EventListener\\BuildJsSubscriber'])) {
            return $container->services['Mautic\\DynamicContentBundle\\EventListener\\BuildJsSubscriber'];
        }
        $b = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['Mautic\\DynamicContentBundle\\EventListener\\BuildJsSubscriber'])) {
            return $container->services['Mautic\\DynamicContentBundle\\EventListener\\BuildJsSubscriber'];
        }

        return $container->services['Mautic\\DynamicContentBundle\\EventListener\\BuildJsSubscriber'] = new \Mautic\DynamicContentBundle\EventListener\BuildJsSubscriber($a, ($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), $b);
    }
}
