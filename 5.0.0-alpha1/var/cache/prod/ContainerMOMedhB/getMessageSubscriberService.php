<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessageSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ChannelBundle\EventListener\MessageSubscriber' shared autowired service.
     *
     * @return \Mautic\ChannelBundle\EventListener\MessageSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.core.model.auditlog'] ?? $container->getMautic_Core_Model_AuditlogService());

        if (isset($container->services['Mautic\\ChannelBundle\\EventListener\\MessageSubscriber'])) {
            return $container->services['Mautic\\ChannelBundle\\EventListener\\MessageSubscriber'];
        }

        return $container->services['Mautic\\ChannelBundle\\EventListener\\MessageSubscriber'] = new \Mautic\ChannelBundle\EventListener\MessageSubscriber($a);
    }
}
