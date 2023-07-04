<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCampaignListTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\Form\Type\CampaignListType' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\Form\Type\CampaignListType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\CampaignBundle\\Model\\CampaignModel'] ?? $container->getCampaignModelService());

        if (isset($container->services['Mautic\\CampaignBundle\\Form\\Type\\CampaignListType'])) {
            return $container->services['Mautic\\CampaignBundle\\Form\\Type\\CampaignListType'];
        }

        return $container->services['Mautic\\CampaignBundle\\Form\\Type\\CampaignListType'] = new \Mautic\CampaignBundle\Form\Type\CampaignListType($a, ($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['mautic.security'] ?? $container->getMautic_SecurityService()));
    }
}