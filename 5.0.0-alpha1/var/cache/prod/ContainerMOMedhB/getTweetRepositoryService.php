<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTweetRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticSocialBundle\Entity\TweetRepository' shared autowired service.
     *
     * @return \MauticPlugin\MauticSocialBundle\Entity\TweetRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['MauticPlugin\\MauticSocialBundle\\Entity\\TweetRepository'] = new \MauticPlugin\MauticSocialBundle\Entity\TweetRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
