<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Sms_TransportChainService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.sms.transport_chain' shared service.
     *
     * @return \Mautic\SmsBundle\Sms\TransportChain
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.helper.integration'] ?? $container->getMautic_Helper_IntegrationService());

        if (isset($container->services['mautic.sms.transport_chain'])) {
            return $container->services['mautic.sms.transport_chain'];
        }

        $container->services['mautic.sms.transport_chain'] = $instance = new \Mautic\SmsBundle\Sms\TransportChain($container->getEnv('nullable:resolve:MAUTIC_SMS_TRANSPORT'), $a, ($container->services['monolog.logger.mautic'] ?? $container->getMonolog_Logger_MauticService()));

        $instance->addTransport('mautic.sms.twilio.transport', ($container->services['mautic.sms.twilio.transport'] ?? $container->load('getMautic_Sms_Twilio_TransportService')), 'mautic.sms.twilio.transport', 'Twilio');

        return $instance;
    }
}
