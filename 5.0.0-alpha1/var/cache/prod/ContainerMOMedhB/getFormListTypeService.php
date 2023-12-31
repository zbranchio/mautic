<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormListTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\FormBundle\Form\Type\FormListType' shared autowired service.
     *
     * @return \Mautic\FormBundle\Form\Type\FormListType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.form.model.form'] ?? $container->getMautic_Form_Model_FormService());

        if (isset($container->services['Mautic\\FormBundle\\Form\\Type\\FormListType'])) {
            return $container->services['Mautic\\FormBundle\\Form\\Type\\FormListType'];
        }

        return $container->services['Mautic\\FormBundle\\Form\\Type\\FormListType'] = new \Mautic\FormBundle\Form\Type\FormListType(($container->services['mautic.security'] ?? $container->getMautic_SecurityService()), $a, ($container->services['mautic.helper.user'] ?? $container->getMautic_Helper_UserService()));
    }
}
