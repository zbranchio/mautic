<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeviceTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Form\Type\DeviceType' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Form\Type\DeviceType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Form\\Type\\DeviceType'] = new \Mautic\LeadBundle\Form\Type\DeviceType();
    }
}
