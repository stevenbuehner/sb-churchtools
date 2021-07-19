# StevenBuehner\ChurchTools\ChatApi

All URIs are relative to *https://teambb.church.tools/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**chatGuidDelete**](ChatApi.md#chatguiddelete) | **DELETE** /chat/{guid} | Delete a chat
[**createNewChat**](ChatApi.md#createnewchat) | **POST** /chat | Start new chat
[**getAllChats**](ChatApi.md#getallchats) | **GET** /chat | Get all chats
[**updateChat**](ChatApi.md#updatechat) | **PATCH** /chat/{guid} | Update a chat

# **chatGuidDelete**
> chatGuidDelete($guid)

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
$guid = "guid_example"; // string | chat GUID

try {
    $apiInstance->chatGuidDelete($guid);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->chatGuidDelete: ', $e->getMessage(), PHP_EOL;
}
?>
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

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNewChat**
> \StevenBuehner\ChurchTools\Model\InlineResponse20041 createNewChat($body)

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
$body = new \StevenBuehner\ChurchTools\Model\Body19(); // \StevenBuehner\ChurchTools\Model\Body19 | Chat to start

try {
    $result = $apiInstance->createNewChat($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->createNewChat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body19**](../Model/Body19.md)| Chat to start |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20041**](../Model/InlineResponse20041.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllChats**
> \StevenBuehner\ChurchTools\Model\InlineResponse20041 getAllChats()

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
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20041**](../Model/InlineResponse20041.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateChat**
> \StevenBuehner\ChurchTools\Model\InlineResponse20041 updateChat($body, $guid)

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
$body = new \StevenBuehner\ChurchTools\Model\Body20(); // \StevenBuehner\ChurchTools\Model\Body20 | data to update
$guid = "guid_example"; // string | chat GUID

try {
    $result = $apiInstance->updateChat($body, $guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->updateChat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body20**](../Model/Body20.md)| data to update |
 **guid** | **string**| chat GUID |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20041**](../Model/InlineResponse20041.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

