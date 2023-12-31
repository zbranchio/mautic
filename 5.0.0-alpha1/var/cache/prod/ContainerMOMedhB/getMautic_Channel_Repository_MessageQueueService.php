<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Channel_Repository_MessageQueueService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.channel.repository.message_queue' shared service.
     *
     * @return \Doctrine\ORM\EntityRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.channel.repository.message_queue'] = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService())->getRepository('Mautic\\ChannelBundle\\Entity\\MessageQueue');
    }
}
