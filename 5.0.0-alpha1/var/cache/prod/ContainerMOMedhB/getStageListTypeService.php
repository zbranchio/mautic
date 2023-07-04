<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStageListTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\StageBundle\Form\Type\StageListType' shared autowired service.
     *
     * @return \Mautic\StageBundle\Form\Type\StageListType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.stage.model.stage'] ?? $container->load('getMautic_Stage_Model_StageService'));

        if (isset($container->services['Mautic\\StageBundle\\Form\\Type\\StageListType'])) {
            return $container->services['Mautic\\StageBundle\\Form\\Type\\StageListType'];
        }

        return $container->services['Mautic\\StageBundle\\Form\\Type\\StageListType'] = new \Mautic\StageBundle\Form\Type\StageListType($a);
    }
}
