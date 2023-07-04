<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Integrations_Helper_ContactObjectService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.integrations.helper.contact_object' shared service.
     *
     * @return \Mautic\IntegrationsBundle\Sync\SyncDataExchange\Internal\ObjectHelper\ContactObjectHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService());

        if (isset($container->services['mautic.integrations.helper.contact_object'])) {
            return $container->services['mautic.integrations.helper.contact_object'];
        }
        $b = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->services['mautic.integrations.helper.contact_object'])) {
            return $container->services['mautic.integrations.helper.contact_object'];
        }
        $c = ($container->services['mautic.lead.model.field'] ?? $container->getMautic_Lead_Model_FieldService());

        if (isset($container->services['mautic.integrations.helper.contact_object'])) {
            return $container->services['mautic.integrations.helper.contact_object'];
        }
        $d = ($container->services['mautic.lead.model.company'] ?? $container->getMautic_Lead_Model_CompanyService());

        if (isset($container->services['mautic.integrations.helper.contact_object'])) {
            return $container->services['mautic.integrations.helper.contact_object'];
        }

        return $container->services['mautic.integrations.helper.contact_object'] = new \Mautic\IntegrationsBundle\Sync\SyncDataExchange\Internal\ObjectHelper\ContactObjectHelper($a, ($container->services['mautic.lead.repository.lead'] ?? $container->getMautic_Lead_Repository_LeadService()), $b, $c, ($container->services['mautic.lead.model.dnc'] ?? $container->getMautic_Lead_Model_DncService()), $d);
    }
}
