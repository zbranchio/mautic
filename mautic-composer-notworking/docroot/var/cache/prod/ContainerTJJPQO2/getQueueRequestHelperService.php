<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getQueueRequestHelperService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\QueueBundle\Helper\QueueRequestHelper' shared autowired service.
     *
     * @return \Mautic\QueueBundle\Helper\QueueRequestHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\QueueBundle\\Helper\\QueueRequestHelper'] = new \Mautic\QueueBundle\Helper\QueueRequestHelper();
    }
}
