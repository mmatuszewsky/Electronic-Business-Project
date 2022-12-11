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

namespace PrestaChamps\MailchimpPro\Factories;

use DrewM\MailChimp\MailChimp;

/**
 * Class ListFactory
 *
 * @package PrestaChamps\MailchimpPro\Factories
 */
class ListFactory
{
    /**
     * @param           $listName
     * @param MailChimp $mailChimp
     * @param \Context  $context
     *
     * @return array|false
     * @throws \Exception
     */
    public static function make($listName, MailChimp $mailChimp, \Context $context)
    {
        $store_name = $context->shop->name;
        $shop_email = (string)\Configuration::get('PS_SHOP_EMAIL');


        $store_address = $context->shop->getAddress();
        $store_state = \State::getNameById($store_address->id_state);
        $store_country_iso = \Country::getIsoById($store_address->id_country);

        $data = [
            'name' => $listName,
            'contact' => [
                'company' => $store_address->company,
                'country' => $store_country_iso,
            ],
            'campaign_defaults' => [
                'from_name' => $store_name,
                'from_email' => $shop_email,
                'subject' => $store_name,
                'language' => 'en',
            ],
            'permission_reminder' =>
                'You are receiving this email because you signed up for an account at the following store: ' .
                $store_name,
            'email_type_option' => true,
        ];

        if ($store_address->address1 && !empty($store_address->address1)) {
            $data['contact']['address1'] = $store_address->address1;
        } else {
            $data['contact']['address1'] = $listName;
        }

        if ($store_address->address2 && !empty($store_address->address2)) {
            $data['contact']['address2'] = $store_address->address2;
        } else {
            $data['contact']['address2'] = $listName;
        }

        if ($store_address->city && !empty($store_address->city)) {
            $data['contact']['city'] = $store_address->city;
        } else {
            $data['contact']['city'] = $listName;
        }

        if ($store_address->postcode && !empty($store_address->postcode)) {
            $data['contact']['zip'] = $store_address->postcode;
        } else {
            $data['contact']['zip'] = $listName;
        }

        if ($store_state && !empty($store_state)) {
            $data['contact']['state'] = $store_state;
        } else {
            $data['contact']['state'] = 'state';
        }

        $result = $mailChimp->post('lists', $data);
        if ($mailChimp->success()) {
            \Configuration::updateValue('MAILCHIMP_LIST_NAME', $listName);
            \MailchimpProConfig::saveValue(\MailchimpProConfig::MAILCHIMP_LIST_NAME, $listName);
            \MailchimpProConfig::saveValue(\MailchimpProConfig::MAILCHIMP_LIST_ID, $result['id']);
            return $result;
        }

        throw new \Exception($mailChimp->getLastError() . $mailChimp->getLastResponse()['body']);
    }
}
