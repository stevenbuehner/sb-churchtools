# StevenBuehner\ChurchTools\AdminApi

All URIs are relative to /api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteFilesId()**](AdminApi.md#deleteFilesId) | **DELETE** /files/{id} | 
[**deleteSecuritylevelId()**](AdminApi.md#deleteSecuritylevelId) | **DELETE** /securitylevels/{id} | Delete the Security Level
[**getAllLogs()**](AdminApi.md#getAllLogs) | **GET** /logs | Get all log messages
[**getLogById()**](AdminApi.md#getLogById) | **GET** /logs/{id} | Get a log message
[**getLoginStatistics()**](AdminApi.md#getLoginStatistics) | **GET** /logs/statistics/login | 
[**getSecuritylevelId()**](AdminApi.md#getSecuritylevelId) | **GET** /securitylevels/{id} | Get a particular security level
[**getSecuritylevels()**](AdminApi.md#getSecuritylevels) | **GET** /securitylevels | get all securitylevels
[**patchFilesId()**](AdminApi.md#patchFilesId) | **PATCH** /files/{id} | 
[**patchSecuritylevelId()**](AdminApi.md#patchSecuritylevelId) | **PATCH** /securitylevels/{id} | Update the security level
[**postSecuritylevelId()**](AdminApi.md#postSecuritylevelId) | **POST** /securitylevels/{id} | Create a new security Level


## `deleteFilesId()`

```php
deleteFilesId($id)
```



delete file by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | file id

try {
    $apiInstance->deleteFilesId($id);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->deleteFilesId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| file id |

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSecuritylevelId()`

```php
deleteSecuritylevelId($id)
```

Delete the Security Level

Delete a security level

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Id of a particular security level

try {
    $apiInstance->deleteSecuritylevelId($id);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->deleteSecuritylevelId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of a particular security level |

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllLogs()`

```php
getAllLogs($message, $levels, $before, $after, $person_id, $page, $limit): \StevenBuehner\ChurchTools\Model\GetAllLogs200Response
```

Get all log messages

The response is a collection of all log messages you may see and is limited to a specific number of messages. You can use the `page` parameter to browse the list of log messages. The logs are ordered by date.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message = Person updated; // string | Filter by text
$levels = NULL; // array | Filter by log level ID
$before = 2019-04-16T10:57:09Z; // \DateTime | Filter log messages before that date. (Use ISO-Format)
$after = 2019-04-16T10:57:09Z; // \DateTime | Filter log messages after that date. (Use ISO-Format)
$person_id = 56; // int | Filter by person
$page = 1; // int | Page number to show page in pagenation. If empty, start at first page.
$limit = 10; // int | Number of results per page.

try {
    $result = $apiInstance->getAllLogs($message, $levels, $before, $after, $person_id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->getAllLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message** | **string**| Filter by text | [optional]
 **levels** | [**array**](../Model/.md)| Filter by log level ID | [optional]
 **before** | **\DateTime**| Filter log messages before that date. (Use ISO-Format) | [optional]
 **after** | **\DateTime**| Filter log messages after that date. (Use ISO-Format) | [optional]
 **person_id** | **int**| Filter by person | [optional]
 **page** | **int**| Page number to show page in pagenation. If empty, start at first page. | [optional] [default to 1]
 **limit** | **int**| Number of results per page. | [optional] [default to 10]

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAllLogs200Response**](../Model/GetAllLogs200Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLogById()`

```php
getLogById($id): \StevenBuehner\ChurchTools\Model\GetLogById200Response
```

Get a log message

Fetch one specific log message by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12; // int | ID of log

try {
    $result = $apiInstance->getLogById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->getLogById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of log |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetLogById200Response**](../Model/GetLogById200Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLoginStatistics()`

```php
getLoginStatistics($order_by, $page, $limit): \StevenBuehner\ChurchTools\Model\GetLoginStatistics200Response
```



Get statistics about login counts of users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_by = 'order_by_example'; // string | Order the pagination result. Allowed values: `frequent` and `last`
$page = 1; // int | Page number to show page in pagenation. If empty, start at first page.
$limit = 10; // int | Number of results per page.

try {
    $result = $apiInstance->getLoginStatistics($order_by, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->getLoginStatistics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_by** | **string**| Order the pagination result. Allowed values: &#x60;frequent&#x60; and &#x60;last&#x60; | [optional]
 **page** | **int**| Page number to show page in pagenation. If empty, start at first page. | [optional] [default to 1]
 **limit** | **int**| Number of results per page. | [optional] [default to 10]

### Return type

[**\StevenBuehner\ChurchTools\Model\GetLoginStatistics200Response**](../Model/GetLoginStatistics200Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSecuritylevelId()`

```php
getSecuritylevelId($id)
```

Get a particular security level

Get a particular Security Level

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Id of a particular security level

try {
    $apiInstance->getSecuritylevelId($id);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->getSecuritylevelId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of a particular security level |

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSecuritylevels()`

```php
getSecuritylevels(): \StevenBuehner\ChurchTools\Model\GetSecuritylevels200Response
```

get all securitylevels

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSecuritylevels();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->getSecuritylevels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\GetSecuritylevels200Response**](../Model/GetSecuritylevels200Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchFilesId()`

```php
patchFilesId($id): \StevenBuehner\ChurchTools\Model\PatchFilesId204Response
```



rename name of a file by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | file id

try {
    $result = $apiInstance->patchFilesId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->patchFilesId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| file id |

### Return type

[**\StevenBuehner\ChurchTools\Model\PatchFilesId204Response**](../Model/PatchFilesId204Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchSecuritylevelId()`

```php
patchSecuritylevelId($id, $forcereorder, $patch_securitylevel_id_request): \StevenBuehner\ChurchTools\Model\PostSecuritylevelId200Response
```

Update the security level

Change the Security Level

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Id of a particular security level
$forcereorder = True; // bool | Need to be true, if securitylevel shall be reordered
$patch_securitylevel_id_request = new \StevenBuehner\ChurchTools\Model\PatchSecuritylevelIdRequest(); // \StevenBuehner\ChurchTools\Model\PatchSecuritylevelIdRequest | Information to patch the security level

try {
    $result = $apiInstance->patchSecuritylevelId($id, $forcereorder, $patch_securitylevel_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->patchSecuritylevelId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of a particular security level |
 **forcereorder** | **bool**| Need to be true, if securitylevel shall be reordered | [optional]
 **patch_securitylevel_id_request** | [**\StevenBuehner\ChurchTools\Model\PatchSecuritylevelIdRequest**](../Model/PatchSecuritylevelIdRequest.md)| Information to patch the security level | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\PostSecuritylevelId200Response**](../Model/PostSecuritylevelId200Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSecuritylevelId()`

```php
postSecuritylevelId($id, $post_securitylevel_id_request): \StevenBuehner\ChurchTools\Model\PostSecuritylevelId200Response
```

Create a new security Level

Create a new Security level

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Id of a particular security level
$post_securitylevel_id_request = {"name":"Name des neuen Security levels"}; // \StevenBuehner\ChurchTools\Model\PostSecuritylevelIdRequest

try {
    $result = $apiInstance->postSecuritylevelId($id, $post_securitylevel_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->postSecuritylevelId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of a particular security level |
 **post_securitylevel_id_request** | [**\StevenBuehner\ChurchTools\Model\PostSecuritylevelIdRequest**](../Model/PostSecuritylevelIdRequest.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\PostSecuritylevelId200Response**](../Model/PostSecuritylevelId200Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
