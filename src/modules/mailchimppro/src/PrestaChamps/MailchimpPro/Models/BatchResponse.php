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

namespace PrestaChamps\MailchimpPro\Models;

/**
 * Class BatchResponse
 *
 * @package PrestaChamps\MailchimpPro\Models
 */
class BatchResponse
{
    public    $status_code;
    public    $operation_id;
    protected $response_raw;
    public    $response;

    public function __construct($status_code, $operation_id, $response_raw)
    {
        $this->status_code = $status_code;
        $this->operation_id = $operation_id;
        $this->response_raw = $response_raw;
        $this->response = json_decode($this->response_raw, true);
    }

    /**
     * Create a response object from a json string
     *
     * @param $array
     *
     * @return BatchResponse
     */
    public static function fromArray($array)
    {
        return new static(
            $array['status_code'],
            $array['operation_id'],
            $array['response']
        );
    }
}
