<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Citrix_Model_CitrixService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.citrix.model.citrix' shared service.
     *
     * @return \MauticPlugin\MauticCitrixBundle\Model\CitrixModel
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService());

        if (isset($container->services['mautic.citrix.model.citrix'])) {
            return $container->services['mautic.citrix.model.citrix'];
        }
        $b = ($container->services['Mautic\\CampaignBundle\\Model\\EventModel'] ?? $container->load('getEventModelService'));

        if (isset($container->services['mautic.citrix.model.citrix'])) {
            return $container->services['mautic.citrix.model.citrix'];
        }

        return $container->services['mautic.citrix.model.citrix'] = new \MauticPlugin\MauticCitrixBundle\Model\CitrixModel($a, $b);
    }
}