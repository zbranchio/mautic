<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPhoneNumberConstraintValidatorService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\FormBundle\Validator\Constraint\PhoneNumberConstraintValidator' shared autowired service.
     *
     * @return \Mautic\FormBundle\Validator\Constraint\PhoneNumberConstraintValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\FormBundle\\Validator\\Constraint\\PhoneNumberConstraintValidator'] = new \Mautic\FormBundle\Validator\Constraint\PhoneNumberConstraintValidator();
    }
}
