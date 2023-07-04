<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFrequencyActionModelService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ChannelBundle\Model\FrequencyActionModel' shared autowired service.
     *
     * @return \Mautic\ChannelBundle\Model\FrequencyActionModel
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ChannelBundle\\Model\\FrequencyActionModel'] = new \Mautic\ChannelBundle\Model\FrequencyActionModel(($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService()), ($container->services['Mautic\\LeadBundle\\Entity\\FrequencyRuleRepository'] ?? $container->load('getFrequencyRuleRepositoryService')));
    }
}
