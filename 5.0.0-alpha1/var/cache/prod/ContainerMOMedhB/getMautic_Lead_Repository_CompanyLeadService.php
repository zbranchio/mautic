<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Lead_Repository_CompanyLeadService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.lead.repository.company_lead' shared service.
     *
     * @return \Doctrine\ORM\EntityRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['mautic.lead.repository.company_lead'])) {
            return $container->services['mautic.lead.repository.company_lead'];
        }

        return $container->services['mautic.lead.repository.company_lead'] = $a->getRepository('Mautic\\LeadBundle\\Entity\\CompanyLead');
    }
}
