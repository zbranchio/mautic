<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMauticEmailBundleService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\MauticEmailBundle' shared autowired service.
     *
     * @return \Mautic\EmailBundle\MauticEmailBundle
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\EmailBundle\\MauticEmailBundle'] = new \Mautic\EmailBundle\MauticEmailBundle();
    }
}
