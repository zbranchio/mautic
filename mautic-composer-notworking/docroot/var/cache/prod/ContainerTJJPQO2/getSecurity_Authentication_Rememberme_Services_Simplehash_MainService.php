<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_Rememberme_Services_Simplehash_MainService extends AppKernelProdContainer
{
    /*
     * Gets the private 'security.authentication.rememberme.services.simplehash.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.authentication.rememberme.services.simplehash.main'] = new \Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->services['mautic.user.provider'] ?? $container->getMautic_User_ProviderService());
        }, 1), $container->getEnv('nullable:resolve:MAUTIC_REMEMBERME_KEY'), 'main', ['lifetime' => $container->getEnv('int:resolve:MAUTIC_REMEMBERME_LIFETIME'), 'path' => $container->getEnv('nullable:resolve:MAUTIC_REMEMBERME_PATH'), 'domain' => $container->getEnv('nullable:resolve:MAUTIC_REMEMBERME_DOMAIN'), 'samesite' => 'lax', 'name' => 'REMEMBERME', 'secure' => false, 'httponly' => true, 'always_remember_me' => false, 'remember_me_parameter' => '_remember_me'], ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService')));
    }
}
