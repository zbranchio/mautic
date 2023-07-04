<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Integrations_AuthProvider_Oauth2twoleggedService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.integrations.auth_provider.oauth2twolegged' shared service.
     *
     * @return \Mautic\IntegrationsBundle\Auth\Provider\Oauth2TwoLegged\HttpFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.integrations.auth_provider.oauth2twolegged'] = new \Mautic\IntegrationsBundle\Auth\Provider\Oauth2TwoLegged\HttpFactory();
    }
}
