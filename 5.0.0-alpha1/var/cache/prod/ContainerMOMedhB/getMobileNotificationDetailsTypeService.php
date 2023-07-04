<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMobileNotificationDetailsTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\NotificationBundle\Form\Type\MobileNotificationDetailsType' shared autowired service.
     *
     * @return \Mautic\NotificationBundle\Form\Type\MobileNotificationDetailsType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.helper.integration'] ?? $container->getMautic_Helper_IntegrationService());

        if (isset($container->services['Mautic\\NotificationBundle\\Form\\Type\\MobileNotificationDetailsType'])) {
            return $container->services['Mautic\\NotificationBundle\\Form\\Type\\MobileNotificationDetailsType'];
        }

        return $container->services['Mautic\\NotificationBundle\\Form\\Type\\MobileNotificationDetailsType'] = new \Mautic\NotificationBundle\Form\Type\MobileNotificationDetailsType($a);
    }
}
