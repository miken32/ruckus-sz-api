# PofP\SmartzoneClient\RogueClientApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**findRogueclientsByQueryCriteria()**](RogueClientApi.md#findRogueclientsByQueryCriteria) | **POST** /rogueclients/query | Use this API command to retrieve a list of rogue clients. |


## `findRogueclientsByQueryCriteria()`

```php
findRogueclientsByQueryCriteria($service_ticket, $body): object
```

Use this API command to retrieve a list of rogue clients.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RogueClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet(); // \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet

try {
    $result = $apiInstance->findRogueclientsByQueryCriteria($service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RogueClientApi->findRogueclientsByQueryCriteria: ', $e->getMessage(), PHP_EOL;
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
