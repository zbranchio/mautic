<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Email_Helper_Request_StorageService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.email.helper.request.storage' shared service.
     *
     * @return \Mautic\EmailBundle\Helper\RequestStorageHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.email.helper.request.storage'] = new \Mautic\EmailBundle\Helper\RequestStorageHelper(($container->services['mautic.helper.cache_storage'] ?? $container->getMautic_Helper_CacheStorageService()));
    }
}
