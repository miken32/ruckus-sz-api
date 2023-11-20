# PofP\SmartzoneClient\Hotspot20VenueServiceApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addRkszonesHs20VenuesByZoneId()**](Hotspot20VenueServiceApi.md#addRkszonesHs20VenuesByZoneId) | **POST** /rkszones/{zoneId}/hs20/venues | Use this API command to create a new Hotspot 2.0 venue profile of a zone. |
| [**deleteRkszonesHs20VenuesById()**](Hotspot20VenueServiceApi.md#deleteRkszonesHs20VenuesById) | **DELETE** /rkszones/{zoneId}/hs20/venues/{id} | Use this API command to delete Hotspot 2.0 venue profile of a zone. |
| [**findRkszonesHs20VenuesById()**](Hotspot20VenueServiceApi.md#findRkszonesHs20VenuesById) | **GET** /rkszones/{zoneId}/hs20/venues/{id} | Use this API command to retrieve a Hotspot 2.0 venue profile of a zone. |
| [**findRkszonesHs20VenuesByZoneId()**](Hotspot20VenueServiceApi.md#findRkszonesHs20VenuesByZoneId) | **GET** /rkszones/{zoneId}/hs20/venues | Use this API command to retrieve a list of Hotspot 2.0 venue profile of a zone. |
| [**findServicesVenueProfileByQueryCriteria()**](Hotspot20VenueServiceApi.md#findServicesVenueProfileByQueryCriteria) | **POST** /query/services/venueProfile | Query Venue Profiles with specified filters. |
| [**partialUpdateRkszonesHs20VenuesById()**](Hotspot20VenueServiceApi.md#partialUpdateRkszonesHs20VenuesById) | **PATCH** /rkszones/{zoneId}/hs20/venues/{id} | Use this API command to modify the configuration on Hotspot 2.0 venue profile of a zone. |


## `addRkszonesHs20VenuesByZoneId()`

```php
addRkszonesHs20VenuesByZoneId($zone_id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to create a new Hotspot 2.0 venue profile of a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\Hotspot20VenueServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addRkszonesHs20VenuesByZoneId($zone_id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Hotspot20VenueServiceApi->addRkszonesHs20VenuesByZoneId: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesHs20VenuesById()`

```php
deleteRkszonesHs20VenuesById($zone_id, $id, $service_ticket): object
```

Use this API command to delete Hotspot 2.0 venue profile of a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\Hotspot20VenueServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesHs20VenuesById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Hotspot20VenueServiceApi->deleteRkszonesHs20VenuesById: ', $e->getMessage(), PHP_EOL;
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

## `findRkszonesHs20VenuesById()`

```php
findRkszonesHs20VenuesById($zone_id, $id, $service_ticket): object
```

Use this API command to retrieve a Hotspot 2.0 venue profile of a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\Hotspot20VenueServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findRkszonesHs20VenuesById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Hotspot20VenueServiceApi->findRkszonesHs20VenuesById: ', $e->getMessage(), PHP_EOL;
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

## `findRkszonesHs20VenuesByZoneId()`

```php
findRkszonesHs20VenuesByZoneId($zone_id, $service_ticket): object
```

Use this API command to retrieve a list of Hotspot 2.0 venue profile of a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\Hotspot20VenueServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findRkszonesHs20VenuesByZoneId($zone_id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Hotspot20VenueServiceApi->findRkszonesHs20VenuesByZoneId: ', $e->getMessage(), PHP_EOL;
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

## `findServicesVenueProfileByQueryCriteria()`

```php
findServicesVenueProfileByQueryCriteria($service_ticket, $body)
```

Query Venue Profiles with specified filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\Hotspot20VenueServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet(); // \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet

try {
    $apiInstance->findServicesVenueProfileByQueryCriteria($service_ticket, $body);
} catch (Exception $e) {
    echo 'Exception when calling Hotspot20VenueServiceApi->findServicesVenueProfileByQueryCriteria: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **body** | [**\PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet**](../Model/CommonQueryCriteriaSuperSet.md)|  | |

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

## `partialUpdateRkszonesHs20VenuesById()`

```php
partialUpdateRkszonesHs20VenuesById($zone_id, $id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify the configuration on Hotspot 2.0 venue profile of a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\Hotspot20VenueServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->partialUpdateRkszonesHs20VenuesById($zone_id, $id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Hotspot20VenueServiceApi->partialUpdateRkszonesHs20VenuesById: ', $e->getMessage(), PHP_EOL;
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
