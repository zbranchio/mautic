<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Social_Model_TweetService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.social.model.tweet' shared service.
     *
     * @return \MauticPlugin\MauticSocialBundle\Model\TweetModel
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['mautic.social.model.tweet'] = $instance = new \MauticPlugin\MauticSocialBundle\Model\TweetModel();

        $instance->setEntityManager(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
        $instance->setSecurity(($container->services['mautic.security'] ?? $container->getMautic_SecurityService()));
        $instance->setDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
        $instance->setTranslator(($container->services['translator'] ?? $container->getTranslator2Service()));
        $instance->setUserHelper(($container->services['mautic.helper.user'] ?? $container->getMautic_Helper_UserService()));
        $instance->setCoreParametersHelper(($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))));
        $instance->setRouter(($container->services['router'] ?? $container->getRouterService()));
        $instance->setLogger(($container->services['monolog.logger.mautic'] ?? $container->getMonolog_Logger_MauticService()));

        return $instance;
    }
}