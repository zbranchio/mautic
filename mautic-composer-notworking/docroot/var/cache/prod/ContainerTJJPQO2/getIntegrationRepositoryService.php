<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIntegrationRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PluginBundle\Entity\IntegrationRepository' shared autowired service.
     *
     * @return \Mautic\PluginBundle\Entity\IntegrationRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\PluginBundle\\Entity\\IntegrationRepository'] = new \Mautic\PluginBundle\Entity\IntegrationRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}