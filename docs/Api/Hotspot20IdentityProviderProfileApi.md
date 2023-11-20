# PofP\SmartzoneClient\Hotspot20IdentityProviderProfileApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addProfilesHs20Identityproviders()**](Hotspot20IdentityProviderProfileApi.md#addProfilesHs20Identityproviders) | **POST** /profiles/hs20/identityproviders | Use this API command to create a new Hotspot 2.0 identity provider. |
| [**deleteProfilesHs20Identityproviders()**](Hotspot20IdentityProviderProfileApi.md#deleteProfilesHs20Identityproviders) | **DELETE** /profiles/hs20/identityproviders | Use this API command to delete multiple Hotspot 2.0 identity provider. |
| [**deleteProfilesHs20IdentityprovidersAccountingsById()**](Hotspot20IdentityProviderProfileApi.md#deleteProfilesHs20IdentityprovidersAccountingsById) | **DELETE** /profiles/hs20/identityproviders/{id}/accountings | Use this API command to disable accountings of a Hotspot 2.0 identity provider. |
| [**deleteProfilesHs20IdentityprovidersById()**](Hotspot20IdentityProviderProfileApi.md#deleteProfilesHs20IdentityprovidersById) | **DELETE** /profiles/hs20/identityproviders/{id} | Use this API command to delete a Hotspot 2.0 identity provider. |
| [**deleteProfilesHs20IdentityprovidersOsuById()**](Hotspot20IdentityProviderProfileApi.md#deleteProfilesHs20IdentityprovidersOsuById) | **DELETE** /profiles/hs20/identityproviders/{id}/osu | Use this API command to disable online signup &amp; provisioning of a Hotspot 2.0 identity provider. |
| [**findProfilesHs20Identityproviders()**](Hotspot20IdentityProviderProfileApi.md#findProfilesHs20Identityproviders) | **GET** /profiles/hs20/identityproviders | Use this API command to retrieve list of Hotspot 2.0 identity providers. |
| [**findProfilesHs20IdentityprovidersById()**](Hotspot20IdentityProviderProfileApi.md#findProfilesHs20IdentityprovidersById) | **GET** /profiles/hs20/identityproviders/{id} | Use this API command to retrieve a Hotspot 2.0 identity provider. |
| [**findProfilesHs20IdentityprovidersByQueryCriteria()**](Hotspot20IdentityProviderProfileApi.md#findProfilesHs20IdentityprovidersByQueryCriteria) | **POST** /profiles/hs20/identityproviders/query | Query hotspot 2.0 identity providers. |
| [**partialUpdateProfilesHs20IdentityprovidersById()**](Hotspot20IdentityProviderProfileApi.md#partialUpdateProfilesHs20IdentityprovidersById) | **PATCH** /profiles/hs20/identityproviders/{id} | Use this API command to modify the configuration of a Hotspot 2.0 identity provider. |


## `addProfilesHs20Identityproviders()`

```php
addProfilesHs20Identityproviders($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to create a new Hotspot 2.0 identity provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\Hotspot20IdentityProviderProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addProfilesHs20Identityproviders($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Hotspot20IdentityProviderProfileApi->addProfilesHs20Identityproviders: ', $e->getMessage(), PHP_EOL;
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

## `deleteProfilesHs20Identityproviders()`

```php
deleteProfilesHs20Identityproviders($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to delete multiple Hotspot 2.0 identity provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\Hotspot20IdentityProviderProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->deleteProfilesHs20Identityproviders($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Hotspot20IdentityProviderProfileApi->deleteProfilesHs20Identityproviders: ', $e->getMessage(), PHP_EOL;
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

## `deleteProfilesHs20IdentityprovidersAccountingsById()`

```php
deleteProfilesHs20IdentityprovidersAccountingsById($id, $service_ticket): object
```

Use this API command to disable accountings of a Hotspot 2.0 identity provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\Hotspot20IdentityProviderProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteProfilesHs20IdentityprovidersAccountingsById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Hotspot20IdentityProviderProfileApi->deleteProfilesHs20IdentityprovidersAccountingsById: ', $e->getMessage(), PHP_EOL;
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

## `deleteProfilesHs20IdentityprovidersById()`

```php
deleteProfilesHs20IdentityprovidersById($id, $service_ticket): object
```

Use this API command to delete a Hotspot 2.0 identity provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\Hotspot20IdentityProviderProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteProfilesHs20IdentityprovidersById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Hotspot20IdentityProviderProfileApi->deleteProfilesHs20IdentityprovidersById: ', $e->getMessage(), PHP_EOL;
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

## `deleteProfilesHs20IdentityprovidersOsuById()`

```php
deleteProfilesHs20IdentityprovidersOsuById($id, $service_ticket): object
```

Use this API command to disable online signup & provisioning of a Hotspot 2.0 identity provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\Hotspot20IdentityProviderProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteProfilesHs20IdentityprovidersOsuById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Hotspot20IdentityProviderProfileApi->deleteProfilesHs20IdentityprovidersOsuById: ', $e->getMessage(), PHP_EOL;
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

## `findProfilesHs20Identityproviders()`

```php
findProfilesHs20Identityproviders($service_ticket, $index, $list_size): object
```

Use this API command to retrieve list of Hotspot 2.0 identity providers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\Hotspot20IdentityProviderProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$index = 'index_example'; // string | The index of the first entry to be retrieved. Default: 0
$list_size = 'list_size_example'; // string | The maximum number of entries to be retrieved. Default: 100, Maximum: 1000

try {
    $result = $apiInstance->findProfilesHs20Identityproviders($service_ticket, $index, $list_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Hotspot20IdentityProviderProfileApi->findProfilesHs20Identityproviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `findProfilesHs20IdentityprovidersById()`

```php
findProfilesHs20IdentityprovidersById($id, $service_ticket): object
```

Use this API command to retrieve a Hotspot 2.0 identity provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\Hotspot20IdentityProviderProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findProfilesHs20IdentityprovidersById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Hotspot20IdentityProviderProfileApi->findProfilesHs20IdentityprovidersById: ', $e->getMessage(), PHP_EOL;
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

## `findProfilesHs20IdentityprovidersByQueryCriteria()`

```php
findProfilesHs20IdentityprovidersByQueryCriteria($service_ticket, $body): object
```

Query hotspot 2.0 identity providers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\Hotspot20IdentityProviderProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet(); // \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet

try {
    $result = $apiInstance->findProfilesHs20IdentityprovidersByQueryCriteria($service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Hotspot20IdentityProviderProfileApi->findProfilesHs20IdentityprovidersByQueryCriteria: ', $e->getMessage(), PHP_EOL;
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

## `partialUpdateProfilesHs20IdentityprovidersById()`

```php
partialUpdateProfilesHs20IdentityprovidersById($id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify the configuration of a Hotspot 2.0 identity provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\Hotspot20IdentityProviderProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->partialUpdateProfilesHs20IdentityprovidersById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Hotspot20IdentityProviderProfileApi->partialUpdateProfilesHs20IdentityprovidersById: ', $e->getMessage(), PHP_EOL;
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
