<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContactObjectSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\IntegrationsBundle\EventListener\ContactObjectSubscriber' shared autowired service.
     *
     * @return \Mautic\IntegrationsBundle\EventListener\ContactObjectSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.integrations.helper.contact_object'] ?? $container->load('getMautic_Integrations_Helper_ContactObjectService'));

        if (isset($container->services['Mautic\\IntegrationsBundle\\EventListener\\ContactObjectSubscriber'])) {
            return $container->services['Mautic\\IntegrationsBundle\\EventListener\\ContactObjectSubscriber'];
        }
        $b = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['Mautic\\IntegrationsBundle\\EventListener\\ContactObjectSubscriber'])) {
            return $container->services['Mautic\\IntegrationsBundle\\EventListener\\ContactObjectSubscriber'];
        }

        return $container->services['Mautic\\IntegrationsBundle\\EventListener\\ContactObjectSubscriber'] = new \Mautic\IntegrationsBundle\EventListener\ContactObjectSubscriber($a, $b);
    }
}
