# StevenBuehner\ChurchTools\TagApi

All URIs are relative to /api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTags()**](TagApi.md#getTags) | **GET** /tags | Get all tags of a type
[**saveTag()**](TagApi.md#saveTag) | **POST** /tags | Create new tag


## `getTags()`

```php
getTags($type): \StevenBuehner\ChurchTools\Model\InlineResponse2009Data[]
```

Get all tags of a type

Returns all tags of type persons or songs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = persons; // string | Type of tags

try {
    $result = $apiInstance->getTags($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->getTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Type of tags |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2009Data[]**](../Model/InlineResponse2009Data.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `saveTag()`

```php
saveTag($inline_object12): \StevenBuehner\ChurchTools\Model\InlineResponse20028
```

Create new tag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object12 = new \StevenBuehner\ChurchTools\Model\InlineObject12(); // \StevenBuehner\ChurchTools\Model\InlineObject12

try {
    $result = $apiInstance->saveTag($inline_object12);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->saveTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object12** | [**\StevenBuehner\ChurchTools\Model\InlineObject12**](../Model/InlineObject12.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
