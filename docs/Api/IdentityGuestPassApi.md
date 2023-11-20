# PofP\SmartzoneClient\IdentityGuestPassApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addIdentityGuestpassGenerate()**](IdentityGuestPassApi.md#addIdentityGuestpassGenerate) | **POST** /identity/guestpass/generate | Use this API command to generate identity guest pass. |
| [**addIdentityGuestpassList()**](IdentityGuestPassApi.md#addIdentityGuestpassList) | **POST** /identity/guestpassList | Use this API command to retrieve a list of identity guest pass. |
| [**addIdentityGuestpassUpload()**](IdentityGuestPassApi.md#addIdentityGuestpassUpload) | **POST** /identity/guestpass/upload | Use this API command to upload identity guest pass csv file. |
| [**addIdentityGuestpassUploadCommon()**](IdentityGuestPassApi.md#addIdentityGuestpassUploadCommon) | **POST** /identity/guestpass/upload/common | Use this API command to update common identity guest pass settings. |
| [**deleteIdentityGuestpass()**](IdentityGuestPassApi.md#deleteIdentityGuestpass) | **DELETE** /identity/guestpass | Use this API command to delete multiple identity guest passes. |
| [**deleteIdentityGuestpassByUserId()**](IdentityGuestPassApi.md#deleteIdentityGuestpassByUserId) | **DELETE** /identity/guestpass/{userId} | Use this API command to delete identity guest pass. |
| [**findIdentityGuestpass()**](IdentityGuestPassApi.md#findIdentityGuestpass) | **GET** /identity/guestpass | Use this API command to retrieve a list of identity guest pass. |
| [**partialUpdateIdentityGuestpassByUserId()**](IdentityGuestPassApi.md#partialUpdateIdentityGuestpassByUserId) | **PATCH** /identity/guestpass/{userId} | Use this API command to modify the configuration of identity guest. |


## `addIdentityGuestpassGenerate()`

```php
addIdentityGuestpassGenerate($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to generate identity guest pass.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\IdentityGuestPassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addIdentityGuestpassGenerate($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityGuestPassApi->addIdentityGuestpassGenerate: ', $e->getMessage(), PHP_EOL;
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

## `addIdentityGuestpassList()`

```php
addIdentityGuestpassList($service_ticket, $body): object
```

Use this API command to retrieve a list of identity guest pass.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\IdentityGuestPassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\IdentityQueryCriteria(); // \PofP\SmartzoneClient\Model\IdentityQueryCriteria

try {
    $result = $apiInstance->addIdentityGuestpassList($service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityGuestPassApi->addIdentityGuestpassList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **body** | [**\PofP\SmartzoneClient\Model\IdentityQueryCriteria**](../Model/IdentityQueryCriteria.md)|  | |

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

## `addIdentityGuestpassUpload()`

```php
addIdentityGuestpassUpload($service_ticket, $upload_file)
```

Use this API command to upload identity guest pass csv file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\IdentityGuestPassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$upload_file = "/path/to/file.txt"; // \SplFileObject | The file to upload

try {
    $apiInstance->addIdentityGuestpassUpload($service_ticket, $upload_file);
} catch (Exception $e) {
    echo 'Exception when calling IdentityGuestPassApi->addIdentityGuestpassUpload: ', $e->getMessage(), PHP_EOL;
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

## `addIdentityGuestpassUploadCommon()`

```php
addIdentityGuestpassUploadCommon($service_ticket, $UNKNOWN_PARAM_NAME)
```

Use this API command to update common identity guest pass settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\IdentityGuestPassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->addIdentityGuestpassUploadCommon($service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling IdentityGuestPassApi->addIdentityGuestpassUploadCommon: ', $e->getMessage(), PHP_EOL;
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

## `deleteIdentityGuestpass()`

```php
deleteIdentityGuestpass($service_ticket, $UNKNOWN_PARAM_NAME)
```

Use this API command to delete multiple identity guest passes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\IdentityGuestPassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->deleteIdentityGuestpass($service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling IdentityGuestPassApi->deleteIdentityGuestpass: ', $e->getMessage(), PHP_EOL;
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

## `deleteIdentityGuestpassByUserId()`

```php
deleteIdentityGuestpassByUserId($user_id, $service_ticket): object
```

Use this API command to delete identity guest pass.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\IdentityGuestPassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteIdentityGuestpassByUserId($user_id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityGuestPassApi->deleteIdentityGuestpassByUserId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
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

## `findIdentityGuestpass()`

```php
findIdentityGuestpass($service_ticket, $index, $list_size, $time_zone, $wlan, $display_name, $expiration_from, $expiration_to, $generated_time_from, $generated_time_to): object
```

Use this API command to retrieve a list of identity guest pass.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\IdentityGuestPassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$index = 'index_example'; // string | The index of the first entry to be retrieved. Default: 0
$list_size = 'list_size_example'; // string | The maximum number of entries to be retrieved. Default: 100, Maximum: 1000
$time_zone = 'time_zone_example'; // string | Display created date and time by specified time zone. Default is UTC.
$wlan = 'wlan_example'; // string | filter identity guest pass list by wlan id.
$display_name = 'display_name_example'; // string | filter identity guest pass list by display name.
$expiration_from = 'expiration_from_example'; // string | filter identity guest pass list by expiration date and time. The start time of expiration date and time.The format is yyyy-MM-dd HH:mm:ss.
$expiration_to = 'expiration_to_example'; // string | filter identity guest pass list by expiration date and time. The end time of expiration date and time.The format is yyyy-MM-dd HH:mm:ss.
$generated_time_from = 'generated_time_from_example'; // string | filter identity guest pass list by generated date and time. The start time of generated date and time.The format is yyyy-MM-dd HH:mm:ss.
$generated_time_to = 'generated_time_to_example'; // string | filter identity guest pass list by generated date and time. The end time of generated date and time.The format is yyyy-MM-dd HH:mm:ss.

try {
    $result = $apiInstance->findIdentityGuestpass($service_ticket, $index, $list_size, $time_zone, $wlan, $display_name, $expiration_from, $expiration_to, $generated_time_from, $generated_time_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityGuestPassApi->findIdentityGuestpass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **index** | **string**| The index of the first entry to be retrieved. Default: 0 | [optional] |
| **list_size** | **string**| The maximum number of entries to be retrieved. Default: 100, Maximum: 1000 | [optional] |
| **time_zone** | **string**| Display created date and time by specified time zone. Default is UTC. | [optional] |
| **wlan** | **string**| filter identity guest pass list by wlan id. | [optional] |
| **display_name** | **string**| filter identity guest pass list by display name. | [optional] |
| **expiration_from** | **string**| filter identity guest pass list by expiration date and time. The start time of expiration date and time.The format is yyyy-MM-dd HH:mm:ss. | [optional] |
| **expiration_to** | **string**| filter identity guest pass list by expiration date and time. The end time of expiration date and time.The format is yyyy-MM-dd HH:mm:ss. | [optional] |
| **generated_time_from** | **string**| filter identity guest pass list by generated date and time. The start time of generated date and time.The format is yyyy-MM-dd HH:mm:ss. | [optional] |
| **generated_time_to** | **string**| filter identity guest pass list by generated date and time. The end time of generated date and time.The format is yyyy-MM-dd HH:mm:ss. | [optional] |

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

## `partialUpdateIdentityGuestpassByUserId()`

```php
partialUpdateIdentityGuestpassByUserId($user_id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify the configuration of identity guest.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\IdentityGuestPassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->partialUpdateIdentityGuestpassByUserId($user_id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityGuestPassApi->partialUpdateIdentityGuestpassByUserId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
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
