<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMauticReportBundleService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ReportBundle\MauticReportBundle' shared autowired service.
     *
     * @return \Mautic\ReportBundle\MauticReportBundle
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ReportBundle\\MauticReportBundle'] = new \Mautic\ReportBundle\MauticReportBundle();
    }
}