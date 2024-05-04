# StevenBuehner\ChurchTools\ChurchQueryApi

All URIs are relative to /api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postChurchqueryDebugExport()**](ChurchQueryApi.md#postChurchqueryDebugExport) | **POST** /churchquery/debug/export | Export result of ChurchQuery |


## `postChurchqueryDebugExport()`

```php
postChurchqueryDebugExport($type, $body)
```

Export result of ChurchQuery

> **Caution**: This is an preliminary API, and is subject to be changed.  It provides a downloadfile with the result of a given query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\ChurchQueryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | type of export
$body = 'body_example'; // string | 

try {
    $apiInstance->postChurchqueryDebugExport($type, $body);
} catch (Exception $e) {
    echo 'Exception when calling ChurchQueryApi->postChurchqueryDebugExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| type of export | [optional] |
| **body** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
