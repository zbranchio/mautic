<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_Metadata_TypedPropertiesDriverService extends AppKernelProdContainer
{
    /*
     * Gets the private 'jms_serializer.metadata.typed_properties_driver' shared service.
     *
     * @return \JMS\Serializer\Metadata\Driver\TypedPropertiesDriver
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = new \Metadata\Driver\FileLocator(['Mautic\\AssetBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/AssetBundle/Entity'), 'Mautic\\CampaignBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/CampaignBundle/Entity'), 'Mautic\\CategoryBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/CategoryBundle/Entity'), 'Mautic\\ChannelBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/ChannelBundle/Entity'), 'Mautic\\CoreBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Entity'), 'Mautic\\DashboardBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/DashboardBundle/Entity'), 'Mautic\\DynamicContentBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/DynamicContentBundle/Entity'), 'Mautic\\EmailBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/EmailBundle/Entity'), 'Mautic\\FormBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/FormBundle/Entity'), 'Mautic\\LeadBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Entity'), 'Mautic\\NotificationBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/NotificationBundle/Entity'), 'Mautic\\PageBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/PageBundle/Entity'), 'Mautic\\PointBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/PointBundle/Entity'), 'Mautic\\ReportBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/ReportBundle/Entity'), 'Mautic\\SmsBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/SmsBundle/Entity'), 'Mautic\\StageBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/StageBundle/Entity'), 'Mautic\\UserBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/UserBundle/Entity'), 'Mautic\\WebhookBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/WebhookBundle/Entity'), 'MauticPlugin\\MauticTagManagerBundle\\Entity' => (\dirname(__DIR__, 4).'/plugins/MauticTagManagerBundle/Entity'), 'MauticPlugin\\MauticFocusBundle\\Entity' => (\dirname(__DIR__, 4).'/plugins/MauticFocusBundle/Entity'), 'MauticPlugin\\MauticSocialBundle\\Entity' => (\dirname(__DIR__, 4).'/plugins/MauticSocialBundle/Entity')]);
        $b = new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(new \JMS\Serializer\Naming\CamelCaseNamingStrategy('', false));
        $c = ($container->privates['jms_serializer.type_parser'] ?? ($container->privates['jms_serializer.type_parser'] = new \JMS\Serializer\Type\Parser()));
        $d = ($container->privates['jms_serializer.expression_evaluator'] ?? $container->load('getJmsSerializer_ExpressionEvaluatorService'));

        return $container->privates['jms_serializer.metadata.typed_properties_driver'] = new \JMS\Serializer\Metadata\Driver\TypedPropertiesDriver(new \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver(new \Metadata\Driver\DriverChain([0 => new \JMS\Serializer\Metadata\Driver\YamlDriver($a, $b, $c, $d), 1 => new \JMS\Serializer\Metadata\Driver\XmlDriver($a, $b, $c, $d), 2 => new \Mautic\ApiBundle\Serializer\Driver\ApiMetadataDriver(new \JMS\Serializer\Metadata\Driver\AttributeDriver\AttributeReader(($container->privates['annotations.cached_reader'] ?? $container->getAnnotations_CachedReaderService())), $b, $c, $d)]), ($container->services['doctrine'] ?? $container->getDoctrineService()), $c), $c);
    }
}