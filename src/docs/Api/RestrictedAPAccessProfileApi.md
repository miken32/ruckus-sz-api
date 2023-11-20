# PofP\SmartzoneClient\RestrictedAPAccessProfileApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addRkszonesRestrictedApAccessProfilesByZoneId()**](RestrictedAPAccessProfileApi.md#addRkszonesRestrictedApAccessProfilesByZoneId) | **POST** /rkszones/{zoneId}/restrictedApAccessProfiles | Create a Restricted AP Access Profile. |
| [**deleteRkszonesRestrictedApAccessProfiles()**](RestrictedAPAccessProfileApi.md#deleteRkszonesRestrictedApAccessProfiles) | **DELETE** /rkszones/restrictedApAccessProfiles | Use this API command to delete Bulk Restricted AP Access Profile. |
| [**deleteRkszonesRestrictedApAccessProfilesById()**](RestrictedAPAccessProfileApi.md#deleteRkszonesRestrictedApAccessProfilesById) | **DELETE** /rkszones/{zoneId}/restrictedApAccessProfiles/{id} | Delete a Restricted AP Access Profile. |
| [**findRkszonesRestrictedApAccessProfilesById()**](RestrictedAPAccessProfileApi.md#findRkszonesRestrictedApAccessProfilesById) | **GET** /rkszones/{zoneId}/restrictedApAccessProfiles/{id} | Retrieve a Restricted AP Access Profile. |
| [**findRkszonesRestrictedApAccessProfilesByQueryCriteria()**](RestrictedAPAccessProfileApi.md#findRkszonesRestrictedApAccessProfilesByQueryCriteria) | **POST** /rkszones/restrictedApAccessProfiles/query | Retrieve a list of Restricted AP Access Profile. |
| [**findRkszonesRestrictedApAccessProfilesByZoneId()**](RestrictedAPAccessProfileApi.md#findRkszonesRestrictedApAccessProfilesByZoneId) | **GET** /rkszones/{zoneId}/restrictedApAccessProfiles | Retrieve Restricted AP Access Profile list. |
| [**updateRkszonesRestrictedApAccessProfilesById()**](RestrictedAPAccessProfileApi.md#updateRkszonesRestrictedApAccessProfilesById) | **PUT** /rkszones/{zoneId}/restrictedApAccessProfiles/{id} | Modify a Restricted AP Access Profile. |


## `addRkszonesRestrictedApAccessProfilesByZoneId()`

```php
addRkszonesRestrictedApAccessProfilesByZoneId($zone_id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Create a Restricted AP Access Profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RestrictedAPAccessProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addRkszonesRestrictedApAccessProfilesByZoneId($zone_id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestrictedAPAccessProfileApi->addRkszonesRestrictedApAccessProfilesByZoneId: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesRestrictedApAccessProfiles()`

```php
deleteRkszonesRestrictedApAccessProfiles($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to delete Bulk Restricted AP Access Profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RestrictedAPAccessProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->deleteRkszonesRestrictedApAccessProfiles($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestrictedAPAccessProfileApi->deleteRkszonesRestrictedApAccessProfiles: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesRestrictedApAccessProfilesById()`

```php
deleteRkszonesRestrictedApAccessProfilesById($zone_id, $id, $service_ticket)
```

Delete a Restricted AP Access Profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RestrictedAPAccessProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $apiInstance->deleteRkszonesRestrictedApAccessProfilesById($zone_id, $id, $service_ticket);
} catch (Exception $e) {
    echo 'Exception when calling RestrictedAPAccessProfileApi->deleteRkszonesRestrictedApAccessProfilesById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
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

## `findRkszonesRestrictedApAccessProfilesById()`

```php
findRkszonesRestrictedApAccessProfilesById($zone_id, $id, $service_ticket): object
```

Retrieve a Restricted AP Access Profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RestrictedAPAccessProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findRkszonesRestrictedApAccessProfilesById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestrictedAPAccessProfileApi->findRkszonesRestrictedApAccessProfilesById: ', $e->getMessage(), PHP_EOL;
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

## `findRkszonesRestrictedApAccessProfilesByQueryCriteria()`

```php
findRkszonesRestrictedApAccessProfilesByQueryCriteria($service_ticket, $body): object
```

Retrieve a list of Restricted AP Access Profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RestrictedAPAccessProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet(); // \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet

try {
    $result = $apiInstance->findRkszonesRestrictedApAccessProfilesByQueryCriteria($service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestrictedAPAccessProfileApi->findRkszonesRestrictedApAccessProfilesByQueryCriteria: ', $e->getMessage(), PHP_EOL;
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

## `findRkszonesRestrictedApAccessProfilesByZoneId()`

```php
findRkszonesRestrictedApAccessProfilesByZoneId($zone_id, $service_ticket, $index, $list_size): object
```

Retrieve Restricted AP Access Profile list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RestrictedAPAccessProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$index = 'index_example'; // string | The index of the first entry to be retrieved. Default: 0
$list_size = 'list_size_example'; // string | The maximum number of entries to be retrieved. Default: 100, Maximum: 1000

try {
    $result = $apiInstance->findRkszonesRestrictedApAccessProfilesByZoneId($zone_id, $service_ticket, $index, $list_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestrictedAPAccessProfileApi->findRkszonesRestrictedApAccessProfilesByZoneId: ', $e->getMessage(), PHP_EOL;
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

## `updateRkszonesRestrictedApAccessProfilesById()`

```php
updateRkszonesRestrictedApAccessProfilesById($zone_id, $id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Modify a Restricted AP Access Profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RestrictedAPAccessProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->updateRkszonesRestrictedApAccessProfilesById($zone_id, $id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestrictedAPAccessProfileApi->updateRkszonesRestrictedApAccessProfilesById: ', $e->getMessage(), PHP_EOL;
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
