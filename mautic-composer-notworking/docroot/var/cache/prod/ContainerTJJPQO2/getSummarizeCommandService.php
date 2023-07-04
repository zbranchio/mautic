<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSummarizeCommandService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\Command\SummarizeCommand' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\Command\SummarizeCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CampaignBundle\\Command\\SummarizeCommand'] = new \Mautic\CampaignBundle\Command\SummarizeCommand(($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['Mautic\\CampaignBundle\\Model\\SummaryModel'] ?? $container->load('getSummaryModelService')), ($container->services['mautic.helper.paths'] ?? $container->getMautic_Helper_PathsService()), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))));
    }
}
