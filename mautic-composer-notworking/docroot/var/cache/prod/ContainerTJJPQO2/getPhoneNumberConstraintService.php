<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPhoneNumberConstraintService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\FormBundle\Validator\Constraint\PhoneNumberConstraint' shared autowired service.
     *
     * @return \Mautic\FormBundle\Validator\Constraint\PhoneNumberConstraint
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\FormBundle\\Validator\\Constraint\\PhoneNumberConstraint'] = new \Mautic\FormBundle\Validator\Constraint\PhoneNumberConstraint();
    }
}
