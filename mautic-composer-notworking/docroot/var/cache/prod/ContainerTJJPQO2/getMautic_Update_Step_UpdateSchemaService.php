<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Update_Step_UpdateSchemaService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.update.step.update_schema' shared service.
     *
     * @return \Mautic\CoreBundle\Update\Step\UpdateSchemaStep
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.update.step.update_schema'] = new \Mautic\CoreBundle\Update\Step\UpdateSchemaStep(($container->services['translator'] ?? $container->getTranslator2Service()), $container);
    }
}
