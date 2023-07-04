<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLightsaml_Party_IdpEntityDescriptorStoreService extends AppKernelProdContainer
{
    /*
     * Gets the private 'lightsaml.party.idp_entity_descriptor_store' shared service.
     *
     * @return \LightSaml\Store\EntityDescriptor\CompositeEntityDescriptorStore
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['lightsaml.party.idp_entity_descriptor_store'] = $instance = new \LightSaml\Store\EntityDescriptor\CompositeEntityDescriptorStore();

        $instance->add(($container->services['mautic.security.saml.entity_descriptor_store'] ?? $container->load('getMautic_Security_Saml_EntityDescriptorStoreService')));

        return $instance;
    }
}