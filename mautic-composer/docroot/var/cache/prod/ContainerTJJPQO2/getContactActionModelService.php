<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContactActionModelService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CategoryBundle\Model\ContactActionModel' shared autowired service.
     *
     * @return \Mautic\CategoryBundle\Model\ContactActionModel
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CategoryBundle\\Model\\ContactActionModel'] = new \Mautic\CategoryBundle\Model\ContactActionModel(($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService()));
    }
}