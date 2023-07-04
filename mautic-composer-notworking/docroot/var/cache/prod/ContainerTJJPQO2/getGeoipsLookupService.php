<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGeoipsLookupService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\IpLookup\GeoipsLookup' shared autowired service.
     *
     * @return \Mautic\CoreBundle\IpLookup\GeoipsLookup
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\IpLookup\\GeoipsLookup'] = new \Mautic\CoreBundle\IpLookup\GeoipsLookup(NULL, NULL, NULL, ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), ($container->services['mautic.http.client'] ?? ($container->services['mautic.http.client'] = new \GuzzleHttp\Client())));
    }
}
