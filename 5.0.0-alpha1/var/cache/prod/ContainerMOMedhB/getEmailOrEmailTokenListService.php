<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmailOrEmailTokenListService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\Validator\EmailOrEmailTokenList' shared autowired service.
     *
     * @return \Mautic\EmailBundle\Validator\EmailOrEmailTokenList
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\EmailBundle\\Validator\\EmailOrEmailTokenList'] = new \Mautic\EmailBundle\Validator\EmailOrEmailTokenList();
    }
}
