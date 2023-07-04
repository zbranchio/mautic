<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExerciseHtmlPurifier_Twig_RuntimeService extends AppKernelProdContainer
{
    /*
     * Gets the private 'exercise_html_purifier.twig.runtime' shared service.
     *
     * @return \Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['exercise_html_purifier.twig.runtime'] = new \Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime(($container->privates['exercise_html_purifier.purifiers_registry'] ?? $container->load('getExerciseHtmlPurifier_PurifiersRegistryService')));
    }
}
