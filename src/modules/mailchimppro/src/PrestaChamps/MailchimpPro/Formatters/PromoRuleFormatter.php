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
 * Class PromoRuleFormatter
 *
 * @package PrestaChamps\MailchimpPro\Formatters
 */
class PromoRuleFormatter
{
    /**
     * @var \Context $context
     */
    public $context;

    /**
     * @var \CartRule $cartRule
     */
    public $cartRule;

    const TYPE_FIXED      = 'fixed';
    const TYPE_PERCENTAGE = 'percentage';

    const TARGET_PER_ITEM = 'per_item';
    const TARGET_TOTAL    = 'total';
    const TARGET_SHIPPING = 'shipping';

    /**
     * CartRuleFormatter constructor.
     *
     * @param \CartRule $cartRule
     * @param \Context  $context
     */
    public function __construct(\CartRule $cartRule, \Context $context)
    {
        $this->cartRule = $cartRule;
        $this->context = $context;
    }

    public function format()
    {
        $data = [
            'id' => (string)$this->cartRule->id,
            'title' => $this->cartRule->name,
            'description' => $this->cartRule->description,
            'starts_at' => $this->cartRule->date_from,
            'ends_at' => $this->cartRule->date_to,
            'enabled' => (boolean)$this->cartRule->active,
        ];

        if ($this->cartRule->free_shipping) {
            $data['type'] = self::TYPE_FIXED;
            $data['target'] = self::TARGET_SHIPPING;
            $data['amount'] = 0;
        } else if (isset($this->cartRule->reduction_percent) && $this->cartRule->reduction_percent != 0) {
            $data['type'] = self::TYPE_PERCENTAGE;
            $data['amount'] = $this->cartRule->reduction_percent / 100.0;
            $data['target'] = ($this->cartRule->product_restriction ? self::TARGET_PER_ITEM : self::TARGET_TOTAL);
        } else if (isset($this->cartRule->reduction_amount) && $this->cartRule->reduction_amount != 0) {
            $data['type'] = self::TYPE_FIXED;
            $data['amount'] = $this->cartRule->reduction_amount;
            $data['target'] = ($this->cartRule->product_restriction ? self::TARGET_PER_ITEM : self::TARGET_TOTAL);
        } else {
            $data['type'] = self::TYPE_FIXED;
            $data['amount'] = 0;
            $data['target'] = ($this->cartRule->product_restriction ? self::TARGET_PER_ITEM : self::TARGET_TOTAL);
        }

        return $data;
    }

    public function formatPromoCode()
    {
        return [
            'id' => (string)$this->cartRule->id,
            'code' => $this->cartRule->code,
            'redemption_url' => $this->context->shop->getBaseURL(true,true)
        ];
    }
}
