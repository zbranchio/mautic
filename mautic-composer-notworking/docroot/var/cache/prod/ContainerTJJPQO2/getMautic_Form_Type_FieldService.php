<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Form_Type_FieldService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.form.type.field' shared service.
     *
     * @return \Mautic\FormBundle\Form\Type\FieldType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.form.collector.object'] ?? $container->load('getMautic_Form_Collector_ObjectService'));

        if (isset($container->services['mautic.form.type.field'])) {
            return $container->services['mautic.form.type.field'];
        }
        $b = ($container->services['mautic.form.collector.field'] ?? $container->getMautic_Form_Collector_FieldService());

        if (isset($container->services['mautic.form.type.field'])) {
            return $container->services['mautic.form.type.field'];
        }

        $container->services['mautic.form.type.field'] = $instance = new \Mautic\FormBundle\Form\Type\FieldType(($container->services['translator'] ?? $container->getTranslator2Service()), $a, $b, ($container->services['mautic.form.collector.already.mapped.field'] ?? $container->load('getMautic_Form_Collector_Already_Mapped_FieldService')));

        $instance->setFieldModel(($container->services['Mautic\\FormBundle\\Model\\FieldModel'] ?? $container->getFieldModelService()));
        $instance->setFormModel(($container->services['Mautic\\FormBundle\\Model\\FormModel'] ?? $container->getFormModelService()));

        return $instance;
    }
}
