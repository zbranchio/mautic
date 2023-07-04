<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DDtip7NService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.DDtip7N' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DDtip7N'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'email_transport' => ['privates', 'messenger.transport.email_transport', 'getMessenger_Transport_EmailTransportService', true],
            'failed_default' => ['privates', 'messenger.transport.failed_default', 'getMessenger_Transport_FailedDefaultService', true],
            'messenger.transport.email_transport' => ['privates', 'messenger.transport.email_transport', 'getMessenger_Transport_EmailTransportService', true],
            'messenger.transport.failed_default' => ['privates', 'messenger.transport.failed_default', 'getMessenger_Transport_FailedDefaultService', true],
        ], [
            'email_transport' => '?',
            'failed_default' => '?',
            'messenger.transport.email_transport' => '?',
            'messenger.transport.failed_default' => '?',
        ]);
    }
}