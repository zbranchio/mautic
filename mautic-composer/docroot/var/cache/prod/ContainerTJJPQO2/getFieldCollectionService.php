<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFieldCollectionService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\FormBundle\Collection\FieldCollection' shared autowired service.
     *
     * @return \Mautic\FormBundle\Collection\FieldCollection
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\FormBundle\\Collection\\FieldCollection'] = new \Mautic\FormBundle\Collection\FieldCollection();
    }
}
