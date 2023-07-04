<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPushTransifexCommandService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Command\PushTransifexCommand' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Command\PushTransifexCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Command\\PushTransifexCommand'] = new \Mautic\CoreBundle\Command\PushTransifexCommand(($container->services['Mautic\\CoreBundle\\Factory\\TransifexFactory'] ?? $container->load('getTransifexFactoryService')), ($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['Mautic\\CoreBundle\\Helper\\LanguageHelper'] ?? $container->load('getLanguageHelperService')));
    }
}
