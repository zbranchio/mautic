<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLatestVersionSupportedExceptionService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Helper\Update\Exception\LatestVersionSupportedException' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Helper\Update\Exception\LatestVersionSupportedException
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Helper\\Update\\Exception\\LatestVersionSupportedException'] = new \Mautic\CoreBundle\Helper\Update\Exception\LatestVersionSupportedException();
    }
}
