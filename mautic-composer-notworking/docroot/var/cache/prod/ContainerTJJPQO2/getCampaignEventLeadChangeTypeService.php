<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCampaignEventLeadChangeTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\Form\Type\CampaignEventLeadChangeType' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\Form\Type\CampaignEventLeadChangeType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CampaignBundle\\Form\\Type\\CampaignEventLeadChangeType'] = new \Mautic\CampaignBundle\Form\Type\CampaignEventLeadChangeType();
    }
}
