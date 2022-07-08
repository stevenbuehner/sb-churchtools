# StevenBuehner\ChurchTools\TagApi

All URIs are relative to /api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTags()**](TagApi.md#getTags) | **GET** /tags | Get all tags of a type
[**saveTag()**](TagApi.md#saveTag) | **POST** /tags | Create new tag


## `getTags()`

```php
getTags($type): \StevenBuehner\ChurchTools\Model\GetPersonTags200ResponseDataInner[]
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

[**\StevenBuehner\ChurchTools\Model\GetPersonTags200ResponseDataInner[]**](../Model/GetPersonTags200ResponseDataInner.md)

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
saveTag($save_tag_request): \StevenBuehner\ChurchTools\Model\SaveTag200Response
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
$save_tag_request = new \StevenBuehner\ChurchTools\Model\SaveTagRequest(); // \StevenBuehner\ChurchTools\Model\SaveTagRequest | Tax rate data

try {
    $result = $apiInstance->saveTag($save_tag_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->saveTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **save_tag_request** | [**\StevenBuehner\ChurchTools\Model\SaveTagRequest**](../Model/SaveTagRequest.md)| Tax rate data |

### Return type

[**\StevenBuehner\ChurchTools\Model\SaveTag200Response**](../Model/SaveTag200Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
