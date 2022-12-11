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

namespace Sendinblue\Hooks;

class ActionObjectCustomerAddressUpdateHook extends AbstractHook
{
    /**
     * @param \AddressCore $data
     */
    public function handleEvent($data)
    {
        try {
            if (!$data["object"]->id_customer) {
                return;
            }

            if (!is_null($this->getContextCustomer()) && $this->getContextCustomer()->newsletter == 1) {
                $psCountry = \Db::getInstance()->getRow(
                    'SELECT `name` 
             FROM '._DB_PREFIX_.'country_lang 
             WHERE  `id_country` = \''.pSQL($data["object"]->id_country).'\''
                );
                $customerCountry = \Tools::ucfirst($psCountry['name']);

                if (!empty($data["object"]->id_state)) {
                    $psState = \Db::getInstance()->getRow(
                        'SELECT `name` 
             FROM '._DB_PREFIX_.'state 
             WHERE  `id_state` = \''.pSQL($data["object"]->id_state).'\''
                    );
                    $customerState = \Tools::ucfirst($psState['name']);
                } else {
                    $customerState = null;
                }

                $contactPayload = [
                    'id' => $data["object"]->id_customer,
                    'id_default_group' => !is_null($this->getContextCustomer()) ?
                        $this->getContextCustomer()->id_default_group : null,
                    'id_lang' => !is_null($this->getContextlanguage()) ? $this->getContextlanguage()->iso_code : null,
                    'email' => !is_null($this->getContextCustomer()) ? $this->getContextCustomer()->email : null,
                    'country' => $customerCountry,
                    'state' => $customerState,
                    'company' => $data["object"]->company,
                    'firstname' => $data["object"]->firstname,
                    'lastname' => $data["object"]->lastname,
                    'address1' => $data["object"]->address1,
                    'address2' => $data["object"]->address2,
                    'postcode' => $data["object"]->postcode,
                    'city' => $data["object"]->city,
                    'phone' => $data["object"]->phone,
                    'vat_number' => $data["object"]->vat_number,
                    'date_add' => date('Y-m-d', strtotime($data["object"]->date_add)),
                    'date_upd' => date('Y-m-d', strtotime($data["object"]->date_upd)),
                ];

                $this->getApiClientService()->updateContact($contactPayload);
            } else {
                return;
            }
        } catch (\Exception $e) {
            $this->logError($e->getMessage());
        }
    }
}
