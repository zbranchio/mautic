<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDsnTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\Form\Type\DsnType' shared autowired service.
     *
     * @return \Mautic\EmailBundle\Form\Type\DsnType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\EmailBundle\\Form\\Type\\DsnType'] = new \Mautic\EmailBundle\Form\Type\DsnType(($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))));
    }
}
