<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLightsaml_Container_BuildService extends AppKernelProdContainer
{
    /*
     * Gets the public 'lightsaml.container.build' shared service.
     *
     * @return \LightSaml\SymfonyBridgeBundle\Bridge\Container\BuildContainer
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.security.saml.id_store'] ?? $container->load('getMautic_Security_Saml_IdStoreService'));

        if (isset($container->services['lightsaml.container.build'])) {
            return $container->services['lightsaml.container.build'];
        }
        $b = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['lightsaml.container.build'])) {
            return $container->services['lightsaml.container.build'];
        }
        $c = ($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService());
        $d = ($container->privates['lightsaml.system.time_provider'] ?? ($container->privates['lightsaml.system.time_provider'] = new \LightSaml\Provider\TimeProvider\SystemTimeProvider()));
        $e = new \Symfony\Component\EventDispatcher\EventDispatcher();
        $f = new \LightSaml\Store\TrustOptions\CompositeTrustOptionsStore();
        $f->add(($container->services['mautic.security.saml.trust_store'] ?? $container->load('getMautic_Security_Saml_TrustStoreService')));
        $g = new \LightSaml\Store\Sso\SsoStateSessionStore($c, 'samlsso');
        $h = new \LightSaml\Validator\Model\NameId\NameIdValidator();
        $i = $container->load('getLightsaml_Service_CredentialResolverService');
        $j = new \LightSaml\Resolver\Endpoint\CompositeEndpointResolver();
        $j->add(new \LightSaml\Resolver\Endpoint\BindingEndpointResolver());
        $j->add(new \LightSaml\Resolver\Endpoint\DescriptorTypeEndpointResolver());
        $j->add(new \LightSaml\Resolver\Endpoint\ServiceTypeEndpointResolver());
        $j->add(new \LightSaml\Resolver\Endpoint\IndexEndpointResolver());
        $j->add(new \LightSaml\Resolver\Endpoint\LocationEndpointResolver());
        $k = ($container->privates['lightsaml.own.credential_store'] ?? $container->load('getLightsaml_Own_CredentialStoreService'));

        return $container->services['lightsaml.container.build'] = new \LightSaml\SymfonyBridgeBundle\Bridge\Container\BuildContainer(new \LightSaml\SymfonyBridgeBundle\Bridge\Container\SystemContainer(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), $c, $d, $e, new \Psr\Log\NullLogger()), new \LightSaml\SymfonyBridgeBundle\Bridge\Container\PartyContainer(($container->privates['lightsaml.party.idp_entity_descriptor_store'] ?? $container->load('getLightsaml_Party_IdpEntityDescriptorStoreService')), ($container->privates['lightsaml.party.sp_entity_descriptor_store'] ?? ($container->privates['lightsaml.party.sp_entity_descriptor_store'] = new \LightSaml\Store\EntityDescriptor\CompositeEntityDescriptorStore())), $f), new \LightSaml\SymfonyBridgeBundle\Bridge\Container\StoreContainer(new \LightSaml\Store\Request\RequestStateSessionStore($c, 'main', 'saml_request_state_'), $a, $g), new \LightSaml\SymfonyBridgeBundle\Bridge\Container\ProviderContainer(new \LightSaml\Provider\Attribute\FixedAttributeValueProvider(), new \LightSaml\Provider\Session\FixedSessionInfoProvider(), new \LightSaml\Provider\NameID\FixedNameIdProvider()), new \LightSaml\SymfonyBridgeBundle\Bridge\Container\CredentialContainer(($container->privates['lightsaml.credential.credential_store'] ?? $container->load('getLightsaml_Credential_CredentialStoreService'))), new \LightSaml\SymfonyBridgeBundle\Bridge\Container\ServiceContainer(new \LightSaml\Validator\Model\Assertion\AssertionValidator($h, new \LightSaml\Validator\Model\Subject\SubjectValidator($h), new \LightSaml\Validator\Model\Statement\StatementValidator()), new \LightSaml\Validator\Model\Assertion\AssertionTimeValidator(), new \LightSaml\Resolver\Signature\OwnSignatureResolver($i), $j, $h, new \LightSaml\Binding\BindingFactory($e), new \LightSaml\Validator\Model\Signature\SignatureValidator($i), $i, new \LightSaml\Resolver\Session\SessionProcessor($g, $d)), new \LightSaml\SymfonyBridgeBundle\Bridge\Container\OwnContainer(\LightSaml\SymfonyBridgeBundle\Factory\OwnEntityDescriptorProviderFactory::build($container->getEnv('MAUTIC_SAML_ENTITY_ID'), $b, 'lightsaml_sp.login_check', NULL, $k), $k, $container->getEnv('MAUTIC_SAML_ENTITY_ID')));
    }
}
