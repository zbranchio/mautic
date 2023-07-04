<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Helper_Twig_VersionService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.helper.twig.version' shared service.
     *
     * @return \Mautic\CoreBundle\Twig\Helper\VersionHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.helper.twig.version'] = new \Mautic\CoreBundle\Twig\Helper\VersionHelper(($container->services['mautic.helper.app_version'] ?? ($container->services['mautic.helper.app_version'] = new \Mautic\CoreBundle\Helper\AppVersion())));
    }
}
