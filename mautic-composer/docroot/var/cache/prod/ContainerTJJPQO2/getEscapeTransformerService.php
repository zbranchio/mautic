<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEscapeTransformerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ConfigBundle\Form\Type\EscapeTransformer' shared autowired service.
     *
     * @return \Mautic\ConfigBundle\Form\Type\EscapeTransformer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ConfigBundle\\Form\\Type\\EscapeTransformer'] = new \Mautic\ConfigBundle\Form\Type\EscapeTransformer($container->getEnv('json:resolve:MAUTIC_CONFIG_ALLOWED_PARAMETERS'));
    }
}
