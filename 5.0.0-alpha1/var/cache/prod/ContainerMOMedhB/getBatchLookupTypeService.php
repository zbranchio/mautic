<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBatchLookupTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticClearbitBundle\Form\Type\BatchLookupType' shared autowired service.
     *
     * @return \MauticPlugin\MauticClearbitBundle\Form\Type\BatchLookupType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['MauticPlugin\\MauticClearbitBundle\\Form\\Type\\BatchLookupType'] = new \MauticPlugin\MauticClearbitBundle\Form\Type\BatchLookupType();
    }
}
