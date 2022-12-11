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


class OrderStateFormatter
{
    protected $context;
    protected $orderState;

    /**
     * OrderStatusFormatter constructor.
     *
     * @param \OrderState $orderState
     * @param \Context    $context
     */
    public function __construct(\OrderState $orderState, \Context $context)
    {
        $this->orderState = $orderState;
        $this->context = $context;
    }

    /**
     * @return string
     * @throws \PrestaShopException
     */
    public function format()
    {
        $statuses = \Configuration::getMultiple(
            [
                \MailchimpProConfig::STATUSES_FOR_PAID,
                \MailchimpProConfig::STATUSES_FOR_CANCELLED,
                \MailchimpProConfig::STATUSES_FOR_REFUNDED,
                \MailchimpProConfig::STATUSES_FOR_PENDING,
            ],
            $this->context->language->id,
            $this->context->shop->id_shop_group,
            $this->context->shop->id
        );

        $paid = isset($statuses[\MailchimpProConfig::STATUSES_FOR_PAID]) ?
            json_decode($statuses[\MailchimpProConfig::STATUSES_FOR_PAID]) : [];
        $cancelled = isset($statuses[\MailchimpProConfig::STATUSES_FOR_CANCELLED]) ?
            json_decode($statuses[\MailchimpProConfig::STATUSES_FOR_CANCELLED]) : [];
        $refunded = isset($statuses[\MailchimpProConfig::STATUSES_FOR_REFUNDED]) ?
            json_decode($statuses[\MailchimpProConfig::STATUSES_FOR_REFUNDED]) : [];
        $pending = isset($statuses[\MailchimpProConfig::STATUSES_FOR_PENDING]) ?
            json_decode($statuses[\MailchimpProConfig::STATUSES_FOR_PENDING]) : [];

        if ($this->orderState->paid || in_array($this->orderState->id, $paid,false)) {
            return 'paid';
        }
        if (in_array($this->orderState->id, $cancelled,false)) {
            return 'cancelled';
        }
        if (in_array($this->orderState->id, $refunded,false)) {
            return 'refunded';
        }
        if (in_array($this->orderState->id, $pending,false)) {
            return 'pending';
        }

        return false;
    }
}
