<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProgressBarHelperService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Helper\ProgressBarHelper' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Helper\ProgressBarHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Helper\\ProgressBarHelper'] = new \Mautic\CoreBundle\Helper\ProgressBarHelper();
    }
}
