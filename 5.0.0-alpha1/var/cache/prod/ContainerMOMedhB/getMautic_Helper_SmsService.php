<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Helper_SmsService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.helper.sms' shared service.
     *
     * @return \Mautic\SmsBundle\Helper\SmsHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['mautic.helper.sms'])) {
            return $container->services['mautic.helper.sms'];
        }
        $b = ($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService());

        if (isset($container->services['mautic.helper.sms'])) {
            return $container->services['mautic.helper.sms'];
        }
        $c = ($container->services['mautic.sms.model.sms'] ?? $container->load('getMautic_Sms_Model_SmsService'));

        if (isset($container->services['mautic.helper.sms'])) {
            return $container->services['mautic.helper.sms'];
        }
        $d = ($container->services['mautic.helper.integration'] ?? $container->getMautic_Helper_IntegrationService());

        if (isset($container->services['mautic.helper.sms'])) {
            return $container->services['mautic.helper.sms'];
        }

        return $container->services['mautic.helper.sms'] = new \Mautic\SmsBundle\Helper\SmsHelper($a, $b, ($container->services['mautic.helper.phone_number'] ?? ($container->services['mautic.helper.phone_number'] = new \Mautic\CoreBundle\Helper\PhoneNumberHelper())), $c, $d, ($container->services['mautic.lead.model.dnc'] ?? $container->getMautic_Lead_Model_DncService()));
    }
}