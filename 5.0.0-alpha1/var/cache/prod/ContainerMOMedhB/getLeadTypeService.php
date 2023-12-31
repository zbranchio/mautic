<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeadTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Form\Type\LeadType' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Form\Type\LeadType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.lead.model.company'] ?? $container->getMautic_Lead_Model_CompanyService());

        if (isset($container->services['Mautic\\LeadBundle\\Form\\Type\\LeadType'])) {
            return $container->services['Mautic\\LeadBundle\\Form\\Type\\LeadType'];
        }

        return $container->services['Mautic\\LeadBundle\\Form\\Type\\LeadType'] = new \Mautic\LeadBundle\Form\Type\LeadType(($container->services['translator'] ?? $container->getTranslator2Service()), $a, ($container->services['mautic.permission.manager'] ?? $container->getMautic_Permission_ManagerService()));
    }
}
