<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSortableListTransformerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Form\DataTransformer\SortableListTransformer' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Form\DataTransformer\SortableListTransformer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Form\\DataTransformer\\SortableListTransformer'] = new \Mautic\CoreBundle\Form\DataTransformer\SortableListTransformer();
    }
}
