<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSmsSendTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\SmsBundle\Form\Type\SmsSendType' shared autowired service.
     *
     * @return \Mautic\SmsBundle\Form\Type\SmsSendType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['Mautic\\SmsBundle\\Form\\Type\\SmsSendType'])) {
            return $container->services['Mautic\\SmsBundle\\Form\\Type\\SmsSendType'];
        }

        return $container->services['Mautic\\SmsBundle\\Form\\Type\\SmsSendType'] = new \Mautic\SmsBundle\Form\Type\SmsSendType($a);
    }
}
