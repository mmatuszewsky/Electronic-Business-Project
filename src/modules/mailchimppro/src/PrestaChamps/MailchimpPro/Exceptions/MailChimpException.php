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

namespace PrestaChamps\MailchimpPro\Exceptions;

/**
 * Class MailChimpException
 *
 * @package PrestaChamps\MailchimpPro\Exceptions
 */
class MailChimpException extends \Exception
{
    public $apiResponse;

    public function __construct($apiResponse, $message = '', $code = 0, \Throwable $previous = null)
    {
        $this->apiResponse = $apiResponse;
        $this->message .= json_encode($this->apiResponse);
        parent::__construct($message, $code, $previous);
    }
}
