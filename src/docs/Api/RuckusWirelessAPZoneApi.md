# PofP\SmartzoneClient\RuckusWirelessAPZoneApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addRkszones()**](RuckusWirelessAPZoneApi.md#addRkszones) | **POST** /rkszones | Use this API command to create a new Ruckus Wireless AP zone. |
| [**addRkszonesDual()**](RuckusWirelessAPZoneApi.md#addRkszonesDual) | **POST** /rkszones/dual | Use this API command to create a new Ruckus Wireless AP zone of IPv4/IPv6. |
| [**addRkszonesIpv6()**](RuckusWirelessAPZoneApi.md#addRkszonesIpv6) | **POST** /rkszones/ipv6 | Use this API command to create a new Ruckus Wireless AP zone of IPv6. |
| [**deleteRkszonesAltitudeById()**](RuckusWirelessAPZoneApi.md#deleteRkszonesAltitudeById) | **DELETE** /rkszones/{id}/altitude | Use this API command to disable altitude configuration of zone. |
| [**deleteRkszonesById()**](RuckusWirelessAPZoneApi.md#deleteRkszonesById) | **DELETE** /rkszones/{id} | Use this API command to delete a zone. |
| [**deleteRkszonesClientAdmissionControl24ById()**](RuckusWirelessAPZoneApi.md#deleteRkszonesClientAdmissionControl24ById) | **DELETE** /rkszones/{id}/clientAdmissionControl24 | Use this API command to disable client admission control 2.4GHz radio configuration for APs that belong to a zone. |
| [**deleteRkszonesClientAdmissionControl50ById()**](RuckusWirelessAPZoneApi.md#deleteRkszonesClientAdmissionControl50ById) | **DELETE** /rkszones/{id}/clientAdmissionControl50 | Use this API command to disable client admission control 5GHz radio configuration for APs that belong to a zone. |
| [**deleteRkszonesIpsecProfilesById()**](RuckusWirelessAPZoneApi.md#deleteRkszonesIpsecProfilesById) | **DELETE** /rkszones/{id}/ipsecProfiles | Use this API command to Delete IPsec profiles. |
| [**deleteRkszonesLoadBalancingBandBalancingById()**](RuckusWirelessAPZoneApi.md#deleteRkszonesLoadBalancingBandBalancingById) | **DELETE** /rkszones/{id}/loadBalancing/bandBalancing | Use this API command to disable band balancing for APs that belong to a zone. |
| [**deleteRkszonesLoadBalancingById()**](RuckusWirelessAPZoneApi.md#deleteRkszonesLoadBalancingById) | **DELETE** /rkszones/{id}/loadBalancing | Use this API command to disable overall load balancing configuration for APs that belong to a zone. |
| [**deleteRkszonesLoadBalancingClientLoadBalancing24ById()**](RuckusWirelessAPZoneApi.md#deleteRkszonesLoadBalancingClientLoadBalancing24ById) | **DELETE** /rkszones/{id}/loadBalancing/clientLoadBalancing24 | Use this API command to disable client load balancing 2.4GHz radio configuration for APs that belong to a zone. |
| [**deleteRkszonesLoadBalancingClientLoadBalancing50ById()**](RuckusWirelessAPZoneApi.md#deleteRkszonesLoadBalancingClientLoadBalancing50ById) | **DELETE** /rkszones/{id}/loadBalancing/clientLoadBalancing50 | Use this API command to disable client load balancing 5GHz radio configuration for APs that belong to a zone. |
| [**deleteRkszonesLocationBasedServiceById()**](RuckusWirelessAPZoneApi.md#deleteRkszonesLocationBasedServiceById) | **DELETE** /rkszones/{id}/locationBasedService | Use this API command to disable location based service for APs that belong to a zone. |
| [**deleteRkszonesMeshById()**](RuckusWirelessAPZoneApi.md#deleteRkszonesMeshById) | **DELETE** /rkszones/{id}/mesh | Use this API command to disable mesh networking. |
| [**deleteRkszonesRadioConfigRadio24gBackgroundScanningById()**](RuckusWirelessAPZoneApi.md#deleteRkszonesRadioConfigRadio24gBackgroundScanningById) | **DELETE** /rkszones/{id}/radioConfig/radio24g/backgroundScanning | Use this API command to disable background scanning 2.4GHz radio configuration for APs that belong to a zone. |
| [**deleteRkszonesRadioConfigRadio5gBackgroundScanningById()**](RuckusWirelessAPZoneApi.md#deleteRkszonesRadioConfigRadio5gBackgroundScanningById) | **DELETE** /rkszones/{id}/radioConfig/radio5g/backgroundScanning | Use this API command to disable background scanning 5GHz radio configuration for APs that belong to a zone. |
| [**deleteRkszonesRadioConfigRadio5gLowerBackgroundScanningById()**](RuckusWirelessAPZoneApi.md#deleteRkszonesRadioConfigRadio5gLowerBackgroundScanningById) | **DELETE** /rkszones/{id}/radioConfig/radio5gLower/backgroundScanning | Use this API command to disable background scanning lower 5GHz radio configuration for APs that belong to a zone. |
| [**deleteRkszonesRadioConfigRadio5gUpperBackgroundScanningById()**](RuckusWirelessAPZoneApi.md#deleteRkszonesRadioConfigRadio5gUpperBackgroundScanningById) | **DELETE** /rkszones/{id}/radioConfig/radio5gUpper/backgroundScanning | Use this API command to disable background scanning upper 5GHz radio configuration for APs that belong to a zone. |
| [**deleteRkszonesRadioConfigRadio6gBackgroundScanningById()**](RuckusWirelessAPZoneApi.md#deleteRkszonesRadioConfigRadio6gBackgroundScanningById) | **DELETE** /rkszones/{id}/radioConfig/radio6g/backgroundScanning | Use this API command to disable background scanning 6GHz radio configuration for APs that belong to a zone. |
| [**deleteRkszonesRecoverySsidById()**](RuckusWirelessAPZoneApi.md#deleteRkszonesRecoverySsidById) | **DELETE** /rkszones/{id}/recoverySsid | Use this API command to clear recovery ssid setting of a zone. |
| [**deleteRkszonesRogueById()**](RuckusWirelessAPZoneApi.md#deleteRkszonesRogueById) | **DELETE** /rkszones/{id}/rogue | Use this API command to disable rogue AP detection for APs that belong to a zone. |
| [**deleteRkszonesSmartMonitorById()**](RuckusWirelessAPZoneApi.md#deleteRkszonesSmartMonitorById) | **DELETE** /rkszones/{id}/smartMonitor | Use this API command to disable smart monitor for APs that belong to a zone. |
| [**deleteRkszonesSnmpAgentById()**](RuckusWirelessAPZoneApi.md#deleteRkszonesSnmpAgentById) | **DELETE** /rkszones/{id}/snmpAgent | Use this API command to clear SNMPv2 and SNMPv3 agent that belong to a zone. |
| [**deleteRkszonesSoftGreTunnelProfliesById()**](RuckusWirelessAPZoneApi.md#deleteRkszonesSoftGreTunnelProfliesById) | **DELETE** /rkszones/{id}/softGreTunnelProflies | Use this API command to Delete IPsec profiles. |
| [**deleteRkszonesSyslogById()**](RuckusWirelessAPZoneApi.md#deleteRkszonesSyslogById) | **DELETE** /rkszones/{id}/syslog | Use this API command to disable syslog configuration for APs that belong to a zone. |
| [**deleteRkszonesVenueProfileById()**](RuckusWirelessAPZoneApi.md#deleteRkszonesVenueProfileById) | **DELETE** /rkszones/{id}/venueProfile | Use this API command to clear Hotspot 2.0 venue profile for APs that belong to a zone. |
| [**findRkszones()**](RuckusWirelessAPZoneApi.md#findRkszones) | **GET** /rkszones | Use this API command to retrieve the list of Ruckus Wireless AP zones that belong to a domain. |
| [**findRkszonesApFirmwareByZoneId()**](RuckusWirelessAPZoneApi.md#findRkszonesApFirmwareByZoneId) | **GET** /rkszones/{zoneId}/apFirmware | Use this API command to retrieve AP Firmware the list that belong to a zone. |
| [**findRkszonesApmodelByModel()**](RuckusWirelessAPZoneApi.md#findRkszonesApmodelByModel) | **GET** /rkszones/{zoneId}/apmodel/{model} | Use this API command to retrieve AP model specific configuration that belong to a zone. |
| [**findRkszonesApmodelCommonAttributeByModel()**](RuckusWirelessAPZoneApi.md#findRkszonesApmodelCommonAttributeByModel) | **GET** /rkszones/{zoneId}/apmodel/{model}/commonAttribute | Use this API command to retrieve AP model common attribute that belong to a zone. |
| [**findRkszonesAvailableIpsecProfilesByZoneId()**](RuckusWirelessAPZoneApi.md#findRkszonesAvailableIpsecProfilesByZoneId) | **GET** /rkszones/{zoneId}/availableIpsecProfiles | Get available IPSec tunnel profiles of this Zone. |
| [**findRkszonesAvailableTunnelProfilesByZoneId()**](RuckusWirelessAPZoneApi.md#findRkszonesAvailableTunnelProfilesByZoneId) | **GET** /rkszones/{zoneId}/availableTunnelProfiles | Get available GRE tunnel profiles of this Zone. |
| [**findRkszonesById()**](RuckusWirelessAPZoneApi.md#findRkszonesById) | **GET** /rkszones/{id} | Use this API command to retrieve Ruckus Wireless AP zones configuration. |
| [**findRkszonesMeshById()**](RuckusWirelessAPZoneApi.md#findRkszonesMeshById) | **GET** /rkszones/{id}/mesh | Use this API command to retrieve the mesh configuration of a zone. |
| [**partialUpdateRkszonesById()**](RuckusWirelessAPZoneApi.md#partialUpdateRkszonesById) | **PATCH** /rkszones/{id} | Use this API command to modify the configuration of a zone. |
| [**updateRkszonesApFirmwareByZoneId()**](RuckusWirelessAPZoneApi.md#updateRkszonesApFirmwareByZoneId) | **PUT** /rkszones/{zoneId}/apFirmware | Use this API command to change the AP Firmware that belong to a zone. |
| [**updateRkszonesApmodelByModel()**](RuckusWirelessAPZoneApi.md#updateRkszonesApmodelByModel) | **PUT** /rkszones/{zoneId}/apmodel/{model} | Use this API command to modify the AP model specific configuration that belong to a zone. |
| [**updateRkszonesById()**](RuckusWirelessAPZoneApi.md#updateRkszonesById) | **PUT** /rkszones/{id} | Use this API command to modify entire information of a zone. |


## `addRkszones()`

```php
addRkszones($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to create a new Ruckus Wireless AP zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addRkszones($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->addRkszones: ', $e->getMessage(), PHP_EOL;
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

## `addRkszonesDual()`

```php
addRkszonesDual($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to create a new Ruckus Wireless AP zone of IPv4/IPv6.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addRkszonesDual($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->addRkszonesDual: ', $e->getMessage(), PHP_EOL;
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

## `addRkszonesIpv6()`

```php
addRkszonesIpv6($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to create a new Ruckus Wireless AP zone of IPv6.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addRkszonesIpv6($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->addRkszonesIpv6: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesAltitudeById()`

```php
deleteRkszonesAltitudeById($id, $service_ticket): object
```

Use this API command to disable altitude configuration of zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesAltitudeById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->deleteRkszonesAltitudeById: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesById()`

```php
deleteRkszonesById($id, $service_ticket): object
```

Use this API command to delete a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->deleteRkszonesById: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesClientAdmissionControl24ById()`

```php
deleteRkszonesClientAdmissionControl24ById($id, $service_ticket): object
```

Use this API command to disable client admission control 2.4GHz radio configuration for APs that belong to a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesClientAdmissionControl24ById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->deleteRkszonesClientAdmissionControl24ById: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesClientAdmissionControl50ById()`

```php
deleteRkszonesClientAdmissionControl50ById($id, $service_ticket): object
```

Use this API command to disable client admission control 5GHz radio configuration for APs that belong to a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesClientAdmissionControl50ById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->deleteRkszonesClientAdmissionControl50ById: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesIpsecProfilesById()`

```php
deleteRkszonesIpsecProfilesById($id, $service_ticket): object
```

Use this API command to Delete IPsec profiles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesIpsecProfilesById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->deleteRkszonesIpsecProfilesById: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesLoadBalancingBandBalancingById()`

```php
deleteRkszonesLoadBalancingBandBalancingById($id, $service_ticket): object
```

Use this API command to disable band balancing for APs that belong to a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesLoadBalancingBandBalancingById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->deleteRkszonesLoadBalancingBandBalancingById: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesLoadBalancingById()`

```php
deleteRkszonesLoadBalancingById($id, $service_ticket): object
```

Use this API command to disable overall load balancing configuration for APs that belong to a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesLoadBalancingById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->deleteRkszonesLoadBalancingById: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesLoadBalancingClientLoadBalancing24ById()`

```php
deleteRkszonesLoadBalancingClientLoadBalancing24ById($id, $service_ticket): object
```

Use this API command to disable client load balancing 2.4GHz radio configuration for APs that belong to a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesLoadBalancingClientLoadBalancing24ById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->deleteRkszonesLoadBalancingClientLoadBalancing24ById: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesLoadBalancingClientLoadBalancing50ById()`

```php
deleteRkszonesLoadBalancingClientLoadBalancing50ById($id, $service_ticket): object
```

Use this API command to disable client load balancing 5GHz radio configuration for APs that belong to a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesLoadBalancingClientLoadBalancing50ById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->deleteRkszonesLoadBalancingClientLoadBalancing50ById: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesLocationBasedServiceById()`

```php
deleteRkszonesLocationBasedServiceById($id, $service_ticket): object
```

Use this API command to disable location based service for APs that belong to a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesLocationBasedServiceById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->deleteRkszonesLocationBasedServiceById: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesMeshById()`

```php
deleteRkszonesMeshById($id, $service_ticket): object
```

Use this API command to disable mesh networking.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesMeshById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->deleteRkszonesMeshById: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesRadioConfigRadio24gBackgroundScanningById()`

```php
deleteRkszonesRadioConfigRadio24gBackgroundScanningById($id, $service_ticket): object
```

Use this API command to disable background scanning 2.4GHz radio configuration for APs that belong to a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesRadioConfigRadio24gBackgroundScanningById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->deleteRkszonesRadioConfigRadio24gBackgroundScanningById: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesRadioConfigRadio5gBackgroundScanningById()`

```php
deleteRkszonesRadioConfigRadio5gBackgroundScanningById($id, $service_ticket): object
```

Use this API command to disable background scanning 5GHz radio configuration for APs that belong to a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesRadioConfigRadio5gBackgroundScanningById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->deleteRkszonesRadioConfigRadio5gBackgroundScanningById: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesRadioConfigRadio5gLowerBackgroundScanningById()`

```php
deleteRkszonesRadioConfigRadio5gLowerBackgroundScanningById($id, $service_ticket): object
```

Use this API command to disable background scanning lower 5GHz radio configuration for APs that belong to a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesRadioConfigRadio5gLowerBackgroundScanningById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->deleteRkszonesRadioConfigRadio5gLowerBackgroundScanningById: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesRadioConfigRadio5gUpperBackgroundScanningById()`

```php
deleteRkszonesRadioConfigRadio5gUpperBackgroundScanningById($id, $service_ticket): object
```

Use this API command to disable background scanning upper 5GHz radio configuration for APs that belong to a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesRadioConfigRadio5gUpperBackgroundScanningById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->deleteRkszonesRadioConfigRadio5gUpperBackgroundScanningById: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesRadioConfigRadio6gBackgroundScanningById()`

```php
deleteRkszonesRadioConfigRadio6gBackgroundScanningById($id, $service_ticket): object
```

Use this API command to disable background scanning 6GHz radio configuration for APs that belong to a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesRadioConfigRadio6gBackgroundScanningById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->deleteRkszonesRadioConfigRadio6gBackgroundScanningById: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesRecoverySsidById()`

```php
deleteRkszonesRecoverySsidById($id, $service_ticket): object
```

Use this API command to clear recovery ssid setting of a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesRecoverySsidById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->deleteRkszonesRecoverySsidById: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesRogueById()`

```php
deleteRkszonesRogueById($id, $service_ticket): object
```

Use this API command to disable rogue AP detection for APs that belong to a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesRogueById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->deleteRkszonesRogueById: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesSmartMonitorById()`

```php
deleteRkszonesSmartMonitorById($id, $service_ticket): object
```

Use this API command to disable smart monitor for APs that belong to a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesSmartMonitorById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->deleteRkszonesSmartMonitorById: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesSnmpAgentById()`

```php
deleteRkszonesSnmpAgentById($id, $service_ticket): object
```

Use this API command to clear SNMPv2 and SNMPv3 agent that belong to a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesSnmpAgentById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->deleteRkszonesSnmpAgentById: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesSoftGreTunnelProfliesById()`

```php
deleteRkszonesSoftGreTunnelProfliesById($id, $service_ticket): object
```

Use this API command to Delete IPsec profiles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesSoftGreTunnelProfliesById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->deleteRkszonesSoftGreTunnelProfliesById: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesSyslogById()`

```php
deleteRkszonesSyslogById($id, $service_ticket): object
```

Use this API command to disable syslog configuration for APs that belong to a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesSyslogById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->deleteRkszonesSyslogById: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesVenueProfileById()`

```php
deleteRkszonesVenueProfileById($id, $service_ticket): object
```

Use this API command to clear Hotspot 2.0 venue profile for APs that belong to a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesVenueProfileById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->deleteRkszonesVenueProfileById: ', $e->getMessage(), PHP_EOL;
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

## `findRkszones()`

```php
findRkszones($service_ticket, $index, $list_size, $domain_id): object
```

Use this API command to retrieve the list of Ruckus Wireless AP zones that belong to a domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$index = 'index_example'; // string | The index of the first entry to be retrieved. Default: 0
$list_size = 'list_size_example'; // string | The maximum number of entries to be retrieved. Default: 100, Maximum: 1000
$domain_id = 'domain_id_example'; // string | The domain ID. Default: current logon domain ID

try {
    $result = $apiInstance->findRkszones($service_ticket, $index, $list_size, $domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->findRkszones: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **index** | **string**| The index of the first entry to be retrieved. Default: 0 | [optional] |
| **list_size** | **string**| The maximum number of entries to be retrieved. Default: 100, Maximum: 1000 | [optional] |
| **domain_id** | **string**| The domain ID. Default: current logon domain ID | [optional] |

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

## `findRkszonesApFirmwareByZoneId()`

```php
findRkszonesApFirmwareByZoneId($zone_id, $service_ticket): object
```

Use this API command to retrieve AP Firmware the list that belong to a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findRkszonesApFirmwareByZoneId($zone_id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->findRkszonesApFirmwareByZoneId: ', $e->getMessage(), PHP_EOL;
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

## `findRkszonesApmodelByModel()`

```php
findRkszonesApmodelByModel($zone_id, $model, $service_ticket): object
```

Use this API command to retrieve AP model specific configuration that belong to a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$model = 'model_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findRkszonesApmodelByModel($zone_id, $model, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->findRkszonesApmodelByModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **model** | **string**|  | |
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

## `findRkszonesApmodelCommonAttributeByModel()`

```php
findRkszonesApmodelCommonAttributeByModel($zone_id, $model, $service_ticket): object
```

Use this API command to retrieve AP model common attribute that belong to a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$model = 'model_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findRkszonesApmodelCommonAttributeByModel($zone_id, $model, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->findRkszonesApmodelCommonAttributeByModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **model** | **string**|  | |
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

## `findRkszonesAvailableIpsecProfilesByZoneId()`

```php
findRkszonesAvailableIpsecProfilesByZoneId($zone_id, $service_ticket): object
```

Get available IPSec tunnel profiles of this Zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findRkszonesAvailableIpsecProfilesByZoneId($zone_id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->findRkszonesAvailableIpsecProfilesByZoneId: ', $e->getMessage(), PHP_EOL;
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

## `findRkszonesAvailableTunnelProfilesByZoneId()`

```php
findRkszonesAvailableTunnelProfilesByZoneId($zone_id, $service_ticket): object
```

Get available GRE tunnel profiles of this Zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findRkszonesAvailableTunnelProfilesByZoneId($zone_id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->findRkszonesAvailableTunnelProfilesByZoneId: ', $e->getMessage(), PHP_EOL;
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

## `findRkszonesById()`

```php
findRkszonesById($id, $service_ticket): object
```

Use this API command to retrieve Ruckus Wireless AP zones configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findRkszonesById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->findRkszonesById: ', $e->getMessage(), PHP_EOL;
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

## `findRkszonesMeshById()`

```php
findRkszonesMeshById($id, $service_ticket): object
```

Use this API command to retrieve the mesh configuration of a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findRkszonesMeshById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->findRkszonesMeshById: ', $e->getMessage(), PHP_EOL;
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

## `partialUpdateRkszonesById()`

```php
partialUpdateRkszonesById($id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify the configuration of a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->partialUpdateRkszonesById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->partialUpdateRkszonesById: ', $e->getMessage(), PHP_EOL;
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

## `updateRkszonesApFirmwareByZoneId()`

```php
updateRkszonesApFirmwareByZoneId($zone_id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to change the AP Firmware that belong to a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->updateRkszonesApFirmwareByZoneId($zone_id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->updateRkszonesApFirmwareByZoneId: ', $e->getMessage(), PHP_EOL;
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

## `updateRkszonesApmodelByModel()`

```php
updateRkszonesApmodelByModel($zone_id, $model, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify the AP model specific configuration that belong to a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$model = 'model_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->updateRkszonesApmodelByModel($zone_id, $model, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->updateRkszonesApmodelByModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **model** | **string**|  | |
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

## `updateRkszonesById()`

```php
updateRkszonesById($id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify entire information of a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\RuckusWirelessAPZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->updateRkszonesById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuckusWirelessAPZoneApi->updateRkszonesById: ', $e->getMessage(), PHP_EOL;
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
