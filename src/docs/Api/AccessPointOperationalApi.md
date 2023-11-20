# PofP\SmartzoneClient\AccessPointOperationalApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addApsApPacketCaptureDownloadByApMac()**](AccessPointOperationalApi.md#addApsApPacketCaptureDownloadByApMac) | **POST** /aps/{apMac}/apPacketCapture/download | Use this API to download AP packet capture file |
| [**addApsApPacketCaptureStartFileCaptureByApMac()**](AccessPointOperationalApi.md#addApsApPacketCaptureStartFileCaptureByApMac) | **POST** /aps/{apMac}/apPacketCapture/startFileCapture | Use this API to start AP packet capture |
| [**addApsApPacketCaptureStartStreamingByApMac()**](AccessPointOperationalApi.md#addApsApPacketCaptureStartStreamingByApMac) | **POST** /aps/{apMac}/apPacketCapture/startStreaming | Use this API to start AP packet streaming |
| [**addApsApPacketCaptureStopByApMac()**](AccessPointOperationalApi.md#addApsApPacketCaptureStopByApMac) | **POST** /aps/{apMac}/apPacketCapture/stop | Use this API to stop AP packet capture or streaming |
| [**addApsOperationalBlinkLedByApMac()**](AccessPointOperationalApi.md#addApsOperationalBlinkLedByApMac) | **POST** /aps/{apMac}/operational/blinkLed | use this API to make ap blink its led to show its position. |
| [**addApsSwitchoverCluster()**](AccessPointOperationalApi.md#addApsSwitchoverCluster) | **POST** /aps/switchoverCluster | Use this API command to switchover AP to another cluster |
| [**findApByQueryCriteria()**](AccessPointOperationalApi.md#findApByQueryCriteria) | **POST** /query/ap | Query APs with specified filters |
| [**findApWlanByQueryCriteria()**](AccessPointOperationalApi.md#findApWlanByQueryCriteria) | **POST** /query/ap/wlan | Use this API command to retrieve AP Wlan list with BSSID information by QueryCriteria |
| [**findApsApPacketCaptureByApMac()**](AccessPointOperationalApi.md#findApsApPacketCaptureByApMac) | **GET** /aps/{apMac}/apPacketCapture | Use this API to get AP packet capture status |
| [**findApsOperationalNeighborByApMac()**](AccessPointOperationalApi.md#findApsOperationalNeighborByApMac) | **GET** /aps/{apMac}/operational/neighbor | Use this API command to retrieve a list of neighbor access points on mesh AP. |
| [**findApsOperationalSummaryByApMac()**](AccessPointOperationalApi.md#findApsOperationalSummaryByApMac) | **GET** /aps/{apMac}/operational/summary | This API provide detailed AP status and configuration, therefore it was designed for single AP information retrieving. If you need to retrieve large number of ap states, please use \&quot;POST://query/ap\&quot; (refer to the \&quot;Query APs\&quot; section of the category \&quot;Access Point Operational\&quot;). |
| [**findIndoorMapByQueryCriteria()**](AccessPointOperationalApi.md#findIndoorMapByQueryCriteria) | **POST** /query/indoorMap | Query indoorMap with specified filters. |
| [**findMeshNeighborByApMacByQueryCriteria()**](AccessPointOperationalApi.md#findMeshNeighborByApMacByQueryCriteria) | **POST** /query/mesh/{apMac}/neighbor | Use this API command to retrieve a list of neighbor access points on mesh AP. |
| [**findMeshTopologyByApMacByQueryCriteria()**](AccessPointOperationalApi.md#findMeshTopologyByApMacByQueryCriteria) | **POST** /query/mesh/{apMac}/topology | Use this API command to retrieve a list of topology on mesh AP. |
| [**findMeshTopologyByQueryCriteria()**](AccessPointOperationalApi.md#findMeshTopologyByQueryCriteria) | **POST** /query/mesh/topology | Use this API command to retrieve a list of topology on zone. |
| [**findRoguesInfoListByQueryCriteria()**](AccessPointOperationalApi.md#findRoguesInfoListByQueryCriteria) | **POST** /query/roguesInfoList | Use this API command to retrieve a list of rogue access points. |


## `addApsApPacketCaptureDownloadByApMac()`

```php
addApsApPacketCaptureDownloadByApMac($ap_mac, $service_ticket): \SplFileObject
```

Use this API to download AP packet capture file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointOperationalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->addApsApPacketCaptureDownloadByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointOperationalApi->addApsApPacketCaptureDownloadByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

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

## `addApsApPacketCaptureStartFileCaptureByApMac()`

```php
addApsApPacketCaptureStartFileCaptureByApMac($ap_mac, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API to start AP packet capture

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointOperationalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addApsApPacketCaptureStartFileCaptureByApMac($ap_mac, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointOperationalApi->addApsApPacketCaptureStartFileCaptureByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
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

## `addApsApPacketCaptureStartStreamingByApMac()`

```php
addApsApPacketCaptureStartStreamingByApMac($ap_mac, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API to start AP packet streaming

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointOperationalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addApsApPacketCaptureStartStreamingByApMac($ap_mac, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointOperationalApi->addApsApPacketCaptureStartStreamingByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
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

## `addApsApPacketCaptureStopByApMac()`

```php
addApsApPacketCaptureStopByApMac($ap_mac, $service_ticket)
```

Use this API to stop AP packet capture or streaming

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointOperationalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $apiInstance->addApsApPacketCaptureStopByApMac($ap_mac, $service_ticket);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointOperationalApi->addApsApPacketCaptureStopByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
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

## `addApsOperationalBlinkLedByApMac()`

```php
addApsOperationalBlinkLedByApMac($ap_mac, $service_ticket)
```

use this API to make ap blink its led to show its position.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointOperationalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $apiInstance->addApsOperationalBlinkLedByApMac($ap_mac, $service_ticket);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointOperationalApi->addApsOperationalBlinkLedByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
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

## `addApsSwitchoverCluster()`

```php
addApsSwitchoverCluster($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to switchover AP to another cluster

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointOperationalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addApsSwitchoverCluster($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointOperationalApi->addApsSwitchoverCluster: ', $e->getMessage(), PHP_EOL;
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

## `findApByQueryCriteria()`

```php
findApByQueryCriteria($service_ticket, $body): object
```

Query APs with specified filters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointOperationalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\ApQueryQueryCriteria(); // \PofP\SmartzoneClient\Model\ApQueryQueryCriteria

try {
    $result = $apiInstance->findApByQueryCriteria($service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointOperationalApi->findApByQueryCriteria: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **body** | [**\PofP\SmartzoneClient\Model\ApQueryQueryCriteria**](../Model/ApQueryQueryCriteria.md)|  | |

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

## `findApWlanByQueryCriteria()`

```php
findApWlanByQueryCriteria($service_ticket, $body): object
```

Use this API command to retrieve AP Wlan list with BSSID information by QueryCriteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointOperationalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet(); // \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet

try {
    $result = $apiInstance->findApWlanByQueryCriteria($service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointOperationalApi->findApWlanByQueryCriteria: ', $e->getMessage(), PHP_EOL;
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

## `findApsApPacketCaptureByApMac()`

```php
findApsApPacketCaptureByApMac($ap_mac, $service_ticket): object
```

Use this API to get AP packet capture status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointOperationalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findApsApPacketCaptureByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointOperationalApi->findApsApPacketCaptureByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
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

## `findApsOperationalNeighborByApMac()`

```php
findApsOperationalNeighborByApMac($ap_mac, $service_ticket, $index, $list_size): object
```

Use this API command to retrieve a list of neighbor access points on mesh AP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointOperationalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$index = 'index_example'; // string | The index of the first entry to be retrieved. Default: 0
$list_size = 'list_size_example'; // string | The maximum number of entries to be retrieved. Default: 100, Maximum: 1000

try {
    $result = $apiInstance->findApsOperationalNeighborByApMac($ap_mac, $service_ticket, $index, $list_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointOperationalApi->findApsOperationalNeighborByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
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

## `findApsOperationalSummaryByApMac()`

```php
findApsOperationalSummaryByApMac($ap_mac, $service_ticket): object
```

This API provide detailed AP status and configuration, therefore it was designed for single AP information retrieving. If you need to retrieve large number of ap states, please use \"POST://query/ap\" (refer to the \"Query APs\" section of the category \"Access Point Operational\").

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointOperationalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findApsOperationalSummaryByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointOperationalApi->findApsOperationalSummaryByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
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

## `findIndoorMapByQueryCriteria()`

```php
findIndoorMapByQueryCriteria($service_ticket, $body): object
```

Query indoorMap with specified filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointOperationalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet(); // \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet

try {
    $result = $apiInstance->findIndoorMapByQueryCriteria($service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointOperationalApi->findIndoorMapByQueryCriteria: ', $e->getMessage(), PHP_EOL;
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

## `findMeshNeighborByApMacByQueryCriteria()`

```php
findMeshNeighborByApMacByQueryCriteria($ap_mac, $service_ticket, $body): object
```

Use this API command to retrieve a list of neighbor access points on mesh AP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointOperationalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet(); // \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet

try {
    $result = $apiInstance->findMeshNeighborByApMacByQueryCriteria($ap_mac, $service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointOperationalApi->findMeshNeighborByApMacByQueryCriteria: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
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

## `findMeshTopologyByApMacByQueryCriteria()`

```php
findMeshTopologyByApMacByQueryCriteria($ap_mac, $service_ticket, $body): object[]
```

Use this API command to retrieve a list of topology on mesh AP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointOperationalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet(); // \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet

try {
    $result = $apiInstance->findMeshTopologyByApMacByQueryCriteria($ap_mac, $service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointOperationalApi->findMeshTopologyByApMacByQueryCriteria: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **body** | [**\PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet**](../Model/CommonQueryCriteriaSuperSet.md)|  | |

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findMeshTopologyByQueryCriteria()`

```php
findMeshTopologyByQueryCriteria($service_ticket, $body): object
```

Use this API command to retrieve a list of topology on zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointOperationalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet(); // \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet

try {
    $result = $apiInstance->findMeshTopologyByQueryCriteria($service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointOperationalApi->findMeshTopologyByQueryCriteria: ', $e->getMessage(), PHP_EOL;
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

## `findRoguesInfoListByQueryCriteria()`

```php
findRoguesInfoListByQueryCriteria($service_ticket, $body): object
```

Use this API command to retrieve a list of rogue access points.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointOperationalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet(); // \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet

try {
    $result = $apiInstance->findRoguesInfoListByQueryCriteria($service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointOperationalApi->findRoguesInfoListByQueryCriteria: ', $e->getMessage(), PHP_EOL;
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
