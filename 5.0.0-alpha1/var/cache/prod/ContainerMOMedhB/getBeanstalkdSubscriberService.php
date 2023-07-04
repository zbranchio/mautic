<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBeanstalkdSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\QueueBundle\EventListener\BeanstalkdSubscriber' shared autowired service.
     *
     * @return \Mautic\QueueBundle\EventListener\BeanstalkdSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.queue.service'] ?? $container->getMautic_Queue_ServiceService());

        if (isset($container->services['Mautic\\QueueBundle\\EventListener\\BeanstalkdSubscriber'])) {
            return $container->services['Mautic\\QueueBundle\\EventListener\\BeanstalkdSubscriber'];
        }

        return $container->services['Mautic\\QueueBundle\\EventListener\\BeanstalkdSubscriber'] = new \Mautic\QueueBundle\EventListener\BeanstalkdSubscriber($container, $a);
    }
}
