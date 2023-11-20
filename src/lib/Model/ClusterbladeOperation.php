<?php
/**
 * ClusterbladeOperation
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
 * ClusterbladeOperation Class Doc Comment
 *
 * @category Class
 * @package  PofP\SmartzoneClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ClusterbladeOperation
{
    /**
     * Possible values of this enum
     */
    public const NONE = 'None';

    public const JOIN = 'Join';

    public const BACKUP = 'Backup';

    public const RESTORE = 'Restore';

    public const UPLOAD = 'Upload';

    public const UPGRADE = 'Upgrade';

    public const BACKUP_AND_UPGRADE = 'BackupAndUpgrade';

    public const REMOVE_BLADE = 'RemoveBlade';

    public const CHANGE_BLADE_IP = 'ChangeBladeIP';

    public const DISK_SNAPSHOT = 'DiskSnapshot';

    public const UPLOAD_VDP_FIRMWARE = 'UploadVDPFirmware';

    public const UPLOAD_AP_FIRMWARE = 'UploadAPFirmware';

    public const ADD_AP_FIRMWARE = 'AddAPFirmware';

    public const ADD_LTE_FIRMWARE = 'AddLteFirmware';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::JOIN,
            self::BACKUP,
            self::RESTORE,
            self::UPLOAD,
            self::UPGRADE,
            self::BACKUP_AND_UPGRADE,
            self::REMOVE_BLADE,
            self::CHANGE_BLADE_IP,
            self::DISK_SNAPSHOT,
            self::UPLOAD_VDP_FIRMWARE,
            self::UPLOAD_AP_FIRMWARE,
            self::ADD_AP_FIRMWARE,
            self::ADD_LTE_FIRMWARE
        ];
    }
}


