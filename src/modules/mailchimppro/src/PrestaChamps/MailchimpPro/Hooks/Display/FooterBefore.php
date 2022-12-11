<?php
/**
 * MailChimp
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
 * @copyright Mailchimp
 * @license   commercial
 */

namespace PrestaChamps\MailchimpPro\Hooks\Display;

use Context;
use DrewM\MailChimp\MailChimp;
use Module;
use PrestaChamps\MailchimpPro\Formatters\ListMemberFormatter;
use Tools;
use UnexpectedValueException;

/**
 * Class FooterBefore
 * @package PrestaChamps\MailchimpPro\Hooks\Display
 */
class FooterBefore
{
    /**
     * @var array
     */
    private $params;

    /**
     * @var MailChimp
     */
    private $mailChimp;

    /**
     * @var Context
     */
    private $context;

    protected function __construct($params, MailChimp $mailChimp, Context $context)
    {
        $this->params = $params;
        $this->mailChimp = $mailChimp;
        $this->context = $context;
    }

    public static function run($params, MailChimp $mailchimp, Context $context)
    {
        return new static($params, $mailchimp, $context);
    }

    public function newsletterBlockRegistration(){
        $subscriptionIsEnabled = Module::isEnabled('Ps_Emailsubscription')
            || Module::isEnabled('blocknewsletter');
        if (Tools::isSubmit('submitNewsletter') && $subscriptionIsEnabled) {
            $subscriberHash = md5(Tools::strtolower(Tools::getValue('email')));
            $listId = $this->getListIdFromStore();
            $this->mailChimp->put(
                "/lists/{$listId}/members/{$subscriberHash}",
                [
                    'email_address' => Tools::getValue('email'),
                    'status'        => $this->getListRequiresDOI($listId)
                        ? ListMemberFormatter::STATUS_PENDING
                        : ListMemberFormatter::STATUS_SUBSCRIBED
                ]
            );
        }
    }

    /**
     * Get list ID from store
     *
     * @return string
     */
    protected function getListIdFromStore()
    {
        $shopId = \Mailchimppro::shopIdTransformer($this->context->shop);
        $listId = $this->mailChimp->get("/ecommerce/stores/{$shopId}", ['fields' => 'list_id']);

        if (isset($listId['list_id']) && $this->mailChimp->success()) {
            return $listId['list_id'];
        }

        throw new UnexpectedValueException("Can't determine LIST id from store");
    }

    /**
     * Decide if a list requires the Double Opt In feature
     *
     * @param $listId
     *
     * @return bool
     */
    protected function getListRequiresDOI($listId)
    {
        $list = $this->mailChimp->get("/lists/{$listId}", ['fields' => 'double_optin']);

        if (isset($list['double_optin']) && $this->mailChimp->success()) {
            return (bool)$list['double_optin'];
        }

        throw new UnexpectedValueException("Can't determine if the value requires double optin or not");
    }
}
