<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebhookSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\EventListener\WebhookSubscriber' shared autowired service.
     *
     * @return \Mautic\EmailBundle\EventListener\WebhookSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.webhook.model.webhook'] ?? $container->load('getMautic_Webhook_Model_WebhookService'));

        if (isset($container->services['Mautic\\EmailBundle\\EventListener\\WebhookSubscriber'])) {
            return $container->services['Mautic\\EmailBundle\\EventListener\\WebhookSubscriber'];
        }

        return $container->services['Mautic\\EmailBundle\\EventListener\\WebhookSubscriber'] = new \Mautic\EmailBundle\EventListener\WebhookSubscriber($a);
    }
}