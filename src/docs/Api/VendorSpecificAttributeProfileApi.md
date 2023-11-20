# PofP\SmartzoneClient\VendorSpecificAttributeProfileApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addRkszonesVendorSpecificAttributeProfilesByZoneId()**](VendorSpecificAttributeProfileApi.md#addRkszonesVendorSpecificAttributeProfilesByZoneId) | **POST** /rkszones/{zoneId}/vendorSpecificAttributeProfiles | Create a vendor specific attribute profile. |
| [**deleteRkszonesVendorSpecificAttributeProfilesById()**](VendorSpecificAttributeProfileApi.md#deleteRkszonesVendorSpecificAttributeProfilesById) | **DELETE** /rkszones/{zoneId}/vendorSpecificAttributeProfiles/{id} | Use this API command to delete a vendor specific attribute profile by ID. |
| [**deleteRkszonesVendorSpecificAttributeProfilesByZoneId()**](VendorSpecificAttributeProfileApi.md#deleteRkszonesVendorSpecificAttributeProfilesByZoneId) | **DELETE** /rkszones/{zoneId}/vendorSpecificAttributeProfiles | Use this API command to delete a list of vendor specific attribute profile. |
| [**findRkszonesVendorSpecificAttributeProfilesById()**](VendorSpecificAttributeProfileApi.md#findRkszonesVendorSpecificAttributeProfilesById) | **GET** /rkszones/{zoneId}/vendorSpecificAttributeProfiles/{id} | Get a vendor specific attribute profile by ID. |
| [**findRkszonesVendorSpecificAttributeProfilesByQueryCriteria()**](VendorSpecificAttributeProfileApi.md#findRkszonesVendorSpecificAttributeProfilesByQueryCriteria) | **POST** /rkszones/vendorSpecificAttributeProfiles/query | Use this API command to retrieve a list of vendor specific attribute profile by query criteria. |
| [**findRkszonesVendorSpecificAttributeProfilesByZoneId()**](VendorSpecificAttributeProfileApi.md#findRkszonesVendorSpecificAttributeProfilesByZoneId) | **GET** /rkszones/{zoneId}/vendorSpecificAttributeProfiles | Get a ID list of vendor specific attribute profile in this Zone. |
| [**updateRkszonesVendorSpecificAttributeProfilesById()**](VendorSpecificAttributeProfileApi.md#updateRkszonesVendorSpecificAttributeProfilesById) | **PUT** /rkszones/{zoneId}/vendorSpecificAttributeProfiles/{id} | Use this API command to modify entire information of a vendor specific attribute profile. |


## `addRkszonesVendorSpecificAttributeProfilesByZoneId()`

```php
addRkszonesVendorSpecificAttributeProfilesByZoneId($zone_id, $service_ticket, $UNKNOWN_PARAM_NAME): \PofP\SmartzoneClient\Model\VendorSpecificAttributeProfileCreateResult
```

Create a vendor specific attribute profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\VendorSpecificAttributeProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addRkszonesVendorSpecificAttributeProfilesByZoneId($zone_id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorSpecificAttributeProfileApi->addRkszonesVendorSpecificAttributeProfilesByZoneId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **UNKNOWN_PARAM_NAME** | [****](../Model/.md)|  | |

### Return type

[**\PofP\SmartzoneClient\Model\VendorSpecificAttributeProfileCreateResult**](../Model/VendorSpecificAttributeProfileCreateResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRkszonesVendorSpecificAttributeProfilesById()`

```php
deleteRkszonesVendorSpecificAttributeProfilesById($zone_id, $id, $service_ticket): object
```

Use this API command to delete a vendor specific attribute profile by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\VendorSpecificAttributeProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesVendorSpecificAttributeProfilesById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorSpecificAttributeProfileApi->deleteRkszonesVendorSpecificAttributeProfilesById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRkszonesVendorSpecificAttributeProfilesByZoneId()`

```php
deleteRkszonesVendorSpecificAttributeProfilesByZoneId($zone_id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to delete a list of vendor specific attribute profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\VendorSpecificAttributeProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->deleteRkszonesVendorSpecificAttributeProfilesByZoneId($zone_id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorSpecificAttributeProfileApi->deleteRkszonesVendorSpecificAttributeProfilesByZoneId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **UNKNOWN_PARAM_NAME** | [****](../Model/.md)|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findRkszonesVendorSpecificAttributeProfilesById()`

```php
findRkszonesVendorSpecificAttributeProfilesById($zone_id, $id, $service_ticket): object
```

Get a vendor specific attribute profile by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\VendorSpecificAttributeProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findRkszonesVendorSpecificAttributeProfilesById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorSpecificAttributeProfileApi->findRkszonesVendorSpecificAttributeProfilesById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findRkszonesVendorSpecificAttributeProfilesByQueryCriteria()`

```php
findRkszonesVendorSpecificAttributeProfilesByQueryCriteria($service_ticket, $body): object
```

Use this API command to retrieve a list of vendor specific attribute profile by query criteria.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\VendorSpecificAttributeProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet(); // \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet

try {
    $result = $apiInstance->findRkszonesVendorSpecificAttributeProfilesByQueryCriteria($service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorSpecificAttributeProfileApi->findRkszonesVendorSpecificAttributeProfilesByQueryCriteria: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **body** | [**\PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet**](../Model/CommonQueryCriteriaSuperSet.md)|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findRkszonesVendorSpecificAttributeProfilesByZoneId()`

```php
findRkszonesVendorSpecificAttributeProfilesByZoneId($zone_id, $service_ticket): object
```

Get a ID list of vendor specific attribute profile in this Zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\VendorSpecificAttributeProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findRkszonesVendorSpecificAttributeProfilesByZoneId($zone_id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorSpecificAttributeProfileApi->findRkszonesVendorSpecificAttributeProfilesByZoneId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRkszonesVendorSpecificAttributeProfilesById()`

```php
updateRkszonesVendorSpecificAttributeProfilesById($zone_id, $id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify entire information of a vendor specific attribute profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\VendorSpecificAttributeProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->updateRkszonesVendorSpecificAttributeProfilesById($zone_id, $id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorSpecificAttributeProfileApi->updateRkszonesVendorSpecificAttributeProfilesById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **UNKNOWN_PARAM_NAME** | [****](../Model/.md)|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
