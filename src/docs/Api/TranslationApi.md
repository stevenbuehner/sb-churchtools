# StevenBuehner\ChurchTools\TranslationApi

All URIs are relative to /api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllTranslations()**](TranslationApi.md#getAllTranslations) | **GET** /translations | Get all translations


## `getAllTranslations()`

```php
getAllTranslations($updated_by_church): \StevenBuehner\ChurchTools\Model\InlineResponse20040
```

Get all translations

The response is a list of the translations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\TranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updated_by_church = True; // bool | Only return Translations created or updated by the church

try {
    $result = $apiInstance->getAllTranslations($updated_by_church);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationApi->getAllTranslations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updated_by_church** | **bool**| Only return Translations created or updated by the church | [optional]

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
