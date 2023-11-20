# PofP\SmartzoneClient\L3AccessControlPolicyApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addL3AccessControlPolicies()**](L3AccessControlPolicyApi.md#addL3AccessControlPolicies) | **POST** /l3AccessControlPolicies | Create a L3 Access Control Policy. |
| [**deleteL3AccessControlPolicies()**](L3AccessControlPolicyApi.md#deleteL3AccessControlPolicies) | **DELETE** /l3AccessControlPolicies | Use this API command to delete Bulk L3 Access Control Policies. |
| [**deleteL3AccessControlPoliciesById()**](L3AccessControlPolicyApi.md#deleteL3AccessControlPoliciesById) | **DELETE** /l3AccessControlPolicies/{id} | Delete a L3 Access Control Policy. |
| [**findL3AccessControlPolicies()**](L3AccessControlPolicyApi.md#findL3AccessControlPolicies) | **GET** /l3AccessControlPolicies | Retrieve L3 Access Control Policy list. |
| [**findL3AccessControlPoliciesById()**](L3AccessControlPolicyApi.md#findL3AccessControlPoliciesById) | **GET** /l3AccessControlPolicies/{id} | Retrieve a L3 Access Control Policy. |
| [**findL3AccessControlPoliciesByQueryCriteria()**](L3AccessControlPolicyApi.md#findL3AccessControlPoliciesByQueryCriteria) | **POST** /l3AccessControlPolicies/query | Retrieve a list of L3 Access Control Policy. |
| [**updateL3AccessControlPoliciesById()**](L3AccessControlPolicyApi.md#updateL3AccessControlPoliciesById) | **PUT** /l3AccessControlPolicies/{id} | Modify a L3 Access Control Policy. |


## `addL3AccessControlPolicies()`

```php
addL3AccessControlPolicies($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Create a L3 Access Control Policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\L3AccessControlPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addL3AccessControlPolicies($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling L3AccessControlPolicyApi->addL3AccessControlPolicies: ', $e->getMessage(), PHP_EOL;
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

## `deleteL3AccessControlPolicies()`

```php
deleteL3AccessControlPolicies($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to delete Bulk L3 Access Control Policies.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\L3AccessControlPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->deleteL3AccessControlPolicies($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling L3AccessControlPolicyApi->deleteL3AccessControlPolicies: ', $e->getMessage(), PHP_EOL;
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

## `deleteL3AccessControlPoliciesById()`

```php
deleteL3AccessControlPoliciesById($id, $service_ticket)
```

Delete a L3 Access Control Policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\L3AccessControlPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $apiInstance->deleteL3AccessControlPoliciesById($id, $service_ticket);
} catch (Exception $e) {
    echo 'Exception when calling L3AccessControlPolicyApi->deleteL3AccessControlPoliciesById: ', $e->getMessage(), PHP_EOL;
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

## `findL3AccessControlPolicies()`

```php
findL3AccessControlPolicies($service_ticket, $index, $list_size, $domain_id): object
```

Retrieve L3 Access Control Policy list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\L3AccessControlPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$index = 'index_example'; // string | The index of the first entry to be retrieved. Default: 0
$list_size = 'list_size_example'; // string | The maximum number of entries to be retrieved. Default: 100, Maximum: 1000
$domain_id = 'domain_id_example'; // string | The domain ID. Default: current logon domain ID

try {
    $result = $apiInstance->findL3AccessControlPolicies($service_ticket, $index, $list_size, $domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling L3AccessControlPolicyApi->findL3AccessControlPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **index** | **string**| The index of the first entry to be retrieved. Default: 0 | [optional] |
| **list_size** | **string**| The maximum number of entries to be retrieved. Default: 100, Maximum: 1000 | [optional] |
| **domain_id** | **string**| The domain ID. Default: current logon domain ID | [optional] |

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

## `findL3AccessControlPoliciesById()`

```php
findL3AccessControlPoliciesById($id, $service_ticket): object
```

Retrieve a L3 Access Control Policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\L3AccessControlPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findL3AccessControlPoliciesById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling L3AccessControlPolicyApi->findL3AccessControlPoliciesById: ', $e->getMessage(), PHP_EOL;
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

## `findL3AccessControlPoliciesByQueryCriteria()`

```php
findL3AccessControlPoliciesByQueryCriteria($service_ticket, $body): object
```

Retrieve a list of L3 Access Control Policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\L3AccessControlPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet(); // \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet

try {
    $result = $apiInstance->findL3AccessControlPoliciesByQueryCriteria($service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling L3AccessControlPolicyApi->findL3AccessControlPoliciesByQueryCriteria: ', $e->getMessage(), PHP_EOL;
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

## `updateL3AccessControlPoliciesById()`

```php
updateL3AccessControlPoliciesById($id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Modify a L3 Access Control Policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\L3AccessControlPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->updateL3AccessControlPoliciesById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling L3AccessControlPolicyApi->updateL3AccessControlPoliciesById: ', $e->getMessage(), PHP_EOL;
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
