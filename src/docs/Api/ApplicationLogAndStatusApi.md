# PofP\SmartzoneClient\ApplicationLogAndStatusApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**findApplicationsByBladeUUID()**](ApplicationLogAndStatusApi.md#findApplicationsByBladeUUID) | **GET** /applications/{bladeUUID} | Use this API command to retrieve a list of application log and status. |
| [**findApplicationsDownloadByBladeUUID()**](ApplicationLogAndStatusApi.md#findApplicationsDownloadByBladeUUID) | **GET** /applications/download/{bladeUUID} | Use this API command to download logs of the application. |
| [**findApplicationsDownloadsnapByBladeUUID()**](ApplicationLogAndStatusApi.md#findApplicationsDownloadsnapByBladeUUID) | **GET** /applications/downloadsnap/{bladeUUID} | Use this API command to download snapshot logs. |
| [**partialUpdateApplications()**](ApplicationLogAndStatusApi.md#partialUpdateApplications) | **PATCH** /applications | Use this API command to modify log level of specified application. |


## `findApplicationsByBladeUUID()`

```php
findApplicationsByBladeUUID($blade_uuid, $service_ticket, $index, $list_size): object
```

Use this API command to retrieve a list of application log and status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationLogAndStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$blade_uuid = 'blade_uuid_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$index = 'index_example'; // string | The index of the first entry to be retrieved. Default: 0
$list_size = 'list_size_example'; // string | The maximum number of entries to be retrieved. Default: 100, Maximum: 1000

try {
    $result = $apiInstance->findApplicationsByBladeUUID($blade_uuid, $service_ticket, $index, $list_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationLogAndStatusApi->findApplicationsByBladeUUID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blade_uuid** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **index** | **string**| The index of the first entry to be retrieved. Default: 0 | [optional] |
| **list_size** | **string**| The maximum number of entries to be retrieved. Default: 100, Maximum: 1000 | [optional] |

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

## `findApplicationsDownloadByBladeUUID()`

```php
findApplicationsDownloadByBladeUUID($blade_uuid, $service_ticket, $app_name, $log_file_name): \SplFileObject
```

Use this API command to download logs of the application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationLogAndStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$blade_uuid = 'blade_uuid_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$app_name = 'app_name_example'; // string | Download all logs of the specified application name.
$log_file_name = 'log_file_name_example'; // string | Download log of the specified log file name.

try {
    $result = $apiInstance->findApplicationsDownloadByBladeUUID($blade_uuid, $service_ticket, $app_name, $log_file_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationLogAndStatusApi->findApplicationsDownloadByBladeUUID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blade_uuid** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **app_name** | **string**| Download all logs of the specified application name. | |
| **log_file_name** | **string**| Download log of the specified log file name. | [optional] |

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

## `findApplicationsDownloadsnapByBladeUUID()`

```php
findApplicationsDownloadsnapByBladeUUID($blade_uuid, $service_ticket): \SplFileObject
```

Use this API command to download snapshot logs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationLogAndStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$blade_uuid = 'blade_uuid_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findApplicationsDownloadsnapByBladeUUID($blade_uuid, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationLogAndStatusApi->findApplicationsDownloadsnapByBladeUUID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blade_uuid** | **string**|  | |
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

## `partialUpdateApplications()`

```php
partialUpdateApplications($service_ticket, $UNKNOWN_PARAM_NAME)
```

Use this API command to modify log level of specified application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationLogAndStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->partialUpdateApplications($service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationLogAndStatusApi->partialUpdateApplications: ', $e->getMessage(), PHP_EOL;
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
