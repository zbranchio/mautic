<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKeysTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PluginBundle\Form\Type\KeysType' shared autowired service.
     *
     * @return \Mautic\PluginBundle\Form\Type\KeysType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\PluginBundle\\Form\\Type\\KeysType'] = new \Mautic\PluginBundle\Form\Type\KeysType();
    }
}
