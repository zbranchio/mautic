<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_30OFGtService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator._30OFGt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._30OFGt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'form' => ['privates', '.errored..service_locator._30OFGt.Symfony\\Component\\Form\\Form', NULL, 'Cannot autowire service ".service_locator._30OFGt": it references class "Symfony\\Component\\Form\\Form" but no such service exists. You should maybe alias this class to the existing "fos_oauth_server.authorize.form" service.'],
        ], [
            'form' => 'Symfony\\Component\\Form\\Form',
        ]);
    }
}
