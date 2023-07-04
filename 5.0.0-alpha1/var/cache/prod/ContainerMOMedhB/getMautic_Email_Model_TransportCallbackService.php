<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Email_Model_TransportCallbackService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.email.model.transport_callback' shared service.
     *
     * @return \Mautic\EmailBundle\Model\TransportCallback
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.email.model.transport_callback'] = new \Mautic\EmailBundle\Model\TransportCallback(($container->services['mautic.lead.model.dnc'] ?? $container->getMautic_Lead_Model_DncService()), ($container->services['mautic.message.search.contact'] ?? $container->load('getMautic_Message_Search_ContactService')), ($container->services['mautic.email.repository.stat'] ?? $container->getMautic_Email_Repository_StatService()));
    }
}
