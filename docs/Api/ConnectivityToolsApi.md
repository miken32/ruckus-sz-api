# PofP\SmartzoneClient\ConnectivityToolsApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addToolSpeedflex()**](ConnectivityToolsApi.md#addToolSpeedflex) | **POST** /tool/speedflex | Use this API command to start the SpeedFlex test. |
| [**findToolPing()**](ConnectivityToolsApi.md#findToolPing) | **GET** /tool/ping | Use this API command to run the PING test on an AP. |
| [**findToolSpeedflexByWcid()**](ConnectivityToolsApi.md#findToolSpeedflexByWcid) | **GET** /tool/speedflex/{wcid} | Use this API command to retrieve existing SpeedFlex test results. |
| [**findToolTraceRoute()**](ConnectivityToolsApi.md#findToolTraceRoute) | **GET** /tool/traceRoute | Use this API command to run the traceroute test on an AP. |


## `addToolSpeedflex()`

```php
addToolSpeedflex($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to start the SpeedFlex test.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ConnectivityToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addToolSpeedflex($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectivityToolsApi->addToolSpeedflex: ', $e->getMessage(), PHP_EOL;
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

## `findToolPing()`

```php
findToolPing($service_ticket, $ap_mac, $target_ip): string
```

Use this API command to run the PING test on an AP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ConnectivityToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$ap_mac = 'ap_mac_example'; // string | MAC address of the AP running the PING test
$target_ip = 'target_ip_example'; // string | the IP address to PING

try {
    $result = $apiInstance->findToolPing($service_ticket, $ap_mac, $target_ip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectivityToolsApi->findToolPing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **ap_mac** | **string**| MAC address of the AP running the PING test | |
| **target_ip** | **string**| the IP address to PING | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findToolSpeedflexByWcid()`

```php
findToolSpeedflexByWcid($wcid, $service_ticket): object
```

Use this API command to retrieve existing SpeedFlex test results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ConnectivityToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wcid = 'wcid_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findToolSpeedflexByWcid($wcid, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectivityToolsApi->findToolSpeedflexByWcid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wcid** | **string**|  | |
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

## `findToolTraceRoute()`

```php
findToolTraceRoute($service_ticket, $ap_mac, $target_ip, $timeout_in_sec): string
```

Use this API command to run the traceroute test on an AP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ConnectivityToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$ap_mac = 'ap_mac_example'; // string | MAC address of the AP running the traceRoute test
$target_ip = 'target_ip_example'; // string | the target IP address to traceRoute
$timeout_in_sec = 'timeout_in_sec_example'; // string | Timeout in unit of seconds (Default: 30)

try {
    $result = $apiInstance->findToolTraceRoute($service_ticket, $ap_mac, $target_ip, $timeout_in_sec);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectivityToolsApi->findToolTraceRoute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **ap_mac** | **string**| MAC address of the AP running the traceRoute test | |
| **target_ip** | **string**| the target IP address to traceRoute | |
| **timeout_in_sec** | **string**| Timeout in unit of seconds (Default: 30) | [optional] |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
