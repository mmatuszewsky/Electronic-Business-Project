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


class AddressFormatter
{
    public $address;
    public $context;

    /**
     * AddressFormatter constructor.
     *
     * @param \Address $address
     * @param \Context $context
     */
    public function __construct(\Address $address, \Context $context)
    {
        $this->address = $address;
        $this->context = $context;
    }

    /**
     * @return array
     */
    public function format()
    {
        $state = \State::getNameById($this->address->id_state);
        $country_iso = \Country::getIsoById($this->address->id_country);

        $formatted_address = [
                'address1' => $this->address->address1,
                'address2' => $this->address->address2,
                'city' => $this->address->city,
                'state' => isset($state) ? $state : '',
                'country' => $country_iso,
                'zip' => $this->address->postcode,
        ];
        if (!empty($this->address->company)) {
            $formatted_address['company'] = $this->address->company;
        }

        return $formatted_address;
    }
}
