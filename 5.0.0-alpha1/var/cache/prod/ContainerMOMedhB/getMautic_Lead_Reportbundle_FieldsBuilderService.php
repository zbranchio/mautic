<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Lead_Reportbundle_FieldsBuilderService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.lead.reportbundle.fields_builder' shared service.
     *
     * @return \Mautic\LeadBundle\Report\FieldsBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.lead.model.field'] ?? $container->getMautic_Lead_Model_FieldService());

        if (isset($container->services['mautic.lead.reportbundle.fields_builder'])) {
            return $container->services['mautic.lead.reportbundle.fields_builder'];
        }
        $b = ($container->services['mautic.lead.model.list'] ?? $container->getMautic_Lead_Model_ListService());

        if (isset($container->services['mautic.lead.reportbundle.fields_builder'])) {
            return $container->services['mautic.lead.reportbundle.fields_builder'];
        }
        $c = ($container->services['mautic.user.model.user'] ?? $container->getMautic_User_Model_UserService());

        if (isset($container->services['mautic.lead.reportbundle.fields_builder'])) {
            return $container->services['mautic.lead.reportbundle.fields_builder'];
        }
        $d = ($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService());

        if (isset($container->services['mautic.lead.reportbundle.fields_builder'])) {
            return $container->services['mautic.lead.reportbundle.fields_builder'];
        }

        return $container->services['mautic.lead.reportbundle.fields_builder'] = new \Mautic\LeadBundle\Report\FieldsBuilder($a, $b, $c, $d);
    }
}
