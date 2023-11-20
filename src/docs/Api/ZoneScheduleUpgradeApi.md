# PofP\SmartzoneClient\ZoneScheduleUpgradeApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addZoneScheduleUpgrade()**](ZoneScheduleUpgradeApi.md#addZoneScheduleUpgrade) | **POST** /zoneScheduleUpgrade | Create Zone Firmware Schedule Upgrade Task |
| [**deleteZoneScheduleUpgrade()**](ZoneScheduleUpgradeApi.md#deleteZoneScheduleUpgrade) | **DELETE** /zoneScheduleUpgrade | Bulk Delete Zone Firmware Schedule Upgrade Tasks |
| [**deleteZoneScheduleUpgradeById()**](ZoneScheduleUpgradeApi.md#deleteZoneScheduleUpgradeById) | **DELETE** /zoneScheduleUpgrade/{id} | Delete Zone Firmware Schedule Upgrade Task |
| [**findZoneScheduleUpgrade()**](ZoneScheduleUpgradeApi.md#findZoneScheduleUpgrade) | **GET** /zoneScheduleUpgrade | Retrieve Zone Firmware Schedule Upgrade Task List |
| [**findZoneScheduleUpgradeById()**](ZoneScheduleUpgradeApi.md#findZoneScheduleUpgradeById) | **GET** /zoneScheduleUpgrade/{id} | Retrieve Zone Firmware Schedule Upgrade Task |
| [**findZoneScheduleUpgradeHistory()**](ZoneScheduleUpgradeApi.md#findZoneScheduleUpgradeHistory) | **GET** /zoneScheduleUpgrade/history | Retrieve Zone Firmware Schedule Upgrade History |
| [**updateZoneScheduleUpgradeById()**](ZoneScheduleUpgradeApi.md#updateZoneScheduleUpgradeById) | **PUT** /zoneScheduleUpgrade/{id} | Modify Zone Firmware Schedule Upgrade Task |


## `addZoneScheduleUpgrade()`

```php
addZoneScheduleUpgrade($service_ticket, $UNKNOWN_PARAM_NAME)
```

Create Zone Firmware Schedule Upgrade Task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ZoneScheduleUpgradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->addZoneScheduleUpgrade($service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling ZoneScheduleUpgradeApi->addZoneScheduleUpgrade: ', $e->getMessage(), PHP_EOL;
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

## `deleteZoneScheduleUpgrade()`

```php
deleteZoneScheduleUpgrade($service_ticket, $UNKNOWN_PARAM_NAME)
```

Bulk Delete Zone Firmware Schedule Upgrade Tasks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ZoneScheduleUpgradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->deleteZoneScheduleUpgrade($service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling ZoneScheduleUpgradeApi->deleteZoneScheduleUpgrade: ', $e->getMessage(), PHP_EOL;
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

## `deleteZoneScheduleUpgradeById()`

```php
deleteZoneScheduleUpgradeById($id, $service_ticket): object
```

Delete Zone Firmware Schedule Upgrade Task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ZoneScheduleUpgradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteZoneScheduleUpgradeById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneScheduleUpgradeApi->deleteZoneScheduleUpgradeById: ', $e->getMessage(), PHP_EOL;
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

## `findZoneScheduleUpgrade()`

```php
findZoneScheduleUpgrade($service_ticket): object
```

Retrieve Zone Firmware Schedule Upgrade Task List

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ZoneScheduleUpgradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findZoneScheduleUpgrade($service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneScheduleUpgradeApi->findZoneScheduleUpgrade: ', $e->getMessage(), PHP_EOL;
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

## `findZoneScheduleUpgradeById()`

```php
findZoneScheduleUpgradeById($id, $service_ticket): object
```

Retrieve Zone Firmware Schedule Upgrade Task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ZoneScheduleUpgradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findZoneScheduleUpgradeById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneScheduleUpgradeApi->findZoneScheduleUpgradeById: ', $e->getMessage(), PHP_EOL;
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

## `findZoneScheduleUpgradeHistory()`

```php
findZoneScheduleUpgradeHistory($service_ticket): object
```

Retrieve Zone Firmware Schedule Upgrade History

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ZoneScheduleUpgradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findZoneScheduleUpgradeHistory($service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneScheduleUpgradeApi->findZoneScheduleUpgradeHistory: ', $e->getMessage(), PHP_EOL;
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

## `updateZoneScheduleUpgradeById()`

```php
updateZoneScheduleUpgradeById($id, $service_ticket, $UNKNOWN_PARAM_NAME)
```

Modify Zone Firmware Schedule Upgrade Task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ZoneScheduleUpgradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->updateZoneScheduleUpgradeById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling ZoneScheduleUpgradeApi->updateZoneScheduleUpgradeById: ', $e->getMessage(), PHP_EOL;
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
