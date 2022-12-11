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

use Sendinblue\Services\ConfigService;
use Sendinblue\Services\SmsService;

require_once dirname(__FILE__) . '/../../vendor/autoload.php';

class SendinblueTabController extends AdminControllerCore
{
    /**
     * @var ConfigService
     */
    private $configService;

    /**
     * @var SmsService
     */
    private $smsService;

    /**
     * @var string
     */
    private $name;

    public function __construct()
    {
        $this->bootstrap = true;
        $this->className = 'Configuration';
        $this->table = 'configuration';
        $this->name = 'sendinblue';
        $this->configService = new ConfigService();
        $this->smsService = new SmsService();

        parent::__construct();
    }

    /**
     * @param $tpl_name
     * @return object
     * @throws SmartyException
     */
    public function createTemplate($tpl_name)
    {
        return $this->context->smarty->createTemplate(
            sprintf('%s%s/views/templates/admin/%s', _PS_MODULE_DIR_, $this->name, $tpl_name),
            $this->context->smarty
        );
    }

    public function initContent()
    {
        parent::initContent();
        $this->initToolbar();
        $this->initPageHeaderToolbar();
        $this->context->smarty->assign($this->configService->getConfigs());
        $this->setTemplate('configure.tpl');
    }

    /**
     * added to avoid undefined method exception
     * @return bool
     */
    public function checkAccess()
    {
        return true;
    }

    /**
     * added to avoid undefined method exception
     * @param bool $disable
     * @return bool
     */
    public function viewAccess($disable = false)
    {
        return $this->access('view', $disable);
    }

    /**
     * @param $content
     *
     * @throws PrestaShopException
     */
    protected function ajaxRenderJson($content)
    {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($content);
    }

    /**
     * SMS Settings Update
     *
     * @throws PrestaShopException
     */
    public function displayAjaxSmsSettings()
    {
        $this->ajaxRenderJson($this->smsService->updateSmsSettings());
    }

    /**
     * Credit Notification Mail
     *
     * @throws PrestaShopException
     */
    public function displayAjaxSmsNotificationMail()
    {
        $this->ajaxRenderJson($this->smsService->creditNotificationMail());
    }

    /**
     * Order Confirmation SMS settings update
     *
     * @throws PrestaShopException
     */
    public function displayAjaxSmsOrdConfSettings()
    {
        $this->smsService->updateSmsOrdConfSettings();
    }

    /**
     * Order Confirmation SMS test
     *
     * @throws PrestaShopException
     */
    public function displayAjaxSendOrderConfTestSms()
    {
        $this->smsService->sendOrderTestSms();
    }

    /**
     * SMS Test Campaign
     *
     * @throws PrestaShopException
     */
    public function displayAjaxSmsTestCampaign()
    {
        $this->ajaxRenderJson($this->smsService->sendSmsTestCampaign());
    }

    /**
     * SMS Campaign
     *
     * @throws PrestaShopException
     */
    public function displayAjaxSendSmsCampaign()
    {
        $this->ajaxRenderJson($this->smsService->smsCampaignOptions());
    }

     /**
     * Shipment Confirmation SMS settings update
     *
     * @throws PrestaShopException
     */
    public function displayAjaxSmsShipmentConfSettings()
    {
        $this->smsService->updateSmsShipmentSettings();
    }

    /**
     * Shipment Confirmation SMS test
     *
     * @throws PrestaShopException
     */
    public function displayAjaxSendShipmentTestSms()
    {
        $this->smsService->sendShipmentTestSms();
    }
}
