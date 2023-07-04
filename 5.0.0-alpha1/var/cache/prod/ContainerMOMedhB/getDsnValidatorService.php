<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDsnValidatorService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\Validator\DsnValidator' shared autowired service.
     *
     * @return \Mautic\EmailBundle\Validator\DsnValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\EmailBundle\\Mailer\\Transport\\TransportFactory'] ?? $container->getTransportFactoryService());

        if (isset($container->services['Mautic\\EmailBundle\\Validator\\DsnValidator'])) {
            return $container->services['Mautic\\EmailBundle\\Validator\\DsnValidator'];
        }

        return $container->services['Mautic\\EmailBundle\\Validator\\DsnValidator'] = new \Mautic\EmailBundle\Validator\DsnValidator($a);
    }
}
