<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getValueListParserService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Helper\ListParser\ValueListParser' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Helper\ListParser\ValueListParser
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Helper\\ListParser\\ValueListParser'] = new \Mautic\CoreBundle\Helper\ListParser\ValueListParser();
    }
}
