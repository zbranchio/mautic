<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSlotImageTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Form\Type\SlotImageType' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Form\Type\SlotImageType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Form\\Type\\SlotImageType'] = new \Mautic\CoreBundle\Form\Type\SlotImageType();
    }
}
