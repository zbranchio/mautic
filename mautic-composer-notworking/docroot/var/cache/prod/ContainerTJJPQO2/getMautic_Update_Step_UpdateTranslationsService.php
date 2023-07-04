<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Update_Step_UpdateTranslationsService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.update.step.update_translations' shared service.
     *
     * @return \Mautic\CoreBundle\Update\Step\UpdateTranslationsStep
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.update.step.update_translations'] = new \Mautic\CoreBundle\Update\Step\UpdateTranslationsStep(($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['Mautic\\CoreBundle\\Helper\\LanguageHelper'] ?? $container->load('getLanguageHelperService')), ($container->services['monolog.logger.mautic'] ?? $container->getMonolog_Logger_MauticService()));
    }
}
