<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLightsaml_Service_CredentialResolverService extends AppKernelProdContainer
{
    /*
     * Gets the private 'lightsaml.service.credential_resolver' shared service.
     *
     * @return \LightSaml\Resolver\Credential\CompositeFilterResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        return (new \LightSaml\Resolver\Credential\Factory\CredentialResolverFactory(($container->privates['lightsaml.credential.credential_store'] ?? $container->load('getLightsaml_Credential_CredentialStoreService'))))->build();
    }
}
