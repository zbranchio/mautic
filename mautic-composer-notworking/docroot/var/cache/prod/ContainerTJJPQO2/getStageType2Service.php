<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStageType2Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\StageBundle\Form\Type\StageType' shared autowired service.
     *
     * @return \Mautic\StageBundle\Form\Type\StageType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\StageBundle\\Form\\Type\\StageType'] = new \Mautic\StageBundle\Form\Type\StageType(($container->services['mautic.security'] ?? $container->getMautic_SecurityService()));
    }
}