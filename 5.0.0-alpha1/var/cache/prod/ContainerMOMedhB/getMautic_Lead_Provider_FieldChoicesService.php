<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Lead_Provider_FieldChoicesService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.lead.provider.fieldChoices' shared service.
     *
     * @return \Mautic\LeadBundle\Provider\FieldChoicesProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['mautic.lead.provider.fieldChoices'])) {
            return $container->services['mautic.lead.provider.fieldChoices'];
        }

        return $container->services['mautic.lead.provider.fieldChoices'] = new \Mautic\LeadBundle\Provider\FieldChoicesProvider($a);
    }
}
