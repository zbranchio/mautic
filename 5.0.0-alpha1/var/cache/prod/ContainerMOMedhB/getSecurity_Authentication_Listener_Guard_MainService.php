<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_Listener_Guard_MainService extends AppKernelProdContainer
{
    /*
     * Gets the private 'security.authentication.listener.guard.main' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener
     *
     * @deprecated Since symfony/security-bundle 5.3: The "security.authentication.listener.guard.main" service is deprecated, use the new authenticator system instead.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('symfony/security-bundle', '5.3', 'The "security.authentication.listener.guard.main" service is deprecated, use the new authenticator system instead.');

        $a = ($container->privates['security.authentication.guard_handler'] ?? $container->load('getSecurity_Authentication_GuardHandlerService'));

        if (isset($container->privates['security.authentication.listener.guard.main'])) {
            return $container->privates['security.authentication.listener.guard.main'];
        }
        $b = ($container->privates['security.authentication.manager'] ?? $container->load('getSecurity_Authentication_ManagerService'));

        if (isset($container->privates['security.authentication.listener.guard.main'])) {
            return $container->privates['security.authentication.listener.guard.main'];
        }

        $container->privates['security.authentication.listener.guard.main'] = $instance = new \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener($a, $b, 'main', new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->services['mautic.user.form_guard_authenticator'] ?? $container->load('getMautic_User_FormGuardAuthenticatorService'));
        }, 1), ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService')), true, ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()));

        $instance->setRememberMeServices(($container->privates['security.authentication.rememberme.services.simplehash.main'] ?? $container->load('getSecurity_Authentication_Rememberme_Services_Simplehash_MainService')));

        return $instance;
    }
}
