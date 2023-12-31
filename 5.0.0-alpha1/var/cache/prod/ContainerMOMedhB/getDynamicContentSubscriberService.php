<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDynamicContentSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\DynamicContentBundle\EventListener\DynamicContentSubscriber' shared autowired service.
     *
     * @return \Mautic\DynamicContentBundle\EventListener\DynamicContentSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.page.model.trackable'] ?? $container->getMautic_Page_Model_TrackableService());

        if (isset($container->services['Mautic\\DynamicContentBundle\\EventListener\\DynamicContentSubscriber'])) {
            return $container->services['Mautic\\DynamicContentBundle\\EventListener\\DynamicContentSubscriber'];
        }
        $b = ($container->services['mautic.page.helper.token'] ?? $container->getMautic_Page_Helper_TokenService());

        if (isset($container->services['Mautic\\DynamicContentBundle\\EventListener\\DynamicContentSubscriber'])) {
            return $container->services['Mautic\\DynamicContentBundle\\EventListener\\DynamicContentSubscriber'];
        }
        $c = ($container->services['mautic.form.helper.token'] ?? $container->load('getMautic_Form_Helper_TokenService'));

        if (isset($container->services['Mautic\\DynamicContentBundle\\EventListener\\DynamicContentSubscriber'])) {
            return $container->services['Mautic\\DynamicContentBundle\\EventListener\\DynamicContentSubscriber'];
        }
        $d = ($container->services['mautic.focus.helper.token'] ?? $container->load('getMautic_Focus_Helper_TokenService'));

        if (isset($container->services['Mautic\\DynamicContentBundle\\EventListener\\DynamicContentSubscriber'])) {
            return $container->services['Mautic\\DynamicContentBundle\\EventListener\\DynamicContentSubscriber'];
        }
        $e = ($container->services['mautic.core.model.auditlog'] ?? $container->getMautic_Core_Model_AuditlogService());

        if (isset($container->services['Mautic\\DynamicContentBundle\\EventListener\\DynamicContentSubscriber'])) {
            return $container->services['Mautic\\DynamicContentBundle\\EventListener\\DynamicContentSubscriber'];
        }
        $f = ($container->services['mautic.helper.dynamicContent'] ?? $container->load('getMautic_Helper_DynamicContentService'));

        if (isset($container->services['Mautic\\DynamicContentBundle\\EventListener\\DynamicContentSubscriber'])) {
            return $container->services['Mautic\\DynamicContentBundle\\EventListener\\DynamicContentSubscriber'];
        }
        $g = ($container->services['mautic.dynamicContent.model.dynamicContent'] ?? $container->load('getMautic_DynamicContent_Model_DynamicContentService'));

        if (isset($container->services['Mautic\\DynamicContentBundle\\EventListener\\DynamicContentSubscriber'])) {
            return $container->services['Mautic\\DynamicContentBundle\\EventListener\\DynamicContentSubscriber'];
        }
        $h = ($container->services['mautic.tracker.contact'] ?? $container->getMautic_Tracker_ContactService());

        if (isset($container->services['Mautic\\DynamicContentBundle\\EventListener\\DynamicContentSubscriber'])) {
            return $container->services['Mautic\\DynamicContentBundle\\EventListener\\DynamicContentSubscriber'];
        }

        return $container->services['Mautic\\DynamicContentBundle\\EventListener\\DynamicContentSubscriber'] = new \Mautic\DynamicContentBundle\EventListener\DynamicContentSubscriber($a, $b, ($container->services['Mautic\\AssetBundle\\Helper\\TokenHelper'] ?? $container->getTokenHelperService()), $c, $d, $e, $f, $g, ($container->services['mautic.security'] ?? $container->getMautic_SecurityService()), $h);
    }
}
