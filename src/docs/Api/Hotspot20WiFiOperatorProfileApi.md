# PofP\SmartzoneClient\Hotspot20WiFiOperatorProfileApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addProfilesHs20Operators()**](Hotspot20WiFiOperatorProfileApi.md#addProfilesHs20Operators) | **POST** /profiles/hs20/operators | Use this API command to create a new Hotspot 2.0 Wi-Fi operator. |
| [**deleteProfilesHs20Operators()**](Hotspot20WiFiOperatorProfileApi.md#deleteProfilesHs20Operators) | **DELETE** /profiles/hs20/operators | Use this API command to delete multiple Hotspot 2.0 Wi-Fi operators. |
| [**deleteProfilesHs20OperatorsById()**](Hotspot20WiFiOperatorProfileApi.md#deleteProfilesHs20OperatorsById) | **DELETE** /profiles/hs20/operators/{id} | Use this API command to delete a Hotspot 2.0 Wi-Fi operator. |
| [**deleteProfilesHs20OperatorsCertificateById()**](Hotspot20WiFiOperatorProfileApi.md#deleteProfilesHs20OperatorsCertificateById) | **DELETE** /profiles/hs20/operators/{id}/certificate | Use this API command to disable certificate of a Hotspot 2.0 Wi-Fi operator. |
| [**findProfilesHs20Operators()**](Hotspot20WiFiOperatorProfileApi.md#findProfilesHs20Operators) | **GET** /profiles/hs20/operators | Use this API command to retrieve list of Hotspot 2.0 Wi-Fi Operators. |
| [**findProfilesHs20OperatorsById()**](Hotspot20WiFiOperatorProfileApi.md#findProfilesHs20OperatorsById) | **GET** /profiles/hs20/operators/{id} | Use this API command to retrieve a Hotspot 2.0 Wi-Fi operator. |
| [**findProfilesHs20OperatorsByQueryCriteria()**](Hotspot20WiFiOperatorProfileApi.md#findProfilesHs20OperatorsByQueryCriteria) | **POST** /profiles/hs20/operators/query | Query hotspot 2.0 Wi-Fi operators. |
| [**partialUpdateProfilesHs20OperatorsById()**](Hotspot20WiFiOperatorProfileApi.md#partialUpdateProfilesHs20OperatorsById) | **PATCH** /profiles/hs20/operators/{id} | Use this API command to modify the configuration of a Hotspot 2.0 Wi-Fi operator. |
| [**updateProfilesHs20OperatorsById()**](Hotspot20WiFiOperatorProfileApi.md#updateProfilesHs20OperatorsById) | **PUT** /profiles/hs20/operators/{id} | Use this API command to modify entire configuration of a Hotspot 2.0 Wi-Fi operator. |


## `addProfilesHs20Operators()`

```php
addProfilesHs20Operators($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to create a new Hotspot 2.0 Wi-Fi operator.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\Hotspot20WiFiOperatorProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addProfilesHs20Operators($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Hotspot20WiFiOperatorProfileApi->addProfilesHs20Operators: ', $e->getMessage(), PHP_EOL;
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

## `deleteProfilesHs20Operators()`

```php
deleteProfilesHs20Operators($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to delete multiple Hotspot 2.0 Wi-Fi operators.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\Hotspot20WiFiOperatorProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->deleteProfilesHs20Operators($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Hotspot20WiFiOperatorProfileApi->deleteProfilesHs20Operators: ', $e->getMessage(), PHP_EOL;
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

## `deleteProfilesHs20OperatorsById()`

```php
deleteProfilesHs20OperatorsById($id, $service_ticket): object
```

Use this API command to delete a Hotspot 2.0 Wi-Fi operator.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\Hotspot20WiFiOperatorProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteProfilesHs20OperatorsById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Hotspot20WiFiOperatorProfileApi->deleteProfilesHs20OperatorsById: ', $e->getMessage(), PHP_EOL;
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

## `deleteProfilesHs20OperatorsCertificateById()`

```php
deleteProfilesHs20OperatorsCertificateById($id, $service_ticket): object
```

Use this API command to disable certificate of a Hotspot 2.0 Wi-Fi operator.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\Hotspot20WiFiOperatorProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteProfilesHs20OperatorsCertificateById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Hotspot20WiFiOperatorProfileApi->deleteProfilesHs20OperatorsCertificateById: ', $e->getMessage(), PHP_EOL;
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

## `findProfilesHs20Operators()`

```php
findProfilesHs20Operators($service_ticket, $index, $list_size): object
```

Use this API command to retrieve list of Hotspot 2.0 Wi-Fi Operators.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\Hotspot20WiFiOperatorProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$index = 'index_example'; // string | The index of the first entry to be retrieved. Default: 0
$list_size = 'list_size_example'; // string | The maximum number of entries to be retrieved. Default: 100, Maximum: 1000

try {
    $result = $apiInstance->findProfilesHs20Operators($service_ticket, $index, $list_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Hotspot20WiFiOperatorProfileApi->findProfilesHs20Operators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `findProfilesHs20OperatorsById()`

```php
findProfilesHs20OperatorsById($id, $service_ticket): object
```

Use this API command to retrieve a Hotspot 2.0 Wi-Fi operator.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\Hotspot20WiFiOperatorProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findProfilesHs20OperatorsById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Hotspot20WiFiOperatorProfileApi->findProfilesHs20OperatorsById: ', $e->getMessage(), PHP_EOL;
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

## `findProfilesHs20OperatorsByQueryCriteria()`

```php
findProfilesHs20OperatorsByQueryCriteria($service_ticket, $body): object
```

Query hotspot 2.0 Wi-Fi operators.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\Hotspot20WiFiOperatorProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet(); // \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet

try {
    $result = $apiInstance->findProfilesHs20OperatorsByQueryCriteria($service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Hotspot20WiFiOperatorProfileApi->findProfilesHs20OperatorsByQueryCriteria: ', $e->getMessage(), PHP_EOL;
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

## `partialUpdateProfilesHs20OperatorsById()`

```php
partialUpdateProfilesHs20OperatorsById($id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify the configuration of a Hotspot 2.0 Wi-Fi operator.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\Hotspot20WiFiOperatorProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->partialUpdateProfilesHs20OperatorsById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Hotspot20WiFiOperatorProfileApi->partialUpdateProfilesHs20OperatorsById: ', $e->getMessage(), PHP_EOL;
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

## `updateProfilesHs20OperatorsById()`

```php
updateProfilesHs20OperatorsById($id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify entire configuration of a Hotspot 2.0 Wi-Fi operator.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\Hotspot20WiFiOperatorProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->updateProfilesHs20OperatorsById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Hotspot20WiFiOperatorProfileApi->updateProfilesHs20OperatorsById: ', $e->getMessage(), PHP_EOL;
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
