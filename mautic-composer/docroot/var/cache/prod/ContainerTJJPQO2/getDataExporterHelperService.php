<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDataExporterHelperService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Helper\DataExporterHelper' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Helper\DataExporterHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Helper\\DataExporterHelper'] = new \Mautic\CoreBundle\Helper\DataExporterHelper();
    }
}