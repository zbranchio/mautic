<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStatRepository3Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\Entity\StatRepository' shared autowired service.
     *
     * @return \Mautic\EmailBundle\Entity\StatRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\EmailBundle\\Entity\\StatRepository'] = new \Mautic\EmailBundle\Entity\StatRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}