<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\UserBundle\Entity\UserRepository' shared autowired service.
     *
     * @return \Mautic\UserBundle\Entity\UserRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\UserBundle\\Entity\\UserRepository'] = new \Mautic\UserBundle\Entity\UserRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
