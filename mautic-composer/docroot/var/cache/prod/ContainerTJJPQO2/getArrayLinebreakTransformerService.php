<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArrayLinebreakTransformerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Form\DataTransformer\ArrayLinebreakTransformer' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Form\DataTransformer\ArrayLinebreakTransformer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Form\\DataTransformer\\ArrayLinebreakTransformer'] = new \Mautic\CoreBundle\Form\DataTransformer\ArrayLinebreakTransformer();
    }
}
