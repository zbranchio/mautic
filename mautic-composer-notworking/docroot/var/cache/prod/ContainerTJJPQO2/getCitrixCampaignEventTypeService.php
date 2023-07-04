<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCitrixCampaignEventTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticCitrixBundle\Form\Type\CitrixCampaignEventType' shared autowired service.
     *
     * @return \MauticPlugin\MauticCitrixBundle\Form\Type\CitrixCampaignEventType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.citrix.model.citrix'] ?? $container->load('getMautic_Citrix_Model_CitrixService'));

        if (isset($container->services['MauticPlugin\\MauticCitrixBundle\\Form\\Type\\CitrixCampaignEventType'])) {
            return $container->services['MauticPlugin\\MauticCitrixBundle\\Form\\Type\\CitrixCampaignEventType'];
        }

        return $container->services['MauticPlugin\\MauticCitrixBundle\\Form\\Type\\CitrixCampaignEventType'] = new \MauticPlugin\MauticCitrixBundle\Form\Type\CitrixCampaignEventType($a, ($container->services['translator'] ?? $container->getTranslator2Service()));
    }
}