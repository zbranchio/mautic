<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSmsTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\SmsBundle\Form\Type\SmsType' shared autowired service.
     *
     * @return \Mautic\SmsBundle\Form\Type\SmsType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\SmsBundle\\Form\\Type\\SmsType'] = new \Mautic\SmsBundle\Form\Type\SmsType(($container->services['mautic.permission.manager'] ?? $container->getMautic_Permission_ManagerService()));
    }
}
