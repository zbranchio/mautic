<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_ManagerService extends AppKernelProdContainer
{
    /*
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     *
     * @deprecated Since symfony/security-bundle 5.3: The "security.authentication.manager" service is deprecated, use the new authenticator system instead.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('symfony/security-bundle', '5.3', 'The "security.authentication.manager" service is deprecated, use the new authenticator system instead.');

        $container->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.authentication.provider.anonymous.dev'] ?? $container->load('getSecurity_Authentication_Provider_Anonymous_DevService'));
            yield 1 => ($container->privates['security.authentication.provider.anonymous.login'] ?? $container->load('getSecurity_Authentication_Provider_Anonymous_LoginService'));
            yield 2 => ($container->privates['security.authentication.provider.mautic.sso_login'] ?? $container->load('getSecurity_Authentication_Provider_Mautic_SsoLoginService'));
            yield 3 => ($container->privates['security.authentication.provider.anonymous.sso_login'] ?? $container->load('getSecurity_Authentication_Provider_Anonymous_SsoLoginService'));
            yield 4 => ($container->privates['security.authentication.provider.anonymous.saml_login'] ?? $container->load('getSecurity_Authentication_Provider_Anonymous_SamlLoginService'));
            yield 5 => ($container->privates['security.authentication.provider.anonymous.saml_discovery'] ?? $container->load('getSecurity_Authentication_Provider_Anonymous_SamlDiscoveryService'));
            yield 6 => ($container->privates['security.authentication.provider.dao.oauth2_area'] ?? $container->load('getSecurity_Authentication_Provider_Dao_Oauth2AreaService'));
            yield 7 => ($container->privates['security.authentication.provider.anonymous.oauth2_area'] ?? $container->load('getSecurity_Authentication_Provider_Anonymous_Oauth2AreaService'));
            yield 8 => ($container->privates['security.authentication.provider.fos_oauth_server.api'] ?? $container->load('getSecurity_Authentication_Provider_FosOauthServer_ApiService'));
            yield 9 => ($container->privates['security.authentication.provider.mautic.api'] ?? $container->load('getSecurity_Authentication_Provider_Mautic_ApiService'));
            yield 10 => ($container->privates['security.authentication.provider.dao.api'] ?? $container->load('getSecurity_Authentication_Provider_Dao_ApiService'));
            yield 11 => ($container->privates['security.authentication.provider.guard.main'] ?? $container->load('getSecurity_Authentication_Provider_Guard_MainService'));
            yield 12 => ($container->privates['security.authentication.provider.fos_oauth_server.main'] ?? $container->load('getSecurity_Authentication_Provider_FosOauthServer_MainService'));
            yield 13 => ($container->privates['security.authentication.provider.dao.main'] ?? $container->load('getSecurity_Authentication_Provider_Dao_MainService'));
            yield 14 => ($container->privates['security.authentication.provider.lightsaml_sp.main'] ?? $container->load('getSecurity_Authentication_Provider_LightsamlSp_MainService'));
            yield 15 => ($container->privates['security.authentication.provider.rememberme.main'] ?? $container->load('getSecurity_Authentication_Provider_Rememberme_MainService'));
            yield 16 => ($container->privates['security.authentication.provider.anonymous.public'] ?? $container->load('getSecurity_Authentication_Provider_Anonymous_PublicService'));
        }, 17), true);

        $instance->setEventDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));

        return $instance;
    }
}
