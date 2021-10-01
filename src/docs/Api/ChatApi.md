# StevenBuehner\ChurchTools\ChatApi

All URIs are relative to https://teambb.church.tools/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**chatGuidDelete()**](ChatApi.md#chatGuidDelete) | **DELETE** /chat/{guid} | Delete a chat
[**createNewChat()**](ChatApi.md#createNewChat) | **POST** /chat | Start new chat
[**getAllChats()**](ChatApi.md#getAllChats) | **GET** /chat | Get all chats
[**updateChat()**](ChatApi.md#updateChat) | **PATCH** /chat/{guid} | Update a chat


## `chatGuidDelete()`

```php
chatGuidDelete($guid)
```

Delete a chat

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guid = 681F54E3-2EB7-40A4-84F0-EFF8E8F05727; // string | chat GUID

try {
    $apiInstance->chatGuidDelete($guid);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->chatGuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**| chat GUID |

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

## `createNewChat()`

```php
createNewChat($inline_object18): \StevenBuehner\ChurchTools\Model\InlineResponse20040
```

Start new chat

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object18 = new \StevenBuehner\ChurchTools\Model\InlineObject18(); // \StevenBuehner\ChurchTools\Model\InlineObject18

try {
    $result = $apiInstance->createNewChat($inline_object18);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->createNewChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object18** | [**\StevenBuehner\ChurchTools\Model\InlineObject18**](../Model/InlineObject18.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20040**](../Model/InlineResponse20040.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllChats()`

```php
getAllChats(): \StevenBuehner\ChurchTools\Model\InlineResponse20040
```

Get all chats

Gets a list of all chats

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllChats();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getAllChats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20040**](../Model/InlineResponse20040.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateChat()`

```php
updateChat($guid, $inline_object19): \StevenBuehner\ChurchTools\Model\InlineResponse20040
```

Update a chat

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guid = 681F54E3-2EB7-40A4-84F0-EFF8E8F05727; // string | chat GUID
$inline_object19 = new \StevenBuehner\ChurchTools\Model\InlineObject19(); // \StevenBuehner\ChurchTools\Model\InlineObject19

try {
    $result = $apiInstance->updateChat($guid, $inline_object19);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->updateChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**| chat GUID |
 **inline_object19** | [**\StevenBuehner\ChurchTools\Model\InlineObject19**](../Model/InlineObject19.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20040**](../Model/InlineResponse20040.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
