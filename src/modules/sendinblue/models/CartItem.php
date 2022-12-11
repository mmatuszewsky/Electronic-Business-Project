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

namespace Sendinblue\Models;

class CartItem extends AbstractModel
{
    public $id = '';
    public $name = '';
    public $quantity = '';
    public $size = '';
    public $available_now = '';
    public $category = '';
    public $sku = '';
    public $image = '';
    public $description_short = '';
    public $price = '';
    public $price_predisc = '';
    public $price_predisc_taxinc = '';
    public $price_taxinc = '';
    public $disc_amount = '';
    public $disc_amount_taxinc = '';
    public $disc_rate = '';
    public $tax_amount = '';
    public $tax_name = '';
    public $tax_rate = '';
    public $url = '';
    public $variant_id = '';
    public $variant_id_name = '';
    public $variant_name = '';
}
