<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPushLeadActivityCommandService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PluginBundle\Command\PushLeadActivityCommand' shared autowired service.
     *
     * @return \Mautic\PluginBundle\Command\PushLeadActivityCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\PluginBundle\\Command\\PushLeadActivityCommand'] = new \Mautic\PluginBundle\Command\PushLeadActivityCommand(($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['mautic.helper.integration'] ?? $container->getMautic_Helper_IntegrationService()));
    }
}
