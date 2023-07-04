<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPostCountModelService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticSocialBundle\Model\PostCountModel' shared autowired service.
     *
     * @return \MauticPlugin\MauticSocialBundle\Model\PostCountModel
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['MauticPlugin\\MauticSocialBundle\\Model\\PostCountModel'])) {
            return $container->services['MauticPlugin\\MauticSocialBundle\\Model\\PostCountModel'];
        }
        $b = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['MauticPlugin\\MauticSocialBundle\\Model\\PostCountModel'])) {
            return $container->services['MauticPlugin\\MauticSocialBundle\\Model\\PostCountModel'];
        }
        $c = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['MauticPlugin\\MauticSocialBundle\\Model\\PostCountModel'])) {
            return $container->services['MauticPlugin\\MauticSocialBundle\\Model\\PostCountModel'];
        }

        return $container->services['MauticPlugin\\MauticSocialBundle\\Model\\PostCountModel'] = new \MauticPlugin\MauticSocialBundle\Model\PostCountModel($a, ($container->services['mautic.security'] ?? $container->getMautic_SecurityService()), $b, $c, ($container->services['Mautic\\CoreBundle\\Translation\\Translator'] ?? $container->getTranslatorService()), ($container->services['mautic.helper.user'] ?? $container->getMautic_Helper_UserService()), ($container->services['monolog.logger.mautic'] ?? $container->getMonolog_Logger_MauticService()), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))));
    }
}
