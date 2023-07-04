<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_K0h2SFNService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.K0h2SFN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.K0h2SFN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'formFactory' => ['services', '.container.private.form.factory', 'get_Container_Private_Form_FactoryService', false],
            'ipServiceFactory' => ['services', 'mautic.ip_lookup.factory', 'getMautic_IpLookup_FactoryService', false],
        ], [
            'formFactory' => '?',
            'ipServiceFactory' => '?',
        ]);
    }
}
