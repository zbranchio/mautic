<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUpdatePackageNotFoundExceptionService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Helper\Update\Exception\UpdatePackageNotFoundException' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Helper\Update\Exception\UpdatePackageNotFoundException
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Helper\\Update\\Exception\\UpdatePackageNotFoundException'] = new \Mautic\CoreBundle\Helper\Update\Exception\UpdatePackageNotFoundException();
    }
}