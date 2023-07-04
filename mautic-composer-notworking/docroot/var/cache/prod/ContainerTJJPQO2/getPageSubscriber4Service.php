<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPageSubscriber4Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\FormBundle\EventListener\PageSubscriber' shared autowired service.
     *
     * @return \Mautic\FormBundle\EventListener\PageSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\FormBundle\\Model\\FormModel'] ?? $container->getFormModelService());

        if (isset($container->services['Mautic\\FormBundle\\EventListener\\PageSubscriber'])) {
            return $container->services['Mautic\\FormBundle\\EventListener\\PageSubscriber'];
        }
        $b = ($container->services['mautic.helper.token_builder.factory'] ?? $container->load('getMautic_Helper_TokenBuilder_FactoryService'));

        if (isset($container->services['Mautic\\FormBundle\\EventListener\\PageSubscriber'])) {
            return $container->services['Mautic\\FormBundle\\EventListener\\PageSubscriber'];
        }

        return $container->services['Mautic\\FormBundle\\EventListener\\PageSubscriber'] = new \Mautic\FormBundle\EventListener\PageSubscriber($a, $b, ($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['mautic.security'] ?? $container->getMautic_SecurityService()));
    }
}
