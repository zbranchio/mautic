<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineStepTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\InstallBundle\Configurator\Form\DoctrineStepType' shared autowired service.
     *
     * @return \Mautic\InstallBundle\Configurator\Form\DoctrineStepType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\InstallBundle\\Configurator\\Form\\DoctrineStepType'] = new \Mautic\InstallBundle\Configurator\Form\DoctrineStepType();
    }
}
