<?php
/**
 * 2007-2022 Sendinblue
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to contact@sendinblue.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    Sendinblue <contact@sendinblue.com>
 * @copyright 2007-2022 Sendinblue
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 * International Registered Trademark & Property of Sendinblue
 */

abstract class WebserviceSpecificManagementSendinblueAbstract implements WebserviceSpecificManagementInterface
{
    const RESULT = 'result';
    const COUNT = 'count';
    const COUNT_PER_PAGE = 'countPerPage';
    const SUCCESS = 'success';
    const ERROR = 'error';
    const PLUGIN_VERSION = 'plugin_version';
    const SHOP_VERSION = 'shop_version';
    const VERSION = 'version';

    /**
     * @var array
     */
    protected $response;

    /**
     * @var \WebserviceOutputBuilderCore
     */
    protected $objOutput;

    /**
     * @var \WebserviceRequestCore
     */
    protected $wsObject;

    /**
     * @param \WebserviceOutputBuilderCore $obj
     *
     * @return $this
     */
    public function setObjectOutput(\WebserviceOutputBuilderCore $obj)
    {
        $this->objOutput = $obj;
        $this->objOutput->setHeaderParams('Content-Type', 'application/json; text/html; charset=utf-8');

        return $this;
    }

    /**
     * @param \WebserviceRequestCore $obj
     *
     * @return $this
     *
     * @throws \WebserviceException
     */
    public function setWsObject(\WebserviceRequestCore $obj)
    {
        $this->wsObject = $obj;

        return $this;
    }

    /**
     * @return \WebserviceRequestCore
     */
    public function getWsObject()
    {
        return $this->wsObject;
    }

    /**
     * @return \WebserviceOutputBuilderCore
     */
    public function getObjectOutput()
    {
        return $this->objOutput;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return json_encode($this->response);
    }

    /**
     * @return array|null
     */
    public function getRequestBody()
    {
        return json_decode(\Tools::file_get_contents('php://input'), true);
    }

    /**
     * @param string $key
     * @param string|null $value
     * @return mixed|null
     */
    public function getRequestKey($key, $value = null)
    {
        $data = $this->getRequestBody();

        return isset($data[$key]) ? $data[$key] : $value;
    }
}
