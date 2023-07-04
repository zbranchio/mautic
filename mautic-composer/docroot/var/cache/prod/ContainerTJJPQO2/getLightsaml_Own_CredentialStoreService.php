<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLightsaml_Own_CredentialStoreService extends AppKernelProdContainer
{
    /*
     * Gets the private 'lightsaml.own.credential_store' shared service.
     *
     * @return \LightSaml\Store\Credential\CompositeCredentialStore
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['lightsaml.own.credential_store'] = $instance = new \LightSaml\Store\Credential\CompositeCredentialStore();

        $instance->add(($container->services['mautic.security.saml.credential_store'] ?? $container->load('getMautic_Security_Saml_CredentialStoreService')));

        return $instance;
    }
}
