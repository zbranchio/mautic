<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSubmissionResultLoaderService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\FormBundle\Model\SubmissionResultLoader' shared autowired service.
     *
     * @return \Mautic\FormBundle\Model\SubmissionResultLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\FormBundle\\Model\\SubmissionResultLoader'] = new \Mautic\FormBundle\Model\SubmissionResultLoader(($container->services['mautic.permission.manager'] ?? $container->getMautic_Permission_ManagerService()));
    }
}
