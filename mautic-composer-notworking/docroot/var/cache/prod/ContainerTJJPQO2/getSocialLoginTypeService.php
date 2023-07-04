<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSocialLoginTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticSocialBundle\Form\Type\SocialLoginType' shared autowired service.
     *
     * @return \MauticPlugin\MauticSocialBundle\Form\Type\SocialLoginType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.helper.integration'] ?? $container->getMautic_Helper_IntegrationService());

        if (isset($container->services['MauticPlugin\\MauticSocialBundle\\Form\\Type\\SocialLoginType'])) {
            return $container->services['MauticPlugin\\MauticSocialBundle\\Form\\Type\\SocialLoginType'];
        }
        $b = ($container->services['Mautic\\FormBundle\\Model\\FormModel'] ?? $container->getFormModelService());

        if (isset($container->services['MauticPlugin\\MauticSocialBundle\\Form\\Type\\SocialLoginType'])) {
            return $container->services['MauticPlugin\\MauticSocialBundle\\Form\\Type\\SocialLoginType'];
        }

        return $container->services['MauticPlugin\\MauticSocialBundle\\Form\\Type\\SocialLoginType'] = new \MauticPlugin\MauticSocialBundle\Form\Type\SocialLoginType($a, $b, ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))));
    }
}
