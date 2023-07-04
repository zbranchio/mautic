<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Security_Saml_UsernameMapperService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.security.saml.username_mapper' shared service.
     *
     * @return \Mautic\UserBundle\Security\SAML\User\UserMapper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.security.saml.username_mapper'] = new \Mautic\UserBundle\Security\SAML\User\UserMapper(['email' => $container->getEnv('nullable:resolve:MAUTIC_SAML_IDP_EMAIL_ATTRIBUTE'), 'username' => $container->getEnv('nullable:resolve:MAUTIC_SAML_IDP_USERNAME_ATTRIBUTE'), 'firstname' => $container->getEnv('nullable:resolve:MAUTIC_SAML_IDP_FIRSTNAME_ATTRIBUTE'), 'lastname' => $container->getEnv('nullable:resolve:MAUTIC_SAML_IDP_LASTNAME_ATTRIBUTE')]);
    }
}
