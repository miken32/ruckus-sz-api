# PofP\SmartzoneClient\APSNMPAgentProfileApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addApSnmpAgentProfiles()**](APSNMPAgentProfileApi.md#addApSnmpAgentProfiles) | **POST** /apSnmpAgentProfiles | Use this API command to create a new AP SNMP Agent Profile. |
| [**deleteApSnmpAgentProfiles()**](APSNMPAgentProfileApi.md#deleteApSnmpAgentProfiles) | **DELETE** /apSnmpAgentProfiles | Use this API command to bulk delete AP SNMP Agent Profile. |
| [**deleteApSnmpAgentProfilesById()**](APSNMPAgentProfileApi.md#deleteApSnmpAgentProfilesById) | **DELETE** /apSnmpAgentProfiles/{id} | Use this API command to delete AP SNMP Agent Profile by profile&#39;s ID. |
| [**findApSnmpAgentProfiles()**](APSNMPAgentProfileApi.md#findApSnmpAgentProfiles) | **GET** /apSnmpAgentProfiles | Use this API command to retrieve AP SNMP Agent Profile list. |
| [**findApSnmpAgentProfilesById()**](APSNMPAgentProfileApi.md#findApSnmpAgentProfilesById) | **GET** /apSnmpAgentProfiles/{id} | Use this API command to retrieve AP SNMP Agent Profile by profile&#39;s ID. |
| [**updateApSnmpAgentProfilesById()**](APSNMPAgentProfileApi.md#updateApSnmpAgentProfilesById) | **PUT** /apSnmpAgentProfiles/{id} | Use this API command to modify AP SNMP Agent Profile by profile&#39;s ID. |


## `addApSnmpAgentProfiles()`

```php
addApSnmpAgentProfiles($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to create a new AP SNMP Agent Profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APSNMPAgentProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addApSnmpAgentProfiles($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APSNMPAgentProfileApi->addApSnmpAgentProfiles: ', $e->getMessage(), PHP_EOL;
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

## `deleteApSnmpAgentProfiles()`

```php
deleteApSnmpAgentProfiles($service_ticket, $UNKNOWN_PARAM_NAME)
```

Use this API command to bulk delete AP SNMP Agent Profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APSNMPAgentProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->deleteApSnmpAgentProfiles($service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling APSNMPAgentProfileApi->deleteApSnmpAgentProfiles: ', $e->getMessage(), PHP_EOL;
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

## `deleteApSnmpAgentProfilesById()`

```php
deleteApSnmpAgentProfilesById($id, $service_ticket): object
```

Use this API command to delete AP SNMP Agent Profile by profile's ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APSNMPAgentProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApSnmpAgentProfilesById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APSNMPAgentProfileApi->deleteApSnmpAgentProfilesById: ', $e->getMessage(), PHP_EOL;
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

## `findApSnmpAgentProfiles()`

```php
findApSnmpAgentProfiles($service_ticket, $domain_id, $index, $list_size): object
```

Use this API command to retrieve AP SNMP Agent Profile list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APSNMPAgentProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$domain_id = 'domain_id_example'; // string
$index = 'index_example'; // string | The index of the first entry to be retrieved. Default: 0
$list_size = 'list_size_example'; // string | The maximum number of entries to be retrieved. Default: 100, Maximum: 1000

try {
    $result = $apiInstance->findApSnmpAgentProfiles($service_ticket, $domain_id, $index, $list_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APSNMPAgentProfileApi->findApSnmpAgentProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **domain_id** | **string**|  | |
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

## `findApSnmpAgentProfilesById()`

```php
findApSnmpAgentProfilesById($id, $service_ticket): object
```

Use this API command to retrieve AP SNMP Agent Profile by profile's ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APSNMPAgentProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findApSnmpAgentProfilesById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APSNMPAgentProfileApi->findApSnmpAgentProfilesById: ', $e->getMessage(), PHP_EOL;
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

## `updateApSnmpAgentProfilesById()`

```php
updateApSnmpAgentProfilesById($id, $service_ticket, $UNKNOWN_PARAM_NAME)
```

Use this API command to modify AP SNMP Agent Profile by profile's ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APSNMPAgentProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->updateApSnmpAgentProfilesById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling APSNMPAgentProfileApi->updateApSnmpAgentProfilesById: ', $e->getMessage(), PHP_EOL;
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
