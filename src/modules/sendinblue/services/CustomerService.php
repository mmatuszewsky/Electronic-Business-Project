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

namespace Sendinblue\Services;

class CustomerService
{
    /**
     * @param array $filter
     * @param int $limit
     * @param int $offset
     *
     * @return array
     *
     * @throws \PrestaShopDatabaseException
     */
    public function getCustomers($filter, $limit, $offset)
    {
        $sqlAnd = '';
        if (is_array($filter) && !empty($filter)) {
            foreach ($filter as $field => $value) {
                $sqlAnd .= " AND c.`$field` = $value";
            }
        }

        return ['customers' => \Db::getInstance()->executeS('
            SELECT DISTINCT 
                c.`id_customer` AS id, 
                c.`email`, 
                c.`firstname`, 
                c.`lastname`, 
                c.`id_default_group`, 
                c.`id_gender`, 
                c.`newsletter`, 
                DATE(c.`newsletter_date_add`) AS newsletter_date_add, 
                c.`birthday`, 
                cl.`name` AS country, 
                s.`name` AS state, 
                a.`company`, 
                a.`city`, 
                a.`address1`, 
                a.`address2`, 
                a.`postcode`, 
                a.`vat_number`, 
                DATE(c.`date_add`) AS date_add, 
                DATE(c.`date_upd`) AS date_upd, 
                l.`iso_code` AS id_lang, 
                a.phone AS phone
            FROM `' . _DB_PREFIX_ . 'customer` c
            LEFT JOIN `' . _DB_PREFIX_ . 'address` a ON (c.`id_customer` = a.`id_customer`)
            LEFT JOIN `' . _DB_PREFIX_ . 'lang` l ON (c.`id_lang` = l.`id_lang`)
            LEFT JOIN `' . _DB_PREFIX_ . 'country_lang` cl ON (a.`id_country` = cl.`id_country`)
            LEFT JOIN `' . _DB_PREFIX_ . 'state` s ON (a.`id_state` = s.`id_state`)
            WHERE c.`active` = 1 ' . $sqlAnd . '
            ORDER BY c.`id_customer` ASC
            LIMIT ' . $limit . '
            OFFSET ' . $offset . '
        ')];
    }
}
