<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsoleTerminateListenerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\EventListener\ConsoleTerminateListener' shared autowired service.
     *
     * @return \Mautic\CoreBundle\EventListener\ConsoleTerminateListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\EventListener\\ConsoleTerminateListener'] = new \Mautic\CoreBundle\EventListener\ConsoleTerminateListener(($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
    }
}
