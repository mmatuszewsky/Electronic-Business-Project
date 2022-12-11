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

use Sendinblue\Factories\ProductFactory;
use Sendinblue\Services\ConfigService;
use Sendinblue\Services\ProductService;

class WebserviceSpecificManagementSendinblueproducts extends \WebserviceSpecificManagementSendinblueAbstract
{
    public function manage()
    {
        try {
            $productService = new ProductService();
            $term = Tools::getValue('term');
            $page = $productService->fixPage((int) Tools::getValue('page'));
            $limit = $productService->fixItemsPerPage((int) Tools::getValue('limit'));

            $products = $productService->getProducts($term, $page, $limit);
            $preparedProducts = [];

            foreach ($products as $product) {
                $preparedProducts[] = ProductFactory::create($product);
            }

            $this->response = [
                self::SUCCESS => true,
                self::RESULT => $preparedProducts,
                self::COUNT => $productService->getTotalCount($term),
                self::COUNT_PER_PAGE => (int) $limit,
            ];
        } catch (\Exception $e) {
            $this->response = [
                self::SUCCESS => false,
                self::ERROR => $e->getMessage()
            ];

            PrestaShopLogger::addLog($e->getMessage(), ConfigService::ERROR_LEVEL);
        }
    }
}
