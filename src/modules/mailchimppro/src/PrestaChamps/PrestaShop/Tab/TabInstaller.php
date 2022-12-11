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

/**
 * Class TabInstaller
 *
 * @package PrestaChamps\PrestaShop\Helpers
 */
class TabInstaller
{
    protected $moduleName;

    public function __construct($moduleName)
    {
        $this->moduleName = $moduleName;
    }

    /**
     * Install a module Tab
     *
     * @param      $name
     * @param      $className
     * @param      $parentClassName
     *
     * @param bool $isRoot
     * @param bool $visible
     *
     * @return int
     * @throws \PrestaShopDatabaseException
     * @throws \PrestaShopException
     */
    public function installTab($name, $className, $parentClassName, $isRoot = false, $visible = true)
    {
        $tab = new \Tab();
        $tab->id_parent = $isRoot ? 0 : \Tab::getIdFromClassName($parentClassName);
        // $tab->name = array_fill_keys(array_values(\Language::getIDs(true)), $name); // from Ps 1.6.1.0
        $langIDs = [];
        foreach(\Language::getLanguages(true) as $language){
            $langIDs[] = $language['id_lang'];
        }
        
        $tab->name = array_fill_keys(array_values($langIDs), $name);
        $tab->class_name = $className;
        $tab->module = $this->moduleName;
        $tab->active = (bool)$visible;

        return $tab->save();
    }

    /**
     * Delete a module Tab
     *
     * @param $className
     *
     * @return bool
     * @throws \PrestaShopException
     */
    public function uninstallTab($className)
    {
        $tab = \Tab::getInstanceFromClassName($className);

        if ($tab) {
            return $tab->delete();
        }

        return false;
    }
}
