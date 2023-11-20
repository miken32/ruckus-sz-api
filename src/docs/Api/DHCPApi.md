# PofP\SmartzoneClient\DHCPApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addRkszonesDhcpSiteDhcpProfileByZoneId()**](DHCPApi.md#addRkszonesDhcpSiteDhcpProfileByZoneId) | **POST** /rkszones/{zoneId}/dhcpSite/dhcpProfile | Use this API command to create DHCP Pool. |
| [**addRkszonesDhcpSiteDhcpSiteConfigDoAssignIpByZoneId()**](DHCPApi.md#addRkszonesDhcpSiteDhcpSiteConfigDoAssignIpByZoneId) | **POST** /rkszones/{zoneId}/dhcpSite/dhcpSiteConfig/doAssignIp | Use this API command to get the DHCP/NAT service IP assignment when selecting with \&quot;Enable on Multiple APs\&quot;. In the Manually Select AP mode (the manualSelect is true), the body should contain the selected APs (include the siteAps array). Otherwise, there is no need to include the selected APs in the Auto Select AP mode (see samples). |
| [**deleteRkszonesDhcpSiteDhcpProfileById()**](DHCPApi.md#deleteRkszonesDhcpSiteDhcpProfileById) | **DELETE** /rkszones/{zoneId}/dhcpSite/dhcpProfile/{id} | Use this API command to delete DHCP Pool by pool&#39;s ID. |
| [**deleteRkszonesDhcpSiteDhcpProfileByZoneId()**](DHCPApi.md#deleteRkszonesDhcpSiteDhcpProfileByZoneId) | **DELETE** /rkszones/{zoneId}/dhcpSite/dhcpProfile | Use this API command to delete multiple DHCP Pools. |
| [**findDhcpDataDhcpMsgStatsByApMac()**](DHCPApi.md#findDhcpDataDhcpMsgStatsByApMac) | **GET** /dhcpData/dhcpMsgStats/{apMac} | Use this API command to get AP DHCP Message Statistic. |
| [**findDhcpDataDhcpPoolsByApMac()**](DHCPApi.md#findDhcpDataDhcpPoolsByApMac) | **GET** /dhcpData/dhcpPools/{apMac} | Use this API command to get AP DHCP Pools Usage. |
| [**findDhcpDataDhcpPoolsByPoolIndex()**](DHCPApi.md#findDhcpDataDhcpPoolsByPoolIndex) | **GET** /dhcpData/dhcpPools/{apMac}/{poolIndex} | Use this API command to get AP DHCP Pool Usage by pool&#39;s index. |
| [**findRkszonesDhcpSiteDhcpProfileById()**](DHCPApi.md#findRkszonesDhcpSiteDhcpProfileById) | **GET** /rkszones/{zoneId}/dhcpSite/dhcpProfile/{id} | Use this API command to get DHCP Pool by pool&#39;s ID. |
| [**findRkszonesDhcpSiteDhcpProfileByZoneId()**](DHCPApi.md#findRkszonesDhcpSiteDhcpProfileByZoneId) | **GET** /rkszones/{zoneId}/dhcpSite/dhcpProfile | Use this API command to get DHCP Pool list. |
| [**findRkszonesDhcpSiteDhcpSiteConfigByZoneId()**](DHCPApi.md#findRkszonesDhcpSiteDhcpSiteConfigByZoneId) | **GET** /rkszones/{zoneId}/dhcpSite/dhcpSiteConfig | Use this API command to get DHCP Configuration. |
| [**findRkszonesServicesDhcpSiteConfigByQueryCriteria()**](DHCPApi.md#findRkszonesServicesDhcpSiteConfigByQueryCriteria) | **POST** /rkszones/services/dhcpSiteConfig/query | Use this API command to modify DHCP/NAT service configuration of Domain. |
| [**findServicesDhcpProfileByQueryCriteria()**](DHCPApi.md#findServicesDhcpProfileByQueryCriteria) | **POST** /query/services/dhcpProfile | Query DHCP Profiles with specified filters. |
| [**partialUpdateRkszonesDhcpSiteDhcpProfileById()**](DHCPApi.md#partialUpdateRkszonesDhcpSiteDhcpProfileById) | **PATCH** /rkszones/{zoneId}/dhcpSite/dhcpProfile/{id} | Use this API command to modify DHCP Pool by pool&#39;s ID. |


## `addRkszonesDhcpSiteDhcpProfileByZoneId()`

```php
addRkszonesDhcpSiteDhcpProfileByZoneId($zone_id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to create DHCP Pool.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DHCPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addRkszonesDhcpSiteDhcpProfileByZoneId($zone_id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DHCPApi->addRkszonesDhcpSiteDhcpProfileByZoneId: ', $e->getMessage(), PHP_EOL;
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

## `addRkszonesDhcpSiteDhcpSiteConfigDoAssignIpByZoneId()`

```php
addRkszonesDhcpSiteDhcpSiteConfigDoAssignIpByZoneId($zone_id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to get the DHCP/NAT service IP assignment when selecting with \"Enable on Multiple APs\". In the Manually Select AP mode (the manualSelect is true), the body should contain the selected APs (include the siteAps array). Otherwise, there is no need to include the selected APs in the Auto Select AP mode (see samples).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DHCPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addRkszonesDhcpSiteDhcpSiteConfigDoAssignIpByZoneId($zone_id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DHCPApi->addRkszonesDhcpSiteDhcpSiteConfigDoAssignIpByZoneId: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesDhcpSiteDhcpProfileById()`

```php
deleteRkszonesDhcpSiteDhcpProfileById($zone_id, $id, $service_ticket): object
```

Use this API command to delete DHCP Pool by pool's ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DHCPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesDhcpSiteDhcpProfileById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DHCPApi->deleteRkszonesDhcpSiteDhcpProfileById: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesDhcpSiteDhcpProfileByZoneId()`

```php
deleteRkszonesDhcpSiteDhcpProfileByZoneId($zone_id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to delete multiple DHCP Pools.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DHCPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->deleteRkszonesDhcpSiteDhcpProfileByZoneId($zone_id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DHCPApi->deleteRkszonesDhcpSiteDhcpProfileByZoneId: ', $e->getMessage(), PHP_EOL;
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

## `findDhcpDataDhcpMsgStatsByApMac()`

```php
findDhcpDataDhcpMsgStatsByApMac($ap_mac, $service_ticket): object
```

Use this API command to get AP DHCP Message Statistic.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DHCPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findDhcpDataDhcpMsgStatsByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DHCPApi->findDhcpDataDhcpMsgStatsByApMac: ', $e->getMessage(), PHP_EOL;
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

## `findDhcpDataDhcpPoolsByApMac()`

```php
findDhcpDataDhcpPoolsByApMac($ap_mac, $service_ticket): object
```

Use this API command to get AP DHCP Pools Usage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DHCPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findDhcpDataDhcpPoolsByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DHCPApi->findDhcpDataDhcpPoolsByApMac: ', $e->getMessage(), PHP_EOL;
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

## `findDhcpDataDhcpPoolsByPoolIndex()`

```php
findDhcpDataDhcpPoolsByPoolIndex($ap_mac, $pool_index, $service_ticket): object
```

Use this API command to get AP DHCP Pool Usage by pool's index.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DHCPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$pool_index = 'pool_index_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findDhcpDataDhcpPoolsByPoolIndex($ap_mac, $pool_index, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DHCPApi->findDhcpDataDhcpPoolsByPoolIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **pool_index** | **string**|  | |
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

## `findRkszonesDhcpSiteDhcpProfileById()`

```php
findRkszonesDhcpSiteDhcpProfileById($zone_id, $id, $service_ticket): object
```

Use this API command to get DHCP Pool by pool's ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DHCPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findRkszonesDhcpSiteDhcpProfileById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DHCPApi->findRkszonesDhcpSiteDhcpProfileById: ', $e->getMessage(), PHP_EOL;
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

## `findRkszonesDhcpSiteDhcpProfileByZoneId()`

```php
findRkszonesDhcpSiteDhcpProfileByZoneId($zone_id, $service_ticket): object
```

Use this API command to get DHCP Pool list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DHCPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findRkszonesDhcpSiteDhcpProfileByZoneId($zone_id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DHCPApi->findRkszonesDhcpSiteDhcpProfileByZoneId: ', $e->getMessage(), PHP_EOL;
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

## `findRkszonesDhcpSiteDhcpSiteConfigByZoneId()`

```php
findRkszonesDhcpSiteDhcpSiteConfigByZoneId($zone_id, $service_ticket): object
```

Use this API command to get DHCP Configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DHCPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findRkszonesDhcpSiteDhcpSiteConfigByZoneId($zone_id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DHCPApi->findRkszonesDhcpSiteDhcpSiteConfigByZoneId: ', $e->getMessage(), PHP_EOL;
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

## `findRkszonesServicesDhcpSiteConfigByQueryCriteria()`

```php
findRkszonesServicesDhcpSiteConfigByQueryCriteria($service_ticket, $body): object
```

Use this API command to modify DHCP/NAT service configuration of Domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DHCPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\ZoneQueryCriteria(); // \PofP\SmartzoneClient\Model\ZoneQueryCriteria

try {
    $result = $apiInstance->findRkszonesServicesDhcpSiteConfigByQueryCriteria($service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DHCPApi->findRkszonesServicesDhcpSiteConfigByQueryCriteria: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **body** | [**\PofP\SmartzoneClient\Model\ZoneQueryCriteria**](../Model/ZoneQueryCriteria.md)|  | |

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

## `findServicesDhcpProfileByQueryCriteria()`

```php
findServicesDhcpProfileByQueryCriteria($service_ticket, $body): object
```

Query DHCP Profiles with specified filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DHCPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet(); // \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet

try {
    $result = $apiInstance->findServicesDhcpProfileByQueryCriteria($service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DHCPApi->findServicesDhcpProfileByQueryCriteria: ', $e->getMessage(), PHP_EOL;
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

## `partialUpdateRkszonesDhcpSiteDhcpProfileById()`

```php
partialUpdateRkszonesDhcpSiteDhcpProfileById($zone_id, $id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify DHCP Pool by pool's ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DHCPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->partialUpdateRkszonesDhcpSiteDhcpProfileById($zone_id, $id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DHCPApi->partialUpdateRkszonesDhcpSiteDhcpProfileById: ', $e->getMessage(), PHP_EOL;
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
