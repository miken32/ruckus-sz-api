# PofP\SmartzoneClient\SwitchEventManagementSettingApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**findDomainsEventEmailSettingsByDomainId()**](SwitchEventManagementSettingApi.md#findDomainsEventEmailSettingsByDomainId) | **GET** /domains/{domainId}/eventEmailSettings | Get Switch Event E-mail Setting of Domain Override. |
| [**findDomainsEventNotificationSettingsByDomainId()**](SwitchEventManagementSettingApi.md#findDomainsEventNotificationSettingsByDomainId) | **GET** /domains/{domainId}/eventNotificationSettings | Get Switch Event Notification Setting of Domain Override. |
| [**updateDomainsEventEmailSettingsByDomainId()**](SwitchEventManagementSettingApi.md#updateDomainsEventEmailSettingsByDomainId) | **PUT** /domains/{domainId}/eventEmailSettings | Modify Switch Event E-mail Setting of Domain Override. |
| [**updateDomainsEventNotificationSettingsByDomainId()**](SwitchEventManagementSettingApi.md#updateDomainsEventNotificationSettingsByDomainId) | **PUT** /domains/{domainId}/eventNotificationSettings | Modify Switch Event Notification Setting of Domain Override. |


## `findDomainsEventEmailSettingsByDomainId()`

```php
findDomainsEventEmailSettingsByDomainId($domain_id, $service_ticket): object
```

Get Switch Event E-mail Setting of Domain Override.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\SwitchEventManagementSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$domain_id = 'domain_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findDomainsEventEmailSettingsByDomainId($domain_id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchEventManagementSettingApi->findDomainsEventEmailSettingsByDomainId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **string**|  | |
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

## `findDomainsEventNotificationSettingsByDomainId()`

```php
findDomainsEventNotificationSettingsByDomainId($domain_id, $service_ticket): object
```

Get Switch Event Notification Setting of Domain Override.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\SwitchEventManagementSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$domain_id = 'domain_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findDomainsEventNotificationSettingsByDomainId($domain_id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchEventManagementSettingApi->findDomainsEventNotificationSettingsByDomainId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **string**|  | |
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

## `updateDomainsEventEmailSettingsByDomainId()`

```php
updateDomainsEventEmailSettingsByDomainId($domain_id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Modify Switch Event E-mail Setting of Domain Override.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\SwitchEventManagementSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$domain_id = 'domain_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->updateDomainsEventEmailSettingsByDomainId($domain_id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchEventManagementSettingApi->updateDomainsEventEmailSettingsByDomainId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **string**|  | |
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

## `updateDomainsEventNotificationSettingsByDomainId()`

```php
updateDomainsEventNotificationSettingsByDomainId($domain_id, $service_ticket, $body): object
```

Modify Switch Event Notification Setting of Domain Override.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\SwitchEventManagementSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$domain_id = 'domain_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = array(new \stdClass); // object[]

try {
    $result = $apiInstance->updateDomainsEventNotificationSettingsByDomainId($domain_id, $service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwitchEventManagementSettingApi->updateDomainsEventNotificationSettingsByDomainId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **body** | [**object[]**](../Model/object.md)|  | |

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
