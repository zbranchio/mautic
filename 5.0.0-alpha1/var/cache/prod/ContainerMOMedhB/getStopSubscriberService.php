<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStopSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\SmsBundle\EventListener\StopSubscriber' shared autowired service.
     *
     * @return \Mautic\SmsBundle\EventListener\StopSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\SmsBundle\\EventListener\\StopSubscriber'] = new \Mautic\SmsBundle\EventListener\StopSubscriber(($container->services['mautic.lead.model.dnc'] ?? $container->getMautic_Lead_Model_DncService()));
    }
}
