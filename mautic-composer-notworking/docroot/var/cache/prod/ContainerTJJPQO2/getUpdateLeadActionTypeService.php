<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUpdateLeadActionTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Form\Type\UpdateLeadActionType' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Form\Type\UpdateLeadActionType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\LeadBundle\\Model\\FieldModel'] ?? $container->getFieldModel2Service());

        if (isset($container->services['Mautic\\LeadBundle\\Form\\Type\\UpdateLeadActionType'])) {
            return $container->services['Mautic\\LeadBundle\\Form\\Type\\UpdateLeadActionType'];
        }

        return $container->services['Mautic\\LeadBundle\\Form\\Type\\UpdateLeadActionType'] = new \Mautic\LeadBundle\Form\Type\UpdateLeadActionType($a);
    }
}