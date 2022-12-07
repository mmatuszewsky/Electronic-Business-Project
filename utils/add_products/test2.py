import requests
from prestapyt import PrestaShopWebServiceDict
from xml.etree import ElementTree as ET
import sys


args = sys.argv
if len(args) < 2:
    print('Please give a ref and a number')
    exit()

reference = args[1]

shop = 'AIO'
presta_url = 'URL'
base_url = 'URL'

prestashop = PrestaShopWebServiceDict(presta_url, 'KEY')
auth = ('KEY', '')

product = prestashop.search('products', options={'filter[reference]': '[' + reference + ']'})
# product = prestashop.search('products')

if product:
    base_url = base_url + str(product[0])
    r = requests.delete(base_url, auth=auth, allow_redirects=True)
    print('DELETED: ' + reference)

if active == '1':
    product_xml = "<prestashop> \
    <product> \
        <id_manufacturer>0</id_manufacturer> \
        <id_supplier>0</id_supplier> \
        <id_category_default xlink:href='" + presta_url + "/categories/" + id_category + "'>" + id_category + "</id_category_default> \
        <new/> \
        <cache_default_attribute>0</cache_default_attribute> \
        <id_default_image xlink:href='" + presta_url + "/images/products/353/699' notFilterable='true'>699</id_default_image> \
        <id_default_combination notFilterable='true'/> \
        <id_tax_rules_group xlink:href='" + presta_url + "/tax_rule_groups/1'>1</id_tax_rules_group> \
        <position_in_category notFilterable='true'>0</position_in_category> \
        <type notFilterable='true'>simple</type> \
        <id_shop_default>1</id_shop_default> \
        <reference>" + reference + "</reference> \
        <supplier_reference/> \
        <location/> \
        <width>0.000000</width> \
        <height>0.000000</height> \
        <depth>0.000000</depth> \
        <weight>0.000000</weight> \
        <quantity_discount>0</quantity_discount> \
        <ean13/> \
        <isbn/> \
        <upc/> \
        <cache_is_pack>0</cache_is_pack> \
        <cache_has_attachments>0</cache_has_attachments> \
        <is_virtual>0</is_virtual> \
        <state>1</state> \
        <additional_delivery_times>1</additional_delivery_times> \
        <delivery_in_stock> \
            <language id='1' xlink:href='" + presta_url + "/languages/1'></language> \
            <language id='2' xlink:href='" + presta_url + "/languages/2'></language> \
        </delivery_in_stock> \
        <delivery_out_stock> \
            <language id='1' xlink:href='" + presta_url + "/languages/1'></language> \
            <language id='2' xlink:href='" + presta_url + "/languages/2'></language> \
        </delivery_out_stock> \
        <on_sale>0</on_sale> \
        <online_only>0</online_only> \
        <ecotax>0.000000</ecotax> \
        <minimal_quantity>1</minimal_quantity> \
        <low_stock_threshold/> \
        <low_stock_alert>0</low_stock_alert> \
        <price>" + price + "</price> \
        <wholesale_price>0.000000</wholesale_price> \
        <unity/> \
        <unit_price_ratio>0.000000</unit_price_ratio> \
        <additional_shipping_cost>0.00</additional_shipping_cost> \
        <customizable>0</customizable> \
        <text_fields>0</text_fields> \
        <uploadable_files>0</uploadable_files> \
        <active>" + active + "</active> \
        <redirect_type/> \
        <id_type_redirected>0</id_type_redirected> \
        <available_for_order>1</available_for_order> \
        <available_date>0000-00-00</available_date> \
        <show_condition>0</show_condition> \
        <condition>new</condition> \
        <show_price>1</show_price> \
        <indexed>1</indexed> \
        <visibility>both</visibility> \
        <advanced_stock_management>0</advanced_stock_management> \
        <date_add>2018-12-10 12:01:10</date_add> \
        <date_upd>2018-12-10 12:01:10</date_upd> \
        <pack_stock_type>3</pack_stock_type> \
        <meta_description> \
            <language id='1' xlink:href='" + presta_url + "/languages/1'></language> \
            <language id='2' xlink:href='" + presta_url + "/languages/2'></language> \
        </meta_description> \
        <meta_keywords> \
            <language id='1' xlink:href='" + presta_url + "/languages/1'></language> \
            <language id='2' xlink:href='" + presta_url + "/languages/2'></language> \
        </meta_keywords> \
        <meta_title> \
            <language id='1' xlink:href='" + presta_url + "/languages/1'></language> \
            <language id='2' xlink:href='" + presta_url + "/languages/2'></language> \
        </meta_title> \
        <name> \
            <language id='1' xlink:href='" + presta_url + "/languages/1'>" + name + "</language> \
            <language id='2' xlink:href='" + presta_url + "/languages/2'>" + name + "</language> \
        </name> \
        <description> \
            <language id='1' xlink:href='" + presta_url + "/languages/1'>" + description + "</language> \
            <language id='2' xlink:href='" + presta_url + "/languages/2'>" + description + "</language> \
        </description> \
        <description_short> \
            <language id='1' xlink:href='" + presta_url + "/languages/1'>" + description_short + "</language> \
            <language id='2' xlink:href='" + presta_url + "/languages/2'>" + description_short + "</language> \
        </description_short> \
        <available_now> \
            <language id='1' xlink:href='" + presta_url + "/languages/1'></language> \
            <language id='2' xlink:href='" + presta_url + "/languages/2'></language> \
        </available_now> \
        <available_later> \
            <language id='1' xlink:href='" + presta_url + "/languages/1'></language> \
            <language id='2' xlink:href='" + presta_url + "/languages/2'></language> \
        </available_later> \
        <associations> \
            <categories nodeType='category' api='categories'> \
                <category xlink:href='" + presta_url + "/categories/" + id_category + "'> \
                    <id>" + id_category + "</id> \
                </category> \
            </categories> \
            <combinations nodeType='combination' api='combinations'/> \
            <product_option_values nodeType='product_option_value' api='product_option_values'/> \
            <product_features nodeType='product_feature' api='product_features'> \
                " + feature_string + " \
            </product_features> \
            <tags nodeType='tag' api='tags'/> \
            <stock_availables nodeType='stock_available' api='stock_availables'> \
                <stock_available xlink:href='" + presta_url + "/stock_availables/353'> \
                    <id>353</id> \
                    <id_product_attribute>0</id_product_attribute> \
                </stock_available> \
            </stock_availables> \
            <accessories nodeType='product' api='products'/> \
            <product_bundle nodeType='product' api='products'/> \
        </associations> \
    </product> \
</prestashop>"
    print('STARTING:' + shop)
    test = prestashop.add('products', product_xml)
    product = prestashop.search('products', options={'filter[reference]': '[' + reference + ']'})
    for image in images:
        file_name = '<path_to_images>/' + image
        fd = io.open(file_name, "rb")
        content = fd.read()
        fd.close()
        prestashop.add('/images/products/' + str(product[0]), files=[('image', file_name, content)])
        print('SENT:' + image)
    print('DONE:' + shop)