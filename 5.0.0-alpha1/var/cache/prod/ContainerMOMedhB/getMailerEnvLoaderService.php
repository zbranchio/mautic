<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailerEnvLoaderService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\Loader\EnvVars\MailerEnvLoader' shared autowired service.
     *
     * @return \Mautic\EmailBundle\Loader\EnvVars\MailerEnvLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\EmailBundle\\Loader\\EnvVars\\MailerEnvLoader'] = new \Mautic\EmailBundle\Loader\EnvVars\MailerEnvLoader();
    }
}
