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

use Sendinblue\Models\Product;

class ProductFactory
{
    /**
     * @param array $product
     * @return array
     */
    public static function create($product)
    {
        $model = new Product();
        $model->id = $product['id_product'];
        $model->name = $product['name'];
        $model->description = strip_tags($product['description']);
        $model->price = $product['price_final'];
        $model->currency = $product['currency'];
        $model->discount = self::getOnlyDiscountAmount($product['id_product']);
        $model->oldPrice = $product['price'];
        $model->images = $product['image_link'];
        $model->url = self::getProductUrl($product);
        $model->idLang = $product['id_language'];
        $model->variants = ProductVariantsFactory::create($model);
        $model->categoryName = $product['name_category'];
        $model->categoryUrl = self::getCategoryLink($product['id_category'], $product['link_rewrite_category']);

        return $model->toArray();
    }

    /**
     * @param string $productId
     * @return float
     */
    private static function getOnlyDiscountAmount($productId)
    {
        return \ProductCore::getPriceStatic(
            (int)$productId,
            true,
            null,
            2,
            null,
            true
        );
    }

    /**
     * @param string $categoryId
     * @param string $rewriteLink
     * @return string
     */
    private static function getCategoryLink($categoryId, $rewriteLink)
    {
        return \ContextCore::getContext()->link->getCategoryLink($categoryId, $rewriteLink);
    }

    /**
     * @param \ProductCore|\Product $product
     * @return string
     */
    private static function getProductUrl($product)
    {
        return \ContextCore::getContext()->link->getProductLink($product);
    }
}
