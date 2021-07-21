# StevenBuehner\ChurchTools\FileApi

All URIs are relative to https://teambb.church.tools/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteFileById()**](FileApi.md#deleteFileById) | **DELETE** /files/{id} | Delete file by id
[**deleteFiles()**](FileApi.md#deleteFiles) | **DELETE** /files/{domainType}/{domainIdentifier} | Delete files that are matching the domainType and domainIdentifier
[**uploadFiles()**](FileApi.md#uploadFiles) | **POST** /files/{domainType}/{domainIdentifier} | Upload files


## `deleteFileById()`

```php
deleteFileById($id)
```

Delete file by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of file

try {
    $apiInstance->deleteFileById($id);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->deleteFileById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of file |

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFiles()`

```php
deleteFiles($domain_type, $domain_identifier)
```

Delete files that are matching the domainType and domainIdentifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_type = logo; // string | The domain type. Currently supported are 'avatar', 'groupimage', 'logo', 'attatchments', 'html_template', 'service', 'song_arrangement', 'importtable', 'person', 'familyavatar', 'wiki_.?'.
$domain_identifier = 35; // string | the domain identifier

try {
    $apiInstance->deleteFiles($domain_type, $domain_identifier);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->deleteFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain_type** | **string**| The domain type. Currently supported are &#39;avatar&#39;, &#39;groupimage&#39;, &#39;logo&#39;, &#39;attatchments&#39;, &#39;html_template&#39;, &#39;service&#39;, &#39;song_arrangement&#39;, &#39;importtable&#39;, &#39;person&#39;, &#39;familyavatar&#39;, &#39;wiki_.?&#39;. |
 **domain_identifier** | **string**| the domain identifier |

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadFiles()`

```php
uploadFiles($domain_type, $domain_identifier, $files): \StevenBuehner\ChurchTools\Model\InlineResponse20030
```

Upload files

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_type = logo; // string | The domain type. Currently supported are 'avatar', 'groupimage', 'logo', 'attatchments', 'html_template', 'service', 'song_arrangement', 'importtable', 'person', 'familyavatar', 'wiki_.?'.
$domain_identifier = 35; // string | the domain identifier
$files = "/path/to/file.txt"; // \SplFileObject[]

try {
    $result = $apiInstance->uploadFiles($domain_type, $domain_identifier, $files);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->uploadFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain_type** | **string**| The domain type. Currently supported are &#39;avatar&#39;, &#39;groupimage&#39;, &#39;logo&#39;, &#39;attatchments&#39;, &#39;html_template&#39;, &#39;service&#39;, &#39;song_arrangement&#39;, &#39;importtable&#39;, &#39;person&#39;, &#39;familyavatar&#39;, &#39;wiki_.?&#39;. |
 **domain_identifier** | **string**| the domain identifier |
 **files** | **\SplFileObject[]**|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
