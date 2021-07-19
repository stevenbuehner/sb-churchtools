# StevenBuehner\ChurchTools\FileApi

All URIs are relative to *https://teambb.church.tools/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteFileById**](FileApi.md#deletefilebyid) | **DELETE** /files/{id} | Delete file by id
[**deleteFiles**](FileApi.md#deletefiles) | **DELETE** /files/{domainType}/{domainIdentifier} | Delete files that are matching the domainType and domainIdentifier
[**uploadFiles**](FileApi.md#uploadfiles) | **POST** /files/{domainType}/{domainIdentifier} | Upload files

# **deleteFileById**
> deleteFileById($id)

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
$id = 56; // int | ID of file

try {
    $apiInstance->deleteFileById($id);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->deleteFileById: ', $e->getMessage(), PHP_EOL;
}
?>
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
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFiles**
> deleteFiles($domain_type, $domain_identifier)

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
$domain_type = "domain_type_example"; // string | The domain type. Currently supported are 'avatar', 'groupimage', 'logo', 'attatchments', 'html_template', 'service', 'song_arrangement', 'importtable', 'person', 'familyavatar', 'wiki_.?'.
$domain_identifier = "domain_identifier_example"; // string | the domain identifier

try {
    $apiInstance->deleteFiles($domain_type, $domain_identifier);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->deleteFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain_type** | **string**| The domain type. Currently supported are &#x27;avatar&#x27;, &#x27;groupimage&#x27;, &#x27;logo&#x27;, &#x27;attatchments&#x27;, &#x27;html_template&#x27;, &#x27;service&#x27;, &#x27;song_arrangement&#x27;, &#x27;importtable&#x27;, &#x27;person&#x27;, &#x27;familyavatar&#x27;, &#x27;wiki_.?&#x27;. |
 **domain_identifier** | **string**| the domain identifier |

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadFiles**
> \StevenBuehner\ChurchTools\Model\InlineResponse20031 uploadFiles($domain_type, $domain_identifier, $files)

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
$domain_type = "domain_type_example"; // string | The domain type. Currently supported are 'avatar', 'groupimage', 'logo', 'attatchments', 'html_template', 'service', 'song_arrangement', 'importtable', 'person', 'familyavatar', 'wiki_.?'.
$domain_identifier = "domain_identifier_example"; // string | the domain identifier
$files = array("files_example"); // string[] | 

try {
    $result = $apiInstance->uploadFiles($domain_type, $domain_identifier, $files);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->uploadFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain_type** | **string**| The domain type. Currently supported are &#x27;avatar&#x27;, &#x27;groupimage&#x27;, &#x27;logo&#x27;, &#x27;attatchments&#x27;, &#x27;html_template&#x27;, &#x27;service&#x27;, &#x27;song_arrangement&#x27;, &#x27;importtable&#x27;, &#x27;person&#x27;, &#x27;familyavatar&#x27;, &#x27;wiki_.?&#x27;. |
 **domain_identifier** | **string**| the domain identifier |
 **files** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20031**](../Model/InlineResponse20031.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

