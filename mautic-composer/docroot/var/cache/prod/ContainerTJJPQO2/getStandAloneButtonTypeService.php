<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStandAloneButtonTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Form\Type\StandAloneButtonType' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Form\Type\StandAloneButtonType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Form\\Type\\StandAloneButtonType'] = new \Mautic\CoreBundle\Form\Type\StandAloneButtonType();
    }
}