<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_Messenger_DoctrineSchemaSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the private 'doctrine.orm.messenger.doctrine_schema_subscriber' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\SchemaListener\MessengerTransportDoctrineSchemaSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['doctrine.orm.messenger.doctrine_schema_subscriber'] = new \Symfony\Bridge\Doctrine\SchemaListener\MessengerTransportDoctrineSchemaSubscriber(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['messenger.transport.email'] ?? $container->load('getMessenger_Transport_EmailService'));
            yield 1 => ($container->privates['messenger.transport.failed'] ?? $container->load('getMessenger_Transport_FailedService'));
        }, 2));
    }
}
