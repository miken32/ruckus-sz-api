# PofP\SmartzoneClient\ServiceTicketApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addServiceTicket()**](ServiceTicketApi.md#addServiceTicket) | **POST** /serviceTicket | Use this API command to log on to the controller and acquire a valid service ticket. |
| [**deleteServiceTicket()**](ServiceTicketApi.md#deleteServiceTicket) | **DELETE** /serviceTicket | Use this API command to log off of the controller. |


## `addServiceTicket()`

```php
addServiceTicket($UNKNOWN_PARAM_NAME): \PofP\SmartzoneClient\Model\ServiceTicketLoginResponse
```

Use this API command to log on to the controller and acquire a valid service ticket.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ServiceTicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addServiceTicket($UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceTicketApi->addServiceTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **UNKNOWN_PARAM_NAME** | [****](../Model/.md)|  | |

### Return type

[**\PofP\SmartzoneClient\Model\ServiceTicketLoginResponse**](../Model/ServiceTicketLoginResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteServiceTicket()`

```php
deleteServiceTicket($service_ticket)
```

Use this API command to log off of the controller.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ServiceTicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string

try {
    $apiInstance->deleteServiceTicket($service_ticket);
} catch (Exception $e) {
    echo 'Exception when calling ServiceTicketApi->deleteServiceTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**|  | |

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
