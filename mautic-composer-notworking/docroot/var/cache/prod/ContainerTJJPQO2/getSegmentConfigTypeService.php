<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSegmentConfigTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Form\Type\SegmentConfigType' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Form\Type\SegmentConfigType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Form\\Type\\SegmentConfigType'] = new \Mautic\LeadBundle\Form\Type\SegmentConfigType();
    }
}
