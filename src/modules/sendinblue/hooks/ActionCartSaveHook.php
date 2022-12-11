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

use Cart;
use CartCore;
use Sendinblue\Factories\EventDataFactory;
use Sendinblue\Services\ApiClientService;

class ActionCartSaveHook extends AbstractHook
{
    /**
     * @var bool
     */
    private $isCartTracked = true;

    /**
     * @param Cart|CartCore $cart
     */
    public function handleEvent($cart)
    {
        try {
            $cartDate = [
                'email' => $this->getContextCustomer()->email,
                'properties' => EventDataFactory::prepareCartProperties($this->getContextCustomer()),
                'eventdata' => [
                    'id' => sprintf('cart:%s', $cart->id),
                ]
            ];

            if ($cart->getProducts() && !$this->isCartAddressUpdated()) {
                $eventName = ApiClientService::EVENT_CART_UPDATED;
                $cartDate['eventdata']['data'] = EventDataFactory::createEventdataDataByCart($cart);
            } else {
                if (!$this->isCartDeleted()) {
                    return;
                }

                $eventName = ApiClientService::EVENT_CART_DELETED;
            }

            $this->getApiClientService()->sendTrackEvent($eventName, $cartDate);
        } catch (\Exception $e) {
            $this->logError($e->getMessage());
        }
    }

    /**
     * @return false|mixed
     */
    private function isCartDeleted()
    {
        return \ToolsCore::getValue('delete');
    }

    /**
     * @return bool
     */
    public function isCartTracked()
    {
        return $this->isCartTracked;
    }

    /**
     * @return bool
     */
    private function isCartAddressUpdated()
    {
        return \Tools::getValue('id_address') !== false;
    }
}
