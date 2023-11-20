<?php
/**
 * DynamicPSKApiTest
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
 * Please update the test case below to test the endpoint.
 */

namespace PofP\SmartzoneClient\Test\Api;

use \PofP\SmartzoneClient\Configuration;
use \PofP\SmartzoneClient\ApiException;
use \PofP\SmartzoneClient\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * DynamicPSKApiTest Class Doc Comment
 *
 * @category Class
 * @package  PofP\SmartzoneClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DynamicPSKApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for addRkszonesWlansDpskBatchGenUnboundById
     *
     * Use this API command to batch generate DPSKs of a WLAN. You can either specify passphrases or not. If the amount is bigger than 1, system will generate usernames with index. e.g. student-1, student-2, ...etc..
     *
     */
    public function testAddRkszonesWlansDpskBatchGenUnboundById()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for addRkszonesWlansDpskById
     *
     * Use this API command to delete DPSKs of a WLAN..
     *
     */
    public function testAddRkszonesWlansDpskById()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for addRkszonesWlansDpskUploadById
     *
     * Use this API command to upload DPSK file of a WLAN (CSV file and Content-Type multipart/form-data ONLY)..
     *
     */
    public function testAddRkszonesWlansDpskUploadById()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for findDpskByQueryCriteria
     *
     * Query DPSKs with specified filters..
     *
     */
    public function testFindDpskByQueryCriteria()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for findRkszonesDeleteExpiredDpskByZoneId
     *
     * Use this API command to retrieve interval of delete expired DPSK of a zone..
     *
     */
    public function testFindRkszonesDeleteExpiredDpskByZoneId()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for findRkszonesDownloadDpskCsvSample
     *
     * Use this API command to download DPSK CSV sample..
     *
     */
    public function testFindRkszonesDownloadDpskCsvSample()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for findRkszonesDpskByZoneId
     *
     * Use this API command to retrieve DPSK info of a zone..
     *
     */
    public function testFindRkszonesDpskByZoneId()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for findRkszonesDpskEnabledWlansByZoneId
     *
     * Use this API command to retrieve DPSK enabled WLAN info of a zone..
     *
     */
    public function testFindRkszonesDpskEnabledWlansByZoneId()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for findRkszonesWlansDpskByDpskId
     *
     * Use this API command to retrieve DPSK info..
     *
     */
    public function testFindRkszonesWlansDpskByDpskId()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for findRkszonesWlansDpskById
     *
     * Use this API command to retrieve DPSK info of a WLAN..
     *
     */
    public function testFindRkszonesWlansDpskById()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for partialUpdateRkszonesWlansDpskByDpskId
     *
     * Use this API command to update DPSK info..
     *
     */
    public function testPartialUpdateRkszonesWlansDpskByDpskId()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for updateRkszonesDeleteExpiredDpskByZoneId
     *
     * Use this API command to modify interval of delete expired DPSK of a zone..
     *
     */
    public function testUpdateRkszonesDeleteExpiredDpskByZoneId()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}