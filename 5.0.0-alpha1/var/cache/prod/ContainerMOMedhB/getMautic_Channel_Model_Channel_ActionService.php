<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Channel_Model_Channel_ActionService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.channel.model.channel.action' shared service.
     *
     * @return \Mautic\ChannelBundle\Model\ChannelActionModel
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.channel.model.channel.action'] = new \Mautic\ChannelBundle\Model\ChannelActionModel(($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService()), ($container->services['mautic.lead.model.dnc'] ?? $container->getMautic_Lead_Model_DncService()), ($container->services['translator'] ?? $container->getTranslator2Service()));
    }
}
