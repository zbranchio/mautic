<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TbZVWCOService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.TbZVWCO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TbZVWCO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'parametersHelper' => ['services', 'mautic.helper.core_parameters', 'getMautic_Helper_CoreParametersService', false],
            'uploaderHelper' => ['services', 'oneup_uploader.templating.uploader_helper', 'getOneupUploader_Templating_UploaderHelperService', false],
        ], [
            'parametersHelper' => '?',
            'uploaderHelper' => '?',
        ]);
    }
}
