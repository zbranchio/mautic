<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotificationConfigTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\NotificationBundle\Form\Type\NotificationConfigType' shared autowired service.
     *
     * @return \Mautic\NotificationBundle\Form\Type\NotificationConfigType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\NotificationBundle\\Form\\Type\\NotificationConfigType'] = new \Mautic\NotificationBundle\Form\Type\NotificationConfigType();
    }
}
