# PofP\SmartzoneClient\ZoneSwitchGroupLinkApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addZoneSwitchGroupLinks()**](ZoneSwitchGroupLinkApi.md#addZoneSwitchGroupLinks) | **POST** /zoneSwitchGroupLinks | Create a new Zone Switch Group link relation. |
| [**deleteZoneSwitchGroupLinksById()**](ZoneSwitchGroupLinkApi.md#deleteZoneSwitchGroupLinksById) | **DELETE** /zoneSwitchGroupLinks/{id} | Delete a new Zone Switch Group link relation. |
| [**findZoneSwitchGroupLinks()**](ZoneSwitchGroupLinkApi.md#findZoneSwitchGroupLinks) | **GET** /zoneSwitchGroupLinks | Retrieve all(at most 1000) Zone Switch Group link relations. |
| [**findZoneSwitchGroupLinksById()**](ZoneSwitchGroupLinkApi.md#findZoneSwitchGroupLinksById) | **GET** /zoneSwitchGroupLinks/{id} | Retrieve a new Zone Switch Group link relation by its ID. |
| [**updateZoneSwitchGroupLinksById()**](ZoneSwitchGroupLinkApi.md#updateZoneSwitchGroupLinksById) | **PUT** /zoneSwitchGroupLinks/{id} | Update a new Zone Switch Group link relation. |


## `addZoneSwitchGroupLinks()`

```php
addZoneSwitchGroupLinks($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Create a new Zone Switch Group link relation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ZoneSwitchGroupLinkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addZoneSwitchGroupLinks($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneSwitchGroupLinkApi->addZoneSwitchGroupLinks: ', $e->getMessage(), PHP_EOL;
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

## `deleteZoneSwitchGroupLinksById()`

```php
deleteZoneSwitchGroupLinksById($id, $service_ticket): object
```

Delete a new Zone Switch Group link relation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ZoneSwitchGroupLinkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteZoneSwitchGroupLinksById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneSwitchGroupLinkApi->deleteZoneSwitchGroupLinksById: ', $e->getMessage(), PHP_EOL;
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

## `findZoneSwitchGroupLinks()`

```php
findZoneSwitchGroupLinks($service_ticket, $index, $list_size, $domain_id, $zone_id, $switch_group_id): object
```

Retrieve all(at most 1000) Zone Switch Group link relations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ZoneSwitchGroupLinkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$index = 'index_example'; // string | The index of the first entry to be retrieved. Default: 0
$list_size = 'list_size_example'; // string | The maximum number of entries to be retrieved. Default: 100, Maximum: 1000
$domain_id = 'domain_id_example'; // string | Get by Domain ID
$zone_id = 'zone_id_example'; // string | Get by Zone ID
$switch_group_id = 'switch_group_id_example'; // string | Get by Switch Group ID

try {
    $result = $apiInstance->findZoneSwitchGroupLinks($service_ticket, $index, $list_size, $domain_id, $zone_id, $switch_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneSwitchGroupLinkApi->findZoneSwitchGroupLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **index** | **string**| The index of the first entry to be retrieved. Default: 0 | [optional] |
| **list_size** | **string**| The maximum number of entries to be retrieved. Default: 100, Maximum: 1000 | [optional] |
| **domain_id** | **string**| Get by Domain ID | [optional] |
| **zone_id** | **string**| Get by Zone ID | [optional] |
| **switch_group_id** | **string**| Get by Switch Group ID | [optional] |

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

## `findZoneSwitchGroupLinksById()`

```php
findZoneSwitchGroupLinksById($id, $service_ticket): object
```

Retrieve a new Zone Switch Group link relation by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ZoneSwitchGroupLinkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findZoneSwitchGroupLinksById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneSwitchGroupLinkApi->findZoneSwitchGroupLinksById: ', $e->getMessage(), PHP_EOL;
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

## `updateZoneSwitchGroupLinksById()`

```php
updateZoneSwitchGroupLinksById($id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Update a new Zone Switch Group link relation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ZoneSwitchGroupLinkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->updateZoneSwitchGroupLinksById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneSwitchGroupLinkApi->updateZoneSwitchGroupLinksById: ', $e->getMessage(), PHP_EOL;
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
