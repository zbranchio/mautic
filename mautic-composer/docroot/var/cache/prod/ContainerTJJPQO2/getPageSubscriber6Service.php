<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPageSubscriber6Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PageBundle\EventListener\PageSubscriber' shared autowired service.
     *
     * @return \Mautic\PageBundle\EventListener\PageSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\CoreBundle\\Twig\\Helper\\AssetsHelper'] ?? $container->getAssetsHelperService());

        if (isset($container->services['Mautic\\PageBundle\\EventListener\\PageSubscriber'])) {
            return $container->services['Mautic\\PageBundle\\EventListener\\PageSubscriber'];
        }
        $b = ($container->services['Mautic\\CoreBundle\\Model\\AuditLogModel'] ?? $container->getAuditLogModelService());

        if (isset($container->services['Mautic\\PageBundle\\EventListener\\PageSubscriber'])) {
            return $container->services['Mautic\\PageBundle\\EventListener\\PageSubscriber'];
        }
        $c = ($container->services['Mautic\\PageBundle\\Model\\PageModel'] ?? $container->getPageModelService());

        if (isset($container->services['Mautic\\PageBundle\\EventListener\\PageSubscriber'])) {
            return $container->services['Mautic\\PageBundle\\EventListener\\PageSubscriber'];
        }

        return $container->services['Mautic\\PageBundle\\EventListener\\PageSubscriber'] = new \Mautic\PageBundle\EventListener\PageSubscriber($a, ($container->services['mautic.helper.ip_lookup'] ?? $container->getMautic_Helper_IpLookupService()), $b, $c, ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), ($container->services['Mautic\\PageBundle\\Entity\\HitRepository'] ?? $container->load('getHitRepositoryService')), ($container->services['Mautic\\PageBundle\\Entity\\PageRepository'] ?? $container->load('getPageRepositoryService')), ($container->services['Mautic\\PageBundle\\Entity\\RedirectRepository'] ?? $container->getRedirectRepositoryService()), ($container->services['Mautic\\LeadBundle\\Entity\\LeadRepository'] ?? $container->load('getLeadRepository3Service')));
    }
}
