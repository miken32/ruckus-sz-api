# PofP\SmartzoneClient\SoftGRETunnelProfileApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addProfilesTunnelSoftgre()**](SoftGRETunnelProfileApi.md#addProfilesTunnelSoftgre) | **POST** /profiles/tunnel/softgre | Use this API command to create SoftGRE tunnel profile. |
| [**deleteProfilesTunnelSoftgre()**](SoftGRETunnelProfileApi.md#deleteProfilesTunnelSoftgre) | **DELETE** /profiles/tunnel/softgre | Use this API command to delete multiple SoftGRE tunnel profile. |
| [**deleteProfilesTunnelSoftgreById()**](SoftGRETunnelProfileApi.md#deleteProfilesTunnelSoftgreById) | **DELETE** /profiles/tunnel/softgre/{id} | Use this API command to delete SoftGRE tunnel profile. |
| [**findProfilesTunnelSoftgre()**](SoftGRETunnelProfileApi.md#findProfilesTunnelSoftgre) | **GET** /profiles/tunnel/softgre | Use this API command to retrieve a list of SoftGRE tunnel profile. |
| [**findProfilesTunnelSoftgreById()**](SoftGRETunnelProfileApi.md#findProfilesTunnelSoftgreById) | **GET** /profiles/tunnel/softgre/{id} | Use this API command to retrieve SoftGRE tunnel profile. |
| [**findProfilesTunnelSoftgreByQueryCriteria()**](SoftGRETunnelProfileApi.md#findProfilesTunnelSoftgreByQueryCriteria) | **POST** /profiles/tunnel/softgre/query | Use this API command to query a list of SoftGRE tunnel profile. |
| [**partialUpdateProfilesTunnelSoftgreById()**](SoftGRETunnelProfileApi.md#partialUpdateProfilesTunnelSoftgreById) | **PATCH** /profiles/tunnel/softgre/{id} | Use this API command to modify the configuration of SoftGRE tunnel profile. |


## `addProfilesTunnelSoftgre()`

```php
addProfilesTunnelSoftgre($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to create SoftGRE tunnel profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\SoftGRETunnelProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addProfilesTunnelSoftgre($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoftGRETunnelProfileApi->addProfilesTunnelSoftgre: ', $e->getMessage(), PHP_EOL;
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

## `deleteProfilesTunnelSoftgre()`

```php
deleteProfilesTunnelSoftgre($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to delete multiple SoftGRE tunnel profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\SoftGRETunnelProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->deleteProfilesTunnelSoftgre($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoftGRETunnelProfileApi->deleteProfilesTunnelSoftgre: ', $e->getMessage(), PHP_EOL;
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

## `deleteProfilesTunnelSoftgreById()`

```php
deleteProfilesTunnelSoftgreById($id, $service_ticket): object
```

Use this API command to delete SoftGRE tunnel profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\SoftGRETunnelProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteProfilesTunnelSoftgreById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoftGRETunnelProfileApi->deleteProfilesTunnelSoftgreById: ', $e->getMessage(), PHP_EOL;
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

## `findProfilesTunnelSoftgre()`

```php
findProfilesTunnelSoftgre($service_ticket): object
```

Use this API command to retrieve a list of SoftGRE tunnel profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\SoftGRETunnelProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findProfilesTunnelSoftgre($service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoftGRETunnelProfileApi->findProfilesTunnelSoftgre: ', $e->getMessage(), PHP_EOL;
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

## `findProfilesTunnelSoftgreById()`

```php
findProfilesTunnelSoftgreById($id, $service_ticket): object
```

Use this API command to retrieve SoftGRE tunnel profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\SoftGRETunnelProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findProfilesTunnelSoftgreById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoftGRETunnelProfileApi->findProfilesTunnelSoftgreById: ', $e->getMessage(), PHP_EOL;
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

## `findProfilesTunnelSoftgreByQueryCriteria()`

```php
findProfilesTunnelSoftgreByQueryCriteria($service_ticket, $body): object
```

Use this API command to query a list of SoftGRE tunnel profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\SoftGRETunnelProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet(); // \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet

try {
    $result = $apiInstance->findProfilesTunnelSoftgreByQueryCriteria($service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoftGRETunnelProfileApi->findProfilesTunnelSoftgreByQueryCriteria: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **body** | [**\PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet**](../Model/CommonQueryCriteriaSuperSet.md)|  | |

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

## `partialUpdateProfilesTunnelSoftgreById()`

```php
partialUpdateProfilesTunnelSoftgreById($id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify the configuration of SoftGRE tunnel profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\SoftGRETunnelProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->partialUpdateProfilesTunnelSoftgreById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoftGRETunnelProfileApi->partialUpdateProfilesTunnelSoftgreById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
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
