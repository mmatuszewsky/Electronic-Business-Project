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

/**
 * Class AdminMailchimpProListMembersController
 */
class AdminMailchimpProListMembersController extends \PrestaChamps\MailchimpPro\Controllers\BaseMCObjectController
{
    public $entityPlural   = 'members';
    public $entitySingular = 'member';
    public $list_id;

    public function init()
    {
        parent::init();
        $this->list_id = Tools::getValue('list_id');
    }

    protected function getListApiEndpointUrl()
    {
        return "/lists/{$this->list_id}/members";
    }

    protected function getSingleApiEndpointUrl($entityId)
    {
        return "/lists/{$this->list_id}/members/{$entityId}";
    }

    protected function renderPaginationQ()
    {
        $this->context->smarty->assign([
            'controller_name' => $this->controller_name,
            'totalEntities' => $this->totalEntities,
            'offset' => $this->offset,
            'totalPageNumber' => $this->totalPageNumber,
            'currentPage' => $this->currentPage,
            'count' => $this->entitiesPerPage,
            'list_id' => Tools::getValue('list_id')
        ]);
        $this->content .= $this->context->smarty->fetch(
            $this->module->getLocalPath() . 'views/templates/admin/entity_list/_pagination_list-members.tpl'
        );
    }

    protected function getPaginationPageLinkTemplate()
    {
        /**
         * PrestaShop Module validator note
         *
         * The method exits in modules/mailchimppro/src/LinkHelper.php
         */
        return urldecode(
            LinkHelper::getAdminLink(
                $this->controller_name,
                true,
                [],
                [
                    'action' => 'page',
                    'page' => '(:num)',
                    'list_id' => $this->list_id,
                ]
            )
        );
    }
}
