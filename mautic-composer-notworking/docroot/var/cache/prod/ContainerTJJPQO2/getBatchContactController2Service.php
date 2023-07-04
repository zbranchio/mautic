<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBatchContactController2Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ChannelBundle\Controller\BatchContactController' shared autowired service.
     *
     * @return \Mautic\ChannelBundle\Controller\BatchContactController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['Mautic\\ChannelBundle\\Controller\\BatchContactController'] = $instance = new \Mautic\ChannelBundle\Controller\BatchContactController(($container->services['Mautic\\ChannelBundle\\Model\\ChannelActionModel'] ?? $container->load('getChannelActionModelService')), ($container->services['Mautic\\ChannelBundle\\Model\\FrequencyActionModel'] ?? $container->load('getFrequencyActionModelService')), ($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService()), ($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->services['Mautic\\CoreBundle\\Factory\\MauticFactory'] ?? $container->getMauticFactoryService()), ($container->services['Mautic\\CoreBundle\\Factory\\ModelFactory'] ?? $container->getModelFactoryService()), ($container->services['mautic.helper.user'] ?? $container->getMautic_Helper_UserService()), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['Mautic\\CoreBundle\\Translation\\Translator'] ?? $container->getTranslatorService()), ($container->services['mautic.core.service.flashbag'] ?? $container->getMautic_Core_Service_FlashbagService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['mautic.security'] ?? $container->getMautic_SecurityService()));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->get_ServiceLocator_Mx0UMmYService())->withContext('Mautic\\ChannelBundle\\Controller\\BatchContactController', $container));

        return $instance;
    }
}