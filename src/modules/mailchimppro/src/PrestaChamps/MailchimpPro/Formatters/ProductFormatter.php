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

namespace PrestaChamps\MailchimpPro\Formatters;

/**
 * Class ProductFormatter
 *
 * @package PrestaChamps\MailchimpPro\Services
 */
class ProductFormatter
{
    protected $context;
    /**
     * @var \Product
     */
    private $product;
    /**
     * @var \Category
     */
    private $category;

    /**
     * ProductFormatter constructor.
     *
     * @todo Refactor this spaghetti
     *
     * @param \Product  $product
     * @param \Category $category
     * @param \Context  $context
     */
    public function __construct(\Product $product, \Category $category, \Context $context)
    {
        $this->context = $context;
        $this->product = $product;
        $this->category = $category;
    }

    /**
     * Formats a language field to be sent to MC
     *
     * @param $field
     *
     * @return mixed
     */
    protected function sanitizeLanguageFieldToString($field)
    {
        if (is_array($field)) {
            if (isset($field[$this->context->language->id])) {
                $field = $field[$this->context->language->id];
            } else {
                $field = current($field);
            }
        }

        return ''. (string)$field;
    }

    /**
     * @return array
     * @throws \PrestaShopDatabaseException
     * @throws \PrestaShopException
     */
    public function format()
    {
        $imageSize = \Configuration::get(\MailchimpProConfig::PRODUCT_IMAGE_SIZE);
        $variants = $this->product->getAttributeCombinations($this->context->language->id);
        $image = \Image::getCover($this->product->id);
        if ($this->productHasCombinations()) {
            $imagePath = $this->context->link->getImageLink(
                $this->product->link_rewrite,
                $this->product->id . '-' . $image['id_image'],
                $imageSize
            );
        } else {
            $imagePath = $this->context->link->getImageLink(
                $this->product->link_rewrite,
                $image['id_image'],
                $imageSize
            );
        }
        $link_category = \Category::getLinkRewrite($this->product->id_category_default, $this->context->language->id);
        $product_url = $this->context->link->getProductLink(
            $this->product,
            null,
            $link_category,
            $this->product->ean13,
            $this->context->language->id,
            $this->context->shop->id,
            $this->product->getDefaultIdProductAttribute()
        );
        $data = [
            'id' => (string)$this->product->id,
            'title' => $this->sanitizeLanguageFieldToString($this->product->name),
            'url' => $product_url,
            'type' => $this->category->name,
            'description' => $this->sanitizeLanguageFieldToString($this->product->description),
            'variants' => [],
        ];

        if (isset($image['id_image'])) {
            $data['image_url'] = $imagePath;
        }
        $variants_so_far = [];
        foreach ($variants as $variant) {
            if (array_key_exists($variant['id_product_attribute'], $variants_so_far)) {
                $variants_so_far[$variant['id_product_attribute']]['title'] .=
                    ' (' .
                    $variant['group_name'] .
                    ': ' .
                    $variant['attribute_name'] .
                    ')';
            } else {
                $combination = new \Combination($variant['id_product_attribute']);
                $image = \Image::getBestImageAttribute(
                    $this->context->shop->id,
                    $this->context->language->id,
                    $this->product->id,
                    $variant['id_product_attribute']
                );
                
                
                if (is_array($image)) {
                   $imagePath = $this->context->link->getImageLink(
                        $this->product->link_rewrite,
                        $this->product->id . '-' . $image['id_image'],
                        $imageSize
                    );
                }
                
                $variants_so_far[$variant['id_product_attribute']] = array(
                    'title' =>
                        $this->product->name . ' (' . $variant['group_name'] . ': ' . $variant['attribute_name'] . ')',
                    'upc' => $combination->upc,
                    'price' =>
                        \Product::getPriceStatic($this->product->id, true, $variant['id_product_attribute']),
                    'inventory_quantity' => $variant['quantity'],
                );
                $variants_so_far[$variant['id_product_attribute']]['image_url'] = $imagePath;
            }
        }
        foreach ($variants_so_far as $key => $value) {
            $variant_array = [
                'id' => (string)$key,
                'title' => $value['title'],
                'sku' => isset($value['upc']) ? (string)$value['upc'] : '',
                'price' => $value['price'],
                'inventory_quantity' => $value['inventory_quantity'],
            ];
            if (isset($value['image_url'])) {
                $variant_array['image_url'] = $value['image_url'];
            }
            $data['variants'][] = $variant_array;
        }

        if (count($data['variants']) === 0) {
            $data['variants'][] = [
                'id' => $data['id'],
                'title' => $data['title'],
                'inventory_quantity' => (int)\Product::getRealQuantity($this->product->id),
                'price' => $this->product->getPrice(),
                'sku' => (string)$this->product->reference,
            ];
        }

        return $data;
    }

    protected function productHasCombinations()
    {
        if ($this->product->id === null || 0 >= $this->product->id) {
            return false;
        }
        $attributes = \Product::getAttributesInformationsByProduct($this->product->id);
        return !empty($attributes);
    }
}
