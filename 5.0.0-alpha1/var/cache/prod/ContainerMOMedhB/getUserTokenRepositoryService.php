<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserTokenRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\UserBundle\Entity\UserTokenRepository' shared autowired service.
     *
     * @return \Mautic\UserBundle\Entity\UserTokenRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\UserBundle\\Entity\\UserTokenRepository'] = new \Mautic\UserBundle\Entity\UserTokenRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
