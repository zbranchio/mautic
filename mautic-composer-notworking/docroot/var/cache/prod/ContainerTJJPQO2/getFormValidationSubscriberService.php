<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormValidationSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\FormBundle\EventListener\FormValidationSubscriber' shared autowired service.
     *
     * @return \Mautic\FormBundle\EventListener\FormValidationSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\FormBundle\\EventListener\\FormValidationSubscriber'] = new \Mautic\FormBundle\EventListener\FormValidationSubscriber(($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))));
    }
}
