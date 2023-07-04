<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Campaign_Repository_CampaignService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.campaign.repository.campaign' shared service.
     *
     * @return \Doctrine\ORM\EntityRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['mautic.campaign.repository.campaign'])) {
            return $container->services['mautic.campaign.repository.campaign'];
        }

        return $container->services['mautic.campaign.repository.campaign'] = $a->getRepository('Mautic\\CampaignBundle\\Entity\\Campaign');
    }
}
