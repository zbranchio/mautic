<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeadRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticSocialBundle\Entity\LeadRepository' shared autowired service.
     *
     * @return \MauticPlugin\MauticSocialBundle\Entity\LeadRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['MauticPlugin\\MauticSocialBundle\\Entity\\LeadRepository'] = new \MauticPlugin\MauticSocialBundle\Entity\LeadRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
