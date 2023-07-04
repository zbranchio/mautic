<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessageQueueSubscriber2Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\SmsBundle\EventListener\MessageQueueSubscriber' shared autowired service.
     *
     * @return \Mautic\SmsBundle\EventListener\MessageQueueSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\SmsBundle\\Model\\SmsModel'] ?? $container->load('getSmsModelService'));

        if (isset($container->services['Mautic\\SmsBundle\\EventListener\\MessageQueueSubscriber'])) {
            return $container->services['Mautic\\SmsBundle\\EventListener\\MessageQueueSubscriber'];
        }

        return $container->services['Mautic\\SmsBundle\\EventListener\\MessageQueueSubscriber'] = new \Mautic\SmsBundle\EventListener\MessageQueueSubscriber($a);
    }
}
