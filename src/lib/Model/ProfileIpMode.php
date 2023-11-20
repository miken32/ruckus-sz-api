<?php
/**
 * ProfileIpMode
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
 * ProfileIpMode Class Doc Comment
 *
 * @category Class
 * @package  PofP\SmartzoneClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProfileIpMode
{
    /**
     * Possible values of this enum
     */
    public const IPV4 = 'IPV4';

    public const IPV6 = 'IPV6';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::IPV4,
            self::IPV6
        ];
    }
}

