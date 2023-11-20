# PofP\SmartzoneClient\NetworkSegmentationProfileApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addNetworkSegmentation()**](NetworkSegmentationProfileApi.md#addNetworkSegmentation) | **POST** /networkSegmentation | Use this API command to create a new network segmentation profile |
| [**addNetworkSegmentationEthernetPortProfile()**](NetworkSegmentationProfileApi.md#addNetworkSegmentationEthernetPortProfile) | **POST** /networkSegmentation/ethernetPortProfile | Use this API command to create network segmentation ethernet port profile |
| [**deleteNetworkSegmentationById()**](NetworkSegmentationProfileApi.md#deleteNetworkSegmentationById) | **DELETE** /networkSegmentation/{id} | Use this API command to delete network segmentation profile by id |
| [**deleteNetworkSegmentationEthernetPortProfile()**](NetworkSegmentationProfileApi.md#deleteNetworkSegmentationEthernetPortProfile) | **DELETE** /networkSegmentation/ethernetPortProfile | Use this API command to bulk delete network segmentation ethernet port profile list |
| [**deleteNetworkSegmentationEthernetPortProfileById()**](NetworkSegmentationProfileApi.md#deleteNetworkSegmentationEthernetPortProfileById) | **DELETE** /networkSegmentation/ethernetPortProfile/{id} | Use this API command to delete network segmentation ethernet port profile list |
| [**findNetworkSegmentationById()**](NetworkSegmentationProfileApi.md#findNetworkSegmentationById) | **GET** /networkSegmentation/{id} | Use this API command to retrieve network segmentation profile by id |
| [**findNetworkSegmentationByQueryCriteria()**](NetworkSegmentationProfileApi.md#findNetworkSegmentationByQueryCriteria) | **POST** /networkSegmentation/query | Use this API command to query network segmentation profile |
| [**findNetworkSegmentationEthernetPortProfile()**](NetworkSegmentationProfileApi.md#findNetworkSegmentationEthernetPortProfile) | **GET** /networkSegmentation/ethernetPortProfile | Use this API command to retrieve network segmentation ethernet port profile list |
| [**findNetworkSegmentationEthernetPortProfileById()**](NetworkSegmentationProfileApi.md#findNetworkSegmentationEthernetPortProfileById) | **GET** /networkSegmentation/ethernetPortProfile/{id} | Use this API command to retrieve network segmentation ethernet port profile |
| [**updateNetworkSegmentationById()**](NetworkSegmentationProfileApi.md#updateNetworkSegmentationById) | **PUT** /networkSegmentation/{id} | Use this API command to modify network segmentation profile by id |
| [**updateNetworkSegmentationEthernetPortProfileById()**](NetworkSegmentationProfileApi.md#updateNetworkSegmentationEthernetPortProfileById) | **PUT** /networkSegmentation/ethernetPortProfile/{id} | Use this API command to update network segmentation ethernet port profile |


## `addNetworkSegmentation()`

```php
addNetworkSegmentation($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to create a new network segmentation profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\NetworkSegmentationProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addNetworkSegmentation($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkSegmentationProfileApi->addNetworkSegmentation: ', $e->getMessage(), PHP_EOL;
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

## `addNetworkSegmentationEthernetPortProfile()`

```php
addNetworkSegmentationEthernetPortProfile($service_ticket, $UNKNOWN_PARAM_NAME)
```

Use this API command to create network segmentation ethernet port profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\NetworkSegmentationProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->addNetworkSegmentationEthernetPortProfile($service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling NetworkSegmentationProfileApi->addNetworkSegmentationEthernetPortProfile: ', $e->getMessage(), PHP_EOL;
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

## `deleteNetworkSegmentationById()`

```php
deleteNetworkSegmentationById($id, $service_ticket): object
```

Use this API command to delete network segmentation profile by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\NetworkSegmentationProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteNetworkSegmentationById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkSegmentationProfileApi->deleteNetworkSegmentationById: ', $e->getMessage(), PHP_EOL;
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

## `deleteNetworkSegmentationEthernetPortProfile()`

```php
deleteNetworkSegmentationEthernetPortProfile($service_ticket, $UNKNOWN_PARAM_NAME)
```

Use this API command to bulk delete network segmentation ethernet port profile list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\NetworkSegmentationProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->deleteNetworkSegmentationEthernetPortProfile($service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling NetworkSegmentationProfileApi->deleteNetworkSegmentationEthernetPortProfile: ', $e->getMessage(), PHP_EOL;
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

## `deleteNetworkSegmentationEthernetPortProfileById()`

```php
deleteNetworkSegmentationEthernetPortProfileById($id, $service_ticket): object
```

Use this API command to delete network segmentation ethernet port profile list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\NetworkSegmentationProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteNetworkSegmentationEthernetPortProfileById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkSegmentationProfileApi->deleteNetworkSegmentationEthernetPortProfileById: ', $e->getMessage(), PHP_EOL;
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

## `findNetworkSegmentationById()`

```php
findNetworkSegmentationById($id, $service_ticket): object
```

Use this API command to retrieve network segmentation profile by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\NetworkSegmentationProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findNetworkSegmentationById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkSegmentationProfileApi->findNetworkSegmentationById: ', $e->getMessage(), PHP_EOL;
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

## `findNetworkSegmentationByQueryCriteria()`

```php
findNetworkSegmentationByQueryCriteria($service_ticket, $body): object
```

Use this API command to query network segmentation profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\NetworkSegmentationProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet(); // \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet

try {
    $result = $apiInstance->findNetworkSegmentationByQueryCriteria($service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkSegmentationProfileApi->findNetworkSegmentationByQueryCriteria: ', $e->getMessage(), PHP_EOL;
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

## `findNetworkSegmentationEthernetPortProfile()`

```php
findNetworkSegmentationEthernetPortProfile($service_ticket): object
```

Use this API command to retrieve network segmentation ethernet port profile list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\NetworkSegmentationProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findNetworkSegmentationEthernetPortProfile($service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkSegmentationProfileApi->findNetworkSegmentationEthernetPortProfile: ', $e->getMessage(), PHP_EOL;
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

## `findNetworkSegmentationEthernetPortProfileById()`

```php
findNetworkSegmentationEthernetPortProfileById($id, $service_ticket): object
```

Use this API command to retrieve network segmentation ethernet port profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\NetworkSegmentationProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findNetworkSegmentationEthernetPortProfileById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkSegmentationProfileApi->findNetworkSegmentationEthernetPortProfileById: ', $e->getMessage(), PHP_EOL;
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

## `updateNetworkSegmentationById()`

```php
updateNetworkSegmentationById($id, $service_ticket, $UNKNOWN_PARAM_NAME)
```

Use this API command to modify network segmentation profile by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\NetworkSegmentationProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->updateNetworkSegmentationById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling NetworkSegmentationProfileApi->updateNetworkSegmentationById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
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

## `updateNetworkSegmentationEthernetPortProfileById()`

```php
updateNetworkSegmentationEthernetPortProfileById($id, $service_ticket, $UNKNOWN_PARAM_NAME)
```

Use this API command to update network segmentation ethernet port profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\NetworkSegmentationProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->updateNetworkSegmentationEthernetPortProfileById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling NetworkSegmentationProfileApi->updateNetworkSegmentationEthernetPortProfileById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
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
