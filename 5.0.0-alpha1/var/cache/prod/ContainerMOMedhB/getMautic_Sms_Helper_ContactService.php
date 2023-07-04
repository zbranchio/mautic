<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Sms_Helper_ContactService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.sms.helper.contact' shared service.
     *
     * @return \Mautic\SmsBundle\Helper\ContactHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.sms.helper.contact'] = new \Mautic\SmsBundle\Helper\ContactHelper(($container->services['mautic.lead.repository.lead'] ?? $container->getMautic_Lead_Repository_LeadService()), ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService()), ($container->services['mautic.helper.phone_number'] ?? ($container->services['mautic.helper.phone_number'] = new \Mautic\CoreBundle\Helper\PhoneNumberHelper())));
    }
}
