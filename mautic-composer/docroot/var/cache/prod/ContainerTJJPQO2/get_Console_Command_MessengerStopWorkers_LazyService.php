<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_MessengerStopWorkers_LazyService extends AppKernelProdContainer
{
    /*
     * Gets the private '.console.command.messenger_stop_workers.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.console.command.messenger_stop_workers.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('messenger:stop-workers', [], 'Stop workers after their current message', false, function () use ($container): \Symfony\Component\Messenger\Command\StopWorkersCommand {
            return ($container->privates['console.command.messenger_stop_workers'] ?? $container->load('getConsole_Command_MessengerStopWorkersService'));
        });
    }
}
