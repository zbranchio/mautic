<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFileExtensionConstraintService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\FormBundle\Validator\Constraint\FileExtensionConstraint' shared autowired service.
     *
     * @return \Mautic\FormBundle\Validator\Constraint\FileExtensionConstraint
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\FormBundle\\Validator\\Constraint\\FileExtensionConstraint'] = new \Mautic\FormBundle\Validator\Constraint\FileExtensionConstraint();
    }
}
