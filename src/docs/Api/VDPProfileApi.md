# PofP\SmartzoneClient\VDPProfileApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteProfilesVdpById()**](VDPProfileApi.md#deleteProfilesVdpById) | **DELETE** /profiles/vdp/{id} | Use this API command to delete an vdp. |
| [**findProfilesVdp()**](VDPProfileApi.md#findProfilesVdp) | **GET** /profiles/vdp | Use this API command to retrieve a list of vdp. |
| [**findProfilesVdpById()**](VDPProfileApi.md#findProfilesVdpById) | **GET** /profiles/vdp/{id} | Use this API command to retrieve an vdp. |
| [**updateProfilesVdpApproveById()**](VDPProfileApi.md#updateProfilesVdpApproveById) | **PUT** /profiles/vdp/{id}/approve | Use this API command to approve vdp. |


## `deleteProfilesVdpById()`

```php
deleteProfilesVdpById($id, $service_ticket): object
```

Use this API command to delete an vdp.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\VDPProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteProfilesVdpById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VDPProfileApi->deleteProfilesVdpById: ', $e->getMessage(), PHP_EOL;
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

## `findProfilesVdp()`

```php
findProfilesVdp($service_ticket, $index, $list_size): object
```

Use this API command to retrieve a list of vdp.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\VDPProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$index = 'index_example'; // string | The index of the first entry to be retrieved. Default: 0
$list_size = 'list_size_example'; // string | The maximum number of entries to be retrieved. Default: 100, Maximum: 1000

try {
    $result = $apiInstance->findProfilesVdp($service_ticket, $index, $list_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VDPProfileApi->findProfilesVdp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `findProfilesVdpById()`

```php
findProfilesVdpById($id, $service_ticket): object
```

Use this API command to retrieve an vdp.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\VDPProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findProfilesVdpById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VDPProfileApi->findProfilesVdpById: ', $e->getMessage(), PHP_EOL;
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

## `updateProfilesVdpApproveById()`

```php
updateProfilesVdpApproveById($id, $service_ticket)
```

Use this API command to approve vdp.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\VDPProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $apiInstance->updateProfilesVdpApproveById($id, $service_ticket);
} catch (Exception $e) {
    echo 'Exception when calling VDPProfileApi->updateProfilesVdpApproveById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
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
