<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPermissionListTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\UserBundle\Form\Type\PermissionListType' shared autowired service.
     *
     * @return \Mautic\UserBundle\Form\Type\PermissionListType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\UserBundle\\Form\\Type\\PermissionListType'] = new \Mautic\UserBundle\Form\Type\PermissionListType();
    }
}
