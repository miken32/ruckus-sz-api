# PofP\SmartzoneClient\BonjourFencingPolicyApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addRkszonesBonjourFencingPolicyByZoneId()**](BonjourFencingPolicyApi.md#addRkszonesBonjourFencingPolicyByZoneId) | **POST** /rkszones/{zoneId}/bonjourFencingPolicy | Use this API command to create Bonjour Fencing Policy. |
| [**deleteRkszonesBonjourFencingPolicy()**](BonjourFencingPolicyApi.md#deleteRkszonesBonjourFencingPolicy) | **DELETE** /rkszones/bonjourFencingPolicy | Use this API command to delete Bulk Bonjour Fencing Policy. |
| [**deleteRkszonesBonjourFencingPolicyById()**](BonjourFencingPolicyApi.md#deleteRkszonesBonjourFencingPolicyById) | **DELETE** /rkszones/bonjourFencingPolicy/{id} | Use this API command to delete Bonjour Fencing Policy. |
| [**findApsBonjourFencingStatisticByApMac()**](BonjourFencingPolicyApi.md#findApsBonjourFencingStatisticByApMac) | **GET** /aps/{apMac}/bonjourFencingStatistic | Use this API command to get Bonjour Fencing Statistic per AP. |
| [**findRkszonesBonjourFencingPolicyById()**](BonjourFencingPolicyApi.md#findRkszonesBonjourFencingPolicyById) | **GET** /rkszones/{zoneId}/bonjourFencingPolicy/{id} | Use this API command to retrieve Bonjour Fencing Policy. |
| [**findRkszonesBonjourFencingPolicyByZoneId()**](BonjourFencingPolicyApi.md#findRkszonesBonjourFencingPolicyByZoneId) | **GET** /rkszones/{zoneId}/bonjourFencingPolicy | Use this API command to retrieve a list of Bonjour Fencing Policy. |
| [**findServicesBonjourFencingPolicyByQueryCriteria()**](BonjourFencingPolicyApi.md#findServicesBonjourFencingPolicyByQueryCriteria) | **POST** /query/services/bonjourFencingPolicy | Use this API command to retrieve a list of Bonjour Fencing Policy. |
| [**partialUpdateRkszonesBonjourFencingPolicyById()**](BonjourFencingPolicyApi.md#partialUpdateRkszonesBonjourFencingPolicyById) | **PATCH** /rkszones/{zoneId}/bonjourFencingPolicy/{id} | Use this API command to modify the configuration of Bonjour Fencing Policy. |


## `addRkszonesBonjourFencingPolicyByZoneId()`

```php
addRkszonesBonjourFencingPolicyByZoneId($zone_id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to create Bonjour Fencing Policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\BonjourFencingPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addRkszonesBonjourFencingPolicyByZoneId($zone_id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BonjourFencingPolicyApi->addRkszonesBonjourFencingPolicyByZoneId: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesBonjourFencingPolicy()`

```php
deleteRkszonesBonjourFencingPolicy($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to delete Bulk Bonjour Fencing Policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\BonjourFencingPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->deleteRkszonesBonjourFencingPolicy($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BonjourFencingPolicyApi->deleteRkszonesBonjourFencingPolicy: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesBonjourFencingPolicyById()`

```php
deleteRkszonesBonjourFencingPolicyById($id, $service_ticket)
```

Use this API command to delete Bonjour Fencing Policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\BonjourFencingPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $apiInstance->deleteRkszonesBonjourFencingPolicyById($id, $service_ticket);
} catch (Exception $e) {
    echo 'Exception when calling BonjourFencingPolicyApi->deleteRkszonesBonjourFencingPolicyById: ', $e->getMessage(), PHP_EOL;
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

## `findApsBonjourFencingStatisticByApMac()`

```php
findApsBonjourFencingStatisticByApMac($ap_mac, $service_ticket): object
```

Use this API command to get Bonjour Fencing Statistic per AP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\BonjourFencingPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findApsBonjourFencingStatisticByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BonjourFencingPolicyApi->findApsBonjourFencingStatisticByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
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

## `findRkszonesBonjourFencingPolicyById()`

```php
findRkszonesBonjourFencingPolicyById($zone_id, $id, $service_ticket): object
```

Use this API command to retrieve Bonjour Fencing Policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\BonjourFencingPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findRkszonesBonjourFencingPolicyById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BonjourFencingPolicyApi->findRkszonesBonjourFencingPolicyById: ', $e->getMessage(), PHP_EOL;
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

## `findRkszonesBonjourFencingPolicyByZoneId()`

```php
findRkszonesBonjourFencingPolicyByZoneId($zone_id, $service_ticket): object
```

Use this API command to retrieve a list of Bonjour Fencing Policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\BonjourFencingPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findRkszonesBonjourFencingPolicyByZoneId($zone_id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BonjourFencingPolicyApi->findRkszonesBonjourFencingPolicyByZoneId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
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

## `findServicesBonjourFencingPolicyByQueryCriteria()`

```php
findServicesBonjourFencingPolicyByQueryCriteria($service_ticket, $body): object
```

Use this API command to retrieve a list of Bonjour Fencing Policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\BonjourFencingPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet(); // \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet

try {
    $result = $apiInstance->findServicesBonjourFencingPolicyByQueryCriteria($service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BonjourFencingPolicyApi->findServicesBonjourFencingPolicyByQueryCriteria: ', $e->getMessage(), PHP_EOL;
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

## `partialUpdateRkszonesBonjourFencingPolicyById()`

```php
partialUpdateRkszonesBonjourFencingPolicyById($zone_id, $id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify the configuration of Bonjour Fencing Policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\BonjourFencingPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->partialUpdateRkszonesBonjourFencingPolicyById($zone_id, $id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BonjourFencingPolicyApi->partialUpdateRkszonesBonjourFencingPolicyById: ', $e->getMessage(), PHP_EOL;
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
