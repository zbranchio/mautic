<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBuildJsSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\EventListener\BuildJsSubscriber' shared autowired service.
     *
     * @return \Mautic\CoreBundle\EventListener\BuildJsSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\EventListener\\BuildJsSubscriber'] = new \Mautic\CoreBundle\EventListener\BuildJsSubscriber();
    }
}
