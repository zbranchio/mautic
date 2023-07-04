<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Lead_Field_Notification_CustomFieldService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.lead.field.notification.custom_field' shared service.
     *
     * @return \Mautic\LeadBundle\Field\Notification\CustomFieldNotification
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.lead.field.notification.custom_field'] = new \Mautic\LeadBundle\Field\Notification\CustomFieldNotification(($container->services['mautic.core.model.notification'] ?? $container->getMautic_Core_Model_NotificationService()), ($container->services['mautic.user.model.user'] ?? $container->getMautic_User_Model_UserService()), ($container->services['translator'] ?? $container->getTranslator2Service()));
    }
}
