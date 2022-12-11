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
 * Class CustomerFormatter
 *
 * @package PrestaChamps\MailchimpPro\Formatters
 */
class CustomerFormatter
{
    public $customer;
    public $address;
    public $context;

    /**
     * CustomerFormatter constructor.
     *
     * @param \Customer $customer
     * @param \Context  $context
     * @param \Address  $address
     */
    public function __construct(\Customer $customer, \Context $context, \Address $address = null)
    {
        $this->customer = $customer;
        $this->address = $address;
        $this->context = $context;
    }

    /**
     * @return array
     * @throws \PrestaShopDatabaseException
     * @todo Improve this spaghetti
     *
     */
    public function format()
    {
        $data = [
            'id' => (string)$this->customer->id,
            'email_address' => $this->customer->email,
            'opt_in_status' => $this->customer->optin || $this->customer->newsletter,
            'first_name' => $this->customer->firstname,
            'last_name' => $this->customer->lastname,
        ];

        if ($this->address) {
            $data['address'] = (new AddressFormatter($this->address, $this->context))->format();
        }

        if (!empty($this->customer->company)) {
            $data['company'] = $this->customer->company;
        }

        $sql = 'SELECT count(o.id_order) as ordercnt, sum(o.total_paid) as ordertotal
		        FROM ' . _DB_PREFIX_ . 'customer c
				LEFT JOIN ' . _DB_PREFIX_ . 'orders o ON (o.id_customer = c.id_customer)
				WHERE (c.id_customer = ' . pSQL($this->customer->id) . ') GROUP BY o.id_customer';

        $sql_result = \Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);

        $data['orders_count'] = (int)$sql_result[0]['ordercnt'];
        $data['total_spent'] = (isset($sql_result[0]['ordertotal']) ? $sql_result[0]['ordertotal'] : 0.0);

        return $data;
    }
}
