<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBuildJsSubscriber4Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PageBundle\EventListener\BuildJsSubscriber' shared autowired service.
     *
     * @return \Mautic\PageBundle\EventListener\BuildJsSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\CoreBundle\\Twig\\Helper\\AssetsHelper'] ?? $container->getAssetsHelperService());

        if (isset($container->services['Mautic\\PageBundle\\EventListener\\BuildJsSubscriber'])) {
            return $container->services['Mautic\\PageBundle\\EventListener\\BuildJsSubscriber'];
        }
        $b = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['Mautic\\PageBundle\\EventListener\\BuildJsSubscriber'])) {
            return $container->services['Mautic\\PageBundle\\EventListener\\BuildJsSubscriber'];
        }

        return $container->services['Mautic\\PageBundle\\EventListener\\BuildJsSubscriber'] = new \Mautic\PageBundle\EventListener\BuildJsSubscriber($a, ($container->services['mautic.page.helper.tracking'] ?? $container->load('getMautic_Page_Helper_TrackingService')), $b);
    }
}
