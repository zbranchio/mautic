<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getModifyLeadTagsTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Form\Type\ModifyLeadTagsType' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Form\Type\ModifyLeadTagsType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Form\\Type\\ModifyLeadTagsType'] = new \Mautic\LeadBundle\Form\Type\ModifyLeadTagsType(($container->services['translator'] ?? $container->getTranslator2Service()));
    }
}
