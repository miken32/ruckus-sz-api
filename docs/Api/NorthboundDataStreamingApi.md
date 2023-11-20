# PofP\SmartzoneClient\NorthboundDataStreamingApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addNorthboundDataStreamingProfile()**](NorthboundDataStreamingApi.md#addNorthboundDataStreamingProfile) | **POST** /northboundDataStreamingProfile | Use this API command to create northbound Data Streaming Profile |
| [**deleteNorthboundDataStreamingProfileById()**](NorthboundDataStreamingApi.md#deleteNorthboundDataStreamingProfileById) | **DELETE** /northboundDataStreamingProfile/{id} | Use this API command to delete northbound Data Streaming Profile |
| [**findNorthboundDataStreamingEventCodes()**](NorthboundDataStreamingApi.md#findNorthboundDataStreamingEventCodes) | **GET** /northboundDataStreamingEventCodes | Use this API command to retrieve NorthboundDataStreamingEventCodes. |
| [**findNorthboundDataStreamingProfileById()**](NorthboundDataStreamingApi.md#findNorthboundDataStreamingProfileById) | **GET** /northboundDataStreamingProfile/{id} | Use this API command to retrieve northbound Data Streaming Profile |
| [**findNorthboundDataStreamingProfileList()**](NorthboundDataStreamingApi.md#findNorthboundDataStreamingProfileList) | **GET** /northboundDataStreamingProfileList | Use this API command to retrieve northbound Data Streaming Profile List |
| [**updateNorthboundDataStreamingEventCodes()**](NorthboundDataStreamingApi.md#updateNorthboundDataStreamingEventCodes) | **PUT** /northboundDataStreamingEventCodes | Use this API command to modify NorthboundDataStreamingEventCodes. |
| [**updateNorthboundDataStreamingProfileById()**](NorthboundDataStreamingApi.md#updateNorthboundDataStreamingProfileById) | **PUT** /northboundDataStreamingProfile/{id} | Use this API command to update northbound Data Streaming Profile |
| [**updateNorthboundDataStreamingSettings()**](NorthboundDataStreamingApi.md#updateNorthboundDataStreamingSettings) | **PUT** /northboundDataStreamingSettings | Use this API command to modify Northbound Data Streaming Settings. |


## `addNorthboundDataStreamingProfile()`

```php
addNorthboundDataStreamingProfile($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to create northbound Data Streaming Profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\NorthboundDataStreamingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addNorthboundDataStreamingProfile($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NorthboundDataStreamingApi->addNorthboundDataStreamingProfile: ', $e->getMessage(), PHP_EOL;
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

## `deleteNorthboundDataStreamingProfileById()`

```php
deleteNorthboundDataStreamingProfileById($id, $service_ticket): object
```

Use this API command to delete northbound Data Streaming Profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\NorthboundDataStreamingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteNorthboundDataStreamingProfileById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NorthboundDataStreamingApi->deleteNorthboundDataStreamingProfileById: ', $e->getMessage(), PHP_EOL;
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

## `findNorthboundDataStreamingEventCodes()`

```php
findNorthboundDataStreamingEventCodes($service_ticket): object
```

Use this API command to retrieve NorthboundDataStreamingEventCodes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\NorthboundDataStreamingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findNorthboundDataStreamingEventCodes($service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NorthboundDataStreamingApi->findNorthboundDataStreamingEventCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `findNorthboundDataStreamingProfileById()`

```php
findNorthboundDataStreamingProfileById($id, $service_ticket): object
```

Use this API command to retrieve northbound Data Streaming Profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\NorthboundDataStreamingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findNorthboundDataStreamingProfileById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NorthboundDataStreamingApi->findNorthboundDataStreamingProfileById: ', $e->getMessage(), PHP_EOL;
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

## `findNorthboundDataStreamingProfileList()`

```php
findNorthboundDataStreamingProfileList($service_ticket): \PofP\SmartzoneClient\Model\NorthboundDataStreamingNorthboundDataStreamingProfileList
```

Use this API command to retrieve northbound Data Streaming Profile List

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\NorthboundDataStreamingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findNorthboundDataStreamingProfileList($service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NorthboundDataStreamingApi->findNorthboundDataStreamingProfileList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

[**\PofP\SmartzoneClient\Model\NorthboundDataStreamingNorthboundDataStreamingProfileList**](../Model/NorthboundDataStreamingNorthboundDataStreamingProfileList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNorthboundDataStreamingEventCodes()`

```php
updateNorthboundDataStreamingEventCodes($service_ticket, $UNKNOWN_PARAM_NAME)
```

Use this API command to modify NorthboundDataStreamingEventCodes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\NorthboundDataStreamingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->updateNorthboundDataStreamingEventCodes($service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling NorthboundDataStreamingApi->updateNorthboundDataStreamingEventCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **UNKNOWN_PARAM_NAME** | [****](../Model/.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNorthboundDataStreamingProfileById()`

```php
updateNorthboundDataStreamingProfileById($id, $service_ticket, $UNKNOWN_PARAM_NAME)
```

Use this API command to update northbound Data Streaming Profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\NorthboundDataStreamingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->updateNorthboundDataStreamingProfileById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling NorthboundDataStreamingApi->updateNorthboundDataStreamingProfileById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **UNKNOWN_PARAM_NAME** | [****](../Model/.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNorthboundDataStreamingSettings()`

```php
updateNorthboundDataStreamingSettings($service_ticket, $UNKNOWN_PARAM_NAME)
```

Use this API command to modify Northbound Data Streaming Settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\NorthboundDataStreamingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->updateNorthboundDataStreamingSettings($service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling NorthboundDataStreamingApi->updateNorthboundDataStreamingSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **UNKNOWN_PARAM_NAME** | [****](../Model/.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
