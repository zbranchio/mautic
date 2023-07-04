<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Messenger_TransportTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.messenger.transport_type' shared service.
     *
     * @return \Mautic\MessengerBundle\Model\MessengerTransportType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.messenger.transport_type'] = new \Mautic\MessengerBundle\Model\MessengerTransportType();
    }
}
