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
 * @author    PrestaChamps <leo@prestachamps.com>
 * @copyright PrestaChamps
 * @license   commercial
 */

namespace PrestaChamps\MailchimpPro\Formatters;


class OrderPromoFormatter extends PromoRuleFormatter
{
    public $order;

    public function __construct(\CartRule $cartRule, \Order $order, \Context $context)
    {
        parent::__construct($cartRule, $context);
        $this->order = $order;
    }

    public function format()
    {
        $data = [];
        $data['code'] = $this->cartRule->code;
        if ($this->cartRule->free_shipping) {
            $data['type'] = self::TYPE_FIXED;
            $data['amount_discounted'] = $this->order->total_shipping;
        } else if (isset($this->cartRule->reduction_percent) && $this->cartRule->reduction_percent != 0) {
            $data['type'] = self::TYPE_PERCENTAGE;
            $data['amount_discounted'] = $this->cartRule->reduction_percent / 100.0;
        } else {
            $data['type'] = self::TYPE_FIXED;
            $data['amount_discounted'] = 0;
        }

        return $data;
    }
}
