# PofP\SmartzoneClient\WiFiCallingPolicyApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addWifiCallingWifiCallingPolicy()**](WiFiCallingPolicyApi.md#addWifiCallingWifiCallingPolicy) | **POST** /wifiCalling/wifiCallingPolicy | Use this API command to Create Wi-Fi Calling Policy. |
| [**deleteWifiCallingWifiCallingPolicy()**](WiFiCallingPolicyApi.md#deleteWifiCallingWifiCallingPolicy) | **DELETE** /wifiCalling/wifiCallingPolicy | Use this API command to Delete bulk Wi-Fi Calling policies. |
| [**deleteWifiCallingWifiCallingPolicyById()**](WiFiCallingPolicyApi.md#deleteWifiCallingWifiCallingPolicyById) | **DELETE** /wifiCalling/wifiCallingPolicy/{id} | Use this API command to Delete a Wi-Fi Calling policy by ID. |
| [**findWifiCallingByQueryCriteria()**](WiFiCallingPolicyApi.md#findWifiCallingByQueryCriteria) | **POST** /wifiCalling/query | Use this API command to Query Wi-Fi Calling Policy List. |
| [**findWifiCallingWifiCallingPolicy()**](WiFiCallingPolicyApi.md#findWifiCallingWifiCallingPolicy) | **GET** /wifiCalling/wifiCallingPolicy | Use this API command to Retrieve List of Wi-Fi Calling Policy. |
| [**findWifiCallingWifiCallingPolicyById()**](WiFiCallingPolicyApi.md#findWifiCallingWifiCallingPolicyById) | **GET** /wifiCalling/wifiCallingPolicy/{id} | Use this API command to Retrieve Wi-Fi Calling Policy. |
| [**partialUpdateWifiCallingWifiCallingPolicyById()**](WiFiCallingPolicyApi.md#partialUpdateWifiCallingWifiCallingPolicyById) | **PATCH** /wifiCalling/wifiCallingPolicy/{id} | Use this API command to Modify a Wi-Fi Calling policy. |
| [**updateWifiCallingWifiCallingPolicyById()**](WiFiCallingPolicyApi.md#updateWifiCallingWifiCallingPolicyById) | **PUT** /wifiCalling/wifiCallingPolicy/{id} | Use this API command to Modify Entire Wi-Fi Calling policy. |


## `addWifiCallingWifiCallingPolicy()`

```php
addWifiCallingWifiCallingPolicy($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to Create Wi-Fi Calling Policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\WiFiCallingPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addWifiCallingWifiCallingPolicy($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WiFiCallingPolicyApi->addWifiCallingWifiCallingPolicy: ', $e->getMessage(), PHP_EOL;
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

## `deleteWifiCallingWifiCallingPolicy()`

```php
deleteWifiCallingWifiCallingPolicy($service_ticket, $UNKNOWN_PARAM_NAME)
```

Use this API command to Delete bulk Wi-Fi Calling policies.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\WiFiCallingPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->deleteWifiCallingWifiCallingPolicy($service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling WiFiCallingPolicyApi->deleteWifiCallingWifiCallingPolicy: ', $e->getMessage(), PHP_EOL;
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

## `deleteWifiCallingWifiCallingPolicyById()`

```php
deleteWifiCallingWifiCallingPolicyById($id, $service_ticket): object
```

Use this API command to Delete a Wi-Fi Calling policy by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\WiFiCallingPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteWifiCallingWifiCallingPolicyById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WiFiCallingPolicyApi->deleteWifiCallingWifiCallingPolicyById: ', $e->getMessage(), PHP_EOL;
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

## `findWifiCallingByQueryCriteria()`

```php
findWifiCallingByQueryCriteria($service_ticket, $body): object
```

Use this API command to Query Wi-Fi Calling Policy List.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\WiFiCallingPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet(); // \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet

try {
    $result = $apiInstance->findWifiCallingByQueryCriteria($service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WiFiCallingPolicyApi->findWifiCallingByQueryCriteria: ', $e->getMessage(), PHP_EOL;
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

## `findWifiCallingWifiCallingPolicy()`

```php
findWifiCallingWifiCallingPolicy($service_ticket, $index, $list_size, $domain_id): object
```

Use this API command to Retrieve List of Wi-Fi Calling Policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\WiFiCallingPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$index = 'index_example'; // string | The index of the first entry to be retrieved. Default: 0
$list_size = 'list_size_example'; // string | The maximum number of entries to be retrieved. Default: 100, Maximum: 1000
$domain_id = 'domain_id_example'; // string | Hi joe, please check.

try {
    $result = $apiInstance->findWifiCallingWifiCallingPolicy($service_ticket, $index, $list_size, $domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WiFiCallingPolicyApi->findWifiCallingWifiCallingPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **index** | **string**| The index of the first entry to be retrieved. Default: 0 | [optional] |
| **list_size** | **string**| The maximum number of entries to be retrieved. Default: 100, Maximum: 1000 | [optional] |
| **domain_id** | **string**| Hi joe, please check. | [optional] |

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

## `findWifiCallingWifiCallingPolicyById()`

```php
findWifiCallingWifiCallingPolicyById($id, $service_ticket): object
```

Use this API command to Retrieve Wi-Fi Calling Policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\WiFiCallingPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findWifiCallingWifiCallingPolicyById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WiFiCallingPolicyApi->findWifiCallingWifiCallingPolicyById: ', $e->getMessage(), PHP_EOL;
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

## `partialUpdateWifiCallingWifiCallingPolicyById()`

```php
partialUpdateWifiCallingWifiCallingPolicyById($id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to Modify a Wi-Fi Calling policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\WiFiCallingPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->partialUpdateWifiCallingWifiCallingPolicyById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WiFiCallingPolicyApi->partialUpdateWifiCallingWifiCallingPolicyById: ', $e->getMessage(), PHP_EOL;
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

## `updateWifiCallingWifiCallingPolicyById()`

```php
updateWifiCallingWifiCallingPolicyById($id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to Modify Entire Wi-Fi Calling policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\WiFiCallingPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->updateWifiCallingWifiCallingPolicyById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WiFiCallingPolicyApi->updateWifiCallingWifiCallingPolicyById: ', $e->getMessage(), PHP_EOL;
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
