<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Retry_SendFailedMessageForRetryListenerService extends AppKernelProdContainer
{
    /*
     * Gets the private 'messenger.retry.send_failed_message_for_retry_listener' shared service.
     *
     * @return \Symfony\Component\Messenger\EventListener\SendFailedMessageForRetryListener
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.DDtip7N'] ?? $container->load('get_ServiceLocator_DDtip7NService'));

        if (isset($container->privates['messenger.retry.send_failed_message_for_retry_listener'])) {
            return $container->privates['messenger.retry.send_failed_message_for_retry_listener'];
        }
        $b = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['messenger.retry.send_failed_message_for_retry_listener'])) {
            return $container->privates['messenger.retry.send_failed_message_for_retry_listener'];
        }

        return $container->privates['messenger.retry.send_failed_message_for_retry_listener'] = new \Symfony\Component\Messenger\EventListener\SendFailedMessageForRetryListener($a, new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'email_transport' => ['privates', 'messenger.retry.multiplier_retry_strategy.email_transport', 'getMessenger_Retry_MultiplierRetryStrategy_EmailTransportService', true],
            'failed_default' => ['privates', 'messenger.retry.multiplier_retry_strategy.failed_default', 'getMessenger_Retry_MultiplierRetryStrategy_FailedDefaultService', true],
        ], [
            'email_transport' => '?',
            'failed_default' => '?',
        ]), ($container->privates['monolog.logger.messenger'] ?? $container->load('getMonolog_Logger_MessengerService')), $b);
    }
}
