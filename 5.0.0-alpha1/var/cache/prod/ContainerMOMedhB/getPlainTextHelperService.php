<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPlainTextHelperService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\Helper\PlainTextHelper' shared autowired service.
     *
     * @return \Mautic\EmailBundle\Helper\PlainTextHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\EmailBundle\\Helper\\PlainTextHelper'] = new \Mautic\EmailBundle\Helper\PlainTextHelper();
    }
}
