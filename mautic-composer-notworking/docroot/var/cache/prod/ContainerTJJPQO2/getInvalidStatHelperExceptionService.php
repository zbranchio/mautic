<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInvalidStatHelperExceptionService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\Stats\Exception\InvalidStatHelperException' shared autowired service.
     *
     * @return \Mautic\EmailBundle\Stats\Exception\InvalidStatHelperException
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\EmailBundle\\Stats\\Exception\\InvalidStatHelperException'] = new \Mautic\EmailBundle\Stats\Exception\InvalidStatHelperException();
    }
}
