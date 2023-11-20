# PofP\SmartzoneClient\DomainApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addDomains()**](DomainApi.md#addDomains) | **POST** /domains | Use this API command to create new domain. |
| [**deleteDomainsById()**](DomainApi.md#deleteDomainsById) | **DELETE** /domains/{id} | Use this API command to delete domain. |
| [**findDomains()**](DomainApi.md#findDomains) | **GET** /domains | Use this API command to retrieve a list of domain under Administration Domain. |
| [**findDomainsById()**](DomainApi.md#findDomainsById) | **GET** /domains/{id} | Use this API command to retrieve domain by specified Domain ID. |
| [**findDomainsByNameByDomainName()**](DomainApi.md#findDomainsByNameByDomainName) | **GET** /domains/byName/{domainName} | Use this API command to retrieve a list of domain by specified Domain name. |
| [**findDomainsSubdomainById()**](DomainApi.md#findDomainsSubdomainById) | **GET** /domains/{id}/subdomain | Use this API command to retrieve a list of subdomain by specified Domain ID. |
| [**partialUpdateDomainsById()**](DomainApi.md#partialUpdateDomainsById) | **PATCH** /domains/{id} | Use this API command to modify the configuration of domain. |


## `addDomains()`

```php
addDomains($service_ticket, $UNKNOWN_PARAM_NAME, $parent_domain_id): object
```

Use this API command to create new domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 
$parent_domain_id = 'parent_domain_id_example'; // string

try {
    $result = $apiInstance->addDomains($service_ticket, $UNKNOWN_PARAM_NAME, $parent_domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->addDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **UNKNOWN_PARAM_NAME** | [****](../Model/.md)|  | |
| **parent_domain_id** | **string**|  | [optional] |

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

## `deleteDomainsById()`

```php
deleteDomainsById($id, $service_ticket)
```

Use this API command to delete domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $apiInstance->deleteDomainsById($id, $service_ticket);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->deleteDomainsById: ', $e->getMessage(), PHP_EOL;
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

## `findDomains()`

```php
findDomains($service_ticket, $index, $list_size, $recursively, $include_self, $exclude_regular_domain): object
```

Use this API command to retrieve a list of domain under Administration Domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$index = 'index_example'; // string | The index of the first entry to be retrieved. Default: 0
$list_size = 'list_size_example'; // string | The maximum number of entries to be retrieved. Default: 100, Maximum: 1000
$recursively = 'recursively_example'; // string | Get domain list recursively.
$include_self = 'include_self_example'; // string | Get domain list include Self.
$exclude_regular_domain = 'exclude_regular_domain_example'; // string

try {
    $result = $apiInstance->findDomains($service_ticket, $index, $list_size, $recursively, $include_self, $exclude_regular_domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->findDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **index** | **string**| The index of the first entry to be retrieved. Default: 0 | [optional] |
| **list_size** | **string**| The maximum number of entries to be retrieved. Default: 100, Maximum: 1000 | [optional] |
| **recursively** | **string**| Get domain list recursively. | [optional] |
| **include_self** | **string**| Get domain list include Self. | [optional] |
| **exclude_regular_domain** | **string**|  | [optional] |

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

## `findDomainsById()`

```php
findDomainsById($id, $service_ticket, $recursively): object
```

Use this API command to retrieve domain by specified Domain ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$recursively = 'recursively_example'; // string

try {
    $result = $apiInstance->findDomainsById($id, $service_ticket, $recursively);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->findDomainsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **recursively** | **string**|  | [optional] |

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

## `findDomainsByNameByDomainName()`

```php
findDomainsByNameByDomainName($domain_name, $service_ticket): object
```

Use this API command to retrieve a list of domain by specified Domain name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$domain_name = 'domain_name_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findDomainsByNameByDomainName($domain_name, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->findDomainsByNameByDomainName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_name** | **string**|  | |
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

## `findDomainsSubdomainById()`

```php
findDomainsSubdomainById($id, $service_ticket, $index, $list_size, $recursively, $include_self, $exclude_regular_domain): object
```

Use this API command to retrieve a list of subdomain by specified Domain ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$index = 'index_example'; // string | The index of the first entry to be retrieved. Default: 0
$list_size = 'list_size_example'; // string | The maximum number of entries to be retrieved. Default: 100, Maximum: 1000
$recursively = 'recursively_example'; // string | Get domain list recursively.
$include_self = 'include_self_example'; // string | Get domain list include Self.
$exclude_regular_domain = 'exclude_regular_domain_example'; // string

try {
    $result = $apiInstance->findDomainsSubdomainById($id, $service_ticket, $index, $list_size, $recursively, $include_self, $exclude_regular_domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->findDomainsSubdomainById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **index** | **string**| The index of the first entry to be retrieved. Default: 0 | [optional] |
| **list_size** | **string**| The maximum number of entries to be retrieved. Default: 100, Maximum: 1000 | [optional] |
| **recursively** | **string**| Get domain list recursively. | [optional] |
| **include_self** | **string**| Get domain list include Self. | [optional] |
| **exclude_regular_domain** | **string**|  | [optional] |

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

## `partialUpdateDomainsById()`

```php
partialUpdateDomainsById($id, $service_ticket, $UNKNOWN_PARAM_NAME)
```

Use this API command to modify the configuration of domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->partialUpdateDomainsById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->partialUpdateDomainsById: ', $e->getMessage(), PHP_EOL;
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
