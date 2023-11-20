# PofP\SmartzoneClient\DynamicPSKApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addRkszonesWlansDpskBatchGenUnboundById()**](DynamicPSKApi.md#addRkszonesWlansDpskBatchGenUnboundById) | **POST** /rkszones/{zoneId}/wlans/{id}/dpsk/batchGenUnbound | Use this API command to batch generate DPSKs of a WLAN. You can either specify passphrases or not. If the amount is bigger than 1, system will generate usernames with index. e.g. student-1, student-2, ...etc. |
| [**addRkszonesWlansDpskById()**](DynamicPSKApi.md#addRkszonesWlansDpskById) | **POST** /rkszones/{zoneId}/wlans/{id}/dpsk | Use this API command to delete DPSKs of a WLAN. |
| [**addRkszonesWlansDpskUploadById()**](DynamicPSKApi.md#addRkszonesWlansDpskUploadById) | **POST** /rkszones/{zoneId}/wlans/{id}/dpsk/upload | Use this API command to upload DPSK file of a WLAN (CSV file and Content-Type multipart/form-data ONLY). |
| [**findDpskByQueryCriteria()**](DynamicPSKApi.md#findDpskByQueryCriteria) | **POST** /query/dpsk | Query DPSKs with specified filters. |
| [**findRkszonesDeleteExpiredDpskByZoneId()**](DynamicPSKApi.md#findRkszonesDeleteExpiredDpskByZoneId) | **GET** /rkszones/{zoneId}/deleteExpiredDpsk | Use this API command to retrieve interval of delete expired DPSK of a zone. |
| [**findRkszonesDownloadDpskCsvSample()**](DynamicPSKApi.md#findRkszonesDownloadDpskCsvSample) | **GET** /rkszones/downloadDpskCsvSample | Use this API command to download DPSK CSV sample. |
| [**findRkszonesDpskByZoneId()**](DynamicPSKApi.md#findRkszonesDpskByZoneId) | **GET** /rkszones/{zoneId}/dpsk | Use this API command to retrieve DPSK info of a zone. |
| [**findRkszonesDpskEnabledWlansByZoneId()**](DynamicPSKApi.md#findRkszonesDpskEnabledWlansByZoneId) | **GET** /rkszones/{zoneId}/dpskEnabledWlans | Use this API command to retrieve DPSK enabled WLAN info of a zone. |
| [**findRkszonesWlansDpskByDpskId()**](DynamicPSKApi.md#findRkszonesWlansDpskByDpskId) | **GET** /rkszones/{zoneId}/wlans/{id}/dpsk/{dpskId} | Use this API command to retrieve DPSK info. |
| [**findRkszonesWlansDpskById()**](DynamicPSKApi.md#findRkszonesWlansDpskById) | **GET** /rkszones/{zoneId}/wlans/{id}/dpsk | Use this API command to retrieve DPSK info of a WLAN. |
| [**partialUpdateRkszonesWlansDpskByDpskId()**](DynamicPSKApi.md#partialUpdateRkszonesWlansDpskByDpskId) | **PATCH** /rkszones/{zoneId}/wlans/{id}/dpsk/{dpskId} | Use this API command to update DPSK info. |
| [**updateRkszonesDeleteExpiredDpskByZoneId()**](DynamicPSKApi.md#updateRkszonesDeleteExpiredDpskByZoneId) | **PUT** /rkszones/{zoneId}/deleteExpiredDpsk | Use this API command to modify interval of delete expired DPSK of a zone. |


## `addRkszonesWlansDpskBatchGenUnboundById()`

```php
addRkszonesWlansDpskBatchGenUnboundById($zone_id, $id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to batch generate DPSKs of a WLAN. You can either specify passphrases or not. If the amount is bigger than 1, system will generate usernames with index. e.g. student-1, student-2, ...etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DynamicPSKApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addRkszonesWlansDpskBatchGenUnboundById($zone_id, $id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicPSKApi->addRkszonesWlansDpskBatchGenUnboundById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
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

## `addRkszonesWlansDpskById()`

```php
addRkszonesWlansDpskById($zone_id, $id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to delete DPSKs of a WLAN.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DynamicPSKApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addRkszonesWlansDpskById($zone_id, $id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicPSKApi->addRkszonesWlansDpskById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
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

## `addRkszonesWlansDpskUploadById()`

```php
addRkszonesWlansDpskUploadById($zone_id, $id, $service_ticket, $upload_file): object
```

Use this API command to upload DPSK file of a WLAN (CSV file and Content-Type multipart/form-data ONLY).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DynamicPSKApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$upload_file = "/path/to/file.txt"; // \SplFileObject | The file to upload

try {
    $result = $apiInstance->addRkszonesWlansDpskUploadById($zone_id, $id, $service_ticket, $upload_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicPSKApi->addRkszonesWlansDpskUploadById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `findDpskByQueryCriteria()`

```php
findDpskByQueryCriteria($service_ticket, $body): object
```

Query DPSKs with specified filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DynamicPSKApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet(); // \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet

try {
    $result = $apiInstance->findDpskByQueryCriteria($service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicPSKApi->findDpskByQueryCriteria: ', $e->getMessage(), PHP_EOL;
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

## `findRkszonesDeleteExpiredDpskByZoneId()`

```php
findRkszonesDeleteExpiredDpskByZoneId($zone_id, $service_ticket): object
```

Use this API command to retrieve interval of delete expired DPSK of a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DynamicPSKApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findRkszonesDeleteExpiredDpskByZoneId($zone_id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicPSKApi->findRkszonesDeleteExpiredDpskByZoneId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
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

## `findRkszonesDownloadDpskCsvSample()`

```php
findRkszonesDownloadDpskCsvSample($service_ticket, $type): \SplFileObject
```

Use this API command to download DPSK CSV sample.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DynamicPSKApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$type = 'type_example'; // string | DPSK CSV sample type. Valid value is PHASE1 or PHASE2. Default: PHASE2.

try {
    $result = $apiInstance->findRkszonesDownloadDpskCsvSample($service_ticket, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicPSKApi->findRkszonesDownloadDpskCsvSample: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **type** | **string**| DPSK CSV sample type. Valid value is PHASE1 or PHASE2. Default: PHASE2. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findRkszonesDpskByZoneId()`

```php
findRkszonesDpskByZoneId($zone_id, $service_ticket): object
```

Use this API command to retrieve DPSK info of a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DynamicPSKApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findRkszonesDpskByZoneId($zone_id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicPSKApi->findRkszonesDpskByZoneId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
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

## `findRkszonesDpskEnabledWlansByZoneId()`

```php
findRkszonesDpskEnabledWlansByZoneId($zone_id, $service_ticket): object
```

Use this API command to retrieve DPSK enabled WLAN info of a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DynamicPSKApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findRkszonesDpskEnabledWlansByZoneId($zone_id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicPSKApi->findRkszonesDpskEnabledWlansByZoneId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
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

## `findRkszonesWlansDpskByDpskId()`

```php
findRkszonesWlansDpskByDpskId($zone_id, $id, $dpsk_id, $service_ticket): object
```

Use this API command to retrieve DPSK info.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DynamicPSKApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$dpsk_id = 'dpsk_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findRkszonesWlansDpskByDpskId($zone_id, $id, $dpsk_id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicPSKApi->findRkszonesWlansDpskByDpskId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
| **dpsk_id** | **string**|  | |
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

## `findRkszonesWlansDpskById()`

```php
findRkszonesWlansDpskById($zone_id, $id, $service_ticket): object
```

Use this API command to retrieve DPSK info of a WLAN.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DynamicPSKApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findRkszonesWlansDpskById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicPSKApi->findRkszonesWlansDpskById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
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

## `partialUpdateRkszonesWlansDpskByDpskId()`

```php
partialUpdateRkszonesWlansDpskByDpskId($zone_id, $id, $dpsk_id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to update DPSK info.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DynamicPSKApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$dpsk_id = 'dpsk_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->partialUpdateRkszonesWlansDpskByDpskId($zone_id, $id, $dpsk_id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicPSKApi->partialUpdateRkszonesWlansDpskByDpskId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
| **dpsk_id** | **string**|  | |
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

## `updateRkszonesDeleteExpiredDpskByZoneId()`

```php
updateRkszonesDeleteExpiredDpskByZoneId($zone_id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify interval of delete expired DPSK of a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DynamicPSKApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->updateRkszonesDeleteExpiredDpskByZoneId($zone_id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicPSKApi->updateRkszonesDeleteExpiredDpskByZoneId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
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
