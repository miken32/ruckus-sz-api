# PofP\SmartzoneClient\EventManagementSettingApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**findRkszonesEventEmailSettingsByZoneId()**](EventManagementSettingApi.md#findRkszonesEventEmailSettingsByZoneId) | **GET** /rkszones/{zoneId}/eventEmailSettings | Get Event E-mail Setting of Zone Override. |
| [**findRkszonesEventNotificationSettingsByZoneId()**](EventManagementSettingApi.md#findRkszonesEventNotificationSettingsByZoneId) | **GET** /rkszones/{zoneId}/eventNotificationSettings | Get Event Notification Setting of Zone Override. |
| [**updateRkszonesEventEmailSettingsByZoneId()**](EventManagementSettingApi.md#updateRkszonesEventEmailSettingsByZoneId) | **PUT** /rkszones/{zoneId}/eventEmailSettings | Modify Event E-mail Setting of Zone Override. |
| [**updateRkszonesEventNotificationSettingsByZoneId()**](EventManagementSettingApi.md#updateRkszonesEventNotificationSettingsByZoneId) | **PUT** /rkszones/{zoneId}/eventNotificationSettings | Modify Event Notification Setting of Zone Override. |


## `findRkszonesEventEmailSettingsByZoneId()`

```php
findRkszonesEventEmailSettingsByZoneId($zone_id, $service_ticket): object
```

Get Event E-mail Setting of Zone Override.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\EventManagementSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findRkszonesEventEmailSettingsByZoneId($zone_id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventManagementSettingApi->findRkszonesEventEmailSettingsByZoneId: ', $e->getMessage(), PHP_EOL;
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

## `findRkszonesEventNotificationSettingsByZoneId()`

```php
findRkszonesEventNotificationSettingsByZoneId($zone_id, $service_ticket): object
```

Get Event Notification Setting of Zone Override.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\EventManagementSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findRkszonesEventNotificationSettingsByZoneId($zone_id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventManagementSettingApi->findRkszonesEventNotificationSettingsByZoneId: ', $e->getMessage(), PHP_EOL;
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

## `updateRkszonesEventEmailSettingsByZoneId()`

```php
updateRkszonesEventEmailSettingsByZoneId($zone_id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Modify Event E-mail Setting of Zone Override.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\EventManagementSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->updateRkszonesEventEmailSettingsByZoneId($zone_id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventManagementSettingApi->updateRkszonesEventEmailSettingsByZoneId: ', $e->getMessage(), PHP_EOL;
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

## `updateRkszonesEventNotificationSettingsByZoneId()`

```php
updateRkszonesEventNotificationSettingsByZoneId($zone_id, $service_ticket, $body): object
```

Modify Event Notification Setting of Zone Override.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\EventManagementSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = array(new \stdClass); // object[]

try {
    $result = $apiInstance->updateRkszonesEventNotificationSettingsByZoneId($zone_id, $service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventManagementSettingApi->updateRkszonesEventNotificationSettingsByZoneId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **body** | [**object[]**](../Model/object.md)|  | |

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
