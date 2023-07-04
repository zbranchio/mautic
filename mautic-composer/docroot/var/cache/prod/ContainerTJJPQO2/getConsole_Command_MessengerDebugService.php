<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_MessengerDebugService extends AppKernelProdContainer
{
    /*
     * Gets the private 'console.command.messenger_debug' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.messenger_debug'] = $instance = new \Symfony\Component\Messenger\Command\DebugCommand(['messenger.bus.default' => ['Symfony\\Component\\Mailer\\Messenger\\SendEmailMessage' => [0 => [0 => 'mailer.messenger.message_handler', 1 => []]], 'Mautic\\MessengerBundle\\Message\\TestEmail' => [0 => [0 => 'Mautic\\MessengerBundle\\MessageHandler\\TestHandler', 1 => ['method' => 'handleEmail']]], 'Mautic\\MessengerBundle\\Message\\TestFailed' => [0 => [0 => 'Mautic\\MessengerBundle\\MessageHandler\\TestHandler', 1 => ['method' => 'handleFailed']]]]]);

        $instance->setName('debug:messenger');
        $instance->setDescription('List messages you can dispatch using the message buses');

        return $instance;
    }
}
