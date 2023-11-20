<?php
/**
 * ProfileBridgeService
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
 * ProfileBridgeService Class Doc Comment
 *
 * @category Class
 * @description Bonjour Service Type
 * @package  PofP\SmartzoneClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProfileBridgeService
{
    /**
     * Possible values of this enum
     */
    public const AIRDISK = 'AIRDISK';

    public const AIRPLAY = 'AIRPLAY';

    public const AIRPORT_MANAGEMENT = 'AIRPORT_MANAGEMENT';

    public const AIRPRINT = 'AIRPRINT';

    public const AIRTUNES = 'AIRTUNES';

    public const APPLE_FILE_SHARING = 'APPLE_FILE_SHARING';

    public const APPLE_MOBILE_DEVICES = 'APPLE_MOBILE_DEVICES';

    public const APPLETV = 'APPLETV';

    public const ICLOUD_SYNC = 'ICLOUD_SYNC';

    public const ITUNES_REMOTE = 'ITUNES_REMOTE';

    public const ITUNES_SHARING = 'ITUNES_SHARING';

    public const OPEN_DIRECTORY_MASTER = 'OPEN_DIRECTORY_MASTER';

    public const OPTICAL_DISK_SHARING = 'OPTICAL_DISK_SHARING';

    public const SCREEN_SHARING = 'SCREEN_SHARING';

    public const SECURE_FILE_SHARING = 'SECURE_FILE_SHARING';

    public const SECURE_SHELL = 'SECURE_SHELL';

    public const WWW_HTTP = 'WWW_HTTP';

    public const WWW_HTTPS = 'WWW_HTTPS';

    public const WORKGROUP_MANAGER = 'WORKGROUP_MANAGER';

    public const XGRID = 'XGRID';

    public const GOOGLE_CHROMECAST = 'GOOGLE_CHROMECAST';

    public const OTHER = 'OTHER';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AIRDISK,
            self::AIRPLAY,
            self::AIRPORT_MANAGEMENT,
            self::AIRPRINT,
            self::AIRTUNES,
            self::APPLE_FILE_SHARING,
            self::APPLE_MOBILE_DEVICES,
            self::APPLETV,
            self::ICLOUD_SYNC,
            self::ITUNES_REMOTE,
            self::ITUNES_SHARING,
            self::OPEN_DIRECTORY_MASTER,
            self::OPTICAL_DISK_SHARING,
            self::SCREEN_SHARING,
            self::SECURE_FILE_SHARING,
            self::SECURE_SHELL,
            self::WWW_HTTP,
            self::WWW_HTTPS,
            self::WORKGROUP_MANAGER,
            self::XGRID,
            self::GOOGLE_CHROMECAST,
            self::OTHER
        ];
    }
}

