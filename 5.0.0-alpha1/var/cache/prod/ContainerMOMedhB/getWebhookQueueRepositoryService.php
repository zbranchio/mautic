<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebhookQueueRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\WebhookBundle\Entity\WebhookQueueRepository' shared autowired service.
     *
     * @return \Mautic\WebhookBundle\Entity\WebhookQueueRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\WebhookBundle\\Entity\\WebhookQueueRepository'] = new \Mautic\WebhookBundle\Entity\WebhookQueueRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
