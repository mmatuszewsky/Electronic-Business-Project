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

namespace PrestaChamps\PrestaShop\Helpers;

/**
 * Class LinkHelper
 *
 * @package PrestaChamps\PrestaShop\Helpers
 */
class LinkHelper
{
    /**
     * @param       $controller
     * @param bool  $withToken
     * @param array $sfRouteParams
     * @param array $params
     *
     * @return string
     * @throws \PrestaShopException
     */
    public static function getAdminLink($controller, $withToken = true, $sfRouteParams = [], $params = [])
    {
        if ((bool)version_compare(_PS_VERSION_, '1.7', '>=')) {
            return \Context::getContext()->link->getAdminLink($controller, $withToken, $sfRouteParams, $params);
        }

        $idLang = \Context::getContext()->language->id;
        if ($withToken) {
            $params['token'] = \Tools::getAdminTokenLite($controller);
        }
        return self::getBaseLink() .
            basename(_PS_ADMIN_DIR_) . '/' .
            \Dispatcher::getInstance()->createUrl($controller, $idLang, $params);
    }

    public static function getBaseLink()
    {
        $r = new \ReflectionMethod('link', 'getBaseLink');
        $r->setAccessible(true);
        return $r->invoke(new \Link());
    }
}
