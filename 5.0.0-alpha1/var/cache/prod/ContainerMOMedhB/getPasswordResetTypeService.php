<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPasswordResetTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\UserBundle\Form\Type\PasswordResetType' shared autowired service.
     *
     * @return \Mautic\UserBundle\Form\Type\PasswordResetType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\UserBundle\\Form\\Type\\PasswordResetType'] = new \Mautic\UserBundle\Form\Type\PasswordResetType();
    }
}
