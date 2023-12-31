<?php
/**
 * CommonPortalLanguage
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  PofP\SmartzoneClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Virtual SmartZone - High Scale
 *
 * This reference guide describes the public APIs supported by the Virtual SmartZone - High Scale 6.1.1. Use the RESTful API commands described in this guide as an alternative way to manage the controller and its managed APs (in addition to the web and command line interfaces).
 *
 * The version of the OpenAPI document: v11_1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace PofP\SmartzoneClient\Model;
use \PofP\SmartzoneClient\ObjectSerializer;

/**
 * CommonPortalLanguage Class Doc Comment
 *
 * @category Class
 * @description Language
 * @package  PofP\SmartzoneClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CommonPortalLanguage
{
    /**
     * Possible values of this enum
     */
    public const EN_US = 'en_US';

    public const ZH_TW = 'zh_TW';

    public const ZH_CN = 'zh_CN';

    public const NL_NL = 'nl_NL';

    public const FR_FR = 'fr_FR';

    public const DE_DE = 'de_DE';

    public const JA_JP = 'ja_JP';

    public const ES_ES = 'es_ES';

    public const SE_SE = 'se_SE';

    public const AR_SA = 'ar_SA';

    public const CZ_CZ = 'cz_CZ';

    public const DA_DK = 'da_DK';

    public const TR_TR = 'tr_TR';

    public const PT_BR = 'pt_BR';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EN_US,
            self::ZH_TW,
            self::ZH_CN,
            self::NL_NL,
            self::FR_FR,
            self::DE_DE,
            self::JA_JP,
            self::ES_ES,
            self::SE_SE,
            self::AR_SA,
            self::CZ_CZ,
            self::DA_DK,
            self::TR_TR,
            self::PT_BR
        ];
    }
}


