<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Di_EnvProcessor_NullableService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.di.env_processor.nullable' shared service.
     *
     * @return \Mautic\CoreBundle\DependencyInjection\EnvProcessor\NullableProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.di.env_processor.nullable'] = new \Mautic\CoreBundle\DependencyInjection\EnvProcessor\NullableProcessor();
    }
}
