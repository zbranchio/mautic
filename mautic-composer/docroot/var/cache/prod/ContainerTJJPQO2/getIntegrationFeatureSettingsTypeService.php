<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIntegrationFeatureSettingsTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\IntegrationsBundle\Form\Type\IntegrationFeatureSettingsType' shared autowired service.
     *
     * @return \Mautic\IntegrationsBundle\Form\Type\IntegrationFeatureSettingsType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\IntegrationsBundle\\Form\\Type\\IntegrationFeatureSettingsType'] = new \Mautic\IntegrationsBundle\Form\Type\IntegrationFeatureSettingsType();
    }
}
