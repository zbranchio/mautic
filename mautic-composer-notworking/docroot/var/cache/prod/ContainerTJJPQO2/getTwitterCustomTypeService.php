<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwitterCustomTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticSocialBundle\Form\Type\TwitterCustomType' shared autowired service.
     *
     * @return \MauticPlugin\MauticSocialBundle\Form\Type\TwitterCustomType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['MauticPlugin\\MauticSocialBundle\\Form\\Type\\TwitterCustomType'] = new \MauticPlugin\MauticSocialBundle\Form\Type\TwitterCustomType();
    }
}
