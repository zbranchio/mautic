<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConfigSubscriber9Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\EventListener\ConfigSubscriber' shared autowired service.
     *
     * @return \Mautic\LeadBundle\EventListener\ConfigSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\EventListener\\ConfigSubscriber'] = new \Mautic\LeadBundle\EventListener\ConfigSubscriber();
    }
}
