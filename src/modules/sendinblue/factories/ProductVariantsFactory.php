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

namespace Sendinblue\Factories;

use Sendinblue\Models\ProductVariant;
use Sendinblue\Services\ConfigService;
use Sendinblue\Models\Product;

class ProductVariantsFactory
{
    /**
     * @param Product $product
     * @return array
     */
    public static function create(Product $product)
    {
        $preparedVariants = [];
        try {
            $productModel = new \ProductCore($product->id);
            if ($productModel->hasCombinations()) {
                $variants = $productModel->getAttributesResume($product->idLang);
                foreach ($variants as $variant) {
                    $variant['url'] = $product->url.$productModel->getAnchor($variant['id_product_attribute'], true);
                    $variant['price'] = $productModel->getPublicPrice(true, $variant['id_product_attribute'], 2);
                    $variant['discount'] = $productModel->getPrice(true, $variant['id_product_attribute'], 2, null, true);
                    $preparedVariants[] = self::createVariant($variant, $product);
                }
            }
        } catch (\Exception $e) {
            \PrestaShopLogger::addLog($e->getMessage(), ConfigService::ERROR_LEVEL);
        }

        return $preparedVariants;
    }

    /**
     * @param array $variant
     * @param Product $product
     * @return array
     */
    private static function createVariant($variant, Product $product)
    {
        $model = new ProductVariant();
        $model->id = $variant['id_product_attribute'];
        $model->name = $variant['attribute_designation'];
        $model->productNumber = $variant['reference'];
        $model->price = $variant['price']; 
        $model->oldPrice = $variant['price'] + $variant['discount']; 
        $model->url = $variant['url'];
        $model->discount =  $variant['discount'];

        return $model->toArray();
    }
}
