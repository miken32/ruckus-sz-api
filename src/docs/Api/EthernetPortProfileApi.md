# PofP\SmartzoneClient\EthernetPortProfileApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addRkszonesProfileEthernetPortByZoneId()**](EthernetPortProfileApi.md#addRkszonesProfileEthernetPortByZoneId) | **POST** /rkszones/{zoneId}/profile/ethernetPort | Create a new Ethernet Port Porfile. |
| [**deleteRkszonesProfileEthernetPortById()**](EthernetPortProfileApi.md#deleteRkszonesProfileEthernetPortById) | **DELETE** /rkszones/{zoneId}/profile/ethernetPort/{id} | Delete Ethernet Port Porfile. |
| [**findRkszonesProfileEthernetPortById()**](EthernetPortProfileApi.md#findRkszonesProfileEthernetPortById) | **GET** /rkszones/{zoneId}/profile/ethernetPort/{id} | Retrieve a Ethernet Port Porfile. |
| [**findRkszonesProfileEthernetPortByZoneId()**](EthernetPortProfileApi.md#findRkszonesProfileEthernetPortByZoneId) | **GET** /rkszones/{zoneId}/profile/ethernetPort | Retrieve a list of Ethernet Port Porfiles within a zone. |
| [**findServicesEthernetPortProfileByQueryCriteria()**](EthernetPortProfileApi.md#findServicesEthernetPortProfileByQueryCriteria) | **POST** /query/services/ethernetPortProfile | Query Ethernet Port Profiles with specified filters. |
| [**partialUpdateRkszonesProfileEthernetPortById()**](EthernetPortProfileApi.md#partialUpdateRkszonesProfileEthernetPortById) | **PATCH** /rkszones/{zoneId}/profile/ethernetPort/{id} | Modify a specific Ethernet Port Porfile. |
| [**updateRkszonesProfileEthernetPortById()**](EthernetPortProfileApi.md#updateRkszonesProfileEthernetPortById) | **PUT** /rkszones/{zoneId}/profile/ethernetPort/{id} | Modify a specific Ethernet Port Porfile. |


## `addRkszonesProfileEthernetPortByZoneId()`

```php
addRkszonesProfileEthernetPortByZoneId($zone_id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Create a new Ethernet Port Porfile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\EthernetPortProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addRkszonesProfileEthernetPortByZoneId($zone_id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EthernetPortProfileApi->addRkszonesProfileEthernetPortByZoneId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
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

## `deleteRkszonesProfileEthernetPortById()`

```php
deleteRkszonesProfileEthernetPortById($zone_id, $id, $service_ticket): object
```

Delete Ethernet Port Porfile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\EthernetPortProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesProfileEthernetPortById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EthernetPortProfileApi->deleteRkszonesProfileEthernetPortById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
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

## `findRkszonesProfileEthernetPortById()`

```php
findRkszonesProfileEthernetPortById($zone_id, $id, $service_ticket): object
```

Retrieve a Ethernet Port Porfile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\EthernetPortProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findRkszonesProfileEthernetPortById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EthernetPortProfileApi->findRkszonesProfileEthernetPortById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
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

## `findRkszonesProfileEthernetPortByZoneId()`

```php
findRkszonesProfileEthernetPortByZoneId($zone_id, $service_ticket, $index, $list_size): object
```

Retrieve a list of Ethernet Port Porfiles within a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\EthernetPortProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$index = 'index_example'; // string | The index of the first entry to be retrieved. Default: 0
$list_size = 'list_size_example'; // string | The maximum number of entries to be retrieved. Default: 100, Maximum: 1000

try {
    $result = $apiInstance->findRkszonesProfileEthernetPortByZoneId($zone_id, $service_ticket, $index, $list_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EthernetPortProfileApi->findRkszonesProfileEthernetPortByZoneId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
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

## `findServicesEthernetPortProfileByQueryCriteria()`

```php
findServicesEthernetPortProfileByQueryCriteria($service_ticket, $body)
```

Query Ethernet Port Profiles with specified filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\EthernetPortProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet(); // \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet

try {
    $apiInstance->findServicesEthernetPortProfileByQueryCriteria($service_ticket, $body);
} catch (Exception $e) {
    echo 'Exception when calling EthernetPortProfileApi->findServicesEthernetPortProfileByQueryCriteria: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **body** | [**\PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet**](../Model/CommonQueryCriteriaSuperSet.md)|  | |

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

## `partialUpdateRkszonesProfileEthernetPortById()`

```php
partialUpdateRkszonesProfileEthernetPortById($zone_id, $id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Modify a specific Ethernet Port Porfile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\EthernetPortProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->partialUpdateRkszonesProfileEthernetPortById($zone_id, $id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EthernetPortProfileApi->partialUpdateRkszonesProfileEthernetPortById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
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

## `updateRkszonesProfileEthernetPortById()`

```php
updateRkszonesProfileEthernetPortById($zone_id, $id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Modify a specific Ethernet Port Porfile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\EthernetPortProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->updateRkszonesProfileEthernetPortById($zone_id, $id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EthernetPortProfileApi->updateRkszonesProfileEthernetPortById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
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
