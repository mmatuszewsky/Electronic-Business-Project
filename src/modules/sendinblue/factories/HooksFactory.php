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

namespace Sendinblue\Factories;

use Sendinblue\Hooks\ActionCartSaveHook;
use Sendinblue\Hooks\ActionCustomerAccountAddHook;
use Sendinblue\Hooks\ActionCustomerAccountUpdateHook;
use Sendinblue\Hooks\ActionNewsletterRegistrationAfterHook;
use Sendinblue\Hooks\ActionObjectCustomerAddressUpdateHook;
use Sendinblue\Hooks\OrderConfirmationHook;
use Sendinblue\Hooks\ActionEmailConfigurationSaveHook;
use Sendinblue\Hooks\ActionOrderStatusUpdateHook;
use Sendinblue\Hooks\ActionWebPush;

class HooksFactory
{
    /**
     * @return ActionCartSaveHook
     */
    public static function getCartSaveHook()
    {
        return new ActionCartSaveHook();
    }

    /**
     * @return OrderConfirmationHook
     */
    public static function getOrderConfirmationHook()
    {
        return new OrderConfirmationHook();
    }

    /**
     * @return ActionOrderStatusUpdateHook
     */
    public static function getActionOrderStatusUpdateHook()
    {
        return new ActionOrderStatusUpdateHook();
    }

    /**
     * @return ActionEmailConfigurationSaveHook
     */
    public static function getActionEmailConfigurationSaveHook()
    {
        return new ActionEmailConfigurationSaveHook();
    }

    /**
     * @return ActionCustomerAccountAddHook
     */
    public static function getActionCustomerAccountAddHook()
    {
        return new ActionCustomerAccountAddHook();
    }

    /**
     * @return ActionCustomerAccountUpdateHook
     */
    public static function getActionCustomerAccountUpdateHook()
    {
        return new ActionCustomerAccountUpdateHook();
    }

    /**
     * @return ActionObjectCustomerAddressUpdateHook
     */
    public static function getActionObjectCustomerAddressUpdateHook()
    {
        return new ActionObjectCustomerAddressUpdateHook();
    }

    /**
     * @return ActionNewsletterRegistrationAfterHook
     */
    public static function getActionNewsletterRegistrationAfterHook()
    {
        return new ActionNewsletterRegistrationAfterHook();
    }

    /**
     * @return ActionWebPush
     */
    public static function getActionWebPush()
    {  
        return new ActionWebPush();
    }
}
