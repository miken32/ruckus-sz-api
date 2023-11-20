# PofP\SmartzoneClient\DPNetworkApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deletePlanesStaticRouteByBladeUUID()**](DPNetworkApi.md#deletePlanesStaticRouteByBladeUUID) | **DELETE** /planes/{bladeUUID}/staticRoute | Use this API command to delete static route. |
| [**findPlanes()**](DPNetworkApi.md#findPlanes) | **GET** /planes | Use this API command to retrieve a list of data planes. |
| [**findPlanesByBladeUUID()**](DPNetworkApi.md#findPlanesByBladeUUID) | **GET** /planes/{bladeUUID} | Use this API command to retrieve data plane by id. |
| [**findPlanesDpTunnelSetting()**](DPNetworkApi.md#findPlanesDpTunnelSetting) | **GET** /planes/dpTunnel/setting | Use this API command to get DP mesh tunnel setting. |
| [**partialUpdatePlaneStatesByBladeUUID()**](DPNetworkApi.md#partialUpdatePlaneStatesByBladeUUID) | **PATCH** /planeStates/{bladeUUID} | Use this API command to update DP state profile. |
| [**partialUpdatePlanesByBladeUUID()**](DPNetworkApi.md#partialUpdatePlanesByBladeUUID) | **PATCH** /planes/{bladeUUID} | Use this API command to modify the configuration of data plane. |
| [**updatePlanesDpTunnelSetting()**](DPNetworkApi.md#updatePlanesDpTunnelSetting) | **PUT** /planes/dpTunnel/setting | Use this API command to update DP mesh tunnel setting. |


## `deletePlanesStaticRouteByBladeUUID()`

```php
deletePlanesStaticRouteByBladeUUID($blade_uuid, $service_ticket): object
```

Use this API command to delete static route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPNetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$blade_uuid = 'blade_uuid_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deletePlanesStaticRouteByBladeUUID($blade_uuid, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DPNetworkApi->deletePlanesStaticRouteByBladeUUID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blade_uuid** | **string**|  | |
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

## `findPlanes()`

```php
findPlanes($service_ticket): object
```

Use this API command to retrieve a list of data planes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPNetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findPlanes($service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DPNetworkApi->findPlanes: ', $e->getMessage(), PHP_EOL;
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

## `findPlanesByBladeUUID()`

```php
findPlanesByBladeUUID($blade_uuid, $service_ticket): object
```

Use this API command to retrieve data plane by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPNetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$blade_uuid = 'blade_uuid_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findPlanesByBladeUUID($blade_uuid, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DPNetworkApi->findPlanesByBladeUUID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blade_uuid** | **string**|  | |
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

## `findPlanesDpTunnelSetting()`

```php
findPlanesDpTunnelSetting($service_ticket, $upload_file): object
```

Use this API command to get DP mesh tunnel setting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPNetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$upload_file = "/path/to/file.txt"; // \SplFileObject | The file to upload

try {
    $result = $apiInstance->findPlanesDpTunnelSetting($service_ticket, $upload_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DPNetworkApi->findPlanesDpTunnelSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **upload_file** | **\SplFileObject****\SplFileObject**| The file to upload | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `partialUpdatePlaneStatesByBladeUUID()`

```php
partialUpdatePlaneStatesByBladeUUID($blade_uuid, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to update DP state profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPNetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$blade_uuid = 'blade_uuid_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->partialUpdatePlaneStatesByBladeUUID($blade_uuid, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DPNetworkApi->partialUpdatePlaneStatesByBladeUUID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blade_uuid** | **string**|  | |
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

## `partialUpdatePlanesByBladeUUID()`

```php
partialUpdatePlanesByBladeUUID($blade_uuid, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify the configuration of data plane.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPNetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$blade_uuid = 'blade_uuid_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->partialUpdatePlanesByBladeUUID($blade_uuid, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DPNetworkApi->partialUpdatePlanesByBladeUUID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blade_uuid** | **string**|  | |
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

## `updatePlanesDpTunnelSetting()`

```php
updatePlanesDpTunnelSetting($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to update DP mesh tunnel setting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPNetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->updatePlanesDpTunnelSetting($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DPNetworkApi->updatePlanesDpTunnelSetting: ', $e->getMessage(), PHP_EOL;
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
