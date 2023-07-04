<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContactColumnsTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Form\Type\ContactColumnsType' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Form\Type\ContactColumnsType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.lead.columns.dictionary'] ?? $container->load('getMautic_Lead_Columns_DictionaryService'));

        if (isset($container->services['Mautic\\LeadBundle\\Form\\Type\\ContactColumnsType'])) {
            return $container->services['Mautic\\LeadBundle\\Form\\Type\\ContactColumnsType'];
        }

        return $container->services['Mautic\\LeadBundle\\Form\\Type\\ContactColumnsType'] = new \Mautic\LeadBundle\Form\Type\ContactColumnsType($a);
    }
}