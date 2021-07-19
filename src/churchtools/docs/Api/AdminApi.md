# StevenBuehner\ChurchTools\AdminApi

All URIs are relative to *https://teambb.church.tools/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllLogs**](AdminApi.md#getalllogs) | **GET** /logs | Get all log messages
[**getLogById**](AdminApi.md#getlogbyid) | **GET** /logs/{id} | Get a log message
[**getLoginStatistics**](AdminApi.md#getloginstatistics) | **GET** /logs/statistics/login | 

# **getAllLogs**
> \StevenBuehner\ChurchTools\Model\InlineResponse20032 getAllLogs($message, $levels, $before, $after, $person_id, $page, $limit)

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
$message = "message_example"; // string | Filter by text
$levels = array(56); // int[] | Filter by log level
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter log messages before that date. (Use ISO-Format)
$after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter log messages after that date. (Use ISO-Format)
$person_id = 56; // int | Filter by person
$page = 1; // int | Page number to show page in pagenation. If empty, start at first page.
$limit = 10; // int | Number of results per page.

try {
    $result = $apiInstance->getAllLogs($message, $levels, $before, $after, $person_id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->getAllLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message** | **string**| Filter by text | [optional]
 **levels** | [**int[]**](../Model/int.md)| Filter by log level | [optional]
 **before** | **\DateTime**| Filter log messages before that date. (Use ISO-Format) | [optional]
 **after** | **\DateTime**| Filter log messages after that date. (Use ISO-Format) | [optional]
 **person_id** | **int**| Filter by person | [optional]
 **page** | **int**| Page number to show page in pagenation. If empty, start at first page. | [optional] [default to 1]
 **limit** | **int**| Number of results per page. | [optional] [default to 10]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20032**](../Model/InlineResponse20032.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLogById**
> \StevenBuehner\ChurchTools\Model\InlineResponse20033 getLogById($id)

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
$id = 56; // int | ID of log

try {
    $result = $apiInstance->getLogById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->getLogById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of log |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20033**](../Model/InlineResponse20033.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLoginStatistics**
> \StevenBuehner\ChurchTools\Model\InlineResponse20034 getLoginStatistics($order_by, $page, $limit)



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
$order_by = "order_by_example"; // string | Order the pagination result. Allowed values: `frequent` and `last`
$page = 1; // int | Page number to show page in pagenation. If empty, start at first page.
$limit = 10; // int | Number of results per page.

try {
    $result = $apiInstance->getLoginStatistics($order_by, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->getLoginStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_by** | **string**| Order the pagination result. Allowed values: &#x60;frequent&#x60; and &#x60;last&#x60; | [optional]
 **page** | **int**| Page number to show page in pagenation. If empty, start at first page. | [optional] [default to 1]
 **limit** | **int**| Number of results per page. | [optional] [default to 10]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

