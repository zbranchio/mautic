<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotificationTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\NotificationBundle\Form\Type\NotificationType' shared autowired service.
     *
     * @return \Mautic\NotificationBundle\Form\Type\NotificationType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\NotificationBundle\\Form\\Type\\NotificationType'] = new \Mautic\NotificationBundle\Form\Type\NotificationType();
    }
}
