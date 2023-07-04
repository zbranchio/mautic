<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosOauthServer_ServerService extends AppKernelProdContainer
{
    /*
     * Gets the private 'fos_oauth_server.server' shared service.
     *
     * @return \OAuth2\OAuth2
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.user.provider'] ?? $container->getMautic_User_ProviderService());

        if (isset($container->privates['fos_oauth_server.server'])) {
            return $container->privates['fos_oauth_server.server'];
        }

        return $container->privates['fos_oauth_server.server'] = new \OAuth2\OAuth2(new \FOS\OAuthServerBundle\Storage\OAuthStorage(($container->privates['fos_oauth_server.client_manager.default'] ?? $container->load('getFosOauthServer_ClientManager_DefaultService')), ($container->privates['fos_oauth_server.access_token_manager.default'] ?? $container->load('getFosOauthServer_AccessTokenManager_DefaultService')), ($container->privates['fos_oauth_server.refresh_token_manager.default'] ?? $container->load('getFosOauthServer_RefreshTokenManager_DefaultService')), ($container->privates['fos_oauth_server.auth_code_manager.default'] ?? $container->load('getFosOauthServer_AuthCodeManager_DefaultService')), $a, ($container->privates['security.encoder_factory.generic'] ?? $container->load('getSecurity_EncoderFactory_GenericService'))), $container->getParameter('fos_oauth_server.server.options'));
    }
}
