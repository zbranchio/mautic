<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Security_AuthenticationHandlerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.security.authentication_handler' shared service.
     *
     * @return \Mautic\UserBundle\Security\Authentication\AuthenticationHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['mautic.security.authentication_handler'])) {
            return $container->services['mautic.security.authentication_handler'];
        }

        return $container->services['mautic.security.authentication_handler'] = new \Mautic\UserBundle\Security\Authentication\AuthenticationHandler($a);
    }
}
