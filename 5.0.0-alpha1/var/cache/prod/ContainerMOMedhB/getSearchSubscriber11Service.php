<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSearchSubscriber11Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\UserBundle\EventListener\SearchSubscriber' shared autowired service.
     *
     * @return \Mautic\UserBundle\EventListener\SearchSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.user.model.user'] ?? $container->getMautic_User_Model_UserService());

        if (isset($container->services['Mautic\\UserBundle\\EventListener\\SearchSubscriber'])) {
            return $container->services['Mautic\\UserBundle\\EventListener\\SearchSubscriber'];
        }
        $b = ($container->services['mautic.user.model.role'] ?? $container->getMautic_User_Model_RoleService());

        if (isset($container->services['Mautic\\UserBundle\\EventListener\\SearchSubscriber'])) {
            return $container->services['Mautic\\UserBundle\\EventListener\\SearchSubscriber'];
        }
        $c = ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService());

        if (isset($container->services['Mautic\\UserBundle\\EventListener\\SearchSubscriber'])) {
            return $container->services['Mautic\\UserBundle\\EventListener\\SearchSubscriber'];
        }

        return $container->services['Mautic\\UserBundle\\EventListener\\SearchSubscriber'] = new \Mautic\UserBundle\EventListener\SearchSubscriber($a, $b, ($container->services['mautic.security'] ?? $container->getMautic_SecurityService()), $c);
    }
}
