<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeadEventsService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\LeadEvents' shared autowired service.
     *
     * @return \Mautic\LeadBundle\LeadEvents
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\LeadEvents'] = new \Mautic\LeadBundle\LeadEvents();
    }
}
