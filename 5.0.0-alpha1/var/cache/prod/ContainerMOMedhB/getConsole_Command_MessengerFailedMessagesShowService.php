<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_MessengerFailedMessagesShowService extends AppKernelProdContainer
{
    /*
     * Gets the private 'console.command.messenger_failed_messages_show' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\FailedMessagesShowCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.messenger_failed_messages_show'] = $instance = new \Symfony\Component\Messenger\Command\FailedMessagesShowCommand('failed_default', ($container->privates['.service_locator.oIyBOf0'] ?? $container->load('get_ServiceLocator_OIyBOf0Service')));

        $instance->setName('messenger:failed:show');
        $instance->setDescription('Show one or more messages from the failure transport');

        return $instance;
    }
}
