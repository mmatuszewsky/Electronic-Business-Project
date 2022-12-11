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

namespace PrestaChamps\PrestaShop\Tab;


class TabRepository
{
    protected $tabs;
    protected $moduleName;
    protected $tabInstaller;

    /**
     * TabRepository constructor.
     *
     * @param array $tabs
     * @param       $moduleName
     */
    public function __construct(array $tabs, $moduleName)
    {
        $this->tabs = $tabs;
        $this->moduleName = $moduleName;
        $this->tabInstaller = new TabInstaller($this->moduleName);
    }

    /**
     * @throws \PrestaShopDatabaseException
     * @throws \PrestaShopException
     */
    public function install()
    {
        foreach ($this->tabs as $tab) {
            $this->tabInstaller->installTab(
                $tab['name'],
                $tab['class_name'],
                'mailchimppro',
                $tab['is_root'],
                $tab['visible']
            );
        }
    }

    /**
     * @throws \PrestaShopException
     */
    public function uninstall()
    {
        foreach ($this->tabs as $tab) {
            $this->tabInstaller->uninstallTab(
                $tab['class_name']
            );
        }
    }
}
