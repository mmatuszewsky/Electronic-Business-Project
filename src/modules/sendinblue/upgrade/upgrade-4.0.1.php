<?php
/**
 * 2007-2022 Sendinblue
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to contact@sendinblue.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    Sendinblue <contact@sendinblue.com>
 * @copyright 2007-2022 Sendinblue
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 * International Registered Trademark & Property of Sendinblue
 */

use Sendinblue\Services\ApiClientService;
use Sendinblue\Services\ConfigService;
use Sendinblue\Services\WebserviceService;

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * @throws Exception
 */
function upgrade_module_4_0_1($module)
{
    $apiKeyV2 = Configuration::get('Sendin_Api_Key');
    $sendinNewsletterTableConfig = (int)Configuration::get('Sendin_Newsletter_table');

    if (empty($apiKeyV2)) {
        if ($sendinNewsletterTableConfig === 1) {
            $oldSendinblueHooks = [
                'header',
                'leftColumn',
                'rightColumn',
                'top',
                'footer',
                'createAccount',
                'createAccountForm',
                'OrderConfirmation',
                'actionCartSave',
                'updateOrderStatus',
            ];

            foreach ($oldSendinblueHooks as $oldSendinblueHook) {
                $module->unregisterHook($oldSendinblueHook);
            }

            $module->addModuleToTab();

            Configuration::deleteByName('Sendin_Newsletter_table');
        } elseif (!empty(Configuration::get('Sendin_Final_Template_Id'))) {
            Configuration::deleteByName('Sendin_Final_Template_Id');
        }
        $module->registerSendinblueHooks();

        return true;
    }

    $module->registerSendinblueHooks();

    $subscriptionMailingType = Configuration::get('Sendin_Confirm_Type');
    $smtpDetails = Tools::jsondecode(Configuration::get('Sendin_Smtp_Result'));

    #in the old plugin was possible to select multiple lists, in the microservice - only one
    #if multiple lists were selected, we disable contact sync
    $isMultipleListsSelected = strpos(Configuration::get('Sendin_Selected_List_Data'), '|') !== false;

    $configService = new ConfigService();
    $apiClientService = new ApiClientService($configService);
    $response = $apiClientService->migrateFromApiV2([
        'apiKeyV2' => $apiKeyV2,
        'connector' => 'PS17',
        'name' => 'Prestashop 1.7',
        'auth' => [
            'url' => rtrim(\Tools::getShopDomainSsl(true).__PS_BASE_URI__, '/'),
            'apiKey' => (new WebserviceService())->generateWebServiceKey(),
        ],
        'callback' => $configService->getModuleAdminUrl(),
        'shop_version' => _PS_VERSION_,
        'settings' => [
            'isAutoSyncEnabled' => $isMultipleListsSelected
                ? false
                : (bool)Configuration::get('Sendin_Subscribe_Setting'),
            'isAutoMatchGroupEnabled' => false,
            'isAutoMatchRecipientAttributeEnabled' => $isMultipleListsSelected ? false : true,
            'isAutoMatchItemAttributeEnabled' => false,
            'listId' => $isMultipleListsSelected ? '' : ((int) Configuration::get('Sendin_Selected_List_Data')),
            'isPageTrackingEnabled' => (bool)Configuration::get('Sendin_Tracking_Status'),
            'isAbandonedCartTrackingEnabled' => (bool)Configuration::get('Sendin_Abandoned_Status'),
            'isContactStateSyncEnabled' => $isMultipleListsSelected
                ? false
                : (bool)Configuration::get('Sendin_Subscribe_Setting'),
            'subscriptionMailing' => $isMultipleListsSelected
                ? false
                : ($subscriptionMailingType === 'doubleoptin' || $subscriptionMailingType === 'simplemail'),
            'subscriptionMailingType' => $subscriptionMailingType === 'simplemail' ? 2 : 1,
            'subscriptionRedirectUrlEnabled' => Configuration::get('Sendin_Optin_Url_Check') === 'yes',
            'subscriptionRedirectUrl' => Configuration::get('Sendin_doubleoptin_redirect'),
            'subscriptionSimpleConfirmationId' => (int) Configuration::get('Sendin_Template_Id'),
            'subscriptionDoiConfirmationId' => (int) Configuration::get('Sendin_Dubleoptin_Template_Id'),
            'subscriptionFinalConfirmationEnabled' => Configuration::get('Sendin_final_confirm_email') === 'yes',
            'subscriptionFinalConfirmationId' => Configuration::get('Sendin_Final_Template_Id'),
            'contactSyncType' => 1,
            'isSmtpEnabled' => $smtpDetails && $smtpDetails->relay_data->status === 'enabled',
            'isCustomerSyncEnabled' => false,
            'smtpSender' => $smtpDetails ? $smtpDetails->relay_data->data->username : '',
            'isMultipleListsSelected' => $isMultipleListsSelected,
        ]
    ]);

    if ($response['success'] === true) {
        $oldSendinblueConfigs = [
            'SENDINBLUE_CONFIGURATION_OK',
            'Sendin_Api_Key',
            'Sendin_Api_Key_Status',
            'Sendin_Api_Smtp_Status',
            'Sendin_Attribute_Status',
            'Sendin_doubleoptin_redirect',
            'Sendin_Dubleoptin_Template_Id',
            'Sendin_First_Request',
            'Sendin_Newsletter_table',
            'Sendin_New_Attribute_Status',
            'Sendin_optin_list_id',
            'Sendin_order_tracking_Status',
            'Sendin_Selected_List_Data',
            'Sendin_Final_Template_Id',
            'Sendin_Sender_Value',
            'Sendin_Subscribe_Setting',
            'Sendin_Template_Id',
            'Sendin_Tracking_Status',
            'Sendin_Web_Hook_Recheck',
            'Sendin_Web_Hook_Status',
            'Sendin_Confirm_Type',
            'Sendin_CSV_File_Name',
            'Sendin_Abandoned_Status',
            'Sendin_Automation_Key',
            'Sendin_Automation_Status',
            'Sendin_Smtp_Result',
            'Sendin_final_confirm_email',
            'Sendin_Optin_Url_Check',
        ];

        foreach ($oldSendinblueConfigs as $oldSendinblueConfig) {
            Configuration::deleteByName($oldSendinblueConfig);
        }

        $oldSendinblueHooks = [
            'leftColumn',
            'rightColumn',
            'top',
            'footer',
            'createAccount',
            'createAccountForm',
            'updateOrderStatus',
        ];

        foreach ($oldSendinblueHooks as $oldSendinblueHook) {
            $module->unregisterHook($oldSendinblueHook);
        }

        $module->addModuleToTab();

        return true;
    }

    $module->unregisterSendinblueHooks();

    $oldSendinblueHooks = [
        'header',
        'OrderConfirmation',
        'actionCartSave',
    ];

    foreach ($oldSendinblueHooks as $oldSendinblueHook) {
        $module->registerHook($oldSendinblueHook);
    }

    throw new \Exception('Something went wrong.');
}
