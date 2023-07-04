<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_TranslationExtractService extends AppKernelProdContainer
{
    /*
     * Gets the private 'console.command.translation_extract' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.translation_extract'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand(($container->privates['translation.writer'] ?? $container->load('getTranslation_WriterService')), ($container->privates['translation.reader'] ?? $container->load('getTranslation_ReaderService')), ($container->privates['translation.extractor'] ?? $container->load('getTranslation_ExtractorService')), $container->getEnv('nullable:resolve:MAUTIC_LOCALE'), (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations')], [0 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views'), 1 => (\dirname(__DIR__, 4).'/app/bundles'), 2 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle'), 3 => (\dirname(__DIR__, 4).'/themes'), 4 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), 5 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'), 6 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 7 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), 8 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/ChoiceType.php'), 9 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/ColorType.php'), 10 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/TransformationFailureExtension.php'), 11 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/FormTypeValidatorExtension.php'), 12 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php'), 13 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php'), 14 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/ValidatorBuilder.php'), 15 => (\dirname(__DIR__, 4).'/app/bundles/ApiBundle/Form/Type/ClientType.php'), 16 => (\dirname(__DIR__, 4).'/app/bundles/AssetBundle/EventListener/DetermineWinnerSubscriber.php'), 17 => (\dirname(__DIR__, 4).'/app/bundles/AssetBundle/EventListener/FormSubscriber.php'), 18 => (\dirname(__DIR__, 4).'/app/bundles/AssetBundle/EventListener/LeadSubscriber.php'), 19 => (\dirname(__DIR__, 4).'/app/bundles/AssetBundle/Form/Type/AssetType.php'), 20 => (\dirname(__DIR__, 4).'/app/bundles/AssetBundle/Model/AssetModel.php'), 21 => (\dirname(__DIR__, 4).'/app/bundles/CampaignBundle/Command/ExecuteEventCommand.php'), 22 => (\dirname(__DIR__, 4).'/app/bundles/CampaignBundle/Command/WriteCountTrait.php'), 23 => (\dirname(__DIR__, 4).'/app/bundles/CampaignBundle/Command/SummarizeCommand.php'), 24 => (\dirname(__DIR__, 4).'/app/bundles/CampaignBundle/Command/WriteCountTrait.php'), 25 => (\dirname(__DIR__, 4).'/app/bundles/CampaignBundle/Command/TriggerCampaignCommand.php'), 26 => (\dirname(__DIR__, 4).'/app/bundles/CampaignBundle/Command/WriteCountTrait.php'), 27 => (\dirname(__DIR__, 4).'/app/bundles/CampaignBundle/Command/UpdateLeadCampaignsCommand.php'), 28 => (\dirname(__DIR__, 4).'/app/bundles/CampaignBundle/Command/ValidateEventCommand.php'), 29 => (\dirname(__DIR__, 4).'/app/bundles/CampaignBundle/Command/WriteCountTrait.php'), 30 => (\dirname(__DIR__, 4).'/app/bundles/CampaignBundle/EventListener/CampaignActionJumpToEventSubscriber.php'), 31 => (\dirname(__DIR__, 4).'/app/bundles/CampaignBundle/EventListener/LeadSubscriber.php'), 32 => (\dirname(__DIR__, 4).'/app/bundles/CampaignBundle/Executioner/TestInactiveExecutioner.php'), 33 => (\dirname(__DIR__, 4).'/app/bundles/CampaignBundle/Executioner/TestScheduledExecutioner.php'), 34 => (\dirname(__DIR__, 4).'/app/bundles/CampaignBundle/Form/Type/CampaignListType.php'), 35 => (\dirname(__DIR__, 4).'/app/bundles/CampaignBundle/Form/Type/CampaignType.php'), 36 => (\dirname(__DIR__, 4).'/app/bundles/CategoryBundle/EventListener/ButtonSubscriber.php'), 37 => (\dirname(__DIR__, 4).'/app/bundles/CategoryBundle/Form/Type/CategoryListType.php'), 38 => (\dirname(__DIR__, 4).'/app/bundles/ChannelBundle/Command/ProcessMarketingMessagesQueueCommand.php'), 39 => (\dirname(__DIR__, 4).'/app/bundles/ChannelBundle/Command/SendChannelBroadcastCommand.php'), 40 => (\dirname(__DIR__, 4).'/app/bundles/ChannelBundle/EventListener/ButtonSubscriber.php'), 41 => (\dirname(__DIR__, 4).'/app/bundles/ChannelBundle/EventListener/CampaignSubscriber.php'), 42 => (\dirname(__DIR__, 4).'/app/bundles/ChannelBundle/EventListener/LeadSubscriber.php'), 43 => (\dirname(__DIR__, 4).'/app/bundles/ConfigBundle/Form/Helper/RestrictionHelper.php'), 44 => (\dirname(__DIR__, 4).'/app/bundles/ConfigBundle/Model/SysinfoModel.php'), 45 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Command/ApplyUpdatesCommand.php'), 46 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Command/CleanupMaintenanceCommand.php'), 47 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Command/FindUpdatesCommand.php'), 48 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Command/GenerateProductionAssetsCommand.php'), 49 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Command/InstallDataCommand.php'), 50 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Command/PullTransifexCommand.php'), 51 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Command/PushTransifexCommand.php'), 52 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Command/UpdateDoNotSellListCommand.php'), 53 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Command/UpdateIpDataStoreCommand.php'), 54 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/EventListener/DashboardSubscriber.php'), 55 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/EventListener/MaintenanceSubscriber.php'), 56 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/EventListener/RequestSubscriber.php'), 57 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Form/ChoiceLoader/EntityLookupChoiceLoader.php'), 58 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Form/Type/EntityLookupType.php'), 59 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Form/Type/IpLookupDownloadDataStoreButtonType.php'), 60 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Form/Type/SlotCategoryListType.php'), 61 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Form/Type/SlotChannelFrequencyType.php'), 62 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Form/Type/SlotPreferredChannelType.php'), 63 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Form/Type/SlotSavePrefsButtonType.php'), 64 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Form/Type/SlotSegmentListType.php'), 65 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Form/Type/TimeFormatType.php'), 66 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Helper/DateTime/DateTimeLocalization.php'), 67 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Helper/LanguageHelper.php'), 68 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Translation/Translator.php'), 69 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Twig/Extension/ButtonExtension.php'), 70 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Twig/Extension/CoreHelpersExtension.php'), 71 => (\dirname(__DIR__, 4).'/app/bundles/DynamicContentBundle/EventListener/BuildJsSubscriber.php'), 72 => (\dirname(__DIR__, 4).'/app/bundles/DynamicContentBundle/EventListener/LeadSubscriber.php'), 73 => (\dirname(__DIR__, 4).'/app/bundles/DynamicContentBundle/Form/Type/DynamicContentType.php'), 74 => (\dirname(__DIR__, 4).'/app/bundles/EmailBundle/EventListener/BroadcastSubscriber.php'), 75 => (\dirname(__DIR__, 4).'/app/bundles/EmailBundle/EventListener/BuilderSubscriber.php'), 76 => (\dirname(__DIR__, 4).'/app/bundles/EmailBundle/EventListener/CampaignSubscriber.php'), 77 => (\dirname(__DIR__, 4).'/app/bundles/EmailBundle/EventListener/DateTimeTokenSubscriber.php'), 78 => (\dirname(__DIR__, 4).'/app/bundles/EmailBundle/EventListener/DetermineWinnerSubscriber.php'), 79 => (\dirname(__DIR__, 4).'/app/bundles/EmailBundle/EventListener/EmailSubscriber.php'), 80 => (\dirname(__DIR__, 4).'/app/bundles/EmailBundle/EventListener/LeadSubscriber.php'), 81 => (\dirname(__DIR__, 4).'/app/bundles/EmailBundle/Form/Type/ConfigType.php'), 82 => (\dirname(__DIR__, 4).'/app/bundles/EmailBundle/Form/Type/EmailType.php'), 83 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Form/Type/DynamicContentTrait.php'), 84 => (\dirname(__DIR__, 4).'/app/bundles/FormBundle/EventListener/DetermineWinnerSubscriber.php'), 85 => (\dirname(__DIR__, 4).'/app/bundles/FormBundle/EventListener/FormSubscriber.php'), 86 => (\dirname(__DIR__, 4).'/app/bundles/FormBundle/EventListener/FormValidationSubscriber.php'), 87 => (\dirname(__DIR__, 4).'/app/bundles/FormBundle/EventListener/LeadSubscriber.php'), 88 => (\dirname(__DIR__, 4).'/app/bundles/FormBundle/EventListener/PageSubscriber.php'), 89 => (\dirname(__DIR__, 4).'/app/bundles/FormBundle/EventListener/ReportSubscriber.php'), 90 => (\dirname(__DIR__, 4).'/app/bundles/FormBundle/Form/Type/FormFieldEmailType.php'), 91 => (\dirname(__DIR__, 4).'/app/bundles/FormBundle/Form/Type/FormFieldFileType.php'), 92 => (\dirname(__DIR__, 4).'/app/bundles/FormBundle/Form/Type/FormFieldPageBreakType.php'), 93 => (\dirname(__DIR__, 4).'/app/bundles/FormBundle/Form/Type/FormFieldTelType.php'), 94 => (\dirname(__DIR__, 4).'/app/bundles/IntegrationsBundle/EventListener/EmailSubscriber.php'), 95 => (\dirname(__DIR__, 4).'/app/bundles/IntegrationsBundle/EventListener/TimelineSubscriber.php'), 96 => (\dirname(__DIR__, 4).'/app/bundles/IntegrationsBundle/Form/Type/IntegrationSyncSettingsFieldMappingsType.php'), 97 => (\dirname(__DIR__, 4).'/app/bundles/IntegrationsBundle/Form/Type/IntegrationSyncSettingsObjectFieldMappingType.php'), 98 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Command/ImportCommand.php'), 99 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Command/UpdateLeadListsCommand.php'), 100 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/EventListener/ButtonSubscriber.php'), 101 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/EventListener/DashboardSubscriber.php'), 102 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/EventListener/FilterOperatorSubscriber.php'), 103 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/EventListener/GeneratedColumnSubscriber.php'), 104 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/EventListener/ImportCompanySubscriber.php'), 105 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/EventListener/ImportContactSubscriber.php'), 106 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/EventListener/LeadSubscriber.php'), 107 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/EventListener/ChannelTrait.php'), 108 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/EventListener/MaintenanceSubscriber.php'), 109 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/EventListener/OwnerSubscriber.php'), 110 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/EventListener/ReportDNCSubscriber.php'), 111 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/EventListener/SearchSubscriber.php'), 112 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/EventListener/SegmentSubscriber.php'), 113 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/EventListener/TypeOperatorSubscriber.php'), 114 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Entity/OperatorListTrait.php'), 115 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Field/Command/CreateCustomFieldCommand.php'), 116 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Form/DataTransformer/FieldFilterTransformer.php'), 117 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Form/Type/CampaignEventLeadTagsType.php'), 118 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Form/Type/CompanyType.php'), 119 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Form/Type/EntityFieldsBuildFormTrait.php'), 120 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Form/Type/DashboardLeadsLifetimeWidgetType.php'), 121 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Form/Type/LeadImportFieldType.php'), 122 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Form/Type/LeadType.php'), 123 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Form/Type/EntityFieldsBuildFormTrait.php'), 124 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Form/Type/ListType.php'), 125 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Form/Type/ModifyLeadTagsType.php'), 126 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Form/Validator/Constraints/FieldAliasKeywordValidator.php'), 127 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Model/LeadModel.php'), 128 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Model/DefaultValueTrait.php'), 129 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Entity/OperatorListTrait.php'), 130 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Form/RequestTrait.php'), 131 => (\dirname(__DIR__, 4).'/app/bundles/PageBundle/EventListener/BuilderSubscriber.php'), 132 => (\dirname(__DIR__, 4).'/app/bundles/PageBundle/EventListener/DateTimeTokenSubscriber.php'), 133 => (\dirname(__DIR__, 4).'/app/bundles/PageBundle/EventListener/DetermineWinnerSubscriber.php'), 134 => (\dirname(__DIR__, 4).'/app/bundles/PageBundle/EventListener/LeadSubscriber.php'), 135 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/EventListener/ChannelTrait.php'), 136 => (\dirname(__DIR__, 4).'/app/bundles/PageBundle/EventListener/MaintenanceSubscriber.php'), 137 => (\dirname(__DIR__, 4).'/app/bundles/PageBundle/EventListener/ReportSubscriber.php'), 138 => (\dirname(__DIR__, 4).'/app/bundles/PluginBundle/Command/FetchLeadsCommand.php'), 139 => (\dirname(__DIR__, 4).'/app/bundles/PluginBundle/Command/PushLeadActivityCommand.php'), 140 => (\dirname(__DIR__, 4).'/app/bundles/PointBundle/EventListener/LeadSubscriber.php'), 141 => (\dirname(__DIR__, 4).'/app/bundles/ReportBundle/Form/Type/AggregatorType.php'), 142 => (\dirname(__DIR__, 4).'/app/bundles/ReportBundle/Form/Type/TableOrderType.php'), 143 => (\dirname(__DIR__, 4).'/app/bundles/ReportBundle/Scheduler/Command/ExportSchedulerCommand.php'), 144 => (\dirname(__DIR__, 4).'/app/bundles/SmsBundle/EventListener/LeadSubscriber.php'), 145 => (\dirname(__DIR__, 4).'/app/bundles/SmsBundle/Form/Type/ConfigType.php'), 146 => (\dirname(__DIR__, 4).'/app/bundles/StageBundle/EventListener/CampaignSubscriber.php'), 147 => (\dirname(__DIR__, 4).'/app/bundles/StageBundle/EventListener/LeadSubscriber.php'), 148 => (\dirname(__DIR__, 4).'/app/bundles/UserBundle/Form/Type/ConfigType.php'), 149 => (\dirname(__DIR__, 4).'/app/bundles/UserBundle/Form/Type/UserType.php'), 150 => (\dirname(__DIR__, 4).'/app/bundles/WebhookBundle/Form/Type/CampaignEventSendWebhookType.php'), 151 => (\dirname(__DIR__, 4).'/plugins/MauticFullContactBundle/EventListener/ButtonSubscriber.php'), 152 => (\dirname(__DIR__, 4).'/plugins/MauticClearbitBundle/EventListener/ButtonSubscriber.php'), 153 => (\dirname(__DIR__, 4).'/plugins/MauticCrmBundle/EventListener/LeadListSubscriber.php'), 154 => (\dirname(__DIR__, 4).'/plugins/MauticSocialBundle/EventListener/CampaignSubscriber.php'), 155 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Service/FlashBag.php'), 156 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Form/Type/ConfigType.php'), 157 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Form/Type/DynamicContentFilterEntryFiltersType.php'), 158 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Form/Type/FilterTrait.php'), 159 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Twig/Helper/DateHelper.php'), 160 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Twig/Helper/ButtonHelper.php'), 161 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Twig/Helper/FormatterHelper.php'), 162 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Security/Permissions/CorePermissions.php'), 163 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Helper/ThemeHelper.php'), 164 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Helper/ExportHelper.php'), 165 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Update/Step/DeleteCacheStep.php'), 166 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Update/Step/FinalizeUpdateStep.php'), 167 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Update/Step/InstallNewFilesStep.php'), 168 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Update/Step/RemoveDeletedFilesStep.php'), 169 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Update/Step/UpdateSchemaStep.php'), 170 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Update/Step/UpdateTranslationsStep.php'), 171 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Update/Step/PreUpdateChecksStep.php'), 172 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Model/AuditLogModel.php'), 173 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Model/NotificationModel.php'), 174 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Model/FormModel.php'), 175 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Validator/FileUploadValidator.php'), 176 => (\dirname(__DIR__, 4).'/app/bundles/ApiBundle/EventListener/PreAuthorizationEventListener.php'), 177 => (\dirname(__DIR__, 4).'/app/bundles/ApiBundle/Model/ClientModel.php'), 178 => (\dirname(__DIR__, 4).'/app/bundles/CampaignBundle/Model/CampaignModel.php'), 179 => (\dirname(__DIR__, 4).'/app/bundles/CampaignBundle/Model/EventModel.php'), 180 => (\dirname(__DIR__, 4).'/app/bundles/CampaignBundle/Model/EventLogModel.php'), 181 => (\dirname(__DIR__, 4).'/app/bundles/CampaignBundle/Model/SummaryModel.php'), 182 => (\dirname(__DIR__, 4).'/app/bundles/CampaignBundle/EventCollector/EventCollector.php'), 183 => (\dirname(__DIR__, 4).'/app/bundles/CampaignBundle/Executioner/KickoffExecutioner.php'), 184 => (\dirname(__DIR__, 4).'/app/bundles/CampaignBundle/Executioner/ScheduledExecutioner.php'), 185 => (\dirname(__DIR__, 4).'/app/bundles/CampaignBundle/Executioner/InactiveExecutioner.php'), 186 => (\dirname(__DIR__, 4).'/app/bundles/CampaignBundle/Executioner/Helper/NotificationHelper.php'), 187 => (\dirname(__DIR__, 4).'/app/bundles/CampaignBundle/Membership/Action/Remover.php'), 188 => (\dirname(__DIR__, 4).'/app/bundles/CampaignBundle/Membership/MembershipBuilder.php'), 189 => (\dirname(__DIR__, 4).'/app/bundles/CategoryBundle/Model/CategoryModel.php'), 190 => (\dirname(__DIR__, 4).'/app/bundles/ChannelBundle/Helper/ChannelListHelper.php'), 191 => (\dirname(__DIR__, 4).'/app/bundles/ChannelBundle/Model/MessageModel.php'), 192 => (\dirname(__DIR__, 4).'/app/bundles/ChannelBundle/Model/MessageQueueModel.php'), 193 => (\dirname(__DIR__, 4).'/app/bundles/ChannelBundle/Model/ChannelActionModel.php'), 194 => (\dirname(__DIR__, 4).'/app/bundles/DashboardBundle/Model/DashboardModel.php'), 195 => (\dirname(__DIR__, 4).'/app/bundles/DynamicContentBundle/Form/Type/DwcEntryFiltersType.php'), 196 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Form/Type/FilterTrait.php'), 197 => (\dirname(__DIR__, 4).'/app/bundles/DynamicContentBundle/Model/DynamicContentModel.php'), 198 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Model/VariantModelTrait.php'), 199 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Model/TranslationModelTrait.php'), 200 => (\dirname(__DIR__, 4).'/app/bundles/EmailBundle/MonitoredEmail/Processor/Bounce.php'), 201 => (\dirname(__DIR__, 4).'/app/bundles/EmailBundle/MonitoredEmail/Processor/Unsubscribe.php'), 202 => (\dirname(__DIR__, 4).'/app/bundles/EmailBundle/MonitoredEmail/Processor/FeedbackLoop.php'), 203 => (\dirname(__DIR__, 4).'/app/bundles/EmailBundle/Helper/EmailValidator.php'), 204 => (\dirname(__DIR__, 4).'/app/bundles/EmailBundle/MonitoredEmail/Fetcher.php'), 205 => (\dirname(__DIR__, 4).'/app/bundles/EmailBundle/Model/EmailModel.php'), 206 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Model/VariantModelTrait.php'), 207 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Model/TranslationModelTrait.php'), 208 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Model/BuilderModelTrait.php'), 209 => (\dirname(__DIR__, 4).'/app/bundles/EmailBundle/Stats/Helper/FilterTrait.php'), 210 => (\dirname(__DIR__, 4).'/app/bundles/EmailBundle/Model/SendEmailToContact.php'), 211 => (\dirname(__DIR__, 4).'/app/bundles/FormBundle/Form/Type/FieldType.php'), 212 => (\dirname(__DIR__, 4).'/app/bundles/FormBundle/Form/Type/FormFieldTrait.php'), 213 => (\dirname(__DIR__, 4).'/app/bundles/FormBundle/Form/Type/SubmitActionEmailType.php'), 214 => (\dirname(__DIR__, 4).'/app/bundles/FormBundle/Form/Type/FormFieldTrait.php'), 215 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Form/ToBcBccFieldsTrait.php'), 216 => (\dirname(__DIR__, 4).'/app/bundles/FormBundle/Model/ActionModel.php'), 217 => (\dirname(__DIR__, 4).'/app/bundles/FormBundle/Model/FieldModel.php'), 218 => (\dirname(__DIR__, 4).'/app/bundles/FormBundle/Model/FormModel.php'), 219 => (\dirname(__DIR__, 4).'/app/bundles/FormBundle/Model/SubmissionModel.php'), 220 => (\dirname(__DIR__, 4).'/app/bundles/FormBundle/Helper/FormFieldHelper.php'), 221 => (\dirname(__DIR__, 4).'/app/bundles/InstallBundle/InstallFixtures/ORM/LeadFieldData.php'), 222 => (\dirname(__DIR__, 4).'/app/bundles/InstallBundle/InstallFixtures/ORM/RoleData.php'), 223 => (\dirname(__DIR__, 4).'/app/bundles/InstallBundle/Install/InstallService.php'), 224 => (\dirname(__DIR__, 4).'/app/bundles/IntegrationsBundle/Helper/FieldValidationHelper.php'), 225 => (\dirname(__DIR__, 4).'/app/bundles/IntegrationsBundle/Sync/SyncDataExchange/Helper/FieldHelper.php'), 226 => (\dirname(__DIR__, 4).'/app/bundles/IntegrationsBundle/Sync/Notification/Helper/UserNotificationBuilder.php'), 227 => (\dirname(__DIR__, 4).'/app/bundles/IntegrationsBundle/Sync/Notification/Helper/UserSummaryNotificationHelper.php'), 228 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/EventListener/ContactExportSchedulerNotificationSubscriber.php'), 229 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Validator/CustomFieldValidator.php'), 230 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Services/ContactColumnsDictionary.php'), 231 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Twig/Helper/DncReasonHelper.php'), 232 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Model/FieldModel.php'), 233 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Model/ListModel.php'), 234 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Entity/OperatorListTrait.php'), 235 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Segment/RelativeDate.php'), 236 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Provider/FilterOperatorProvider.php'), 237 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Model/NoteModel.php'), 238 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Model/DeviceModel.php'), 239 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Model/CompanyModel.php'), 240 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Model/DefaultValueTrait.php'), 241 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Form/RequestTrait.php'), 242 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Model/ImportModel.php'), 243 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Model/TagModel.php'), 244 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Model/CompanyReportData.php'), 245 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Field/CustomFieldColumn.php'), 246 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Field/FieldList.php'), 247 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Field/Notification/CustomFieldNotification.php'), 248 => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Model/ContactExportSchedulerModel.php'), 249 => (\dirname(__DIR__, 4).'/app/bundles/MessengerBundle/Form/Type/ConfigType.php'), 250 => (\dirname(__DIR__, 4).'/app/bundles/NotificationBundle/Model/NotificationModel.php'), 251 => (\dirname(__DIR__, 4).'/app/bundles/NotificationBundle/Integration/OneSignalIntegration.php'), 252 => (\dirname(__DIR__, 4).'/app/bundles/PageBundle/Model/PageModel.php'), 253 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Model/TranslationModelTrait.php'), 254 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Model/VariantModelTrait.php'), 255 => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Model/BuilderModelTrait.php'), 256 => (\dirname(__DIR__, 4).'/app/bundles/PageBundle/Model/RedirectModel.php'), 257 => (\dirname(__DIR__, 4).'/app/bundles/PageBundle/Model/TrackableModel.php'), 258 => (\dirname(__DIR__, 4).'/app/bundles/PageBundle/Model/VideoModel.php'), 259 => (\dirname(__DIR__, 4).'/app/bundles/PluginBundle/Facade/ReloadFacade.php'), 260 => (\dirname(__DIR__, 4).'/app/bundles/PluginBundle/Model/PluginModel.php'), 261 => (\dirname(__DIR__, 4).'/app/bundles/PluginBundle/Model/IntegrationEntityModel.php'), 262 => (\dirname(__DIR__, 4).'/app/bundles/PointBundle/Model/PointModel.php'), 263 => (\dirname(__DIR__, 4).'/app/bundles/PointBundle/Model/TriggerEventModel.php'), 264 => (\dirname(__DIR__, 4).'/app/bundles/PointBundle/Model/TriggerModel.php'), 265 => (\dirname(__DIR__, 4).'/app/bundles/ReportBundle/Model/ReportModel.php'), 266 => (\dirname(__DIR__, 4).'/app/bundles/ReportBundle/Model/CsvExporter.php'), 267 => (\dirname(__DIR__, 4).'/app/bundles/ReportBundle/Model/ExcelExporter.php'), 268 => (\dirname(__DIR__, 4).'/app/bundles/ReportBundle/Scheduler/Model/MessageSchedule.php'), 269 => (\dirname(__DIR__, 4).'/app/bundles/SmsBundle/Broadcast/BroadcastExecutioner.php'), 270 => (\dirname(__DIR__, 4).'/app/bundles/SmsBundle/Model/SmsModel.php'), 271 => (\dirname(__DIR__, 4).'/app/bundles/SmsBundle/Integration/TwilioIntegration.php'), 272 => (\dirname(__DIR__, 4).'/app/bundles/StageBundle/Model/StageModel.php'), 273 => (\dirname(__DIR__, 4).'/app/bundles/UserBundle/Model/RoleModel.php'), 274 => (\dirname(__DIR__, 4).'/app/bundles/UserBundle/Model/UserModel.php'), 275 => (\dirname(__DIR__, 4).'/app/bundles/WebhookBundle/Model/WebhookModel.php'), 276 => (\dirname(__DIR__, 4).'/app/bundles/WebhookBundle/Notificator/WebhookKillNotificator.php'), 277 => (\dirname(__DIR__, 4).'/plugins/MauticGmailBundle/Integration/GmailIntegration.php'), 278 => (\dirname(__DIR__, 4).'/plugins/GrapesJsBuilderBundle/Model/GrapesJsBuilderModel.php'), 279 => (\dirname(__DIR__, 4).'/plugins/MauticCloudStorageBundle/Integration/AmazonS3Integration.php'), 280 => (\dirname(__DIR__, 4).'/plugins/MauticFullContactBundle/Integration/FullContactIntegration.php'), 281 => (\dirname(__DIR__, 4).'/plugins/MauticClearbitBundle/Integration/ClearbitIntegration.php'), 282 => (\dirname(__DIR__, 4).'/plugins/MauticOutlookBundle/Integration/OutlookIntegration.php'), 283 => (\dirname(__DIR__, 4).'/plugins/MauticTagManagerBundle/Integration/TagManagerIntegration.php'), 284 => (\dirname(__DIR__, 4).'/plugins/MauticTagManagerBundle/Model/TagModel.php'), 285 => (\dirname(__DIR__, 4).'/plugins/MauticCrmBundle/Integration/HubspotIntegration.php'), 286 => (\dirname(__DIR__, 4).'/plugins/MauticCrmBundle/Integration/SalesforceIntegration.php'), 287 => (\dirname(__DIR__, 4).'/plugins/MauticCrmBundle/Integration/SugarcrmIntegration.php'), 288 => (\dirname(__DIR__, 4).'/plugins/MauticCrmBundle/Integration/VtigerIntegration.php'), 289 => (\dirname(__DIR__, 4).'/plugins/MauticCrmBundle/Integration/ZohoIntegration.php'), 290 => (\dirname(__DIR__, 4).'/plugins/MauticCrmBundle/Integration/DynamicsIntegration.php'), 291 => (\dirname(__DIR__, 4).'/plugins/MauticCrmBundle/Integration/ConnectwiseIntegration.php'), 292 => (\dirname(__DIR__, 4).'/plugins/MauticFocusBundle/Model/FocusModel.php'), 293 => (\dirname(__DIR__, 4).'/plugins/MauticFocusBundle/Helper/IframeAvailabilityChecker.php'), 294 => (\dirname(__DIR__, 4).'/plugins/MauticSocialBundle/Model/MonitoringModel.php'), 295 => (\dirname(__DIR__, 4).'/plugins/MauticSocialBundle/Model/PostCountModel.php'), 296 => (\dirname(__DIR__, 4).'/plugins/MauticSocialBundle/Model/TweetModel.php'), 297 => (\dirname(__DIR__, 4).'/plugins/MauticSocialBundle/Helper/TwitterCommandHelper.php'), 298 => (\dirname(__DIR__, 4).'/plugins/MauticSocialBundle/Integration/FacebookIntegration.php'), 299 => (\dirname(__DIR__, 4).'/plugins/MauticSocialBundle/Integration/FoursquareIntegration.php'), 300 => (\dirname(__DIR__, 4).'/plugins/MauticSocialBundle/Integration/InstagramIntegration.php'), 301 => (\dirname(__DIR__, 4).'/plugins/MauticSocialBundle/Integration/TwitterIntegration.php'), 302 => (\dirname(__DIR__, 4).'/plugins/MauticEmailMarketingBundle/Integration/ConstantContactIntegration.php'), 303 => (\dirname(__DIR__, 4).'/plugins/MauticEmailMarketingBundle/Integration/IcontactIntegration.php'), 304 => (\dirname(__DIR__, 4).'/plugins/MauticEmailMarketingBundle/Integration/MailchimpIntegration.php'), 305 => (\dirname(__DIR__, 4).'/vendor/jms/serializer/src/Handler/FormErrorHandler.php'), 306 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FileType.php'), 307 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php'), 308 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/FormExtension.php')], []);

        $instance->setName('translation:extract');
        $instance->setAliases([0 => 'translation:update']);
        $instance->setDescription('Extract missing translations keys from code to translation files.');

        return $instance;
    }
}