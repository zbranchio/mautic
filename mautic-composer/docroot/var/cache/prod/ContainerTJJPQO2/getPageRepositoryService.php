<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPageRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PageBundle\Entity\PageRepository' shared autowired service.
     *
     * @return \Mautic\PageBundle\Entity\PageRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\PageBundle\\Entity\\PageRepository'] = new \Mautic\PageBundle\Entity\PageRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
