<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessageQueueRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ChannelBundle\Entity\MessageQueueRepository' shared autowired service.
     *
     * @return \Mautic\ChannelBundle\Entity\MessageQueueRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ChannelBundle\\Entity\\MessageQueueRepository'] = new \Mautic\ChannelBundle\Entity\MessageQueueRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
