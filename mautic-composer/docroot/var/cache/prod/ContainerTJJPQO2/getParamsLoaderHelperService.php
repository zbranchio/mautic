<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getParamsLoaderHelperService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Helper\ParamsLoaderHelper' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Helper\ParamsLoaderHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Helper\\ParamsLoaderHelper'] = new \Mautic\CoreBundle\Helper\ParamsLoaderHelper();
    }
}
