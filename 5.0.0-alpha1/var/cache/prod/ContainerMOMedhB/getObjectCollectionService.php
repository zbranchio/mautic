<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getObjectCollectionService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\FormBundle\Collection\ObjectCollection' shared autowired service.
     *
     * @return \Mautic\FormBundle\Collection\ObjectCollection
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\FormBundle\\Collection\\ObjectCollection'] = new \Mautic\FormBundle\Collection\ObjectCollection();
    }
}
