<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRabbitMqSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\QueueBundle\EventListener\RabbitMqSubscriber' shared autowired service.
     *
     * @return \Mautic\QueueBundle\EventListener\RabbitMqSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\QueueBundle\\EventListener\\RabbitMqSubscriber'] = new \Mautic\QueueBundle\EventListener\RabbitMqSubscriber($container);
    }
}
