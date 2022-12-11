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

class NewsletterRecipientService
{
    /**
     * @param string $email
     *
     * @return bool
     */
    public function isNewsletterRecipientExist($email)
    {
        return \Db::getInstance()->getValue(
            'SELECT `email`
                FROM `' . _DB_PREFIX_ . 'emailsubscription`
                WHERE `email` = "' . pSQL($email) . '"
                AND `active` = 1'
        ) === $email;
    }

    /**
     * @param string $email
     *
     * @return bool
     */
    public function unsubscribe($email)
    {
        return \Db::getInstance()->execute(
            'DELETE FROM ' . _DB_PREFIX_ . 'emailsubscription WHERE email="' . pSQL($email) . '"'
        );
    }

    /**
     * @param int $limit
     * @param int $offset
     *
     * @return array
     *
     * @throws \PrestaShopException
     */
    public function getNewsletterRecipients($limit, $offset = 0)
    {
        $dbquery = new \DbQuery();
        $dbquery->select('CONCAT("N", e.`id`) AS `id`, e.`email`, 
        e.`active` as `newsletter`, l.`iso_code` as `id_lang`');
        $dbquery->from('emailsubscription', 'e');
        $dbquery->limit($limit, $offset);
        $dbquery->leftJoin('shop', 's', 's.id_shop = e.id_shop');
        $dbquery->leftJoin('lang', 'l', 'l.id_lang = e.id_lang');
        $dbquery->where('e.`active` = 1');

        return ['customers' => \Db::getInstance()->executeS($dbquery->build())];
    }
}
