<?php
/**
 * PrestaChamps
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Commercial License
 * you can't distribute, modify or sell this code
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file
 * If you need help please contact leo@prestachamps.com
 *
 * @author    PrestaChamps <leo@prestachamps.com>
 * @copyright PrestaChamps
 * @license   commercial
 */

use PrestaChamps\PrestaShop\Traits\ShopIdTrait;

/**
 * Class AdminMailchimpProPromoRulesController
 *
 * @property Mailchimppro $module
 */
class AdminMailchimpProPromoCodesController extends \PrestaChamps\MailchimpPro\Controllers\BaseMCObjectController
{
    use ShopIdTrait;

    public $entityPlural = 'promo_codes';
    public $entitySingular = 'promo_code';
    public $rule_id;

    public function init()
    {
        parent::init();
        $this->rule_id = Tools::getValue('rule_id');
    }

    protected function getListApiEndpointUrl()
    {
        return "/ecommerce/stores/{$this->getShopId()}/promo-rules/{$this->rule_id}/promo-codes/";
    }

    protected function getSingleApiEndpointUrl($entityId)
    {
        return "/ecommerce/stores/{$this->getShopId()}/promo-rules/{$this->rule_id}/promo-codes/$entityId";
    }
}
