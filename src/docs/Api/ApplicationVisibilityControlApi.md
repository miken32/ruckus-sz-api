# PofP\SmartzoneClient\ApplicationVisibilityControlApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addAvcApplicationPolicy()**](ApplicationVisibilityControlApi.md#addAvcApplicationPolicy) | **POST** /avc/applicationPolicy | Use this API command to create a new AVC Application Policy profile (for 5.0 and Earlier Firmware Versions). |
| [**addAvcApplicationPolicyV2()**](ApplicationVisibilityControlApi.md#addAvcApplicationPolicyV2) | **POST** /avc/applicationPolicyV2 | Use this API command to create a new AVC Application Policy profile. |
| [**addAvcSignaturePackageUpload()**](ApplicationVisibilityControlApi.md#addAvcSignaturePackageUpload) | **POST** /avc/signaturePackage/upload | Update AVC Signature Package by upload file (for 5.0 and Earlier Firmware Versions). |
| [**addAvcSignaturePackageV2CheckLatest()**](ApplicationVisibilityControlApi.md#addAvcSignaturePackageV2CheckLatest) | **POST** /avc/signaturePackageV2/checkLatest | Check latest Signature Package from Ruckus support site and get latest Signature Package info. |
| [**addAvcSignaturePackageV2DownloadAndInstallLastChecked()**](ApplicationVisibilityControlApi.md#addAvcSignaturePackageV2DownloadAndInstallLastChecked) | **POST** /avc/signaturePackageV2/downloadAndInstallLastChecked | Download Signature Package from Ruckus support site and install. |
| [**addAvcSignaturePackageV2Upload()**](ApplicationVisibilityControlApi.md#addAvcSignaturePackageV2Upload) | **POST** /avc/signaturePackageV2/upload | Update AVC Signature Package by upload file. |
| [**addAvcUserDefined()**](ApplicationVisibilityControlApi.md#addAvcUserDefined) | **POST** /avc/userDefined | Use this API command to create a new AVC User Defined profile. |
| [**deleteAvcApplicationPolicy()**](ApplicationVisibilityControlApi.md#deleteAvcApplicationPolicy) | **DELETE** /avc/applicationPolicy | Use this API command to delete a AVC Application Policy Profile (for 5.0 and Earlier Firmware Versions). |
| [**deleteAvcApplicationPolicyById()**](ApplicationVisibilityControlApi.md#deleteAvcApplicationPolicyById) | **DELETE** /avc/applicationPolicy/{id} | Use this API command to delete a AVC Application Policy Profile (for 5.0 and Earlier Firmware Versions). |
| [**deleteAvcApplicationPolicyV2()**](ApplicationVisibilityControlApi.md#deleteAvcApplicationPolicyV2) | **DELETE** /avc/applicationPolicyV2 | Use this API command to delete a AVC Application Policy Profile. |
| [**deleteAvcApplicationPolicyV2ById()**](ApplicationVisibilityControlApi.md#deleteAvcApplicationPolicyV2ById) | **DELETE** /avc/applicationPolicyV2/{id} | Use this API command to delete a AVC Application Policy Profile. |
| [**deleteAvcUserDefined()**](ApplicationVisibilityControlApi.md#deleteAvcUserDefined) | **DELETE** /avc/userDefined | Use this API command to delete a AVC User Defined Profile. |
| [**deleteAvcUserDefinedById()**](ApplicationVisibilityControlApi.md#deleteAvcUserDefinedById) | **DELETE** /avc/userDefined/{id} | Use this API command to delete a AVC User Defined Profile. |
| [**findApplicationPolicyByQueryCriteria()**](ApplicationVisibilityControlApi.md#findApplicationPolicyByQueryCriteria) | **POST** /query/applicationPolicy | Use this API command to retrieve a list of AVC Application Policy profiles (for 5.0 and Earlier Firmware Versions). |
| [**findApplicationPolicyV2ByQueryCriteria()**](ApplicationVisibilityControlApi.md#findApplicationPolicyV2ByQueryCriteria) | **POST** /query/applicationPolicyV2 | Use this API command to retrieve a list of AVC Application Policy profiles. |
| [**findAvcApplicationPolicyById()**](ApplicationVisibilityControlApi.md#findAvcApplicationPolicyById) | **GET** /avc/applicationPolicy/{id} | Use this API command to retrieve a AVC Application Policy profile (for 5.0 and Earlier Firmware Versions). |
| [**findAvcApplicationPolicyV2ById()**](ApplicationVisibilityControlApi.md#findAvcApplicationPolicyV2ById) | **GET** /avc/applicationPolicyV2/{id} | Use this API command to retrieve a AVC Application Policy profile. |
| [**findAvcSignaturePackage()**](ApplicationVisibilityControlApi.md#findAvcSignaturePackage) | **GET** /avc/signaturePackage | Get current Signature Package info (for 5.0 and Earlier Firmware Versions). |
| [**findAvcSignaturePackageApplicationByApplicationName()**](ApplicationVisibilityControlApi.md#findAvcSignaturePackageApplicationByApplicationName) | **GET** /avc/signaturePackage/application/{applicationName} | Get Application info (catId, appId and name) by application name (for 5.0 and Earlier Firmware Versions). |
| [**findAvcSignaturePackageApplications()**](ApplicationVisibilityControlApi.md#findAvcSignaturePackageApplications) | **GET** /avc/signaturePackage/applications | Get Application list from current Signature Package (for 5.0 and Earlier Firmware Versions). |
| [**findAvcSignaturePackageCategories()**](ApplicationVisibilityControlApi.md#findAvcSignaturePackageCategories) | **GET** /avc/signaturePackage/categories | Get Application Category list from current Signature Package (for 5.0 and Earlier Firmware Versions). |
| [**findAvcSignaturePackageCategoryByCategoryName()**](ApplicationVisibilityControlApi.md#findAvcSignaturePackageCategoryByCategoryName) | **GET** /avc/signaturePackage/category/{categoryName} | Get Application Category info (catId and name) by category name (for 5.0 and Earlier Firmware Versions). |
| [**findAvcSignaturePackageV2()**](ApplicationVisibilityControlApi.md#findAvcSignaturePackageV2) | **GET** /avc/signaturePackageV2 | Get current Signature Package info. |
| [**findAvcSignaturePackageV2Applications()**](ApplicationVisibilityControlApi.md#findAvcSignaturePackageV2Applications) | **GET** /avc/signaturePackageV2/applications | Get Application list from current Signature Package. |
| [**findAvcSignaturePackageV2Categories()**](ApplicationVisibilityControlApi.md#findAvcSignaturePackageV2Categories) | **GET** /avc/signaturePackageV2/categories | Get Application Category list from current Signature Package. |
| [**findAvcSignaturePackageV2DownloadAndInstallLastCheckedProgress()**](ApplicationVisibilityControlApi.md#findAvcSignaturePackageV2DownloadAndInstallLastCheckedProgress) | **GET** /avc/signaturePackageV2/downloadAndInstallLastChecked/progress | Get the progress of download and install Signature Package. |
| [**findAvcUserDefinedById()**](ApplicationVisibilityControlApi.md#findAvcUserDefinedById) | **GET** /avc/userDefined/{id} | Use this API command to retrieve a AVC User Defined profile. |
| [**findUserDefinedByQueryCriteria()**](ApplicationVisibilityControlApi.md#findUserDefinedByQueryCriteria) | **POST** /query/userDefined | Use this API command to retrieve a list of AVC User Defined profiles. |
| [**partialUpdateAvcApplicationPolicyById()**](ApplicationVisibilityControlApi.md#partialUpdateAvcApplicationPolicyById) | **PATCH** /avc/applicationPolicy/{id} | Use this API command to modify the configuration on AVC Application Policy profile (for 5.0 and Earlier Firmware Versions). |
| [**partialUpdateAvcApplicationPolicyV2ById()**](ApplicationVisibilityControlApi.md#partialUpdateAvcApplicationPolicyV2ById) | **PATCH** /avc/applicationPolicyV2/{id} | Use this API command to modify the configuration on AVC Application Policy profile. |
| [**partialUpdateAvcSignaturePackageV2()**](ApplicationVisibilityControlApi.md#partialUpdateAvcSignaturePackageV2) | **PATCH** /avc/signaturePackageV2 | Use this API command to update Signature Package related settings |
| [**partialUpdateAvcUserDefinedById()**](ApplicationVisibilityControlApi.md#partialUpdateAvcUserDefinedById) | **PATCH** /avc/userDefined/{id} | Use this API command to modify the configuration on AVC User Defined profile. |


## `addAvcApplicationPolicy()`

```php
addAvcApplicationPolicy($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to create a new AVC Application Policy profile (for 5.0 and Earlier Firmware Versions).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationVisibilityControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addAvcApplicationPolicy($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationVisibilityControlApi->addAvcApplicationPolicy: ', $e->getMessage(), PHP_EOL;
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

## `addAvcApplicationPolicyV2()`

```php
addAvcApplicationPolicyV2($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to create a new AVC Application Policy profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationVisibilityControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addAvcApplicationPolicyV2($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationVisibilityControlApi->addAvcApplicationPolicyV2: ', $e->getMessage(), PHP_EOL;
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

## `addAvcSignaturePackageUpload()`

```php
addAvcSignaturePackageUpload($service_ticket, $upload_file): object
```

Update AVC Signature Package by upload file (for 5.0 and Earlier Firmware Versions).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationVisibilityControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$upload_file = "/path/to/file.txt"; // \SplFileObject | The file to upload

try {
    $result = $apiInstance->addAvcSignaturePackageUpload($service_ticket, $upload_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationVisibilityControlApi->addAvcSignaturePackageUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **upload_file** | **\SplFileObject****\SplFileObject**| The file to upload | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addAvcSignaturePackageV2CheckLatest()`

```php
addAvcSignaturePackageV2CheckLatest($service_ticket): object
```

Check latest Signature Package from Ruckus support site and get latest Signature Package info.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationVisibilityControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->addAvcSignaturePackageV2CheckLatest($service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationVisibilityControlApi->addAvcSignaturePackageV2CheckLatest: ', $e->getMessage(), PHP_EOL;
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

## `addAvcSignaturePackageV2DownloadAndInstallLastChecked()`

```php
addAvcSignaturePackageV2DownloadAndInstallLastChecked($service_ticket): object
```

Download Signature Package from Ruckus support site and install.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationVisibilityControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->addAvcSignaturePackageV2DownloadAndInstallLastChecked($service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationVisibilityControlApi->addAvcSignaturePackageV2DownloadAndInstallLastChecked: ', $e->getMessage(), PHP_EOL;
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

## `addAvcSignaturePackageV2Upload()`

```php
addAvcSignaturePackageV2Upload($service_ticket, $upload_file): object
```

Update AVC Signature Package by upload file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationVisibilityControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$upload_file = "/path/to/file.txt"; // \SplFileObject | The file to upload

try {
    $result = $apiInstance->addAvcSignaturePackageV2Upload($service_ticket, $upload_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationVisibilityControlApi->addAvcSignaturePackageV2Upload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **upload_file** | **\SplFileObject****\SplFileObject**| The file to upload | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addAvcUserDefined()`

```php
addAvcUserDefined($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to create a new AVC User Defined profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationVisibilityControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addAvcUserDefined($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationVisibilityControlApi->addAvcUserDefined: ', $e->getMessage(), PHP_EOL;
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

## `deleteAvcApplicationPolicy()`

```php
deleteAvcApplicationPolicy($service_ticket, $UNKNOWN_PARAM_NAME)
```

Use this API command to delete a AVC Application Policy Profile (for 5.0 and Earlier Firmware Versions).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationVisibilityControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->deleteAvcApplicationPolicy($service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationVisibilityControlApi->deleteAvcApplicationPolicy: ', $e->getMessage(), PHP_EOL;
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

## `deleteAvcApplicationPolicyById()`

```php
deleteAvcApplicationPolicyById($id, $service_ticket): object
```

Use this API command to delete a AVC Application Policy Profile (for 5.0 and Earlier Firmware Versions).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationVisibilityControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteAvcApplicationPolicyById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationVisibilityControlApi->deleteAvcApplicationPolicyById: ', $e->getMessage(), PHP_EOL;
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

## `deleteAvcApplicationPolicyV2()`

```php
deleteAvcApplicationPolicyV2($service_ticket, $UNKNOWN_PARAM_NAME)
```

Use this API command to delete a AVC Application Policy Profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationVisibilityControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->deleteAvcApplicationPolicyV2($service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationVisibilityControlApi->deleteAvcApplicationPolicyV2: ', $e->getMessage(), PHP_EOL;
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

## `deleteAvcApplicationPolicyV2ById()`

```php
deleteAvcApplicationPolicyV2ById($id, $service_ticket): object
```

Use this API command to delete a AVC Application Policy Profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationVisibilityControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteAvcApplicationPolicyV2ById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationVisibilityControlApi->deleteAvcApplicationPolicyV2ById: ', $e->getMessage(), PHP_EOL;
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

## `deleteAvcUserDefined()`

```php
deleteAvcUserDefined($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to delete a AVC User Defined Profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationVisibilityControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->deleteAvcUserDefined($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationVisibilityControlApi->deleteAvcUserDefined: ', $e->getMessage(), PHP_EOL;
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

## `deleteAvcUserDefinedById()`

```php
deleteAvcUserDefinedById($id, $service_ticket)
```

Use this API command to delete a AVC User Defined Profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationVisibilityControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $apiInstance->deleteAvcUserDefinedById($id, $service_ticket);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationVisibilityControlApi->deleteAvcUserDefinedById: ', $e->getMessage(), PHP_EOL;
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

## `findApplicationPolicyByQueryCriteria()`

```php
findApplicationPolicyByQueryCriteria($service_ticket, $body): object
```

Use this API command to retrieve a list of AVC Application Policy profiles (for 5.0 and Earlier Firmware Versions).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationVisibilityControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet(); // \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet

try {
    $result = $apiInstance->findApplicationPolicyByQueryCriteria($service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationVisibilityControlApi->findApplicationPolicyByQueryCriteria: ', $e->getMessage(), PHP_EOL;
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

## `findApplicationPolicyV2ByQueryCriteria()`

```php
findApplicationPolicyV2ByQueryCriteria($service_ticket, $body): object
```

Use this API command to retrieve a list of AVC Application Policy profiles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationVisibilityControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet(); // \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet

try {
    $result = $apiInstance->findApplicationPolicyV2ByQueryCriteria($service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationVisibilityControlApi->findApplicationPolicyV2ByQueryCriteria: ', $e->getMessage(), PHP_EOL;
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

## `findAvcApplicationPolicyById()`

```php
findAvcApplicationPolicyById($id, $service_ticket): object
```

Use this API command to retrieve a AVC Application Policy profile (for 5.0 and Earlier Firmware Versions).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationVisibilityControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findAvcApplicationPolicyById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationVisibilityControlApi->findAvcApplicationPolicyById: ', $e->getMessage(), PHP_EOL;
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

## `findAvcApplicationPolicyV2ById()`

```php
findAvcApplicationPolicyV2ById($id, $service_ticket): object
```

Use this API command to retrieve a AVC Application Policy profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationVisibilityControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findAvcApplicationPolicyV2ById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationVisibilityControlApi->findAvcApplicationPolicyV2ById: ', $e->getMessage(), PHP_EOL;
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

## `findAvcSignaturePackage()`

```php
findAvcSignaturePackage($service_ticket): object
```

Get current Signature Package info (for 5.0 and Earlier Firmware Versions).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationVisibilityControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findAvcSignaturePackage($service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationVisibilityControlApi->findAvcSignaturePackage: ', $e->getMessage(), PHP_EOL;
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

## `findAvcSignaturePackageApplicationByApplicationName()`

```php
findAvcSignaturePackageApplicationByApplicationName($application_name, $service_ticket): object
```

Get Application info (catId, appId and name) by application name (for 5.0 and Earlier Firmware Versions).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationVisibilityControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$application_name = 'application_name_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findAvcSignaturePackageApplicationByApplicationName($application_name, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationVisibilityControlApi->findAvcSignaturePackageApplicationByApplicationName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_name** | **string**|  | |
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

## `findAvcSignaturePackageApplications()`

```php
findAvcSignaturePackageApplications($service_ticket): object
```

Get Application list from current Signature Package (for 5.0 and Earlier Firmware Versions).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationVisibilityControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findAvcSignaturePackageApplications($service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationVisibilityControlApi->findAvcSignaturePackageApplications: ', $e->getMessage(), PHP_EOL;
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

## `findAvcSignaturePackageCategories()`

```php
findAvcSignaturePackageCategories($service_ticket): object
```

Get Application Category list from current Signature Package (for 5.0 and Earlier Firmware Versions).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationVisibilityControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findAvcSignaturePackageCategories($service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationVisibilityControlApi->findAvcSignaturePackageCategories: ', $e->getMessage(), PHP_EOL;
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

## `findAvcSignaturePackageCategoryByCategoryName()`

```php
findAvcSignaturePackageCategoryByCategoryName($category_name, $service_ticket): object
```

Get Application Category info (catId and name) by category name (for 5.0 and Earlier Firmware Versions).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationVisibilityControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$category_name = 'category_name_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findAvcSignaturePackageCategoryByCategoryName($category_name, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationVisibilityControlApi->findAvcSignaturePackageCategoryByCategoryName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_name** | **string**|  | |
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

## `findAvcSignaturePackageV2()`

```php
findAvcSignaturePackageV2($service_ticket): object
```

Get current Signature Package info.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationVisibilityControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findAvcSignaturePackageV2($service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationVisibilityControlApi->findAvcSignaturePackageV2: ', $e->getMessage(), PHP_EOL;
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

## `findAvcSignaturePackageV2Applications()`

```php
findAvcSignaturePackageV2Applications($service_ticket, $app_name): object
```

Get Application list from current Signature Package.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationVisibilityControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$app_name = 'app_name_example'; // string | Application name. Get Application info (catId, appId and name) by the application name.

try {
    $result = $apiInstance->findAvcSignaturePackageV2Applications($service_ticket, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationVisibilityControlApi->findAvcSignaturePackageV2Applications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **app_name** | **string**| Application name. Get Application info (catId, appId and name) by the application name. | [optional] |

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

## `findAvcSignaturePackageV2Categories()`

```php
findAvcSignaturePackageV2Categories($service_ticket, $cat_name): object
```

Get Application Category list from current Signature Package.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationVisibilityControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$cat_name = 'cat_name_example'; // string | Category name. Get Application Category info (catId and name) by the category name.

try {
    $result = $apiInstance->findAvcSignaturePackageV2Categories($service_ticket, $cat_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationVisibilityControlApi->findAvcSignaturePackageV2Categories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **cat_name** | **string**| Category name. Get Application Category info (catId and name) by the category name. | [optional] |

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

## `findAvcSignaturePackageV2DownloadAndInstallLastCheckedProgress()`

```php
findAvcSignaturePackageV2DownloadAndInstallLastCheckedProgress($service_ticket): object
```

Get the progress of download and install Signature Package.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationVisibilityControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findAvcSignaturePackageV2DownloadAndInstallLastCheckedProgress($service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationVisibilityControlApi->findAvcSignaturePackageV2DownloadAndInstallLastCheckedProgress: ', $e->getMessage(), PHP_EOL;
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

## `findAvcUserDefinedById()`

```php
findAvcUserDefinedById($id, $service_ticket): object
```

Use this API command to retrieve a AVC User Defined profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationVisibilityControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findAvcUserDefinedById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationVisibilityControlApi->findAvcUserDefinedById: ', $e->getMessage(), PHP_EOL;
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

## `findUserDefinedByQueryCriteria()`

```php
findUserDefinedByQueryCriteria($service_ticket, $body): object
```

Use this API command to retrieve a list of AVC User Defined profiles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationVisibilityControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet(); // \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet

try {
    $result = $apiInstance->findUserDefinedByQueryCriteria($service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationVisibilityControlApi->findUserDefinedByQueryCriteria: ', $e->getMessage(), PHP_EOL;
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

## `partialUpdateAvcApplicationPolicyById()`

```php
partialUpdateAvcApplicationPolicyById($id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify the configuration on AVC Application Policy profile (for 5.0 and Earlier Firmware Versions).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationVisibilityControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->partialUpdateAvcApplicationPolicyById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationVisibilityControlApi->partialUpdateAvcApplicationPolicyById: ', $e->getMessage(), PHP_EOL;
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

## `partialUpdateAvcApplicationPolicyV2ById()`

```php
partialUpdateAvcApplicationPolicyV2ById($id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify the configuration on AVC Application Policy profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationVisibilityControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->partialUpdateAvcApplicationPolicyV2ById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationVisibilityControlApi->partialUpdateAvcApplicationPolicyV2ById: ', $e->getMessage(), PHP_EOL;
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

## `partialUpdateAvcSignaturePackageV2()`

```php
partialUpdateAvcSignaturePackageV2($service_ticket, $UNKNOWN_PARAM_NAME)
```

Use this API command to update Signature Package related settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationVisibilityControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->partialUpdateAvcSignaturePackageV2($service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationVisibilityControlApi->partialUpdateAvcSignaturePackageV2: ', $e->getMessage(), PHP_EOL;
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

## `partialUpdateAvcUserDefinedById()`

```php
partialUpdateAvcUserDefinedById($id, $service_ticket, $UNKNOWN_PARAM_NAME)
```

Use this API command to modify the configuration on AVC User Defined profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\ApplicationVisibilityControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->partialUpdateAvcUserDefinedById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationVisibilityControlApi->partialUpdateAvcUserDefinedById: ', $e->getMessage(), PHP_EOL;
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
