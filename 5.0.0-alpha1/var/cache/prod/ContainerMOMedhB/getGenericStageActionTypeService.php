<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGenericStageActionTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\StageBundle\Form\Type\GenericStageActionType' shared autowired service.
     *
     * @return \Mautic\StageBundle\Form\Type\GenericStageActionType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\StageBundle\\Form\\Type\\GenericStageActionType'] = new \Mautic\StageBundle\Form\Type\GenericStageActionType();
    }
}
