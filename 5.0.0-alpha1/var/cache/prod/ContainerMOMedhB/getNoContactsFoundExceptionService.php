<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNoContactsFoundExceptionService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\Executioner\Exception\NoContactsFoundException' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\Executioner\Exception\NoContactsFoundException
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CampaignBundle\\Executioner\\Exception\\NoContactsFoundException'] = new \Mautic\CampaignBundle\Executioner\Exception\NoContactsFoundException();
    }
}
