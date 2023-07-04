<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPublicController9Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\UserBundle\Controller\PublicController' shared autowired service.
     *
     * @return \Mautic\UserBundle\Controller\PublicController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['Mautic\\UserBundle\\Controller\\PublicController'] = $instance = new \Mautic\UserBundle\Controller\PublicController(($container->services['.container.private.form.factory'] ?? $container->get_Container_Private_Form_FactoryService()), ($container->services['mautic.helper.form.field_helper'] ?? $container->getMautic_Helper_Form_FieldHelperService()), ($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->services['Mautic\\CoreBundle\\Factory\\MauticFactory'] ?? $container->getMauticFactoryService()), ($container->services['Mautic\\CoreBundle\\Factory\\ModelFactory'] ?? ($container->services['Mautic\\CoreBundle\\Factory\\ModelFactory'] = new \Mautic\CoreBundle\Factory\ModelFactory($container))), ($container->services['mautic.helper.user'] ?? $container->getMautic_Helper_UserService()), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['Mautic\\CoreBundle\\Translation\\Translator'] ?? $container->getTranslatorService()), ($container->services['mautic.core.service.flashbag'] ?? $container->getMautic_Core_Service_FlashbagService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['mautic.security'] ?? $container->getMautic_SecurityService()));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->get_ServiceLocator_Mx0UMmYService())->withContext('Mautic\\UserBundle\\Controller\\PublicController', $container));

        return $instance;
    }
}
