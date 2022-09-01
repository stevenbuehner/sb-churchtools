# StevenBuehner\ChurchTools\FileApi

All URIs are relative to /api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteFiles()**](FileApi.md#deleteFiles) | **DELETE** /files/{domainType}/{domainIdentifier} | Delete files that are matching the domainType and domainIdentifier
[**deleteFilesId()**](FileApi.md#deleteFilesId) | **DELETE** /files/{id} | 
[**getFileWithDomainType()**](FileApi.md#getFileWithDomainType) | **GET** /files/{domainType}/{domainIdentifier} | CRUD for files
[**getFilesMetadata()**](FileApi.md#getFilesMetadata) | **GET** /files/{fileId}/metadata | Get Metadata for file
[**patchFilesId()**](FileApi.md#patchFilesId) | **PATCH** /files/{id} | 
[**putImageOptions()**](FileApi.md#putImageOptions) | **PUT** /images/{id}/options | set image-options
[**uploadFiles()**](FileApi.md#uploadFiles) | **POST** /files/{domainType}/{domainIdentifier} | Upload files


## `deleteFiles()`

```php
deleteFiles($domain_type, $domain_identifier)
```

Delete files that are matching the domainType and domainIdentifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
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
$domain_identifier = 35; // int | the domain identifier

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
 **domain_identifier** | **int**| the domain identifier |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFilesId()`

```php
deleteFilesId($id)
```



delete file by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $apiInstance->deleteFilesId($id);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->deleteFilesId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Entity |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFileWithDomainType()`

```php
getFileWithDomainType($domain_type, $domain_identifier): \StevenBuehner\ChurchTools\Model\GetFileWithDomainType200Response
```

CRUD for files

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
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
$domain_identifier = 35; // int | the domain identifier

try {
    $result = $apiInstance->getFileWithDomainType($domain_type, $domain_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->getFileWithDomainType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain_type** | **string**| The domain type. Currently supported are &#39;avatar&#39;, &#39;groupimage&#39;, &#39;logo&#39;, &#39;attatchments&#39;, &#39;html_template&#39;, &#39;service&#39;, &#39;song_arrangement&#39;, &#39;importtable&#39;, &#39;person&#39;, &#39;familyavatar&#39;, &#39;wiki_.?&#39;. |
 **domain_identifier** | **int**| the domain identifier |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetFileWithDomainType200Response**](../Model/GetFileWithDomainType200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFilesMetadata()`

```php
getFilesMetadata($file_id): \StevenBuehner\ChurchTools\Model\GetFilesMetadata200Response
```

Get Metadata for file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_id = 'file_id_example'; // string

try {
    $result = $apiInstance->getFilesMetadata($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->getFilesMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | **string**|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetFilesMetadata200Response**](../Model/GetFilesMetadata200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchFilesId()`

```php
patchFilesId($id): \StevenBuehner\ChurchTools\Model\PatchFilesId204Response
```



rename name of a file by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->patchFilesId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->patchFilesId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Entity |

### Return type

[**\StevenBuehner\ChurchTools\Model\PatchFilesId204Response**](../Model/PatchFilesId204Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putImageOptions()`

```php
putImageOptions($id, $put_image_options_request): \StevenBuehner\ChurchTools\Model\PutImageOptions200Response
```

set image-options

Sets options as JSON like cropping and focus point

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$put_image_options_request = new \StevenBuehner\ChurchTools\Model\PutImageOptionsRequest(); // \StevenBuehner\ChurchTools\Model\PutImageOptionsRequest

try {
    $result = $apiInstance->putImageOptions($id, $put_image_options_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->putImageOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Entity |
 **put_image_options_request** | [**\StevenBuehner\ChurchTools\Model\PutImageOptionsRequest**](../Model/PutImageOptionsRequest.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\PutImageOptions200Response**](../Model/PutImageOptions200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadFiles()`

```php
uploadFiles($domain_type, $domain_identifier, $files): \StevenBuehner\ChurchTools\Model\UploadFiles200Response
```

Upload files

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
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
$domain_identifier = 35; // int | the domain identifier
$files = array("/path/to/file.txt"); // \SplFileObject[]

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
 **domain_identifier** | **int**| the domain identifier |
 **files** | **\SplFileObject[]**|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\UploadFiles200Response**](../Model/UploadFiles200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
