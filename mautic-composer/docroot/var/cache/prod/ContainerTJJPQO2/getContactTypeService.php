<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContactTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\UserBundle\Form\Type\ContactType' shared autowired service.
     *
     * @return \Mautic\UserBundle\Form\Type\ContactType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\UserBundle\\Form\\Type\\ContactType'] = new \Mautic\UserBundle\Form\Type\ContactType();
    }
}
