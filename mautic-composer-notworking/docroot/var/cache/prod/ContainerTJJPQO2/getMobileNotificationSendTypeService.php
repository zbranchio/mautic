<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMobileNotificationSendTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\NotificationBundle\Form\Type\MobileNotificationSendType' shared autowired service.
     *
     * @return \Mautic\NotificationBundle\Form\Type\MobileNotificationSendType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['Mautic\\NotificationBundle\\Form\\Type\\MobileNotificationSendType'])) {
            return $container->services['Mautic\\NotificationBundle\\Form\\Type\\MobileNotificationSendType'];
        }

        return $container->services['Mautic\\NotificationBundle\\Form\\Type\\MobileNotificationSendType'] = new \Mautic\NotificationBundle\Form\Type\MobileNotificationSendType($a);
    }
}
