<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRedirectListTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PageBundle\Form\Type\RedirectListType' shared autowired service.
     *
     * @return \Mautic\PageBundle\Form\Type\RedirectListType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\PageBundle\\Form\\Type\\RedirectListType'] = new \Mautic\PageBundle\Form\Type\RedirectListType(($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))));
    }
}