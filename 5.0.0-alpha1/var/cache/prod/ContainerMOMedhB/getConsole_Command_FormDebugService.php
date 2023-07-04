<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_FormDebugService extends AppKernelProdContainer
{
    /*
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($container->privates['form.registry'] ?? $container->getForm_RegistryService()), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 2 => 'FOS\\OAuthServerBundle\\Form\\Type', 3 => '', 4 => 'Mautic\\ApiBundle\\Form\\Type', 5 => 'Mautic\\AssetBundle\\Form\\Type', 6 => 'Mautic\\CampaignBundle\\Form\\Type', 7 => 'Mautic\\CategoryBundle\\Form\\Type', 8 => 'Mautic\\ChannelBundle\\Form\\Type', 9 => 'Mautic\\ConfigBundle\\Form\\Type', 10 => 'Mautic\\CoreBundle\\Form\\Type', 11 => 'Mautic\\DashboardBundle\\Form\\Type', 12 => 'Mautic\\DynamicContentBundle\\Form\\Type', 13 => 'Mautic\\EmailBundle\\Form\\Type', 14 => 'Mautic\\FormBundle\\Form\\Type', 15 => 'Mautic\\InstallBundle\\Configurator\\Form', 16 => 'Mautic\\IntegrationsBundle\\Form\\Type', 17 => 'Mautic\\LeadBundle\\Form\\Type', 18 => 'Mautic\\NotificationBundle\\Form\\Type', 19 => 'Mautic\\PageBundle\\Form\\Type', 20 => 'Mautic\\PluginBundle\\Form\\Type', 21 => 'Mautic\\PointBundle\\Form\\Type', 22 => 'Mautic\\ReportBundle\\Form\\Type', 23 => 'Mautic\\SmsBundle\\Form\\Type', 24 => 'Mautic\\StageBundle\\Form\\Type', 25 => 'Mautic\\UserBundle\\Form\\Type', 26 => 'Mautic\\WebhookBundle\\Form\\Type', 27 => 'MauticPlugin\\MauticFullContactBundle\\Form\\Type', 28 => 'MauticPlugin\\MauticClearbitBundle\\Form\\Type', 29 => 'MauticPlugin\\MauticTagManagerBundle\\Form\\Type', 30 => 'MauticPlugin\\MauticCrmBundle\\Form\\Type', 31 => 'MauticPlugin\\MauticFocusBundle\\Form\\Type', 32 => 'MauticPlugin\\MauticSocialBundle\\Form\\Type', 33 => 'MauticPlugin\\MauticEmailMarketingBundle\\Form\\Type', 34 => 'Mautic\\MessengerBundle\\Form\\Type'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 1 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 2 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 3 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType', 4 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 5 => 'FOS\\OAuthServerBundle\\Form\\Type\\AuthorizeFormType', 6 => 'FM\\ElfinderBundle\\Form\\Type\\ElFinderType', 7 => 'Mautic\\ApiBundle\\Form\\Type\\ClientType', 8 => 'Mautic\\ApiBundle\\Form\\Type\\ConfigType', 9 => 'Mautic\\AssetBundle\\Form\\Type\\AssetListType', 10 => 'Mautic\\AssetBundle\\Form\\Type\\AssetType', 11 => 'Mautic\\AssetBundle\\Form\\Type\\CampaignEventAssetDownloadType', 12 => 'Mautic\\AssetBundle\\Form\\Type\\ConfigType', 13 => 'Mautic\\AssetBundle\\Form\\Type\\FormSubmitActionDownloadFileType', 14 => 'Mautic\\AssetBundle\\Form\\Type\\PointActionAssetDownloadType', 15 => 'Mautic\\CampaignBundle\\Form\\Type\\CampaignEventAddRemoveLeadType', 16 => 'Mautic\\CampaignBundle\\Form\\Type\\CampaignEventJumpToEventType', 17 => 'Mautic\\CampaignBundle\\Form\\Type\\CampaignEventLeadChangeType', 18 => 'Mautic\\CampaignBundle\\Form\\Type\\CampaignLeadSourceType', 19 => 'Mautic\\CampaignBundle\\Form\\Type\\CampaignListType', 20 => 'Mautic\\CampaignBundle\\Form\\Type\\CampaignType', 21 => 'Mautic\\CampaignBundle\\Form\\Type\\ConfigType', 22 => 'Mautic\\CampaignBundle\\Form\\Type\\EventCanvasSettingsType', 23 => 'Mautic\\CampaignBundle\\Form\\Type\\EventType', 24 => 'Mautic\\CategoryBundle\\Form\\Type\\CategoryBundlesType', 25 => 'Mautic\\CategoryBundle\\Form\\Type\\CategoryListType', 26 => 'Mautic\\CategoryBundle\\Form\\Type\\CategoryType', 27 => 'Mautic\\ChannelBundle\\Form\\Type\\ChannelType', 28 => 'Mautic\\ChannelBundle\\Form\\Type\\MessageListType', 29 => 'Mautic\\ChannelBundle\\Form\\Type\\MessageSendType', 30 => 'Mautic\\ChannelBundle\\Form\\Type\\MessageType', 31 => 'Mautic\\ConfigBundle\\Form\\Type\\ConfigFileType', 32 => 'Mautic\\ConfigBundle\\Form\\Type\\ConfigType', 33 => 'Mautic\\CoreBundle\\Form\\Type\\BooleanType', 34 => 'Mautic\\CoreBundle\\Form\\Type\\BuilderSectionType', 35 => 'Mautic\\CoreBundle\\Form\\Type\\ButtonGroupType', 36 => 'Mautic\\CoreBundle\\Form\\Type\\ConfigThemeType', 37 => 'Mautic\\CoreBundle\\Form\\Type\\CountryType', 38 => 'Mautic\\CoreBundle\\Form\\Type\\DatePickerType', 39 => 'Mautic\\CoreBundle\\Form\\Type\\DateRangeType', 40 => 'Mautic\\CoreBundle\\Form\\Type\\DynamicContentFilterEntryType', 41 => 'Mautic\\CoreBundle\\Form\\Type\\DynamicContentFilterType', 42 => 'Mautic\\CoreBundle\\Form\\Type\\DynamicListType', 43 => 'Mautic\\CoreBundle\\Form\\Type\\EntityLookupType', 44 => 'Mautic\\CoreBundle\\Form\\Type\\FormButtonsType', 45 => 'Mautic\\CoreBundle\\Form\\Type\\GatedVideoType', 46 => 'Mautic\\CoreBundle\\Form\\Type\\IpLookupDownloadDataStoreButtonType', 47 => 'Mautic\\CoreBundle\\Form\\Type\\LocaleType', 48 => 'Mautic\\CoreBundle\\Form\\Type\\LookupType', 49 => 'Mautic\\CoreBundle\\Form\\Type\\MultiselectType', 50 => 'Mautic\\CoreBundle\\Form\\Type\\PublishDownDateType', 51 => 'Mautic\\CoreBundle\\Form\\Type\\PublishUpDateType', 52 => 'Mautic\\CoreBundle\\Form\\Type\\RegionType', 53 => 'Mautic\\CoreBundle\\Form\\Type\\SelectType', 54 => 'Mautic\\CoreBundle\\Form\\Type\\SlotButtonType', 55 => 'Mautic\\CoreBundle\\Form\\Type\\SlotCategoryListType', 56 => 'Mautic\\CoreBundle\\Form\\Type\\SlotChannelFrequencyType', 57 => 'Mautic\\CoreBundle\\Form\\Type\\SlotCodeModeType', 58 => 'Mautic\\CoreBundle\\Form\\Type\\SlotDwcType', 59 => 'Mautic\\CoreBundle\\Form\\Type\\SlotDynamicContentType', 60 => 'Mautic\\CoreBundle\\Form\\Type\\SlotImageCaptionType', 61 => 'Mautic\\CoreBundle\\Form\\Type\\SlotImageCardType', 62 => 'Mautic\\CoreBundle\\Form\\Type\\SlotImageType', 63 => 'Mautic\\CoreBundle\\Form\\Type\\SlotPreferredChannelType', 64 => 'Mautic\\CoreBundle\\Form\\Type\\SlotSavePrefsButtonType', 65 => 'Mautic\\CoreBundle\\Form\\Type\\SlotSegmentListType', 66 => 'Mautic\\CoreBundle\\Form\\Type\\SlotSeparatorType', 67 => 'Mautic\\CoreBundle\\Form\\Type\\SlotSocialFollowType', 68 => 'Mautic\\CoreBundle\\Form\\Type\\SlotSocialShareType', 69 => 'Mautic\\CoreBundle\\Form\\Type\\SlotSuccessMessageType', 70 => 'Mautic\\CoreBundle\\Form\\Type\\SlotTextType', 71 => 'Mautic\\CoreBundle\\Form\\Type\\SlotType', 72 => 'Mautic\\CoreBundle\\Form\\Type\\SortableListType', 73 => 'Mautic\\CoreBundle\\Form\\Type\\SortableValueLabelListType', 74 => 'Mautic\\CoreBundle\\Form\\Type\\StandAloneButtonType', 75 => 'Mautic\\CoreBundle\\Form\\Type\\TelType', 76 => 'Mautic\\CoreBundle\\Form\\Type\\ThemeListType', 77 => 'Mautic\\CoreBundle\\Form\\Type\\ThemeUploadType', 78 => 'Mautic\\CoreBundle\\Form\\Type\\TimeFormatType', 79 => 'Mautic\\CoreBundle\\Form\\Type\\TimezoneType', 80 => 'Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType', 81 => 'Mautic\\DashboardBundle\\Form\\Type\\UploadType', 82 => 'Mautic\\DashboardBundle\\Form\\Type\\WidgetType', 83 => 'Mautic\\DynamicContentBundle\\Form\\Type\\DynamicContentDecisionType', 84 => 'Mautic\\DynamicContentBundle\\Form\\Type\\DynamicContentListType', 85 => 'Mautic\\DynamicContentBundle\\Form\\Type\\DynamicContentSendType', 86 => 'Mautic\\DynamicContentBundle\\Form\\Type\\DynamicContentType', 87 => 'Mautic\\EmailBundle\\Form\\Type\\AbTestPropertiesType', 88 => 'Mautic\\EmailBundle\\Form\\Type\\BatchSendType', 89 => 'Mautic\\EmailBundle\\Form\\Type\\ConfigMonitoredEmailType', 90 => 'Mautic\\EmailBundle\\Form\\Type\\ConfigMonitoredMailboxesType', 91 => 'Mautic\\EmailBundle\\Form\\Type\\ConfigType', 92 => 'Mautic\\EmailBundle\\Form\\Type\\DashboardBestHoursWidgetType', 93 => 'Mautic\\EmailBundle\\Form\\Type\\DashboardEmailsInTimeWidgetType', 94 => 'Mautic\\EmailBundle\\Form\\Type\\DashboardMostHitEmailRedirectsWidgetType', 95 => 'Mautic\\EmailBundle\\Form\\Type\\DashboardSentEmailToContactsWidgetType', 96 => 'Mautic\\EmailBundle\\Form\\Type\\DsnType', 97 => 'Mautic\\EmailBundle\\Form\\Type\\EmailClickDecisionType', 98 => 'Mautic\\EmailBundle\\Form\\Type\\EmailListType', 99 => 'Mautic\\EmailBundle\\Form\\Type\\EmailOpenType', 100 => 'Mautic\\EmailBundle\\Form\\Type\\EmailSendType', 101 => 'Mautic\\EmailBundle\\Form\\Type\\EmailToUserType', 102 => 'Mautic\\EmailBundle\\Form\\Type\\EmailType', 103 => 'Mautic\\EmailBundle\\Form\\Type\\EmailUtmTagsType', 104 => 'Mautic\\EmailBundle\\Form\\Type\\ExampleSendType', 105 => 'Mautic\\EmailBundle\\Form\\Type\\FormSubmitActionUserEmailType', 106 => 'Mautic\\EmailBundle\\Form\\Type\\VariantType', 107 => 'Mautic\\FormBundle\\Form\\Type\\ActionType', 108 => 'Mautic\\FormBundle\\Form\\Type\\CampaignEventFormFieldValueType', 109 => 'Mautic\\FormBundle\\Form\\Type\\CampaignEventFormSubmitType', 110 => 'Mautic\\FormBundle\\Form\\Type\\ConfigFormType', 111 => 'Mautic\\FormBundle\\Form\\Type\\FormFieldCaptchaType', 112 => 'Mautic\\FormBundle\\Form\\Type\\FormFieldConditionType', 113 => 'Mautic\\FormBundle\\Form\\Type\\FormFieldEmailType', 114 => 'Mautic\\FormBundle\\Form\\Type\\FormFieldFileType', 115 => 'Mautic\\FormBundle\\Form\\Type\\FormFieldGroupType', 116 => 'Mautic\\FormBundle\\Form\\Type\\FormFieldHTMLType', 117 => 'Mautic\\FormBundle\\Form\\Type\\FormFieldPageBreakType', 118 => 'Mautic\\FormBundle\\Form\\Type\\FormFieldPlaceholderType', 119 => 'Mautic\\FormBundle\\Form\\Type\\FormFieldSelectType', 120 => 'Mautic\\FormBundle\\Form\\Type\\FormFieldTelType', 121 => 'Mautic\\FormBundle\\Form\\Type\\FormFieldTextType', 122 => 'Mautic\\FormBundle\\Form\\Type\\FormListType', 123 => 'Mautic\\FormBundle\\Form\\Type\\FormType', 124 => 'Mautic\\FormBundle\\Form\\Type\\PointActionFormSubmitType', 125 => 'Mautic\\InstallBundle\\Configurator\\Form\\CheckStepType', 126 => 'Mautic\\InstallBundle\\Configurator\\Form\\DoctrineStepType', 127 => 'Mautic\\InstallBundle\\Configurator\\Form\\UserStepType', 128 => 'Mautic\\IntegrationsBundle\\Form\\Type\\ActivityListType', 129 => 'Mautic\\IntegrationsBundle\\Form\\Type\\IntegrationConfigType', 130 => 'Mautic\\IntegrationsBundle\\Form\\Type\\IntegrationFeatureSettingsType', 131 => 'Mautic\\IntegrationsBundle\\Form\\Type\\IntegrationSyncSettingsFieldMappingsType', 132 => 'Mautic\\IntegrationsBundle\\Form\\Type\\IntegrationSyncSettingsObjectFieldMappingType', 133 => 'Mautic\\IntegrationsBundle\\Form\\Type\\IntegrationSyncSettingsObjectFieldType', 134 => 'Mautic\\IntegrationsBundle\\Form\\Type\\IntegrationSyncSettingsType', 135 => 'Mautic\\LeadBundle\\Form\\Type\\ActionAddUtmTagsType', 136 => 'Mautic\\LeadBundle\\Form\\Type\\ActionRemoveDoNotContact', 137 => 'Mautic\\LeadBundle\\Form\\Type\\AddToCompanyActionType', 138 => 'Mautic\\LeadBundle\\Form\\Type\\BatchType', 139 => 'Mautic\\LeadBundle\\Form\\Type\\CampaignActionAddDNCType', 140 => 'Mautic\\LeadBundle\\Form\\Type\\CampaignActionRemoveDNCType', 141 => 'Mautic\\LeadBundle\\Form\\Type\\CampaignConditionLeadPageHitType', 142 => 'Mautic\\LeadBundle\\Form\\Type\\CampaignEventLeadCampaignsType', 143 => 'Mautic\\LeadBundle\\Form\\Type\\CampaignEventLeadDNCType', 144 => 'Mautic\\LeadBundle\\Form\\Type\\CampaignEventLeadDeviceType', 145 => 'Mautic\\LeadBundle\\Form\\Type\\CampaignEventLeadFieldValueType', 146 => 'Mautic\\LeadBundle\\Form\\Type\\CampaignEventLeadOwnerType', 147 => 'Mautic\\LeadBundle\\Form\\Type\\CampaignEventLeadSegmentsType', 148 => 'Mautic\\LeadBundle\\Form\\Type\\CampaignEventLeadStagesType', 149 => 'Mautic\\LeadBundle\\Form\\Type\\CampaignEventLeadTagsType', 150 => 'Mautic\\LeadBundle\\Form\\Type\\ChangeOwnerType', 151 => 'Mautic\\LeadBundle\\Form\\Type\\CompanyChangeScoreActionType', 152 => 'Mautic\\LeadBundle\\Form\\Type\\CompanyListType', 153 => 'Mautic\\LeadBundle\\Form\\Type\\CompanyMergeType', 154 => 'Mautic\\LeadBundle\\Form\\Type\\CompanyType', 155 => 'Mautic\\LeadBundle\\Form\\Type\\ConfigCompanyType', 156 => 'Mautic\\LeadBundle\\Form\\Type\\ConfigType', 157 => 'Mautic\\LeadBundle\\Form\\Type\\ContactChannelsType', 158 => 'Mautic\\LeadBundle\\Form\\Type\\ContactColumnsType', 159 => 'Mautic\\LeadBundle\\Form\\Type\\ContactFrequencyType', 160 => 'Mautic\\LeadBundle\\Form\\Type\\DashboardLeadsInTimeWidgetType', 161 => 'Mautic\\LeadBundle\\Form\\Type\\DashboardLeadsLifetimeWidgetType', 162 => 'Mautic\\LeadBundle\\Form\\Type\\DashboardSegmentsBuildTime', 163 => 'Mautic\\LeadBundle\\Form\\Type\\DeviceType', 164 => 'Mautic\\LeadBundle\\Form\\Type\\DncType', 165 => 'Mautic\\LeadBundle\\Form\\Type\\EmailType', 166 => 'Mautic\\LeadBundle\\Form\\Type\\FieldType', 167 => 'Mautic\\LeadBundle\\Form\\Type\\FilterPropertiesType', 168 => 'Mautic\\LeadBundle\\Form\\Type\\FilterType', 169 => 'Mautic\\LeadBundle\\Form\\Type\\FormSubmitActionPointsChangeType', 170 => 'Mautic\\LeadBundle\\Form\\Type\\LeadCategoryType', 171 => 'Mautic\\LeadBundle\\Form\\Type\\LeadFieldsType', 172 => 'Mautic\\LeadBundle\\Form\\Type\\LeadImportFieldType', 173 => 'Mautic\\LeadBundle\\Form\\Type\\LeadImportType', 174 => 'Mautic\\LeadBundle\\Form\\Type\\LeadListType', 175 => 'Mautic\\LeadBundle\\Form\\Type\\LeadType', 176 => 'Mautic\\LeadBundle\\Form\\Type\\ListActionType', 177 => 'Mautic\\LeadBundle\\Form\\Type\\ListType', 178 => 'Mautic\\LeadBundle\\Form\\Type\\MergeType', 179 => 'Mautic\\LeadBundle\\Form\\Type\\ModifyLeadTagsType', 180 => 'Mautic\\LeadBundle\\Form\\Type\\NoteType', 181 => 'Mautic\\LeadBundle\\Form\\Type\\OwnerType', 182 => 'Mautic\\LeadBundle\\Form\\Type\\PointActionType', 183 => 'Mautic\\LeadBundle\\Form\\Type\\PreferenceChannelsType', 184 => 'Mautic\\LeadBundle\\Form\\Type\\SegmentConfigType', 185 => 'Mautic\\LeadBundle\\Form\\Type\\StageType', 186 => 'Mautic\\LeadBundle\\Form\\Type\\TagEntityType', 187 => 'Mautic\\LeadBundle\\Form\\Type\\TagType', 188 => 'Mautic\\LeadBundle\\Form\\Type\\UpdateCompanyActionType', 189 => 'Mautic\\LeadBundle\\Form\\Type\\UpdateLeadActionType', 190 => 'Mautic\\NotificationBundle\\Form\\Type\\ConfigType', 191 => 'Mautic\\NotificationBundle\\Form\\Type\\MobileNotificationDetailsType', 192 => 'Mautic\\NotificationBundle\\Form\\Type\\MobileNotificationListType', 193 => 'Mautic\\NotificationBundle\\Form\\Type\\MobileNotificationSendType', 194 => 'Mautic\\NotificationBundle\\Form\\Type\\MobileNotificationType', 195 => 'Mautic\\NotificationBundle\\Form\\Type\\NotificationConfigType', 196 => 'Mautic\\NotificationBundle\\Form\\Type\\NotificationListType', 197 => 'Mautic\\NotificationBundle\\Form\\Type\\NotificationSendType', 198 => 'Mautic\\NotificationBundle\\Form\\Type\\NotificationType', 199 => 'Mautic\\PageBundle\\Form\\Type\\AbTestPropertiesType', 200 => 'Mautic\\PageBundle\\Form\\Type\\CampaignEventPageHitType', 201 => 'Mautic\\PageBundle\\Form\\Type\\ConfigTrackingPageType', 202 => 'Mautic\\PageBundle\\Form\\Type\\ConfigType', 203 => 'Mautic\\PageBundle\\Form\\Type\\DashboardHitsInTimeWidgetType', 204 => 'Mautic\\PageBundle\\Form\\Type\\PageListType', 205 => 'Mautic\\PageBundle\\Form\\Type\\PagePublishDatesType', 206 => 'Mautic\\PageBundle\\Form\\Type\\PageType', 207 => 'Mautic\\PageBundle\\Form\\Type\\PointActionPageHitType', 208 => 'Mautic\\PageBundle\\Form\\Type\\PointActionUrlHitType', 209 => 'Mautic\\PageBundle\\Form\\Type\\PreferenceCenterListType', 210 => 'Mautic\\PageBundle\\Form\\Type\\RedirectListType', 211 => 'Mautic\\PageBundle\\Form\\Type\\TrackingPixelSendType', 212 => 'Mautic\\PageBundle\\Form\\Type\\VariantType', 213 => 'Mautic\\PluginBundle\\Form\\Type\\CompanyFieldsType', 214 => 'Mautic\\PluginBundle\\Form\\Type\\DetailsType', 215 => 'Mautic\\PluginBundle\\Form\\Type\\FeatureSettingsType', 216 => 'Mautic\\PluginBundle\\Form\\Type\\FieldsType', 217 => 'Mautic\\PluginBundle\\Form\\Type\\IntegrationCampaignsType', 218 => 'Mautic\\PluginBundle\\Form\\Type\\IntegrationConfigType', 219 => 'Mautic\\PluginBundle\\Form\\Type\\IntegrationsListType', 220 => 'Mautic\\PluginBundle\\Form\\Type\\KeysType', 221 => 'Mautic\\PointBundle\\Form\\Type\\GenericPointSettingsType', 222 => 'Mautic\\PointBundle\\Form\\Type\\PointActionType', 223 => 'Mautic\\PointBundle\\Form\\Type\\PointType', 224 => 'Mautic\\PointBundle\\Form\\Type\\TriggerEventType', 225 => 'Mautic\\PointBundle\\Form\\Type\\TriggerType', 226 => 'Mautic\\ReportBundle\\Form\\Type\\AggregatorType', 227 => 'Mautic\\ReportBundle\\Form\\Type\\ConfigType', 228 => 'Mautic\\ReportBundle\\Form\\Type\\DynamicFiltersType', 229 => 'Mautic\\ReportBundle\\Form\\Type\\FilterSelectorType', 230 => 'Mautic\\ReportBundle\\Form\\Type\\ReportFiltersType', 231 => 'Mautic\\ReportBundle\\Form\\Type\\ReportSettingsType', 232 => 'Mautic\\ReportBundle\\Form\\Type\\ReportType', 233 => 'Mautic\\ReportBundle\\Form\\Type\\ReportWidgetType', 234 => 'Mautic\\ReportBundle\\Form\\Type\\TableOrderType', 235 => 'Mautic\\SmsBundle\\Form\\Type\\CampaignReplyType', 236 => 'Mautic\\SmsBundle\\Form\\Type\\ConfigType', 237 => 'Mautic\\SmsBundle\\Form\\Type\\SmsListType', 238 => 'Mautic\\SmsBundle\\Form\\Type\\SmsSendType', 239 => 'Mautic\\SmsBundle\\Form\\Type\\SmsType', 240 => 'Mautic\\StageBundle\\Form\\Type\\GenericStageActionType', 241 => 'Mautic\\StageBundle\\Form\\Type\\StageActionChangeType', 242 => 'Mautic\\StageBundle\\Form\\Type\\StageActionListType', 243 => 'Mautic\\StageBundle\\Form\\Type\\StageActionType', 244 => 'Mautic\\StageBundle\\Form\\Type\\StageListType', 245 => 'Mautic\\StageBundle\\Form\\Type\\StageType', 246 => 'Mautic\\UserBundle\\Form\\Type\\ConfigType', 247 => 'Mautic\\UserBundle\\Form\\Type\\ContactType', 248 => 'Mautic\\UserBundle\\Form\\Type\\PasswordResetConfirmType', 249 => 'Mautic\\UserBundle\\Form\\Type\\PasswordResetType', 250 => 'Mautic\\UserBundle\\Form\\Type\\PermissionListType', 251 => 'Mautic\\UserBundle\\Form\\Type\\PermissionsType', 252 => 'Mautic\\UserBundle\\Form\\Type\\RoleListType', 253 => 'Mautic\\UserBundle\\Form\\Type\\RoleType', 254 => 'Mautic\\UserBundle\\Form\\Type\\UserListType', 255 => 'Mautic\\UserBundle\\Form\\Type\\UserType', 256 => 'Mautic\\WebhookBundle\\Form\\Type\\CampaignEventSendWebhookType', 257 => 'Mautic\\WebhookBundle\\Form\\Type\\ConfigType', 258 => 'Mautic\\WebhookBundle\\Form\\Type\\WebhookType', 259 => 'MauticPlugin\\MauticFullContactBundle\\Form\\Type\\BatchLookupType', 260 => 'MauticPlugin\\MauticFullContactBundle\\Form\\Type\\LookupType', 261 => 'MauticPlugin\\MauticClearbitBundle\\Form\\Type\\BatchLookupType', 262 => 'MauticPlugin\\MauticClearbitBundle\\Form\\Type\\LookupType', 263 => 'MauticPlugin\\MauticTagManagerBundle\\Form\\Type\\TagEntityType', 264 => 'MauticPlugin\\MauticCrmBundle\\Form\\Type\\IntegrationCampaignsTaskType', 265 => 'MauticPlugin\\MauticFocusBundle\\Form\\Type\\ColorType', 266 => 'MauticPlugin\\MauticFocusBundle\\Form\\Type\\ContentType', 267 => 'MauticPlugin\\MauticFocusBundle\\Form\\Type\\FocusListType', 268 => 'MauticPlugin\\MauticFocusBundle\\Form\\Type\\FocusPropertiesType', 269 => 'MauticPlugin\\MauticFocusBundle\\Form\\Type\\FocusShowType', 270 => 'MauticPlugin\\MauticFocusBundle\\Form\\Type\\FocusType', 271 => 'MauticPlugin\\MauticFocusBundle\\Form\\Type\\PropertiesType', 272 => 'MauticPlugin\\MauticSocialBundle\\Form\\Type\\ConfigType', 273 => 'MauticPlugin\\MauticSocialBundle\\Form\\Type\\FacebookType', 274 => 'MauticPlugin\\MauticSocialBundle\\Form\\Type\\MonitoringType', 275 => 'MauticPlugin\\MauticSocialBundle\\Form\\Type\\SocialLoginType', 276 => 'MauticPlugin\\MauticSocialBundle\\Form\\Type\\TweetListType', 277 => 'MauticPlugin\\MauticSocialBundle\\Form\\Type\\TweetSendType', 278 => 'MauticPlugin\\MauticSocialBundle\\Form\\Type\\TweetType', 279 => 'MauticPlugin\\MauticSocialBundle\\Form\\Type\\TwitterAbstractType', 280 => 'MauticPlugin\\MauticSocialBundle\\Form\\Type\\TwitterCustomType', 281 => 'MauticPlugin\\MauticSocialBundle\\Form\\Type\\TwitterHashtagType', 282 => 'MauticPlugin\\MauticSocialBundle\\Form\\Type\\TwitterMentionType', 283 => 'MauticPlugin\\MauticSocialBundle\\Form\\Type\\TwitterType', 284 => 'MauticPlugin\\MauticEmailMarketingBundle\\Form\\Type\\ConstantContactType', 285 => 'MauticPlugin\\MauticEmailMarketingBundle\\Form\\Type\\IcontactType', 286 => 'MauticPlugin\\MauticEmailMarketingBundle\\Form\\Type\\MailchimpType', 287 => 'Mautic\\CoreBundle\\Form\\Type\\ConfigType', 288 => 'Mautic\\CoreBundle\\Form\\Type\\DynamicContentFilterEntryFiltersType', 289 => 'Mautic\\DynamicContentBundle\\Form\\Type\\DwcEntryFiltersType', 290 => 'Mautic\\FormBundle\\Form\\Type\\FieldType', 291 => 'Mautic\\FormBundle\\Form\\Type\\SubmitActionEmailType', 292 => 'Mautic\\FormBundle\\Form\\Type\\SubmitActionRepostType', 293 => 'Mautic\\MessengerBundle\\Form\\Type\\ConfigType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'FOS\\RestBundle\\Form\\Extension\\DisableCSRFExtension', 8 => 'Exercise\\HTMLPurifierBundle\\Form\\TypeExtension\\HTMLPurifierTextTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($container->privates['debug.file_link_formatter'] ?? ($container->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:form');
        $instance->setDescription('Display form type information');

        return $instance;
    }
}
