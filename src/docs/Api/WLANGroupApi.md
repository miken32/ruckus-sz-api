# PofP\SmartzoneClient\WLANGroupApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addRkszonesWlangroupsByZoneId()**](WLANGroupApi.md#addRkszonesWlangroupsByZoneId) | **POST** /rkszones/{zoneId}/wlangroups | Use this API command to create a new WLAN group. |
| [**addRkszonesWlangroupsMembersById()**](WLANGroupApi.md#addRkszonesWlangroupsMembersById) | **POST** /rkszones/{zoneId}/wlangroups/{id}/members | Use this API command to add a member to a WLAN group. |
| [**deleteRkszonesWlangroupsById()**](WLANGroupApi.md#deleteRkszonesWlangroupsById) | **DELETE** /rkszones/{zoneId}/wlangroups/{id} | Use this API command to delete a WLAN group. |
| [**deleteRkszonesWlangroupsMembersByMemberId()**](WLANGroupApi.md#deleteRkszonesWlangroupsMembersByMemberId) | **DELETE** /rkszones/{zoneId}/wlangroups/{id}/members/{memberId} | Use this API command to remove a member from a WLAN group. |
| [**deleteRkszonesWlangroupsMembersNasIdByMemberId()**](WLANGroupApi.md#deleteRkszonesWlangroupsMembersNasIdByMemberId) | **DELETE** /rkszones/{zoneId}/wlangroups/{id}/members/{memberId}/nasId | Use this API command to disable a member NAS-ID override of a WLAN group. |
| [**deleteRkszonesWlangroupsMembersVlanOverrideByMemberId()**](WLANGroupApi.md#deleteRkszonesWlangroupsMembersVlanOverrideByMemberId) | **DELETE** /rkszones/{zoneId}/wlangroups/{id}/members/{memberId}/vlanOverride | Use this API command to disable a member VLAN override of a WLAN group. |
| [**findRkszonesWlangroupsById()**](WLANGroupApi.md#findRkszonesWlangroupsById) | **GET** /rkszones/{zoneId}/wlangroups/{id} | Use this API command to retrieve the WLAN group. |
| [**findRkszonesWlangroupsByZoneId()**](WLANGroupApi.md#findRkszonesWlangroupsByZoneId) | **GET** /rkszones/{zoneId}/wlangroups | Use this API command to retrieve the list of WLAN groups within a zone. |
| [**partialUpdateRkszonesWlangroupsById()**](WLANGroupApi.md#partialUpdateRkszonesWlangroupsById) | **PATCH** /rkszones/{zoneId}/wlangroups/{id} | Use this API command to modify the configuration of a WLAN group. |
| [**partialUpdateRkszonesWlangroupsMembersByMemberId()**](WLANGroupApi.md#partialUpdateRkszonesWlangroupsMembersByMemberId) | **PATCH** /rkszones/{zoneId}/wlangroups/{id}/members/{memberId} | Use this API command to modify a member of a WLAN group. |
| [**updateRkszonesWlangroupsMembersByMemberId()**](WLANGroupApi.md#updateRkszonesWlangroupsMembersByMemberId) | **PUT** /rkszones/{zoneId}/wlangroups/{id}/members/{memberId} | Use this API command to modify the member&#39;s entire information of a WLAN group. |


## `addRkszonesWlangroupsByZoneId()`

```php
addRkszonesWlangroupsByZoneId($zone_id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to create a new WLAN group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\WLANGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addRkszonesWlangroupsByZoneId($zone_id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WLANGroupApi->addRkszonesWlangroupsByZoneId: ', $e->getMessage(), PHP_EOL;
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

## `addRkszonesWlangroupsMembersById()`

```php
addRkszonesWlangroupsMembersById($zone_id, $id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to add a member to a WLAN group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\WLANGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addRkszonesWlangroupsMembersById($zone_id, $id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WLANGroupApi->addRkszonesWlangroupsMembersById: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesWlangroupsById()`

```php
deleteRkszonesWlangroupsById($zone_id, $id, $service_ticket): object
```

Use this API command to delete a WLAN group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\WLANGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesWlangroupsById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WLANGroupApi->deleteRkszonesWlangroupsById: ', $e->getMessage(), PHP_EOL;
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

## `deleteRkszonesWlangroupsMembersByMemberId()`

```php
deleteRkszonesWlangroupsMembersByMemberId($zone_id, $id, $member_id, $service_ticket): object
```

Use this API command to remove a member from a WLAN group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\WLANGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$member_id = 'member_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesWlangroupsMembersByMemberId($zone_id, $id, $member_id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WLANGroupApi->deleteRkszonesWlangroupsMembersByMemberId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
| **member_id** | **string**|  | |
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

## `deleteRkszonesWlangroupsMembersNasIdByMemberId()`

```php
deleteRkszonesWlangroupsMembersNasIdByMemberId($zone_id, $id, $member_id, $service_ticket): object
```

Use this API command to disable a member NAS-ID override of a WLAN group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\WLANGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$member_id = 'member_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesWlangroupsMembersNasIdByMemberId($zone_id, $id, $member_id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WLANGroupApi->deleteRkszonesWlangroupsMembersNasIdByMemberId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
| **member_id** | **string**|  | |
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

## `deleteRkszonesWlangroupsMembersVlanOverrideByMemberId()`

```php
deleteRkszonesWlangroupsMembersVlanOverrideByMemberId($zone_id, $id, $member_id, $service_ticket): object
```

Use this API command to disable a member VLAN override of a WLAN group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\WLANGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$member_id = 'member_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesWlangroupsMembersVlanOverrideByMemberId($zone_id, $id, $member_id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WLANGroupApi->deleteRkszonesWlangroupsMembersVlanOverrideByMemberId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
| **member_id** | **string**|  | |
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

## `findRkszonesWlangroupsById()`

```php
findRkszonesWlangroupsById($zone_id, $id, $service_ticket): object
```

Use this API command to retrieve the WLAN group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\WLANGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findRkszonesWlangroupsById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WLANGroupApi->findRkszonesWlangroupsById: ', $e->getMessage(), PHP_EOL;
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

## `findRkszonesWlangroupsByZoneId()`

```php
findRkszonesWlangroupsByZoneId($zone_id, $service_ticket, $index, $list_size): object
```

Use this API command to retrieve the list of WLAN groups within a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\WLANGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$index = 'index_example'; // string | The index of the first entry to be retrieved. Default: 0
$list_size = 'list_size_example'; // string | The maximum number of entries to be retrieved. Default: 100, Maximum: 1000

try {
    $result = $apiInstance->findRkszonesWlangroupsByZoneId($zone_id, $service_ticket, $index, $list_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WLANGroupApi->findRkszonesWlangroupsByZoneId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
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

## `partialUpdateRkszonesWlangroupsById()`

```php
partialUpdateRkszonesWlangroupsById($zone_id, $id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify the configuration of a WLAN group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\WLANGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->partialUpdateRkszonesWlangroupsById($zone_id, $id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WLANGroupApi->partialUpdateRkszonesWlangroupsById: ', $e->getMessage(), PHP_EOL;
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

## `partialUpdateRkszonesWlangroupsMembersByMemberId()`

```php
partialUpdateRkszonesWlangroupsMembersByMemberId($zone_id, $id, $member_id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify a member of a WLAN group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\WLANGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$member_id = 'member_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->partialUpdateRkszonesWlangroupsMembersByMemberId($zone_id, $id, $member_id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WLANGroupApi->partialUpdateRkszonesWlangroupsMembersByMemberId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
| **member_id** | **string**|  | |
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

## `updateRkszonesWlangroupsMembersByMemberId()`

```php
updateRkszonesWlangroupsMembersByMemberId($zone_id, $id, $member_id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify the member's entire information of a WLAN group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\WLANGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$member_id = 'member_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->updateRkszonesWlangroupsMembersByMemberId($zone_id, $id, $member_id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WLANGroupApi->updateRkszonesWlangroupsMembersByMemberId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
| **member_id** | **string**|  | |
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
