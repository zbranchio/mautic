<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\AssetBundle\Entity\AssetRepository' shared autowired service.
     *
     * @return \Mautic\AssetBundle\Entity\AssetRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\AssetBundle\\Entity\\AssetRepository'] = new \Mautic\AssetBundle\Entity\AssetRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
