<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_DynamicContent_Repository_StatService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.dynamicContent.repository.stat' shared service.
     *
     * @return \Doctrine\ORM\EntityRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.dynamicContent.repository.stat'] = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService())->getRepository('Mautic\\DynamicContentBundle\\Entity\\Stat');
    }
}
