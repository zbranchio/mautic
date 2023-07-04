<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormConditionalSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\FormBundle\EventListener\FormConditionalSubscriber' shared autowired service.
     *
     * @return \Mautic\FormBundle\EventListener\FormConditionalSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.form.model.form'] ?? $container->getMautic_Form_Model_FormService());

        if (isset($container->services['Mautic\\FormBundle\\EventListener\\FormConditionalSubscriber'])) {
            return $container->services['Mautic\\FormBundle\\EventListener\\FormConditionalSubscriber'];
        }
        $b = ($container->services['mautic.form.model.field'] ?? $container->getMautic_Form_Model_FieldService());

        if (isset($container->services['Mautic\\FormBundle\\EventListener\\FormConditionalSubscriber'])) {
            return $container->services['Mautic\\FormBundle\\EventListener\\FormConditionalSubscriber'];
        }

        return $container->services['Mautic\\FormBundle\\EventListener\\FormConditionalSubscriber'] = new \Mautic\FormBundle\EventListener\FormConditionalSubscriber($a, $b);
    }
}
