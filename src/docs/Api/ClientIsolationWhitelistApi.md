# PofP\SmartzoneClient\ClientIsolationWhitelistApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addRkszonesClientIsolationWhitelistByZoneId()**](ClientIsolationWhitelistApi.md#addRkszonesClientIsolationWhitelistByZoneId) | **POST** /rkszones/{zoneId}/clientIsolationWhitelist | Create a new ClientIsolationWhitelist. |
| [**deleteRkszonesClientIsolationWhitelist()**](ClientIsolationWhitelistApi.md#deleteRkszonesClientIsolationWhitelist) | **DELETE** /rkszones/clientIsolationWhitelist | Use this API command to delete Bulk Client Isolation Whitelist. |
| [**deleteRkszonesClientIsolationWhitelistById()**](ClientIsolationWhitelistApi.md#deleteRkszonesClientIsolationWhitelistById) | **DELETE** /rkszones/clientIsolationWhitelist/{id} | Delete a Client Isolation Whitelist. |
| [**findRkszonesClientIsolationWhitelistById()**](ClientIsolationWhitelistApi.md#findRkszonesClientIsolationWhitelistById) | **GET** /rkszones/{zoneId}/clientIsolationWhitelist/{id} | Retrieve an Client Isolation Whitelist. |
| [**findRkszonesClientIsolationWhitelistByZoneId()**](ClientIsolationWhitelistApi.md#findRkszonesClientIsolationWhitelistByZoneId) | **GET** /rkszones/{zoneId}/clientIsolationWhitelist | Retrieve a list of Client Isolation Whitelist. |
| [**findServicesClientIsolationWhitelistByQueryCriteria()**](ClientIsolationWhitelistApi.md#findServicesClientIsolationWhitelistByQueryCriteria) | **POST** /query/services/clientIsolationWhitelist | Retrieve a list of Client Isolation Whitelist. |
| [**partialUpdateRkszonesClientIsolationWhitelistById()**](ClientIsolationWhitelistApi.md#partialUpdateRkszonesClientIsolationWhitelistById) | **PATCH** /rkszones/{zoneId}/clientIsolationWhitelist/{id} | Modify a specific Client Isolation Whitelist basic. |


## `addRkszonesClientIsolationWhitelistByZoneId()`

```php
addRkszonesClientIsolationWhitelistByZoneId($zone_id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Create a new ClientIsolationWhitelist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ClientIsolationWhitelistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addRkszonesClientIsolationWhitelistByZoneId($zone_id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientIsolationWhitelistApi->addRkszonesClientIsolationWhitelistByZoneId: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesClientIsolationWhitelist()`

```php
deleteRkszonesClientIsolationWhitelist($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to delete Bulk Client Isolation Whitelist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ClientIsolationWhitelistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->deleteRkszonesClientIsolationWhitelist($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientIsolationWhitelistApi->deleteRkszonesClientIsolationWhitelist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `deleteRkszonesClientIsolationWhitelistById()`

```php
deleteRkszonesClientIsolationWhitelistById($id, $service_ticket): object
```

Delete a Client Isolation Whitelist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ClientIsolationWhitelistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesClientIsolationWhitelistById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientIsolationWhitelistApi->deleteRkszonesClientIsolationWhitelistById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `findRkszonesClientIsolationWhitelistById()`

```php
findRkszonesClientIsolationWhitelistById($zone_id, $id, $service_ticket): object
```

Retrieve an Client Isolation Whitelist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ClientIsolationWhitelistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findRkszonesClientIsolationWhitelistById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientIsolationWhitelistApi->findRkszonesClientIsolationWhitelistById: ', $e->getMessage(), PHP_EOL;
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

## `findRkszonesClientIsolationWhitelistByZoneId()`

```php
findRkszonesClientIsolationWhitelistByZoneId($zone_id, $service_ticket): object
```

Retrieve a list of Client Isolation Whitelist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ClientIsolationWhitelistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findRkszonesClientIsolationWhitelistByZoneId($zone_id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientIsolationWhitelistApi->findRkszonesClientIsolationWhitelistByZoneId: ', $e->getMessage(), PHP_EOL;
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

## `findServicesClientIsolationWhitelistByQueryCriteria()`

```php
findServicesClientIsolationWhitelistByQueryCriteria($service_ticket, $body): object
```

Retrieve a list of Client Isolation Whitelist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ClientIsolationWhitelistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet(); // \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet

try {
    $result = $apiInstance->findServicesClientIsolationWhitelistByQueryCriteria($service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientIsolationWhitelistApi->findServicesClientIsolationWhitelistByQueryCriteria: ', $e->getMessage(), PHP_EOL;
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

## `partialUpdateRkszonesClientIsolationWhitelistById()`

```php
partialUpdateRkszonesClientIsolationWhitelistById($zone_id, $id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Modify a specific Client Isolation Whitelist basic.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ClientIsolationWhitelistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->partialUpdateRkszonesClientIsolationWhitelistById($zone_id, $id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientIsolationWhitelistApi->partialUpdateRkszonesClientIsolationWhitelistById: ', $e->getMessage(), PHP_EOL;
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
