<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSlotPreferredChannelTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Form\Type\SlotPreferredChannelType' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Form\Type\SlotPreferredChannelType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Form\\Type\\SlotPreferredChannelType'] = new \Mautic\CoreBundle\Form\Type\SlotPreferredChannelType(($container->services['translator'] ?? $container->getTranslator2Service()));
    }
}