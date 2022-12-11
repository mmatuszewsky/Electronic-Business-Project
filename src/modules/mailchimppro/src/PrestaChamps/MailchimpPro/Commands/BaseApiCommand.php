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
 * @copyright Mailchimp
 * @license   commercial
 */

namespace PrestaChamps\MailchimpPro\Commands;

use DrewM\MailChimp\MailChimp;
use PrestaChamps\MailchimpPro\Exceptions\MailChimpException;

/**
 * Class BaseApiCommand
 *
 * @package PrestaChamps\MailchimpPro\Commands
 */
abstract class BaseApiCommand
{
    abstract public function execute();

    protected $method = 'POST';

    protected $syncMode = self::SYNC_MODE_REGULAR;

    /**
     * @var $mailchimp MailChimp
     */
    protected $mailchimp;

    /**
     * @var $context \Context
     */
    protected $context;

    const SYNC_MODE_BATCH   = 1;
    const SYNC_MODE_REGULAR = 0;

    const SYNC_METHOD_POST   = 'POST';
    const SYNC_METHOD_PATCH  = 'PATCH';
    const SYNC_METHOD_DELETE = 'DELETE';
    const SYNC_METHOD_PUT    = 'PUT';

    const SUPPORTED_METHODS = [
        self::SYNC_METHOD_POST,
        self::SYNC_METHOD_PATCH,
        self::SYNC_METHOD_DELETE,
        self::SYNC_METHOD_PUT
    ];

    protected $responses = [];

    /**
     * Set the method based on object create, update, etc
     *
     * @param $method
     *
     * @throws MailChimpException
     */
    public function setMethod($method)
    {
        if (!in_array($method, self::SUPPORTED_METHODS, false)) {
            throw new MailChimpException('Unsupported method');
        }
        $this->method = $method;
    }

    /**
     * Set sync mode Regular or Batch
     *
     * @param $mode
     *
     * @throws \Exception
     */
    public function setSyncMode($mode)
    {
        if (in_array($mode, [self::SYNC_MODE_REGULAR, self::SYNC_MODE_BATCH], true)) {
            $this->syncMode = $mode;
        } else {
            throw new \Exception('Unknow mode');
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
        $listId = $this->mailchimp->get("/ecommerce/stores/{$shopId}", ['fields' => 'list_id']);

        if (isset($listId['list_id']) && $this->mailchimp->success()) {
            return $listId['list_id'];
        }

        throw new \UnexpectedValueException("Can't determine LIST id from store");
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
        $list = $this->mailchimp->get("/lists/{$listId}", ['fields' => 'double_optin']);

        if (!isset($list['double_optin'])) {
            return false;
        }

        if (isset($list['double_optin']) && $this->mailchimp->success()) {
            return (bool)$list['double_optin'];
        }

        throw new \UnexpectedValueException("Can't determine if the value requires double optin or not");
    }
}
