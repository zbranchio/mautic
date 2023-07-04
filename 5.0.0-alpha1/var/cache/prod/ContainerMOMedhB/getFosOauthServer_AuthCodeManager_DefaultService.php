<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosOauthServer_AuthCodeManager_DefaultService extends AppKernelProdContainer
{
    /*
     * Gets the private 'fos_oauth_server.auth_code_manager.default' shared service.
     *
     * @return \FOS\OAuthServerBundle\Entity\AuthCodeManager
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['fos_oauth_server.auth_code_manager.default'] = new \FOS\OAuthServerBundle\Entity\AuthCodeManager(($container->privates['fos_oauth_server.entity_manager'] ?? $container->load('getFosOauthServer_EntityManagerService')), 'Mautic\\ApiBundle\\Entity\\oAuth2\\AuthCode');
    }
}
