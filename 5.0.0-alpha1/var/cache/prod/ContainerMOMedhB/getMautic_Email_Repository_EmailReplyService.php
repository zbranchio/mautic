<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Email_Repository_EmailReplyService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.email.repository.emailReply' shared service.
     *
     * @return \Doctrine\ORM\EntityRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.email.repository.emailReply'] = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService())->getRepository('Mautic\\EmailBundle\\Entity\\EmailReply');
    }
}
