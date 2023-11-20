# PofP\SmartzoneClient\IndoorMapApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addMaps()**](IndoorMapApi.md#addMaps) | **POST** /maps | Use this API command to create indoorMap. |
| [**deleteMapsByIndoorMapId()**](IndoorMapApi.md#deleteMapsByIndoorMapId) | **DELETE** /maps/{indoorMapId} | Use this API command to delete indoor map. |
| [**findMaps()**](IndoorMapApi.md#findMaps) | **GET** /maps | Use this API command to get indoor map list. |
| [**findMapsByIndoorMapId()**](IndoorMapApi.md#findMapsByIndoorMapId) | **GET** /maps/{indoorMapId} | Use this API command to get indoor maps. |
| [**findMapsByQueryCriteria()**](IndoorMapApi.md#findMapsByQueryCriteria) | **POST** /maps/query | Use this API command to query indoorMap. |
| [**partialUpdateMapsByIndoorMapId()**](IndoorMapApi.md#partialUpdateMapsByIndoorMapId) | **PATCH** /maps/{indoorMapId} | Use this API command to update specific indoor map. |
| [**updateMapsApsByIndoorMapId()**](IndoorMapApi.md#updateMapsApsByIndoorMapId) | **PUT** /maps/{indoorMapId}/aps | Use this API command to put Aps in indoor map. |


## `addMaps()`

```php
addMaps($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to create indoorMap.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\IndoorMapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addMaps($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndoorMapApi->addMaps: ', $e->getMessage(), PHP_EOL;
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

## `deleteMapsByIndoorMapId()`

```php
deleteMapsByIndoorMapId($indoor_map_id, $service_ticket): object
```

Use this API command to delete indoor map.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\IndoorMapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$indoor_map_id = 'indoor_map_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteMapsByIndoorMapId($indoor_map_id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndoorMapApi->deleteMapsByIndoorMapId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **indoor_map_id** | **string**|  | |
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

## `findMaps()`

```php
findMaps($service_ticket, $group_id, $group_type): object
```

Use this API command to get indoor map list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\IndoorMapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$group_id = 'group_id_example'; // string
$group_type = 'group_type_example'; // string

try {
    $result = $apiInstance->findMaps($service_ticket, $group_id, $group_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndoorMapApi->findMaps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **group_id** | **string**|  | |
| **group_type** | **string**|  | |

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

## `findMapsByIndoorMapId()`

```php
findMapsByIndoorMapId($indoor_map_id, $service_ticket): object
```

Use this API command to get indoor maps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\IndoorMapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$indoor_map_id = 'indoor_map_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findMapsByIndoorMapId($indoor_map_id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndoorMapApi->findMapsByIndoorMapId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **indoor_map_id** | **string**|  | |
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

## `findMapsByQueryCriteria()`

```php
findMapsByQueryCriteria($service_ticket, $body): object
```

Use this API command to query indoorMap.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\IndoorMapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet(); // \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet

try {
    $result = $apiInstance->findMapsByQueryCriteria($service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndoorMapApi->findMapsByQueryCriteria: ', $e->getMessage(), PHP_EOL;
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

## `partialUpdateMapsByIndoorMapId()`

```php
partialUpdateMapsByIndoorMapId($indoor_map_id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to update specific indoor map.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\IndoorMapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$indoor_map_id = 'indoor_map_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->partialUpdateMapsByIndoorMapId($indoor_map_id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndoorMapApi->partialUpdateMapsByIndoorMapId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **indoor_map_id** | **string**|  | |
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

## `updateMapsApsByIndoorMapId()`

```php
updateMapsApsByIndoorMapId($indoor_map_id, $service_ticket, $body): object
```

Use this API command to put Aps in indoor map.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\IndoorMapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$indoor_map_id = 'indoor_map_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = array(new \stdClass); // object[]

try {
    $result = $apiInstance->updateMapsApsByIndoorMapId($indoor_map_id, $service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndoorMapApi->updateMapsApsByIndoorMapId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **indoor_map_id** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **body** | [**object[]**](../Model/object.md)|  | |

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
