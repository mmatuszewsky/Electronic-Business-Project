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

namespace Sendinblue\Services;

use PrestaShop\PrestaShop\Adapter\Validate;
use PrestaShopBundle\Entity\AdminFilter;
use Symfony\Component\Process\Exception\LogicException;

class ProductService
{
    const FILTERING_LIKE_BOTH = 'LIKE \'%%%s%%\'';
    const FILTERING_LIKE_LEFT = 'LIKE \'%%%s\'';
    const FILTERING_EQUAL_NUMERIC = '= %s';
    const DEFAULT_LIMIT = 25;
    const DEFAULT_PAGE = 1;

    /**
     * @var int|null
     */
    private $idShop;

    /**
     * @var false|string
     */
    private $defaultLanguage;

    /**
     * @var false|int|string
     */
    private $idLang;

    public function __construct()
    {
        $this->idShop = \ContextCore::getContext()->shop->id;
        $this->defaultLanguage = \ConfigurationCore::get('PS_LANG_DEFAULT');
        $this->idLang = ! empty($this->defaultLanguage) ? $this->defaultLanguage : \ContextCore::getContext()->language->id;
    }

    /**
     * logic cloned from PrestaShop\PrestaShop\Adapter\Product\AdminProductDataProvider::getCatalogProductList()
     * @param string $term
     * @param int $page
     * @param int $itemsPerPage
     * @return array|bool|mysqli_result|PDOStatement|resource|null
     */
    public function getProducts($term, $page, $itemsPerPage)
    {
        $orderBy = 'id_product';
        $sortOrder = 'desc';
        $offset = $this->calculateOffset($page, $itemsPerPage);

        $filterParams = [
            'filter_column_name' => $term,
            'filter_column_active' => 1,
            'last_offset' => $offset,
            'last_limit' => $itemsPerPage,
            'last_orderBy' => $orderBy,
            'last_sortOrder' => $sortOrder
        ];
        $filterParams = AdminFilter::sanitizeFilterParameters($filterParams);

        $sqlSelect = [
            'id_product' => ['table' => 'p', 'field' => 'id_product', 'filtering' => ' %s '],
            'price' => ['table' => 'sa', 'field' => 'price', 'filtering' => ' %s '],
            'id_shop_default' => ['table' => 'p', 'field' => 'id_shop_default'],
            'name' => ['table' => 'pl', 'field' => 'name', 'filtering' => self::FILTERING_LIKE_BOTH],
            'id_language' => ['table' => 'pl', 'field' => 'id_lang'],
            'description' => ['table' => 'pl', 'field' => 'description', 'filtering' => self::FILTERING_LIKE_BOTH],
            'link_rewrite' => ['table' => 'pl', 'field' => 'link_rewrite', 'filtering' => self::FILTERING_LIKE_BOTH],
            'active' => ['table' => 'sa', 'field' => 'active', 'filtering' => self::FILTERING_EQUAL_NUMERIC],
            'id_image' => ['table' => 'image_shop', 'field' => 'id_image'],
            'name_category' => ['table' => 'cl', 'field' => 'name', 'filtering' => self::FILTERING_LIKE_BOTH],
            'id_category' => ['table' => 'cl', 'field' => 'id_category', 'filtering' => self::FILTERING_LIKE_BOTH],
            'link_rewrite_category' => [
                'table' => 'cl',
                'field' => 'link_rewrite',
                'filtering' => self::FILTERING_LIKE_BOTH
            ],
            'price_final' => '0',
        ];
        $sqlTable = [
            'p' => 'product',
            'pl' => [
                'table' => 'product_lang',
                'join' => 'LEFT JOIN',
                'on' => sprintf(
                    'pl.`id_product` = p.`id_product` AND pl.`id_lang` = %s AND pl.`id_shop` = %s',
                    $this->idLang,
                    $this->idShop
                ),
            ],
            'sa' => [
                'table' => 'product_shop',
                'join' => 'JOIN',
                'on' => sprintf(
                    'p.`id_product` = sa.`id_product` AND sa.id_shop = %s',
                    $this->idShop
                ),
            ],
            'cl' => [
                'table' => 'category_lang',
                'join' => 'LEFT JOIN',
                'on' => sprintf(
                    'sa.`id_category_default` = cl.`id_category` AND cl.`id_lang` = %s AND cl.id_shop = %s',
                    $this->idLang,
                    $this->idShop
                ),
            ],
            'c' => [
                'table' => 'category',
                'join' => 'LEFT JOIN',
                'on' => 'c.`id_category` = cl.`id_category`',
            ],
            'shop' => [
                'table' => 'shop',
                'join' => 'LEFT JOIN',
                'on' => sprintf('shop.id_shop = %s', $this->idShop),
            ],
            'image_shop' => [
                'table' => 'image_shop',
                'join' => 'LEFT JOIN',
                'on' => sprintf(
                    'image_shop.`id_product` = p.`id_product` AND image_shop.`cover` = 1 AND image_shop.id_shop = %s',
                    $this->idShop
                ),
            ],
            'i' => [
                'table' => 'image',
                'join' => 'LEFT JOIN',
                'on' => 'i.`id_image` = image_shop.`id_image`',
            ],
            'pd' => [
                'table' => 'product_download',
                'join' => 'LEFT JOIN',
                'on' => 'pd.`id_product` = p.`id_product`',
            ],
        ];
        $sqlWhere = ['AND', 1];
        $sqlOrder = [$orderBy . ' ' . $sortOrder];
        if ($orderBy != 'id_product') {
            $sqlOrder[] = 'id_product asc';
        }
        $sqlLimit = $offset . ', ' . $itemsPerPage;

        $sqlGroupBy = [];

        foreach ($filterParams as $filterParam => $filterValue) {
            if (!$filterValue && $filterValue !== '0') {
                continue;
            }
            if (strpos($filterParam, 'filter_column_') === 0) {
                $filterValue = \DbCore::getInstance()->escape($filterValue, in_array($filterParam, [
                    'filter_column_id_product',
                    'filter_column_price',
                ]), true);
                $field = \Tools::substr($filterParam, 14); // 'filter_column_' takes 14 chars
                if (isset($sqlSelect[$field]['table'])) {
                    $where = $sqlSelect[$field]['table'] . '.`' . $sqlSelect[$field]['field'];
                    $where .= '` ' . sprintf($sqlSelect[$field]['filtering'], $filterValue);

                    $sqlWhere[] = $where;
                } else {
                    $sqlWhere[] = '(' . sprintf($sqlSelect[$field]['filtering'], $filterValue) . ')';
                }
            }
        }
        $sqlWhere[] = 'state = ' . \ProductCore::STATE_SAVED;

        $sql = $this->compileSqlQuery($sqlSelect, $sqlTable, $sqlWhere, $sqlGroupBy, $sqlOrder, $sqlLimit);
        $products = \DbCore::getInstance()->executeS($sql, true, false);

        foreach ($products as &$product) {
            $nothing = null;
            $product['price_final'] = \ProductCore::getPriceStatic(
                $product['id_product'],
                true,
                null,
                2,
                null,
                false,
                true,
                1,
                true,
                null,
                null,
                null,
                $nothing,
                true,
                true
            );

            $product['currency'] = (new \CurrencyCore(\ConfigurationCore::get('PS_CURRENCY_DEFAULT')))->iso_code;
            $product['image_link'] = $this->getProductImageUrl($product['id_product'], $product['link_rewrite']);
        }

        return $products;
    }

    /**
     * @param string $productId
     * @param string $productLink
     * @return array
     */
    private function getProductImageUrl($productId, $productLink)
    {
        $imageLinks = [];
        try {
            $imagesQuery = sprintf('SELECT id_image FROM %simage_shop WHERE id_product = %s', _DB_PREFIX_, $productId);
            $images = \DbCore::getInstance()->executeS($imagesQuery, true, false);
            foreach ($images as $image) {
                $imageLinks[] = \ContextCore::getContext()->link->getImageLink($productLink, $image['id_image']);
            }
        } catch (\Exception $e) {
            \PrestaShopLoggerCore::addLog($e->getMessage(), ConfigService::ERROR_LEVEL);
        }

        return $imageLinks;
    }

    /**
     * @param array $select
     * @param array $table
     * @param array $where
     * @param array $groupBy
     * @param array $order
     * @param null $limit
     * @return string
     */
    protected function compileSqlQuery($select, $table, $where = [], $groupBy = [], $order = [], $limit = null)
    {
        $sql = [];

        // SELECT
        $s = [];
        foreach ($select as $alias => $field) {
            $a = is_string($alias) ? ' AS `' . $alias . '`' : '';
            if (is_array($field)) {
                if (isset($field['table'])) {
                    $s[] = ' ' . $field['table'] . '.`' . $field['field'] . '` ' . $a;
                } elseif (isset($field['select'])) {
                    $s[] = ' ' . $field['select'] . $a;
                }
            } else {
                $s[] = ' ' . $field . $a;
            }
        }
        if (count($s) === 0) {
            throw new LogicException('Compile SQL failed: No field to SELECT!');
        }
        $sql[] = 'SELECT SQL_CALC_FOUND_ROWS' . implode(',' . PHP_EOL, $s);

        // FROM / JOIN
        $s = [];
        foreach ($table as $alias => $join) {
            if (!is_array($join)) {
                if (count($s) > 0) {
                    throw new LogicException(
                        sprintf(
                            'Compile SQL failed: cannot join the table %s into SQL query without JOIN sepcs.',
                            $join
                        )
                    );
                }
                $s[0] = ' `' . _DB_PREFIX_ . $join . '` ' . $alias;
            } else {
                if (count($s) === 0) {
                    throw new LogicException(
                        sprintf(
                            'Compile SQL failed: 
                                cannot join the table alias %s into SQL query before to insert initial table.',
                            $alias
                        )
                    );
                }

                $query = ' ' . $join['join'] . ' `' . _DB_PREFIX_ . $join['table'] . '` ' . $alias;
                $query .= ((isset($join['on'])) ? ' ON (' . $join['on'] . ')' : '');

                $s[] = $query;
            }
        }
        if (count($s) === 0) {
            throw new LogicException('Compile SQL failed: No table to insert into FROM!');
        }
        $sql[] = 'FROM ' . implode(' ' . PHP_EOL, $s);

        // WHERE (recursive call)
        if (count($where)) {
            $s = $this->compileSqlWhere($where);
            if (\Tools::strlen($s) > 0) {
                $sql[] = 'WHERE ' . $s . PHP_EOL;
            }
        }

        // GROUP BY
        if (!empty($groupBy)) {
            $sql[] = 'GROUP BY ' . implode(', ', array_map('pSQL', $groupBy)) . PHP_EOL;
        }

        // ORDER
        if (count($order) > 0) {
            $goodOrder = [];
            foreach ($order as $o) {
                $value = explode(' ', $o);
                if (!empty($value) && 2 === count($value)
                    && Validate::isOrderBy($value[0])
                    && Validate::isOrderWay($value[1])
                ) {
                    $goodOrder[] = ' `' . bqSQL($value[0]) . '` ' . $value[1];
                }
            }

            if (count($goodOrder) > 0) {
                $sql[] = 'ORDER BY ' . implode(', ', $goodOrder) . PHP_EOL;
            }
        }

        // LIMIT
        if ($limit) {
            $sql[] = 'LIMIT ' . $limit . PHP_EOL;
        }

        return implode(' ' . PHP_EOL, $sql) . ';';
    }

    /**
     * @param array $whereArray
     * @return mixed|string
     */
    private function compileSqlWhere($whereArray)
    {
        $operator = 'AND';
        $s = [];
        while ($item = array_shift($whereArray)) {
            if ($item == 'OR') {
                $operator = 'OR';
            } elseif ($item == 'AND') {
                $operator = 'AND';
            } else {
                $s[] = (is_array($item) ? $this->compileSqlWhere($item) : $item);
            }
        }
        if (count($s) == 1) {
            return $s[0];
        }

        return '(' . implode(' ' . $operator . ' ', $s) . ')';
    }

    /**
     * @param string $term
     * @return int
     */
    public function getTotalCount($term)
    {
        $result = \DbCore::getInstance()->executeS(
            sprintf(
                "SELECT count(*)  AS `count`
                FROM  `%sproduct` p 
                LEFT JOIN `%sproduct_lang` pl 
                    ON (pl.`id_product` = p.`id_product` 
                    AND pl.`id_lang` = $this->idLang 
                    AND pl.`id_shop` = $this->idShop) 
                JOIN `%sproduct_shop` sa ON (p.`id_product` = sa.`id_product` AND sa.id_shop = 1)  
                WHERE (1 AND pl.`name` LIKE '%%%s%%' AND sa.`active` = 1 AND state = 1)",
                _DB_PREFIX_,
                _DB_PREFIX_,
                _DB_PREFIX_,
                $term
            )
        );

        return isset($result[0]['count']) ? (int) $result[0]['count'] : 0;
    }

    /**
     * @param int $page
     * @return int
     */
    public function fixPage($page)
    {
        return empty($page) ? self::DEFAULT_PAGE : $page;
    }

    /**
     * @param int $itemsPerPage
     * @return int
     */
    public function fixItemsPerPage($itemsPerPage)
    {
        return empty($itemsPerPage) ? self::DEFAULT_LIMIT : $itemsPerPage;
    }

    /**
     * @param int $page
     * @param int $itemsPerPage
     * @return int
     */
    public function calculateOffset($page, $itemsPerPage)
    {
        return  $page === 1 ? 0 : ($itemsPerPage * $page) - $itemsPerPage;
    }
}
