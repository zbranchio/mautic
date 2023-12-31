<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_LeadList_Constraint_InUseService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.lead_list.constraint.in_use' shared service.
     *
     * @return \Mautic\LeadBundle\Form\Validator\Constraints\SegmentInUseValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.lead.model.list'] ?? $container->getMautic_Lead_Model_ListService());

        if (isset($container->services['mautic.lead_list.constraint.in_use'])) {
            return $container->services['mautic.lead_list.constraint.in_use'];
        }

        return $container->services['mautic.lead_list.constraint.in_use'] = new \Mautic\LeadBundle\Form\Validator\Constraints\SegmentInUseValidator($a);
    }
}
