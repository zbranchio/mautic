<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImportCommandService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Command\ImportCommand' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Command\ImportCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Command\\ImportCommand'] = new \Mautic\LeadBundle\Command\ImportCommand(($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['mautic.lead.model.import'] ?? $container->load('getMautic_Lead_Model_ImportService')));
    }
}
