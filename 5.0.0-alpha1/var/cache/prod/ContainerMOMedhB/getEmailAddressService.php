<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmailAddressService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Form\Validator\Constraints\EmailAddress' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Form\Validator\Constraints\EmailAddress
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Form\\Validator\\Constraints\\EmailAddress'] = new \Mautic\LeadBundle\Form\Validator\Constraints\EmailAddress();
    }
}
