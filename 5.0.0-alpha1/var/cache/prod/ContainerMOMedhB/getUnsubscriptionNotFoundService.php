<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUnsubscriptionNotFoundService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\MonitoredEmail\Exception\UnsubscriptionNotFound' shared autowired service.
     *
     * @return \Mautic\EmailBundle\MonitoredEmail\Exception\UnsubscriptionNotFound
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\EmailBundle\\MonitoredEmail\\Exception\\UnsubscriptionNotFound'] = new \Mautic\EmailBundle\MonitoredEmail\Exception\UnsubscriptionNotFound();
    }
}
