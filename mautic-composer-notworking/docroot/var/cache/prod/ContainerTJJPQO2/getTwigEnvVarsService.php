<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwigEnvVarsService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Loader\EnvVars\TwigEnvVars' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Loader\EnvVars\TwigEnvVars
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Loader\\EnvVars\\TwigEnvVars'] = new \Mautic\CoreBundle\Loader\EnvVars\TwigEnvVars();
    }
}
