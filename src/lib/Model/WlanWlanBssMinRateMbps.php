<?php
/**
 * WlanWlanBssMinRateMbps
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
 * WlanWlanBssMinRateMbps Class Doc Comment
 *
 * @category Class
 * @package  PofP\SmartzoneClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WlanWlanBssMinRateMbps
{
    /**
     * Possible values of this enum
     */
    public const DISABLE = 'Disable';

    public const _1_MBPS = '1 mbps';

    public const _2_MBPS = '2 mbps';

    public const _5_5_MBPS = '5.5 mbps';

    public const _12_MBPS = '12 mbps';

    public const _24_MBPS = '24 mbps';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DISABLE,
            self::_1_MBPS,
            self::_2_MBPS,
            self::_5_5_MBPS,
            self::_12_MBPS,
            self::_24_MBPS
        ];
    }
}


