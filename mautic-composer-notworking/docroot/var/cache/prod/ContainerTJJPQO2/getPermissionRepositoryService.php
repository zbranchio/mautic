<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPermissionRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\UserBundle\Entity\PermissionRepository' shared autowired service.
     *
     * @return \Mautic\UserBundle\Entity\PermissionRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\UserBundle\\Entity\\PermissionRepository'] = new \Mautic\UserBundle\Entity\PermissionRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
