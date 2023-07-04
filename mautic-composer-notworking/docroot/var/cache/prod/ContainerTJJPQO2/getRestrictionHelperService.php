<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRestrictionHelperService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ConfigBundle\Form\Helper\RestrictionHelper' shared autowired service.
     *
     * @return \Mautic\ConfigBundle\Form\Helper\RestrictionHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ConfigBundle\\Form\\Helper\\RestrictionHelper'] = new \Mautic\ConfigBundle\Form\Helper\RestrictionHelper(($container->services['translator'] ?? $container->getTranslator2Service()), $container->parameters['mautic.security.restrictedConfigFields'], 'remove');
    }
}