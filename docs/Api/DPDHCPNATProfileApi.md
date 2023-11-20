# PofP\SmartzoneClient\DPDHCPNATProfileApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addDpProfileSettings()**](DPDHCPNATProfileApi.md#addDpProfileSettings) | **POST** /dpProfileSettings | Use this API command to create DP DHCP &amp; NAT profile setting. |
| [**deleteDpProfileSettings()**](DPDHCPNATProfileApi.md#deleteDpProfileSettings) | **DELETE** /dpProfileSettings | Use this API command to delete DP DHCP &amp; NAT profile settings. |
| [**deleteDpProfileSettingsByDpKey()**](DPDHCPNATProfileApi.md#deleteDpProfileSettingsByDpKey) | **DELETE** /dpProfileSettings/{dpKey} | Use this API command to delete DP DHCP &amp; NAT profile setting. |
| [**findDpProfileSettings()**](DPDHCPNATProfileApi.md#findDpProfileSettings) | **GET** /dpProfileSettings | Use this API command to retrieve DP DHCP &amp; NAT profile setting list. |
| [**findDpProfileSettingsByDpKey()**](DPDHCPNATProfileApi.md#findDpProfileSettingsByDpKey) | **GET** /dpProfileSettings/{dpKey} | Use this API command to retrieve DP DHCP &amp; NAT profile setting. |
| [**updateDpProfileSettingsByDpKey()**](DPDHCPNATProfileApi.md#updateDpProfileSettingsByDpKey) | **PUT** /dpProfileSettings/{dpKey} | Use this API command to modify DP DHCP &amp; NAT profile setting. |


## `addDpProfileSettings()`

```php
addDpProfileSettings($service_ticket, $UNKNOWN_PARAM_NAME)
```

Use this API command to create DP DHCP & NAT profile setting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPDHCPNATProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->addDpProfileSettings($service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling DPDHCPNATProfileApi->addDpProfileSettings: ', $e->getMessage(), PHP_EOL;
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

## `deleteDpProfileSettings()`

```php
deleteDpProfileSettings($service_ticket, $UNKNOWN_PARAM_NAME)
```

Use this API command to delete DP DHCP & NAT profile settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPDHCPNATProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->deleteDpProfileSettings($service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling DPDHCPNATProfileApi->deleteDpProfileSettings: ', $e->getMessage(), PHP_EOL;
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

## `deleteDpProfileSettingsByDpKey()`

```php
deleteDpProfileSettingsByDpKey($dp_key, $service_ticket)
```

Use this API command to delete DP DHCP & NAT profile setting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPDHCPNATProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dp_key = 'dp_key_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $apiInstance->deleteDpProfileSettingsByDpKey($dp_key, $service_ticket);
} catch (Exception $e) {
    echo 'Exception when calling DPDHCPNATProfileApi->deleteDpProfileSettingsByDpKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dp_key** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findDpProfileSettings()`

```php
findDpProfileSettings($service_ticket): object
```

Use this API command to retrieve DP DHCP & NAT profile setting list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPDHCPNATProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findDpProfileSettings($service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DPDHCPNATProfileApi->findDpProfileSettings: ', $e->getMessage(), PHP_EOL;
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

## `findDpProfileSettingsByDpKey()`

```php
findDpProfileSettingsByDpKey($dp_key, $service_ticket): object
```

Use this API command to retrieve DP DHCP & NAT profile setting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPDHCPNATProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dp_key = 'dp_key_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findDpProfileSettingsByDpKey($dp_key, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DPDHCPNATProfileApi->findDpProfileSettingsByDpKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dp_key** | **string**|  | |
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

## `updateDpProfileSettingsByDpKey()`

```php
updateDpProfileSettingsByDpKey($dp_key, $service_ticket, $UNKNOWN_PARAM_NAME)
```

Use this API command to modify DP DHCP & NAT profile setting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPDHCPNATProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dp_key = 'dp_key_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->updateDpProfileSettingsByDpKey($dp_key, $service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling DPDHCPNATProfileApi->updateDpProfileSettingsByDpKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dp_key** | **string**|  | |
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
