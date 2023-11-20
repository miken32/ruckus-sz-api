# PofP\SmartzoneClient\IdentityUserApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addIdentityUserList()**](IdentityUserApi.md#addIdentityUserList) | **POST** /identity/userList | Use this API command to retrieve a list of identity user. |
| [**addIdentityUsers()**](IdentityUserApi.md#addIdentityUsers) | **POST** /identity/users | Use this API command to create identity user. |
| [**deleteIdentityUsers()**](IdentityUserApi.md#deleteIdentityUsers) | **DELETE** /identity/users | Use this API command to delete multiple identity users. |
| [**deleteIdentityUsersById()**](IdentityUserApi.md#deleteIdentityUsersById) | **DELETE** /identity/users/{id} | Use this API command to delete identity user. |
| [**findIdentityUsers()**](IdentityUserApi.md#findIdentityUsers) | **GET** /identity/users | Use this API command to retrieve a list of identity user. |
| [**findIdentityUsersAaaserver()**](IdentityUserApi.md#findIdentityUsersAaaserver) | **GET** /identity/users/aaaserver | Use this API command to retrieve a list of aaa server. |
| [**findIdentityUsersById()**](IdentityUserApi.md#findIdentityUsersById) | **GET** /identity/users/{id} | Use this API command to retrieve identity user. |
| [**findIdentityUsersCountries()**](IdentityUserApi.md#findIdentityUsersCountries) | **GET** /identity/users/countries | Use this API command to retrieve a list of countries. |
| [**findIdentityUsersPackages()**](IdentityUserApi.md#findIdentityUsersPackages) | **GET** /identity/users/packages | Use this API command to retrieve a list of packages. |
| [**partialUpdateIdentityUsersById()**](IdentityUserApi.md#partialUpdateIdentityUsersById) | **PATCH** /identity/users/{id} | Use this API command to modify the configuration of identity user. |


## `addIdentityUserList()`

```php
addIdentityUserList($service_ticket, $body): object
```

Use this API command to retrieve a list of identity user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\IdentityUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\IdentityQueryCriteria(); // \PofP\SmartzoneClient\Model\IdentityQueryCriteria

try {
    $result = $apiInstance->addIdentityUserList($service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityUserApi->addIdentityUserList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **body** | [**\PofP\SmartzoneClient\Model\IdentityQueryCriteria**](../Model/IdentityQueryCriteria.md)|  | |

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

## `addIdentityUsers()`

```php
addIdentityUsers($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to create identity user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\IdentityUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addIdentityUsers($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityUserApi->addIdentityUsers: ', $e->getMessage(), PHP_EOL;
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

## `deleteIdentityUsers()`

```php
deleteIdentityUsers($service_ticket, $UNKNOWN_PARAM_NAME)
```

Use this API command to delete multiple identity users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\IdentityUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->deleteIdentityUsers($service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling IdentityUserApi->deleteIdentityUsers: ', $e->getMessage(), PHP_EOL;
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

## `deleteIdentityUsersById()`

```php
deleteIdentityUsersById($id, $service_ticket): object
```

Use this API command to delete identity user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\IdentityUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteIdentityUsersById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityUserApi->deleteIdentityUsersById: ', $e->getMessage(), PHP_EOL;
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

## `findIdentityUsers()`

```php
findIdentityUsers($service_ticket, $index, $list_size, $time_zone, $user_name, $display_name, $first_name, $last_name, $email, $phone, $user_type, $user_source, $is_disabled, $created_on_from, $created_on_to): object
```

Use this API command to retrieve a list of identity user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\IdentityUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$index = 'index_example'; // string | The index of the first entry to be retrieved. Default: 0
$list_size = 'list_size_example'; // string | The maximum number of entries to be retrieved. Default: 100, Maximum: 1000
$time_zone = 'time_zone_example'; // string | Display created date and time by specified time zone. Default is UTC.
$user_name = 'user_name_example'; // string | filter identity user list by user name.
$display_name = 'display_name_example'; // string | filter identity user list by display name.
$first_name = 'first_name_example'; // string | filter identity user list by first name.
$last_name = 'last_name_example'; // string | filter identity user list by last name.
$email = 'email_example'; // string | filter identity user list by email.
$phone = 'phone_example'; // string | filter identity user list by phone.
$user_type = 'user_type_example'; // string | filter identity user list by user type.
$user_source = 'user_source_example'; // string | filter identity user list by user source.
$is_disabled = 'is_disabled_example'; // string | filter identity user list by isDisabled.
$created_on_from = 'created_on_from_example'; // string | filter identity user list by created date and time. The start time of created date and time.
$created_on_to = 'created_on_to_example'; // string | filter identity user list by created date and time. The end time of created date and time.

try {
    $result = $apiInstance->findIdentityUsers($service_ticket, $index, $list_size, $time_zone, $user_name, $display_name, $first_name, $last_name, $email, $phone, $user_type, $user_source, $is_disabled, $created_on_from, $created_on_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityUserApi->findIdentityUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **index** | **string**| The index of the first entry to be retrieved. Default: 0 | [optional] |
| **list_size** | **string**| The maximum number of entries to be retrieved. Default: 100, Maximum: 1000 | [optional] |
| **time_zone** | **string**| Display created date and time by specified time zone. Default is UTC. | [optional] |
| **user_name** | **string**| filter identity user list by user name. | [optional] |
| **display_name** | **string**| filter identity user list by display name. | [optional] |
| **first_name** | **string**| filter identity user list by first name. | [optional] |
| **last_name** | **string**| filter identity user list by last name. | [optional] |
| **email** | **string**| filter identity user list by email. | [optional] |
| **phone** | **string**| filter identity user list by phone. | [optional] |
| **user_type** | **string**| filter identity user list by user type. | [optional] |
| **user_source** | **string**| filter identity user list by user source. | [optional] |
| **is_disabled** | **string**| filter identity user list by isDisabled. | [optional] |
| **created_on_from** | **string**| filter identity user list by created date and time. The start time of created date and time. | [optional] |
| **created_on_to** | **string**| filter identity user list by created date and time. The end time of created date and time. | [optional] |

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

## `findIdentityUsersAaaserver()`

```php
findIdentityUsersAaaserver($service_ticket): object
```

Use this API command to retrieve a list of aaa server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\IdentityUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findIdentityUsersAaaserver($service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityUserApi->findIdentityUsersAaaserver: ', $e->getMessage(), PHP_EOL;
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

## `findIdentityUsersById()`

```php
findIdentityUsersById($id, $service_ticket): object
```

Use this API command to retrieve identity user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\IdentityUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findIdentityUsersById($id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityUserApi->findIdentityUsersById: ', $e->getMessage(), PHP_EOL;
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

## `findIdentityUsersCountries()`

```php
findIdentityUsersCountries($service_ticket): object
```

Use this API command to retrieve a list of countries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\IdentityUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findIdentityUsersCountries($service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityUserApi->findIdentityUsersCountries: ', $e->getMessage(), PHP_EOL;
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

## `findIdentityUsersPackages()`

```php
findIdentityUsersPackages($service_ticket): object
```

Use this API command to retrieve a list of packages.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\IdentityUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findIdentityUsersPackages($service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityUserApi->findIdentityUsersPackages: ', $e->getMessage(), PHP_EOL;
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

## `partialUpdateIdentityUsersById()`

```php
partialUpdateIdentityUsersById($id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify the configuration of identity user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\IdentityUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->partialUpdateIdentityUsersById($id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityUserApi->partialUpdateIdentityUsersById: ', $e->getMessage(), PHP_EOL;
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
