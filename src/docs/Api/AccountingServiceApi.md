# PofP\SmartzoneClient\AccountingServiceApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addServicesAcctRadius()**](AccountingServiceApi.md#addServicesAcctRadius) | **POST** /services/acct/radius | Use this API command to create a new RADIUS accounting service. |
| [**addServicesAcctTestById()**](AccountingServiceApi.md#addServicesAcctTestById) | **POST** /services/acct/test/{id} | Use this API command to test an accounting service. |
| [**deleteServicesAcct()**](AccountingServiceApi.md#deleteServicesAcct) | **DELETE** /services/acct | Use this API command to delete a list of accounting service. |
| [**deleteServicesAcctById()**](AccountingServiceApi.md#deleteServicesAcctById) | **DELETE** /services/acct/{id} | Use this API command to delete an accounting service. |
| [**deleteServicesAcctRadiusById()**](AccountingServiceApi.md#deleteServicesAcctRadiusById) | **DELETE** /services/acct/radius/{id} | Use this API command to delete a RADIUS accounting service. |
| [**deleteServicesAcctRadiusSecondaryById()**](AccountingServiceApi.md#deleteServicesAcctRadiusSecondaryById) | **DELETE** /services/acct/radius/{id}/secondary | Use this API command to disable secondary RADIUS server of a RADIUS accounting service. |
| [**deleteServicesAcctRadiusStandbyPrimaryById()**](AccountingServiceApi.md#deleteServicesAcctRadiusStandbyPrimaryById) | **DELETE** /services/acct/radius/{id}/standbyPrimary | Use this API command to disable Standby secondary RADIUS server of a RADIUS Accounting service. |
| [**findServicesAaaServerAcctByQueryCriteria()**](AccountingServiceApi.md#findServicesAaaServerAcctByQueryCriteria) | **POST** /query/services/aaaServer/acct | Query Non-Proxy Accounting AAAServers with specified filters. |
| [**findServicesAcctByQueryCriteria()**](AccountingServiceApi.md#findServicesAcctByQueryCriteria) | **POST** /services/acct/query | Use this API command to retrieve a list of accounting services by query criteria. |
| [**findServicesAcctRadius()**](AccountingServiceApi.md#findServicesAcctRadius) | **GET** /services/acct/radius | Use this API command to retrieve a list of RADIUS accounting services. |
| [**findServicesAcctRadiusById()**](AccountingServiceApi.md#findServicesAcctRadiusById) | **GET** /services/acct/radius/{id} | Use this API command to retrieve a RADIUS accounting service. |
| [**findServicesAcctRadiusByQueryCriteria()**](AccountingServiceApi.md#findServicesAcctRadiusByQueryCriteria) | **POST** /services/acct/radius/query | Use this API command to retrieve a list of Radius accounting services by query criteria. |
| [**partialUpdateServicesAcctRadiusById()**](AccountingServiceApi.md#partialUpdateServicesAcctRadiusById) | **PATCH** /services/acct/radius/{id} | Use this API command to modify the configuration of a RADIUS accounting service. |
| [**updateServicesAcctRadiusById()**](AccountingServiceApi.md#updateServicesAcctRadiusById) | **PUT** /services/acct/radius/{id} | Use this API command to modify entire RADIUS accounting service. |


## `addServicesAcctRadius()`

```php
addServicesAcctRadius($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to create a new RADIUS accounting service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccountingServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addServicesAcctRadius($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingServiceApi->addServicesAcctRadius: ', $e->getMessage(), PHP_EOL;
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

## `addServicesAcctTestById()`

```php
addServicesAcctTestById($id, $service_ticket, $UNKNOWN_PARAM_NAME)
```

Use this API command to test an accounting service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccountingServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->addServicesAcctTestById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling AccountingServiceApi->addServicesAcctTestById: ', $e->getMessage(), PHP_EOL;
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

## `deleteServicesAcct()`

```php
deleteServicesAcct($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to delete a list of accounting service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccountingServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->deleteServicesAcct($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingServiceApi->deleteServicesAcct: ', $e->getMessage(), PHP_EOL;
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

## `deleteServicesAcctById()`

```php
deleteServicesAcctById($id, $service_ticket): object
```

Use this API command to delete an accounting service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccountingServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteServicesAcctById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingServiceApi->deleteServicesAcctById: ', $e->getMessage(), PHP_EOL;
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

## `deleteServicesAcctRadiusById()`

```php
deleteServicesAcctRadiusById($id, $service_ticket): object
```

Use this API command to delete a RADIUS accounting service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccountingServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteServicesAcctRadiusById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingServiceApi->deleteServicesAcctRadiusById: ', $e->getMessage(), PHP_EOL;
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

## `deleteServicesAcctRadiusSecondaryById()`

```php
deleteServicesAcctRadiusSecondaryById($id, $service_ticket): object
```

Use this API command to disable secondary RADIUS server of a RADIUS accounting service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccountingServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteServicesAcctRadiusSecondaryById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingServiceApi->deleteServicesAcctRadiusSecondaryById: ', $e->getMessage(), PHP_EOL;
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

## `deleteServicesAcctRadiusStandbyPrimaryById()`

```php
deleteServicesAcctRadiusStandbyPrimaryById($id, $service_ticket): object
```

Use this API command to disable Standby secondary RADIUS server of a RADIUS Accounting service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccountingServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteServicesAcctRadiusStandbyPrimaryById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingServiceApi->deleteServicesAcctRadiusStandbyPrimaryById: ', $e->getMessage(), PHP_EOL;
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

## `findServicesAaaServerAcctByQueryCriteria()`

```php
findServicesAaaServerAcctByQueryCriteria($service_ticket, $body): object
```

Query Non-Proxy Accounting AAAServers with specified filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccountingServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet(); // \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet

try {
    $result = $apiInstance->findServicesAaaServerAcctByQueryCriteria($service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingServiceApi->findServicesAaaServerAcctByQueryCriteria: ', $e->getMessage(), PHP_EOL;
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

## `findServicesAcctByQueryCriteria()`

```php
findServicesAcctByQueryCriteria($service_ticket, $body): object
```

Use this API command to retrieve a list of accounting services by query criteria.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccountingServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet(); // \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet

try {
    $result = $apiInstance->findServicesAcctByQueryCriteria($service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingServiceApi->findServicesAcctByQueryCriteria: ', $e->getMessage(), PHP_EOL;
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

## `findServicesAcctRadius()`

```php
findServicesAcctRadius($service_ticket): object
```

Use this API command to retrieve a list of RADIUS accounting services.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccountingServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findServicesAcctRadius($service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingServiceApi->findServicesAcctRadius: ', $e->getMessage(), PHP_EOL;
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

## `findServicesAcctRadiusById()`

```php
findServicesAcctRadiusById($id, $service_ticket): object
```

Use this API command to retrieve a RADIUS accounting service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccountingServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findServicesAcctRadiusById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingServiceApi->findServicesAcctRadiusById: ', $e->getMessage(), PHP_EOL;
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

## `findServicesAcctRadiusByQueryCriteria()`

```php
findServicesAcctRadiusByQueryCriteria($service_ticket, $body): object
```

Use this API command to retrieve a list of Radius accounting services by query criteria.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccountingServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet(); // \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet

try {
    $result = $apiInstance->findServicesAcctRadiusByQueryCriteria($service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingServiceApi->findServicesAcctRadiusByQueryCriteria: ', $e->getMessage(), PHP_EOL;
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

## `partialUpdateServicesAcctRadiusById()`

```php
partialUpdateServicesAcctRadiusById($id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify the configuration of a RADIUS accounting service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccountingServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->partialUpdateServicesAcctRadiusById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingServiceApi->partialUpdateServicesAcctRadiusById: ', $e->getMessage(), PHP_EOL;
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

## `updateServicesAcctRadiusById()`

```php
updateServicesAcctRadiusById($id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify entire RADIUS accounting service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccountingServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->updateServicesAcctRadiusById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingServiceApi->updateServicesAcctRadiusById: ', $e->getMessage(), PHP_EOL;
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
