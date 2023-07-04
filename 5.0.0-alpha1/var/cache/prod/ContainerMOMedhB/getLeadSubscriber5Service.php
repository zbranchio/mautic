<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeadSubscriber5Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ChannelBundle\EventListener\LeadSubscriber' shared autowired service.
     *
     * @return \Mautic\ChannelBundle\EventListener\LeadSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['Mautic\\ChannelBundle\\EventListener\\LeadSubscriber'])) {
            return $container->services['Mautic\\ChannelBundle\\EventListener\\LeadSubscriber'];
        }

        return $container->services['Mautic\\ChannelBundle\\EventListener\\LeadSubscriber'] = new \Mautic\ChannelBundle\EventListener\LeadSubscriber(($container->services['translator'] ?? $container->getTranslator2Service()), $a, ($container->services['Mautic\\ChannelBundle\\Entity\\MessageQueueRepository'] ?? $container->load('getMessageQueueRepositoryService')));
    }
}