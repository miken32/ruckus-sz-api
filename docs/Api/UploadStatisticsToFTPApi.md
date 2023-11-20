# PofP\SmartzoneClient\UploadStatisticsToFTPApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**findGlobalSettingsStatsFtp()**](UploadStatisticsToFTPApi.md#findGlobalSettingsStatsFtp) | **GET** /globalSettings/statsFtp | Use this API command to retrieve the uploading statistical data to FTP server setting. |
| [**partialUpdateGlobalSettingsStatsFtp()**](UploadStatisticsToFTPApi.md#partialUpdateGlobalSettingsStatsFtp) | **PATCH** /globalSettings/statsFtp | Use this API command to modify the setting of uploading statistical data to FTP server. |


## `findGlobalSettingsStatsFtp()`

```php
findGlobalSettingsStatsFtp($service_ticket): object
```

Use this API command to retrieve the uploading statistical data to FTP server setting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\UploadStatisticsToFTPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findGlobalSettingsStatsFtp($service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadStatisticsToFTPApi->findGlobalSettingsStatsFtp: ', $e->getMessage(), PHP_EOL;
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

## `partialUpdateGlobalSettingsStatsFtp()`

```php
partialUpdateGlobalSettingsStatsFtp($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify the setting of uploading statistical data to FTP server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\UploadStatisticsToFTPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->partialUpdateGlobalSettingsStatsFtp($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadStatisticsToFTPApi->partialUpdateGlobalSettingsStatsFtp: ', $e->getMessage(), PHP_EOL;
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
