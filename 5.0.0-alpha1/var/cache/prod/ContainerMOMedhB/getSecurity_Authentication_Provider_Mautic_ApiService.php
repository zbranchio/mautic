<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_Provider_Mautic_ApiService extends AppKernelProdContainer
{
    /*
     * Gets the private 'security.authentication.provider.mautic.api' shared service.
     *
     * @return \Mautic\UserBundle\Security\Authenticator\PreAuthAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.helper.integration'] ?? $container->getMautic_Helper_IntegrationService());

        if (isset($container->privates['security.authentication.provider.mautic.api'])) {
            return $container->privates['security.authentication.provider.mautic.api'];
        }
        $b = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['security.authentication.provider.mautic.api'])) {
            return $container->privates['security.authentication.provider.mautic.api'];
        }
        $c = ($container->services['mautic.user.provider'] ?? $container->getMautic_User_ProviderService());

        if (isset($container->privates['security.authentication.provider.mautic.api'])) {
            return $container->privates['security.authentication.provider.mautic.api'];
        }

        return $container->privates['security.authentication.provider.mautic.api'] = new \Mautic\UserBundle\Security\Authenticator\PreAuthAuthenticator($a, $b, ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), $c, 'api');
    }
}
