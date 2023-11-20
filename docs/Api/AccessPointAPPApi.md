# PofP\SmartzoneClient\AccessPointAPPApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**findApsLineman()**](AccessPointAPPApi.md#findApsLineman) | **GET** /aps/lineman | Use this API command to retrieve the summary information of an AP. This is used by the Ruckus Wireless AP mobile app. |
| [**findApsTotalCount()**](AccessPointAPPApi.md#findApsTotalCount) | **GET** /aps/totalCount | Use this API command to retrieve the total AP count within a zone or a domain. |
| [**findLinemanWorkflow()**](AccessPointAPPApi.md#findLinemanWorkflow) | **GET** /lineman/workflow | Use this API command to download the workflow file used by the Ruckus Wireless AP mobile app. |
| [**updateLinemanWorkflow()**](AccessPointAPPApi.md#updateLinemanWorkflow) | **PUT** /lineman/workflow | Use this API command to upload a workflow file used by the Ruckus Wireless AP mobile app. |


## `findApsLineman()`

```php
findApsLineman($service_ticket, $index, $list_size, $zone_id, $domain_id, $show_alarm): object
```

Use this API command to retrieve the summary information of an AP. This is used by the Ruckus Wireless AP mobile app.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointAPPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$index = 'index_example'; // string | The index of the first entry to be retrieved. Default: 0
$list_size = 'list_size_example'; // string | The maximum number of entries to be retrieved. Default: 100, Maximum: 1000
$zone_id = 'zone_id_example'; // string | filter AP lineman by zone. Default: current login domain
$domain_id = 'domain_id_example'; // string | filter AP lineman by domain. Default: current login domain
$show_alarm = 'show_alarm_example'; // string | indicate to show alarm counter. Default: true

try {
    $result = $apiInstance->findApsLineman($service_ticket, $index, $list_size, $zone_id, $domain_id, $show_alarm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointAPPApi->findApsLineman: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **index** | **string**| The index of the first entry to be retrieved. Default: 0 | [optional] |
| **list_size** | **string**| The maximum number of entries to be retrieved. Default: 100, Maximum: 1000 | [optional] |
| **zone_id** | **string**| filter AP lineman by zone. Default: current login domain | [optional] |
| **domain_id** | **string**| filter AP lineman by domain. Default: current login domain | [optional] |
| **show_alarm** | **string**| indicate to show alarm counter. Default: true | [optional] |

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

## `findApsTotalCount()`

```php
findApsTotalCount($service_ticket, $zone_id, $domain_id)
```

Use this API command to retrieve the total AP count within a zone or a domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointAPPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$zone_id = 'zone_id_example'; // string | filter AP total count by zone. Default: current logon domain
$domain_id = 'domain_id_example'; // string | filter AP total count by domain. Default: current logon domain

try {
    $apiInstance->findApsTotalCount($service_ticket, $zone_id, $domain_id);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointAPPApi->findApsTotalCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **zone_id** | **string**| filter AP total count by zone. Default: current logon domain | [optional] |
| **domain_id** | **string**| filter AP total count by domain. Default: current logon domain | [optional] |

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

## `findLinemanWorkflow()`

```php
findLinemanWorkflow($service_ticket): \SplFileObject
```

Use this API command to download the workflow file used by the Ruckus Wireless AP mobile app.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointAPPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findLinemanWorkflow($service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointAPPApi->findLinemanWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLinemanWorkflow()`

```php
updateLinemanWorkflow($service_ticket, $upload_file)
```

Use this API command to upload a workflow file used by the Ruckus Wireless AP mobile app.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointAPPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$upload_file = "/path/to/file.txt"; // \SplFileObject | The file to upload

try {
    $apiInstance->updateLinemanWorkflow($service_ticket, $upload_file);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointAPPApi->updateLinemanWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **upload_file** | **\SplFileObject****\SplFileObject**| The file to upload | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
