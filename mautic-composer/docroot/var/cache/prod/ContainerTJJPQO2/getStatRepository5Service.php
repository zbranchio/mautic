<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStatRepository5Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\SmsBundle\Entity\StatRepository' shared autowired service.
     *
     * @return \Mautic\SmsBundle\Entity\StatRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\SmsBundle\\Entity\\StatRepository'] = new \Mautic\SmsBundle\Entity\StatRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
