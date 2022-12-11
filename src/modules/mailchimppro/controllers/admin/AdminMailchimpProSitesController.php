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

/**
 * Class AdminMailchimpProListsController
 *
 * @property Mailchimppro $module
 */
class AdminMailchimpProSitesController extends \PrestaChamps\MailchimpPro\Controllers\BaseMCObjectController
{
    public $entityPlural   = 'sites';
    public $entitySingular = 'connected-sites';


    protected function getListApiEndpointUrl()
    {
        return '/connected-sites';
    }

    protected function getSingleApiEndpointUrl($entityId)
    {
        return "connected-sites/{$entityId}";
    }

    protected function deleteEntity($id)
    {
        $this->mailchimp->delete("/connected-sites/{$id}");

        if ($this->mailchimp->success()) {
            return true;
        }

        return false;
    }
}
