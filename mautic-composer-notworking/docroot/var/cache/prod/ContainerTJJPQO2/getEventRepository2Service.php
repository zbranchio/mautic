<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEventRepository2Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\WebhookBundle\Entity\EventRepository' shared autowired service.
     *
     * @return \Mautic\WebhookBundle\Entity\EventRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\WebhookBundle\\Entity\\EventRepository'] = new \Mautic\WebhookBundle\Entity\EventRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
