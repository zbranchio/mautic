<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getQueueNameService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\QueueBundle\Queue\QueueName' shared autowired service.
     *
     * @return \Mautic\QueueBundle\Queue\QueueName
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\QueueBundle\\Queue\\QueueName'] = new \Mautic\QueueBundle\Queue\QueueName();
    }
}