<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCampaignTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\Form\Type\CampaignType' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\Form\Type\CampaignType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CampaignBundle\\Form\\Type\\CampaignType'] = new \Mautic\CampaignBundle\Form\Type\CampaignType(($container->services['mautic.security'] ?? $container->getMautic_SecurityService()), ($container->services['translator'] ?? $container->getTranslator2Service()));
    }
}
