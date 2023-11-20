# PofP\SmartzoneClient\ControlPlanesApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteControlPlanesStaticRoutesByBladeUUID()**](ControlPlanesApi.md#deleteControlPlanesStaticRoutesByBladeUUID) | **DELETE** /controlPlanes/{bladeUUID}/staticRoutes | Use this API command to delete the static route of control plane. |
| [**deleteControlPlanesUserDefinedInterfaceByBladeUUID()**](ControlPlanesApi.md#deleteControlPlanesUserDefinedInterfaceByBladeUUID) | **DELETE** /controlPlanes/{bladeUUID}/userDefinedInterface | Use this API command to delete the user defined interface of control plane. |
| [**findControlPlanes()**](ControlPlanesApi.md#findControlPlanes) | **GET** /controlPlanes | Use this API command to retrieve the list of control plane. |
| [**findControlPlanesByBladeUUID()**](ControlPlanesApi.md#findControlPlanesByBladeUUID) | **GET** /controlPlanes/{bladeUUID} | Use this API command to retrieve control plane. |
| [**findControlPlanesInterfaces()**](ControlPlanesApi.md#findControlPlanesInterfaces) | **GET** /controlPlanes/interfaces | Use this API command to retrieve Control Plane Interface list. |
| [**findControlPlanesStaticRoutesByBladeUUID()**](ControlPlanesApi.md#findControlPlanesStaticRoutesByBladeUUID) | **GET** /controlPlanes/{bladeUUID}/staticRoutes | Use this API command to retrieve static route of control plane. |
| [**findControlPlanesUserDefinedInterfaceByBladeUUID()**](ControlPlanesApi.md#findControlPlanesUserDefinedInterfaceByBladeUUID) | **GET** /controlPlanes/{bladeUUID}/userDefinedInterface | Use this API command to retrieve user defined interface of control plane. |
| [**partialUpdateControlPlanesByBladeUUID()**](ControlPlanesApi.md#partialUpdateControlPlanesByBladeUUID) | **PATCH** /controlPlanes/{bladeUUID} | Use this API command to modify the configuration of control plane. |
| [**partialUpdateControlPlanesIpSupport()**](ControlPlanesApi.md#partialUpdateControlPlanesIpSupport) | **PATCH** /controlPlanes/ipSupport | Use this API command to modify ip support of control plane. |
| [**partialUpdateControlPlanesStaticRoutesByBladeUUID()**](ControlPlanesApi.md#partialUpdateControlPlanesStaticRoutesByBladeUUID) | **PATCH** /controlPlanes/{bladeUUID}/staticRoutes | Use this API command to modify the static route of control plane. |
| [**partialUpdateControlPlanesUserDefinedInterfaceByBladeUUID()**](ControlPlanesApi.md#partialUpdateControlPlanesUserDefinedInterfaceByBladeUUID) | **PATCH** /controlPlanes/{bladeUUID}/userDefinedInterface | Use this API command to modify user defined interface of control plane. |


## `deleteControlPlanesStaticRoutesByBladeUUID()`

```php
deleteControlPlanesStaticRoutesByBladeUUID($blade_uuid, $service_ticket)
```

Use this API command to delete the static route of control plane.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ControlPlanesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$blade_uuid = 'blade_uuid_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $apiInstance->deleteControlPlanesStaticRoutesByBladeUUID($blade_uuid, $service_ticket);
} catch (Exception $e) {
    echo 'Exception when calling ControlPlanesApi->deleteControlPlanesStaticRoutesByBladeUUID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blade_uuid** | **string**|  | |
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

## `deleteControlPlanesUserDefinedInterfaceByBladeUUID()`

```php
deleteControlPlanesUserDefinedInterfaceByBladeUUID($blade_uuid, $service_ticket)
```

Use this API command to delete the user defined interface of control plane.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ControlPlanesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$blade_uuid = 'blade_uuid_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $apiInstance->deleteControlPlanesUserDefinedInterfaceByBladeUUID($blade_uuid, $service_ticket);
} catch (Exception $e) {
    echo 'Exception when calling ControlPlanesApi->deleteControlPlanesUserDefinedInterfaceByBladeUUID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blade_uuid** | **string**|  | |
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

## `findControlPlanes()`

```php
findControlPlanes($service_ticket): object
```

Use this API command to retrieve the list of control plane.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ControlPlanesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findControlPlanes($service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ControlPlanesApi->findControlPlanes: ', $e->getMessage(), PHP_EOL;
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

## `findControlPlanesByBladeUUID()`

```php
findControlPlanesByBladeUUID($blade_uuid, $service_ticket): object
```

Use this API command to retrieve control plane.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ControlPlanesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$blade_uuid = 'blade_uuid_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findControlPlanesByBladeUUID($blade_uuid, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ControlPlanesApi->findControlPlanesByBladeUUID: ', $e->getMessage(), PHP_EOL;
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

## `findControlPlanesInterfaces()`

```php
findControlPlanesInterfaces($service_ticket, $blade_uuid): object
```

Use this API command to retrieve Control Plane Interface list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ControlPlanesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$blade_uuid = 'blade_uuid_example'; // string

try {
    $result = $apiInstance->findControlPlanesInterfaces($service_ticket, $blade_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ControlPlanesApi->findControlPlanesInterfaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **blade_uuid** | **string**|  | [optional] |

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

## `findControlPlanesStaticRoutesByBladeUUID()`

```php
findControlPlanesStaticRoutesByBladeUUID($blade_uuid, $service_ticket): object
```

Use this API command to retrieve static route of control plane.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ControlPlanesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$blade_uuid = 'blade_uuid_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findControlPlanesStaticRoutesByBladeUUID($blade_uuid, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ControlPlanesApi->findControlPlanesStaticRoutesByBladeUUID: ', $e->getMessage(), PHP_EOL;
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

## `findControlPlanesUserDefinedInterfaceByBladeUUID()`

```php
findControlPlanesUserDefinedInterfaceByBladeUUID($blade_uuid, $service_ticket): object
```

Use this API command to retrieve user defined interface of control plane.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ControlPlanesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$blade_uuid = 'blade_uuid_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findControlPlanesUserDefinedInterfaceByBladeUUID($blade_uuid, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ControlPlanesApi->findControlPlanesUserDefinedInterfaceByBladeUUID: ', $e->getMessage(), PHP_EOL;
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

## `partialUpdateControlPlanesByBladeUUID()`

```php
partialUpdateControlPlanesByBladeUUID($blade_uuid, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify the configuration of control plane.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ControlPlanesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$blade_uuid = 'blade_uuid_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->partialUpdateControlPlanesByBladeUUID($blade_uuid, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ControlPlanesApi->partialUpdateControlPlanesByBladeUUID: ', $e->getMessage(), PHP_EOL;
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

## `partialUpdateControlPlanesIpSupport()`

```php
partialUpdateControlPlanesIpSupport($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify ip support of control plane.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ControlPlanesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->partialUpdateControlPlanesIpSupport($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ControlPlanesApi->partialUpdateControlPlanesIpSupport: ', $e->getMessage(), PHP_EOL;
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

## `partialUpdateControlPlanesStaticRoutesByBladeUUID()`

```php
partialUpdateControlPlanesStaticRoutesByBladeUUID($blade_uuid, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify the static route of control plane.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ControlPlanesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$blade_uuid = 'blade_uuid_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->partialUpdateControlPlanesStaticRoutesByBladeUUID($blade_uuid, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ControlPlanesApi->partialUpdateControlPlanesStaticRoutesByBladeUUID: ', $e->getMessage(), PHP_EOL;
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

## `partialUpdateControlPlanesUserDefinedInterfaceByBladeUUID()`

```php
partialUpdateControlPlanesUserDefinedInterfaceByBladeUUID($blade_uuid, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify user defined interface of control plane.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ControlPlanesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$blade_uuid = 'blade_uuid_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->partialUpdateControlPlanesUserDefinedInterfaceByBladeUUID($blade_uuid, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ControlPlanesApi->partialUpdateControlPlanesUserDefinedInterfaceByBladeUUID: ', $e->getMessage(), PHP_EOL;
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
