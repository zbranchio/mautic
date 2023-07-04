<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Lead_Validator_LengthService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.lead.validator.length' shared service.
     *
     * @return \Mautic\LeadBundle\Validator\Constraints\LengthValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.lead.validator.length'] = new \Mautic\LeadBundle\Validator\Constraints\LengthValidator();
    }
}
