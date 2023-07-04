<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_Listener_FosOauthServer_ApiService extends AppKernelProdContainer
{
    /*
     * Gets the private 'security.authentication.listener.fos_oauth_server.api' shared service.
     *
     * @return \Mautic\ApiBundle\Security\OAuth2\Firewall\OAuthListener
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['security.authentication.manager'] ?? $container->load('getSecurity_Authentication_ManagerService'));

        if (isset($container->privates['security.authentication.listener.fos_oauth_server.api'])) {
            return $container->privates['security.authentication.listener.fos_oauth_server.api'];
        }

        return $container->privates['security.authentication.listener.fos_oauth_server.api'] = new \Mautic\ApiBundle\Security\OAuth2\Firewall\OAuthListener(($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), $a, ($container->privates['fos_oauth_server.server'] ?? $container->load('getFosOauthServer_ServerService')));
    }
}