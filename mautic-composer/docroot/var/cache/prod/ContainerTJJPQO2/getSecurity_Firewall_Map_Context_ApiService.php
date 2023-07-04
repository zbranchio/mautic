<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Map_Context_ApiService extends AppKernelProdContainer
{
    /*
     * Gets the private 'security.firewall.map.context.api' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));

        if (isset($container->privates['security.firewall.map.context.api'])) {
            return $container->privates['security.firewall.map.context.api'];
        }

        return $container->privates['security.firewall.map.context.api'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.channel_listener'] ?? $container->load('getSecurity_ChannelListenerService'));
            yield 1 => ($container->privates['security.authentication.listener.fos_oauth_server.api'] ?? $container->load('getSecurity_Authentication_Listener_FosOauthServer_ApiService'));
            yield 2 => ($container->privates['security.authentication.listener.mautic.api'] ?? $container->load('getSecurity_Authentication_Listener_Mautic_ApiService'));
            yield 3 => ($container->privates['security.authentication.listener.basic.api'] ?? $container->load('getSecurity_Authentication_Listener_Basic_ApiService'));
            yield 4 => ($container->privates['security.access_listener'] ?? $container->load('getSecurity_AccessListenerService'));
        }, 5), new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), ($container->privates['security.authentication.trust_resolver'] ?? ($container->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), $a, 'api', ($container->privates['fos_oauth_server.security.entry_point'] ?? $container->load('getFosOauthServer_Security_EntryPointService')), NULL, NULL, ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService')), true), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('api', 'security.user_checker', '.security.request_matcher.p4VlLPC', true, true, 'mautic.user.provider', NULL, 'fos_oauth_server.security.entry_point', NULL, NULL, [0 => 'fos_oauth', 1 => 'mautic_plugin_auth', 2 => 'http_basic'], NULL));
    }
}
