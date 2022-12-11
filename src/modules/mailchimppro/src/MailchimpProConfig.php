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

/**
 * Class MailchimpProConfig
 */
class MailchimpProConfig
{
    const MAILCHIMP_API_KEY = 'module-mailchimpproconfig-mailchimp-api-key';
    const MAILCHIMP_SCRIPT_VERIFIED = 'module-mailchimpproconfig-script-verified';
    const MAILCHIMP_LIST_ID = 'module-mailchimpproconfig-list-id';
    const MAILCHIMP_LIST_NAME = 'module-mailchimpproconfig-list-id';

    const STATUSES_FOR_PAID = 'module-mailchimpproconfig-statuses-for-paid';
    const STATUSES_FOR_PENDING = 'module-mailchimpproconfig-statuses-for-pending';
    const STATUSES_FOR_REFUNDED = 'module-mailchimpproconfig-statuses-for-refunded';
    const STATUSES_FOR_CANCELLED = 'module-mailchimpproconfig-statuses-for-cancelled';
    const STATUSES_FOR_SHIPPED = 'module-mailchimpproconfig-statuses-for-shipped';

    const PRODUCT_IMAGE_SIZE = 'module-mailchimpproconfig-product-image-size';

    const MULTI_INSTANCE_MODE = 'module-mailchimpproconfig-multi-instance-mode';

    public static $jsonValues = [
        self::STATUSES_FOR_PAID,
        self::STATUSES_FOR_PENDING,
        self::STATUSES_FOR_REFUNDED,
        self::STATUSES_FOR_CANCELLED,
        self::STATUSES_FOR_SHIPPED,
    ];

    /** Required for PHP < 5.6 compatibility */
    public static $className = 'MailchimpProConfig';

    public static $multiLang = [
    ];

    /**
     * Save a config value
     *
     * @param $key
     * @param $value
     *
     * @return bool
     */
    public static function saveValue($key, $value)
    {
        return Configuration::updateValue($key, $value);
    }

    /**
     * Get configuration keys and values
     *
     * @return array
     */
    public static function getConfigurationValues()
    {
        try {
            $class = new ReflectionClass(static::$className);
            $values = [];
            foreach ($class->getConstants() as $constant) {
                if (is_string($constant)) {
                    if (in_array($constant, static::$multiLang, false)) {
                        static::getMultilangConfigValues($constant, $values);
                    } else {
                        $values[$constant] = Configuration::get($constant);
                    }
                }
                if (in_array($constant, static::$jsonValues, false)) {
                    $values[$constant . '[]'] = json_decode(Configuration::get($constant), true);
                }
            }
            return $values;
        } catch (Exception $exception) {
            return [];
        }
    }

    /**
     * Get a multilang config key (mainly used with the HelperForm class)
     *
     * @param $key
     * @param $values
     */
    protected static function getMultilangConfigValues($key, &$values)
    {
        $languages = Language::getLanguages(false, false, false);
        $values[$key] = [];
        foreach ($languages as $language) {
            $values[$key][$language['id_lang']] = Configuration::get($key, $language['id_lang']);
        }
    }

    /**
     * Decide if a config key exists in the DB or not, doesn't really care about multilang
     *
     * @param null $configKey
     *
     * @return bool
     * @throws PrestaShopDatabaseException
     */
    public static function configExists($configKey = null)
    {
        $query = new \DbQuery();
        $query->select('count(*)');
        $query->from('configuration');
        $query->where("name = '" . pSQL($configKey) . "'");

        return (int)Db::getInstance()->executeS($query) > 0;
    }

    public static function isApiKeySet()
    {
        return false;
    }
}
