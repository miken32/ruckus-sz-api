# PofP\SmartzoneClient\URLFilteringPolicyApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addUrlFilteringUrlFilteringPolicy()**](URLFilteringPolicyApi.md#addUrlFilteringUrlFilteringPolicy) | **POST** /urlFiltering/urlFilteringPolicy | Use this API command to create a URL Filtering policy. |
| [**deleteUrlFilteringUrlFilteringPolicy()**](URLFilteringPolicyApi.md#deleteUrlFilteringUrlFilteringPolicy) | **DELETE** /urlFiltering/urlFilteringPolicy | Use this API command to delete bulk URL Filtering policies. |
| [**deleteUrlFilteringUrlFilteringPolicyById()**](URLFilteringPolicyApi.md#deleteUrlFilteringUrlFilteringPolicyById) | **DELETE** /urlFiltering/urlFilteringPolicy/{id} | Use this API command to delete a URL Filtering policy. |
| [**findUrlFilteringBlockCategories()**](URLFilteringPolicyApi.md#findUrlFilteringBlockCategories) | **GET** /urlFiltering/blockCategories | Use this API command to retrieve the block categories of URL Filtering. |
| [**findUrlFilteringByQueryCriteria()**](URLFilteringPolicyApi.md#findUrlFilteringByQueryCriteria) | **POST** /urlFiltering/query | Use this API command to retrieve a list of URL Filtering policies by query criteria. |
| [**findUrlFilteringUrlFilteringPolicy()**](URLFilteringPolicyApi.md#findUrlFilteringUrlFilteringPolicy) | **GET** /urlFiltering/urlFilteringPolicy | Use this API command to retrieve list of URL Filtering policies. |
| [**findUrlFilteringUrlFilteringPolicyById()**](URLFilteringPolicyApi.md#findUrlFilteringUrlFilteringPolicyById) | **GET** /urlFiltering/urlFilteringPolicy/{id} | Use this API command to retrieve an URL Filtering policy. |
| [**partialUpdateUrlFilteringUrlFilteringPolicyById()**](URLFilteringPolicyApi.md#partialUpdateUrlFilteringUrlFilteringPolicyById) | **PATCH** /urlFiltering/urlFilteringPolicy/{id} | Use this API command to patch a URL Filtering policy. |
| [**updateUrlFilteringUrlFilteringPolicyById()**](URLFilteringPolicyApi.md#updateUrlFilteringUrlFilteringPolicyById) | **PUT** /urlFiltering/urlFilteringPolicy/{id} | Use this API command to modify a URL Filtering policy. |


## `addUrlFilteringUrlFilteringPolicy()`

```php
addUrlFilteringUrlFilteringPolicy($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to create a URL Filtering policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\URLFilteringPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addUrlFilteringUrlFilteringPolicy($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling URLFilteringPolicyApi->addUrlFilteringUrlFilteringPolicy: ', $e->getMessage(), PHP_EOL;
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

## `deleteUrlFilteringUrlFilteringPolicy()`

```php
deleteUrlFilteringUrlFilteringPolicy($service_ticket, $UNKNOWN_PARAM_NAME)
```

Use this API command to delete bulk URL Filtering policies.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\URLFilteringPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->deleteUrlFilteringUrlFilteringPolicy($service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling URLFilteringPolicyApi->deleteUrlFilteringUrlFilteringPolicy: ', $e->getMessage(), PHP_EOL;
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

## `deleteUrlFilteringUrlFilteringPolicyById()`

```php
deleteUrlFilteringUrlFilteringPolicyById($id, $service_ticket): object
```

Use this API command to delete a URL Filtering policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\URLFilteringPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteUrlFilteringUrlFilteringPolicyById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling URLFilteringPolicyApi->deleteUrlFilteringUrlFilteringPolicyById: ', $e->getMessage(), PHP_EOL;
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

## `findUrlFilteringBlockCategories()`

```php
findUrlFilteringBlockCategories($service_ticket): object
```

Use this API command to retrieve the block categories of URL Filtering.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\URLFilteringPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findUrlFilteringBlockCategories($service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling URLFilteringPolicyApi->findUrlFilteringBlockCategories: ', $e->getMessage(), PHP_EOL;
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

## `findUrlFilteringByQueryCriteria()`

```php
findUrlFilteringByQueryCriteria($service_ticket, $body): object
```

Use this API command to retrieve a list of URL Filtering policies by query criteria.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\URLFilteringPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet(); // \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet

try {
    $result = $apiInstance->findUrlFilteringByQueryCriteria($service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling URLFilteringPolicyApi->findUrlFilteringByQueryCriteria: ', $e->getMessage(), PHP_EOL;
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

## `findUrlFilteringUrlFilteringPolicy()`

```php
findUrlFilteringUrlFilteringPolicy($service_ticket, $index, $list_size, $domain_id): object
```

Use this API command to retrieve list of URL Filtering policies.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\URLFilteringPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$index = 'index_example'; // string | The index of the first entry to be retrieved. Default: 0
$list_size = 'list_size_example'; // string | The maximum number of entries to be retrieved. Default: 100, Maximum: 1000
$domain_id = 'domain_id_example'; // string

try {
    $result = $apiInstance->findUrlFilteringUrlFilteringPolicy($service_ticket, $index, $list_size, $domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling URLFilteringPolicyApi->findUrlFilteringUrlFilteringPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **index** | **string**| The index of the first entry to be retrieved. Default: 0 | [optional] |
| **list_size** | **string**| The maximum number of entries to be retrieved. Default: 100, Maximum: 1000 | [optional] |
| **domain_id** | **string**|  | [optional] |

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

## `findUrlFilteringUrlFilteringPolicyById()`

```php
findUrlFilteringUrlFilteringPolicyById($id, $service_ticket): object
```

Use this API command to retrieve an URL Filtering policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\URLFilteringPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findUrlFilteringUrlFilteringPolicyById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling URLFilteringPolicyApi->findUrlFilteringUrlFilteringPolicyById: ', $e->getMessage(), PHP_EOL;
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

## `partialUpdateUrlFilteringUrlFilteringPolicyById()`

```php
partialUpdateUrlFilteringUrlFilteringPolicyById($id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to patch a URL Filtering policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\URLFilteringPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->partialUpdateUrlFilteringUrlFilteringPolicyById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling URLFilteringPolicyApi->partialUpdateUrlFilteringUrlFilteringPolicyById: ', $e->getMessage(), PHP_EOL;
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

## `updateUrlFilteringUrlFilteringPolicyById()`

```php
updateUrlFilteringUrlFilteringPolicyById($id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify a URL Filtering policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\URLFilteringPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->updateUrlFilteringUrlFilteringPolicyById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling URLFilteringPolicyApi->updateUrlFilteringUrlFilteringPolicyById: ', $e->getMessage(), PHP_EOL;
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
