<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwitterHashtagTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticSocialBundle\Form\Type\TwitterHashtagType' shared autowired service.
     *
     * @return \MauticPlugin\MauticSocialBundle\Form\Type\TwitterHashtagType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['MauticPlugin\\MauticSocialBundle\\Form\\Type\\TwitterHashtagType'] = new \MauticPlugin\MauticSocialBundle\Form\Type\TwitterHashtagType();
    }
}
