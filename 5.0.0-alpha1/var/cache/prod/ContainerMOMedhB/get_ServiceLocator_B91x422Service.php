<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_B91x422Service extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.b91x422' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.b91x422'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'analyticsHelper' => ['services', 'mautic.helper.twig.analytics', 'getMautic_Helper_Twig_AnalyticsService', false],
            'assetsHelper' => ['services', 'Mautic\\CoreBundle\\Twig\\Helper\\AssetsHelper', 'getAssetsHelperService', false],
            'contactRequestHelper' => ['services', 'mautic.lead.helper.contact_request_helper', 'getMautic_Lead_Helper_ContactRequestHelperService', false],
            'cookieHelper' => ['services', 'mautic.helper.cookie', 'getMautic_Helper_CookieService', false],
            'tracking404Model' => ['services', 'mautic.page.model.tracking.404', 'getMautic_Page_Model_Tracking_404Service', true],
        ], [
            'analyticsHelper' => '?',
            'assetsHelper' => 'Mautic\\CoreBundle\\Twig\\Helper\\AssetsHelper',
            'contactRequestHelper' => '?',
            'cookieHelper' => '?',
            'tracking404Model' => '?',
        ]);
    }
}