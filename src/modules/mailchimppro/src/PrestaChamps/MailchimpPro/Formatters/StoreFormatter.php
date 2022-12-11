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
 * @author    Mailchimp
 * @copyright PrestaChamps
 * @license   commercial
 */

namespace PrestaChamps\MailchimpPro\Formatters;

/**
 * Class StoreFormatter
 *
 * @package PrestaChamps\MailchimpPro\Formatters
 */
class StoreFormatter
{
    public $store;
    public $context;

    /**
     * StoreFormatter constructor.
     *
     * @param \Shop    $shop
     * @param \Context $context
     */
    public function __construct(\Shop $shop, \Context $context)
    {
        $this->store = $shop;
        $this->context = $context;
    }

    public function format()
    {
        $store_state = (\State::getNameById($this->store->getAddress()->id_state) ?
            \State::getNameById($this->store->getAddress()->id_state) : '');
        $store_country_iso = \Country::getIsoById($this->store->getAddress()->id_country);
        $store_currency_iso = \Tools::strtoupper(\Currency::getDefaultCurrency()->iso_code);
        $store_currency_format = \Currency::getDefaultCurrency()->sign;
        $formatted_store_address = [
            'address1' => (string)$this->store->getAddress()->address1,
            'address2' => (string)$this->store->getAddress()->address2,
            'city' => (string)$this->store->getAddress()->city,
            'country' => $store_country_iso,
            'zip' => (string)$this->store->getAddress()->postcode,
        ];
        $formatted_store_address['company'] = $this->store->getAddress()->company;
        if (isset($store_state)) {
            $formatted_store_address['state'] = $store_state;
        }
        $data = [
            'id' => (string)\Mailchimppro::shopIdTransformer($this->store),
            'name' => $this->store->name,
            'address' => $formatted_store_address,
            'list_id' => \Configuration::get(\MailchimpProConfig::MAILCHIMP_LIST_ID),
            'platform' => 'PrestaShop',
            'domain' => $this->store->getBaseURL(true),
            'is_syncing' => false,
            'email_address' => (string)\Configuration::get('PS_SHOP_EMAIL'),
            'currency_code' => $store_currency_iso,
            'money_format' => $store_currency_format,
            'is_active' => (bool)$this->store->active,
        ];

        return $data;
    }
}
