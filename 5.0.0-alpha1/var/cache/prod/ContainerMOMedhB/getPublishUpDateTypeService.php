<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPublishUpDateTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Form\Type\PublishUpDateType' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Form\Type\PublishUpDateType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Form\\Type\\PublishUpDateType'] = new \Mautic\CoreBundle\Form\Type\PublishUpDateType();
    }
}
