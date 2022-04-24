# StevenBuehner\ChurchTools\AdminApi

All URIs are relative to http://localhost/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllLogs()**](AdminApi.md#getAllLogs) | **GET** /logs | Get all log messages
[**getLogById()**](AdminApi.md#getLogById) | **GET** /logs/{id} | Get a log message
[**getLoginStatistics()**](AdminApi.md#getLoginStatistics) | **GET** /logs/statistics/login | 


## `getAllLogs()`

```php
getAllLogs($message, $levels, $before, $after, $person_id, $page, $limit): \StevenBuehner\ChurchTools\Model\InlineResponse20031
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

[**\StevenBuehner\ChurchTools\Model\InlineResponse20031**](../Model/InlineResponse20031.md)

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
getLogById($id): \StevenBuehner\ChurchTools\Model\InlineResponse20032
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

[**\StevenBuehner\ChurchTools\Model\InlineResponse20032**](../Model/InlineResponse20032.md)

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
getLoginStatistics($order_by, $page, $limit): \StevenBuehner\ChurchTools\Model\InlineResponse20033
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

[**\StevenBuehner\ChurchTools\Model\InlineResponse20033**](../Model/InlineResponse20033.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
