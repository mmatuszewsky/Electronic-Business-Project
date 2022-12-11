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
class AdminMailchimpProListsController extends \PrestaChamps\MailchimpPro\Controllers\BaseMCObjectController
{
    public $entityPlural   = 'lists';
    public $entitySingular = 'list';

    /**
     * @throws Exception
     */
    public function processNew()
    {
        $list_name = \Tools::getValue('list_name');
        if ($list_name) {
            $this->action = null;
            if ($this->createMailchimpList($list_name)) {
                $this->confirmations[] = $this->l('List created successfully');
            } else {
                $this->errors[] = $this->l("Oups! Failed to create list: {$this->mailchimp->getLastError()}");
            }

        }

    }

    /**
     * @param $list_name
     *
     * @return array|false
     * @throws Exception
     */
    private function createMailchimpList($list_name)
    {
        return \PrestaChamps\MailchimpPro\Factories\ListFactory::make(
            $list_name,
            $this->module->getApiClient(),
            $this->context
        );
    }

    protected function getListApiEndpointUrl()
    {
        return '/lists';
    }

    protected function getSingleApiEndpointUrl($entityId)
    {
        return "lists/{$entityId}";
    }
}
