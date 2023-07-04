<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAjaxController4Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\Controller\AjaxController' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\Controller\AjaxController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['Mautic\\CampaignBundle\\Controller\\AjaxController'] = $instance = new \Mautic\CampaignBundle\Controller\AjaxController(($container->services['mautic.helper.twig.date'] ?? $container->getMautic_Helper_Twig_DateService()), ($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->services['Mautic\\CoreBundle\\Factory\\MauticFactory'] ?? $container->getMauticFactoryService()), ($container->services['Mautic\\CoreBundle\\Factory\\ModelFactory'] ?? ($container->services['Mautic\\CoreBundle\\Factory\\ModelFactory'] = new \Mautic\CoreBundle\Factory\ModelFactory($container))), ($container->services['mautic.helper.user'] ?? $container->getMautic_Helper_UserService()), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['Mautic\\CoreBundle\\Translation\\Translator'] ?? $container->getTranslatorService()), ($container->services['mautic.core.service.flashbag'] ?? $container->getMautic_Core_Service_FlashbagService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['mautic.security'] ?? $container->getMautic_SecurityService()));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->get_ServiceLocator_Mx0UMmYService())->withContext('Mautic\\CampaignBundle\\Controller\\AjaxController', $container));

        return $instance;
    }
}