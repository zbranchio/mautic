<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmailClickDecisionTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\Form\Type\EmailClickDecisionType' shared autowired service.
     *
     * @return \Mautic\EmailBundle\Form\Type\EmailClickDecisionType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\EmailBundle\\Form\\Type\\EmailClickDecisionType'] = new \Mautic\EmailBundle\Form\Type\EmailClickDecisionType();
    }
}
