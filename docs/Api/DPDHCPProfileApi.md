# PofP\SmartzoneClient\DPDHCPProfileApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addDpDhcpProfiles()**](DPDHCPProfileApi.md#addDpDhcpProfiles) | **POST** /dpDhcpProfiles | Use this API command to create basic DP DHCP profile - basic. |
| [**addDpDhcpProfilesDpDhcpProfileHostsById()**](DPDHCPProfileApi.md#addDpDhcpProfilesDpDhcpProfileHostsById) | **POST** /dpDhcpProfiles/{id}/dpDhcpProfileHosts | Use this API command to create DP DHCP profile - host. |
| [**addDpDhcpProfilesDpDhcpProfileOptionSpacesById()**](DPDHCPProfileApi.md#addDpDhcpProfilesDpDhcpProfileOptionSpacesById) | **POST** /dpDhcpProfiles/{id}/dpDhcpProfileOptionSpaces | Use this API command to create DP DHCP profile - option43 space. |
| [**addDpDhcpProfilesDpDhcpProfilePoolsById()**](DPDHCPProfileApi.md#addDpDhcpProfilesDpDhcpProfilePoolsById) | **POST** /dpDhcpProfiles/{id}/dpDhcpProfilePools | Use this API command to create DP DHCP profile - pool. |
| [**deleteDpDhcpProfiles()**](DPDHCPProfileApi.md#deleteDpDhcpProfiles) | **DELETE** /dpDhcpProfiles | Use this API command to delete DP DHCP profiles. |
| [**deleteDpDhcpProfilesById()**](DPDHCPProfileApi.md#deleteDpDhcpProfilesById) | **DELETE** /dpDhcpProfiles/{id} | Use this API command to delete DP DHCP profile. |
| [**deleteDpDhcpProfilesDpDhcpProfileHostsByHostId()**](DPDHCPProfileApi.md#deleteDpDhcpProfilesDpDhcpProfileHostsByHostId) | **DELETE** /dpDhcpProfiles/{id}/dpDhcpProfileHosts/{hostId} | Use this API command to delete DP DHCP profile - host. |
| [**deleteDpDhcpProfilesDpDhcpProfileHostsById()**](DPDHCPProfileApi.md#deleteDpDhcpProfilesDpDhcpProfileHostsById) | **DELETE** /dpDhcpProfiles/{id}/dpDhcpProfileHosts | Use this API command to delete DP DHCP profile - hosts. |
| [**deleteDpDhcpProfilesDpDhcpProfileOptionSpacesById()**](DPDHCPProfileApi.md#deleteDpDhcpProfilesDpDhcpProfileOptionSpacesById) | **DELETE** /dpDhcpProfiles/{id}/dpDhcpProfileOptionSpaces | Use this API command to delete DP DHCP profile - option43 spaces. |
| [**deleteDpDhcpProfilesDpDhcpProfileOptionSpacesBySpaceId()**](DPDHCPProfileApi.md#deleteDpDhcpProfilesDpDhcpProfileOptionSpacesBySpaceId) | **DELETE** /dpDhcpProfiles/{id}/dpDhcpProfileOptionSpaces/{spaceId} | Use this API command to delete DP DHCP profile - option43 space. |
| [**deleteDpDhcpProfilesDpDhcpProfilePoolsById()**](DPDHCPProfileApi.md#deleteDpDhcpProfilesDpDhcpProfilePoolsById) | **DELETE** /dpDhcpProfiles/{id}/dpDhcpProfilePools | Use this API command to delete DP DHCP profile - pools. |
| [**deleteDpDhcpProfilesDpDhcpProfilePoolsByPoolId()**](DPDHCPProfileApi.md#deleteDpDhcpProfilesDpDhcpProfilePoolsByPoolId) | **DELETE** /dpDhcpProfiles/{id}/dpDhcpProfilePools/{poolId} | Use this API command to delete DP DHCP profile - pool. |
| [**findDpDhcpProfiles()**](DPDHCPProfileApi.md#findDpDhcpProfiles) | **GET** /dpDhcpProfiles | Use this API command to retrieve DP profile - basic list. |
| [**findDpDhcpProfilesById()**](DPDHCPProfileApi.md#findDpDhcpProfilesById) | **GET** /dpDhcpProfiles/{id} | Use this API command to retrieve DP profile - basic. |
| [**findDpDhcpProfilesDpDhcpProfileHostsByHostId()**](DPDHCPProfileApi.md#findDpDhcpProfilesDpDhcpProfileHostsByHostId) | **GET** /dpDhcpProfiles/{id}/dpDhcpProfileHosts/{hostId} | Use this API command to retrieve DP DHCP profile - host. |
| [**findDpDhcpProfilesDpDhcpProfileHostsById()**](DPDHCPProfileApi.md#findDpDhcpProfilesDpDhcpProfileHostsById) | **GET** /dpDhcpProfiles/{id}/dpDhcpProfileHosts | Use this API command to retrieve DP DHCP profile - host list. |
| [**findDpDhcpProfilesDpDhcpProfileOptionSpacesById()**](DPDHCPProfileApi.md#findDpDhcpProfilesDpDhcpProfileOptionSpacesById) | **GET** /dpDhcpProfiles/{id}/dpDhcpProfileOptionSpaces | Use this API command to retrieve DP DHCP profile - option43 space list. |
| [**findDpDhcpProfilesDpDhcpProfileOptionSpacesBySpaceId()**](DPDHCPProfileApi.md#findDpDhcpProfilesDpDhcpProfileOptionSpacesBySpaceId) | **GET** /dpDhcpProfiles/{id}/dpDhcpProfileOptionSpaces/{spaceId} | Use this API command to retrieve DP DHCP profile - option43 space. |
| [**findDpDhcpProfilesDpDhcpProfilePoolsById()**](DPDHCPProfileApi.md#findDpDhcpProfilesDpDhcpProfilePoolsById) | **GET** /dpDhcpProfiles/{id}/dpDhcpProfilePools | Use this API command to retrieve DP DHCP profile - pool list. |
| [**findDpDhcpProfilesDpDhcpProfilePoolsByPoolId()**](DPDHCPProfileApi.md#findDpDhcpProfilesDpDhcpProfilePoolsByPoolId) | **GET** /dpDhcpProfiles/{id}/dpDhcpProfilePools/{poolId} | Use this API command to retrieve DP DHCP profile - pool. |
| [**updateDpDhcpProfilesById()**](DPDHCPProfileApi.md#updateDpDhcpProfilesById) | **PUT** /dpDhcpProfiles/{id} | Use this API command to modify DP DHCP profile - basic. |
| [**updateDpDhcpProfilesDpDhcpProfileHostsByHostId()**](DPDHCPProfileApi.md#updateDpDhcpProfilesDpDhcpProfileHostsByHostId) | **PUT** /dpDhcpProfiles/{id}/dpDhcpProfileHosts/{hostId} | Use this API command to modify DP DHCP profile - host. |
| [**updateDpDhcpProfilesDpDhcpProfileOptionSpacesBySpaceId()**](DPDHCPProfileApi.md#updateDpDhcpProfilesDpDhcpProfileOptionSpacesBySpaceId) | **PUT** /dpDhcpProfiles/{id}/dpDhcpProfileOptionSpaces/{spaceId} | Use this API command to update DP DHCP profile - option43 space. |
| [**updateDpDhcpProfilesDpDhcpProfilePoolsByPoolId()**](DPDHCPProfileApi.md#updateDpDhcpProfilesDpDhcpProfilePoolsByPoolId) | **PUT** /dpDhcpProfiles/{id}/dpDhcpProfilePools/{poolId} | Use this API command to modify DP DHCP profile - pool. |


## `addDpDhcpProfiles()`

```php
addDpDhcpProfiles($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to create basic DP DHCP profile - basic.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPDHCPProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addDpDhcpProfiles($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DPDHCPProfileApi->addDpDhcpProfiles: ', $e->getMessage(), PHP_EOL;
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

## `addDpDhcpProfilesDpDhcpProfileHostsById()`

```php
addDpDhcpProfilesDpDhcpProfileHostsById($id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to create DP DHCP profile - host.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPDHCPProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addDpDhcpProfilesDpDhcpProfileHostsById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DPDHCPProfileApi->addDpDhcpProfilesDpDhcpProfileHostsById: ', $e->getMessage(), PHP_EOL;
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

## `addDpDhcpProfilesDpDhcpProfileOptionSpacesById()`

```php
addDpDhcpProfilesDpDhcpProfileOptionSpacesById($id, $service_ticket, $UNKNOWN_PARAM_NAME)
```

Use this API command to create DP DHCP profile - option43 space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPDHCPProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->addDpDhcpProfilesDpDhcpProfileOptionSpacesById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling DPDHCPProfileApi->addDpDhcpProfilesDpDhcpProfileOptionSpacesById: ', $e->getMessage(), PHP_EOL;
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

## `addDpDhcpProfilesDpDhcpProfilePoolsById()`

```php
addDpDhcpProfilesDpDhcpProfilePoolsById($id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to create DP DHCP profile - pool.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPDHCPProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addDpDhcpProfilesDpDhcpProfilePoolsById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DPDHCPProfileApi->addDpDhcpProfilesDpDhcpProfilePoolsById: ', $e->getMessage(), PHP_EOL;
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

## `deleteDpDhcpProfiles()`

```php
deleteDpDhcpProfiles($service_ticket, $UNKNOWN_PARAM_NAME)
```

Use this API command to delete DP DHCP profiles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPDHCPProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->deleteDpDhcpProfiles($service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling DPDHCPProfileApi->deleteDpDhcpProfiles: ', $e->getMessage(), PHP_EOL;
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

## `deleteDpDhcpProfilesById()`

```php
deleteDpDhcpProfilesById($id, $service_ticket)
```

Use this API command to delete DP DHCP profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPDHCPProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $apiInstance->deleteDpDhcpProfilesById($id, $service_ticket);
} catch (Exception $e) {
    echo 'Exception when calling DPDHCPProfileApi->deleteDpDhcpProfilesById: ', $e->getMessage(), PHP_EOL;
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

## `deleteDpDhcpProfilesDpDhcpProfileHostsByHostId()`

```php
deleteDpDhcpProfilesDpDhcpProfileHostsByHostId($id, $host_id, $service_ticket)
```

Use this API command to delete DP DHCP profile - host.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPDHCPProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$host_id = 'host_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $apiInstance->deleteDpDhcpProfilesDpDhcpProfileHostsByHostId($id, $host_id, $service_ticket);
} catch (Exception $e) {
    echo 'Exception when calling DPDHCPProfileApi->deleteDpDhcpProfilesDpDhcpProfileHostsByHostId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **host_id** | **string**|  | |
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

## `deleteDpDhcpProfilesDpDhcpProfileHostsById()`

```php
deleteDpDhcpProfilesDpDhcpProfileHostsById($id, $service_ticket, $UNKNOWN_PARAM_NAME)
```

Use this API command to delete DP DHCP profile - hosts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPDHCPProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->deleteDpDhcpProfilesDpDhcpProfileHostsById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling DPDHCPProfileApi->deleteDpDhcpProfilesDpDhcpProfileHostsById: ', $e->getMessage(), PHP_EOL;
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

## `deleteDpDhcpProfilesDpDhcpProfileOptionSpacesById()`

```php
deleteDpDhcpProfilesDpDhcpProfileOptionSpacesById($id, $service_ticket, $UNKNOWN_PARAM_NAME)
```

Use this API command to delete DP DHCP profile - option43 spaces.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPDHCPProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->deleteDpDhcpProfilesDpDhcpProfileOptionSpacesById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling DPDHCPProfileApi->deleteDpDhcpProfilesDpDhcpProfileOptionSpacesById: ', $e->getMessage(), PHP_EOL;
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

## `deleteDpDhcpProfilesDpDhcpProfileOptionSpacesBySpaceId()`

```php
deleteDpDhcpProfilesDpDhcpProfileOptionSpacesBySpaceId($id, $space_id, $service_ticket)
```

Use this API command to delete DP DHCP profile - option43 space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPDHCPProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$space_id = 'space_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $apiInstance->deleteDpDhcpProfilesDpDhcpProfileOptionSpacesBySpaceId($id, $space_id, $service_ticket);
} catch (Exception $e) {
    echo 'Exception when calling DPDHCPProfileApi->deleteDpDhcpProfilesDpDhcpProfileOptionSpacesBySpaceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **space_id** | **string**|  | |
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

## `deleteDpDhcpProfilesDpDhcpProfilePoolsById()`

```php
deleteDpDhcpProfilesDpDhcpProfilePoolsById($id, $service_ticket, $UNKNOWN_PARAM_NAME)
```

Use this API command to delete DP DHCP profile - pools.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPDHCPProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->deleteDpDhcpProfilesDpDhcpProfilePoolsById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling DPDHCPProfileApi->deleteDpDhcpProfilesDpDhcpProfilePoolsById: ', $e->getMessage(), PHP_EOL;
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

## `deleteDpDhcpProfilesDpDhcpProfilePoolsByPoolId()`

```php
deleteDpDhcpProfilesDpDhcpProfilePoolsByPoolId($id, $pool_id, $service_ticket)
```

Use this API command to delete DP DHCP profile - pool.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPDHCPProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$pool_id = 'pool_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $apiInstance->deleteDpDhcpProfilesDpDhcpProfilePoolsByPoolId($id, $pool_id, $service_ticket);
} catch (Exception $e) {
    echo 'Exception when calling DPDHCPProfileApi->deleteDpDhcpProfilesDpDhcpProfilePoolsByPoolId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **pool_id** | **string**|  | |
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

## `findDpDhcpProfiles()`

```php
findDpDhcpProfiles($service_ticket): object
```

Use this API command to retrieve DP profile - basic list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPDHCPProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findDpDhcpProfiles($service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DPDHCPProfileApi->findDpDhcpProfiles: ', $e->getMessage(), PHP_EOL;
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

## `findDpDhcpProfilesById()`

```php
findDpDhcpProfilesById($id, $service_ticket): object
```

Use this API command to retrieve DP profile - basic.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPDHCPProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findDpDhcpProfilesById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DPDHCPProfileApi->findDpDhcpProfilesById: ', $e->getMessage(), PHP_EOL;
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

## `findDpDhcpProfilesDpDhcpProfileHostsByHostId()`

```php
findDpDhcpProfilesDpDhcpProfileHostsByHostId($id, $host_id, $service_ticket): object
```

Use this API command to retrieve DP DHCP profile - host.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPDHCPProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$host_id = 'host_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findDpDhcpProfilesDpDhcpProfileHostsByHostId($id, $host_id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DPDHCPProfileApi->findDpDhcpProfilesDpDhcpProfileHostsByHostId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **host_id** | **string**|  | |
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

## `findDpDhcpProfilesDpDhcpProfileHostsById()`

```php
findDpDhcpProfilesDpDhcpProfileHostsById($id, $service_ticket): object
```

Use this API command to retrieve DP DHCP profile - host list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPDHCPProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findDpDhcpProfilesDpDhcpProfileHostsById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DPDHCPProfileApi->findDpDhcpProfilesDpDhcpProfileHostsById: ', $e->getMessage(), PHP_EOL;
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

## `findDpDhcpProfilesDpDhcpProfileOptionSpacesById()`

```php
findDpDhcpProfilesDpDhcpProfileOptionSpacesById($id, $service_ticket): object
```

Use this API command to retrieve DP DHCP profile - option43 space list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPDHCPProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findDpDhcpProfilesDpDhcpProfileOptionSpacesById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DPDHCPProfileApi->findDpDhcpProfilesDpDhcpProfileOptionSpacesById: ', $e->getMessage(), PHP_EOL;
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

## `findDpDhcpProfilesDpDhcpProfileOptionSpacesBySpaceId()`

```php
findDpDhcpProfilesDpDhcpProfileOptionSpacesBySpaceId($id, $space_id, $service_ticket): object
```

Use this API command to retrieve DP DHCP profile - option43 space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPDHCPProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$space_id = 'space_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findDpDhcpProfilesDpDhcpProfileOptionSpacesBySpaceId($id, $space_id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DPDHCPProfileApi->findDpDhcpProfilesDpDhcpProfileOptionSpacesBySpaceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **space_id** | **string**|  | |
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

## `findDpDhcpProfilesDpDhcpProfilePoolsById()`

```php
findDpDhcpProfilesDpDhcpProfilePoolsById($id, $service_ticket): object
```

Use this API command to retrieve DP DHCP profile - pool list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPDHCPProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findDpDhcpProfilesDpDhcpProfilePoolsById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DPDHCPProfileApi->findDpDhcpProfilesDpDhcpProfilePoolsById: ', $e->getMessage(), PHP_EOL;
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

## `findDpDhcpProfilesDpDhcpProfilePoolsByPoolId()`

```php
findDpDhcpProfilesDpDhcpProfilePoolsByPoolId($id, $pool_id, $service_ticket): object
```

Use this API command to retrieve DP DHCP profile - pool.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPDHCPProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$pool_id = 'pool_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findDpDhcpProfilesDpDhcpProfilePoolsByPoolId($id, $pool_id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DPDHCPProfileApi->findDpDhcpProfilesDpDhcpProfilePoolsByPoolId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **pool_id** | **string**|  | |
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

## `updateDpDhcpProfilesById()`

```php
updateDpDhcpProfilesById($id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify DP DHCP profile - basic.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPDHCPProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->updateDpDhcpProfilesById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DPDHCPProfileApi->updateDpDhcpProfilesById: ', $e->getMessage(), PHP_EOL;
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

## `updateDpDhcpProfilesDpDhcpProfileHostsByHostId()`

```php
updateDpDhcpProfilesDpDhcpProfileHostsByHostId($id, $host_id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify DP DHCP profile - host.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPDHCPProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$host_id = 'host_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->updateDpDhcpProfilesDpDhcpProfileHostsByHostId($id, $host_id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DPDHCPProfileApi->updateDpDhcpProfilesDpDhcpProfileHostsByHostId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **host_id** | **string**|  | |
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

## `updateDpDhcpProfilesDpDhcpProfileOptionSpacesBySpaceId()`

```php
updateDpDhcpProfilesDpDhcpProfileOptionSpacesBySpaceId($id, $space_id, $service_ticket, $UNKNOWN_PARAM_NAME)
```

Use this API command to update DP DHCP profile - option43 space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPDHCPProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$space_id = 'space_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->updateDpDhcpProfilesDpDhcpProfileOptionSpacesBySpaceId($id, $space_id, $service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling DPDHCPProfileApi->updateDpDhcpProfilesDpDhcpProfileOptionSpacesBySpaceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **space_id** | **string**|  | |
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

## `updateDpDhcpProfilesDpDhcpProfilePoolsByPoolId()`

```php
updateDpDhcpProfilesDpDhcpProfilePoolsByPoolId($id, $pool_id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify DP DHCP profile - pool.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\DPDHCPProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$pool_id = 'pool_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->updateDpDhcpProfilesDpDhcpProfilePoolsByPoolId($id, $pool_id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DPDHCPProfileApi->updateDpDhcpProfilesDpDhcpProfilePoolsByPoolId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **pool_id** | **string**|  | |
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
