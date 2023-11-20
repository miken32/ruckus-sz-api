# PofP\SmartzoneClient\RuckusGRETunnelProfileApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addProfilesTunnelRuckusgre()**](RuckusGRETunnelProfileApi.md#addProfilesTunnelRuckusgre) | **POST** /profiles/tunnel/ruckusgre | Use this API command to create RuckusGRE tunnel profile. |
| [**deleteProfilesTunnelRuckusgre()**](RuckusGRETunnelProfileApi.md#deleteProfilesTunnelRuckusgre) | **DELETE** /profiles/tunnel/ruckusgre | Use this API command to delete multiple RuckusGRE tunnel profile. |
| [**deleteProfilesTunnelRuckusgreById()**](RuckusGRETunnelProfileApi.md#deleteProfilesTunnelRuckusgreById) | **DELETE** /profiles/tunnel/ruckusgre/{id} | Use this API command to delete RuckusGRE tunnel profile. |
| [**findProfilesTunnelRuckusgre()**](RuckusGRETunnelProfileApi.md#findProfilesTunnelRuckusgre) | **GET** /profiles/tunnel/ruckusgre | Use this API command to retrieve a list of RuckusGRE tunnel profile. |
| [**findProfilesTunnelRuckusgreById()**](RuckusGRETunnelProfileApi.md#findProfilesTunnelRuckusgreById) | **GET** /profiles/tunnel/ruckusgre/{id} | Use this API command to retrieve RuckusGRE tunnel profile. |
| [**findProfilesTunnelRuckusgreByQueryCriteria()**](RuckusGRETunnelProfileApi.md#findProfilesTunnelRuckusgreByQueryCriteria) | **POST** /profiles/tunnel/ruckusgre/query | Use this API command to query a list of RuckusGRE tunnel profile. |
| [**partialUpdateProfilesTunnelRuckusgreById()**](RuckusGRETunnelProfileApi.md#partialUpdateProfilesTunnelRuckusgreById) | **PATCH** /profiles/tunnel/ruckusgre/{id} | Use this API command to modify the configuration of RuckusGRE tunnel profile. |


## `addProfilesTunnelRuckusgre()`

```php
addProfilesTunnelRuckusgre($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to create RuckusGRE tunnel profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusGRETunnelProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addProfilesTunnelRuckusgre($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusGRETunnelProfileApi->addProfilesTunnelRuckusgre: ', $e->getMessage(), PHP_EOL;
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

## `deleteProfilesTunnelRuckusgre()`

```php
deleteProfilesTunnelRuckusgre($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to delete multiple RuckusGRE tunnel profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusGRETunnelProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->deleteProfilesTunnelRuckusgre($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusGRETunnelProfileApi->deleteProfilesTunnelRuckusgre: ', $e->getMessage(), PHP_EOL;
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

## `deleteProfilesTunnelRuckusgreById()`

```php
deleteProfilesTunnelRuckusgreById($id, $service_ticket)
```

Use this API command to delete RuckusGRE tunnel profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusGRETunnelProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $apiInstance->deleteProfilesTunnelRuckusgreById($id, $service_ticket);
} catch (Exception $e) {
    echo 'Exception when calling RuckusGRETunnelProfileApi->deleteProfilesTunnelRuckusgreById: ', $e->getMessage(), PHP_EOL;
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

## `findProfilesTunnelRuckusgre()`

```php
findProfilesTunnelRuckusgre($service_ticket): object
```

Use this API command to retrieve a list of RuckusGRE tunnel profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusGRETunnelProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findProfilesTunnelRuckusgre($service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusGRETunnelProfileApi->findProfilesTunnelRuckusgre: ', $e->getMessage(), PHP_EOL;
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

## `findProfilesTunnelRuckusgreById()`

```php
findProfilesTunnelRuckusgreById($id, $service_ticket): object
```

Use this API command to retrieve RuckusGRE tunnel profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusGRETunnelProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findProfilesTunnelRuckusgreById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusGRETunnelProfileApi->findProfilesTunnelRuckusgreById: ', $e->getMessage(), PHP_EOL;
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

## `findProfilesTunnelRuckusgreByQueryCriteria()`

```php
findProfilesTunnelRuckusgreByQueryCriteria($service_ticket, $body): object
```

Use this API command to query a list of RuckusGRE tunnel profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusGRETunnelProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet(); // \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet

try {
    $result = $apiInstance->findProfilesTunnelRuckusgreByQueryCriteria($service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusGRETunnelProfileApi->findProfilesTunnelRuckusgreByQueryCriteria: ', $e->getMessage(), PHP_EOL;
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

## `partialUpdateProfilesTunnelRuckusgreById()`

```php
partialUpdateProfilesTunnelRuckusgreById($id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify the configuration of RuckusGRE tunnel profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusGRETunnelProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->partialUpdateProfilesTunnelRuckusgreById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusGRETunnelProfileApi->partialUpdateProfilesTunnelRuckusgreById: ', $e->getMessage(), PHP_EOL;
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
