# PofP\SmartzoneClient\GlobalReferenceApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**findGlobalSettingsFriendlyNameLang()**](GlobalReferenceApi.md#findGlobalSettingsFriendlyNameLang) | **GET** /globalSettings/friendlyNameLang | Use this API command to get friendly name of usable language for profile: Hotspot2.0 Identity Provider. |
| [**findGlobalSettingsPortalLang()**](GlobalReferenceApi.md#findGlobalSettingsPortalLang) | **GET** /globalSettings/portalLang | Use this API command to get friendly name of usable language for profile: Guest Access (Language in General Options), Web Auth (Language in General Options). |


## `findGlobalSettingsFriendlyNameLang()`

```php
findGlobalSettingsFriendlyNameLang($service_ticket): object
```

Use this API command to get friendly name of usable language for profile: Hotspot2.0 Identity Provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\GlobalReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findGlobalSettingsFriendlyNameLang($service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalReferenceApi->findGlobalSettingsFriendlyNameLang: ', $e->getMessage(), PHP_EOL;
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

## `findGlobalSettingsPortalLang()`

```php
findGlobalSettingsPortalLang($service_ticket): object
```

Use this API command to get friendly name of usable language for profile: Guest Access (Language in General Options), Web Auth (Language in General Options).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\GlobalReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findGlobalSettingsPortalLang($service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalReferenceApi->findGlobalSettingsPortalLang: ', $e->getMessage(), PHP_EOL;
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
