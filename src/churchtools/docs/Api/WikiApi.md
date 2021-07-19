# StevenBuehner\ChurchTools\WikiApi

All URIs are relative to *https://teambb.church.tools/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getWikiCategories**](WikiApi.md#getwikicategories) | **GET** /wiki/categories | Get all wiki categories.
[**getWikiCategoriesWikiCategoryIdPages**](WikiApi.md#getwikicategorieswikicategoryidpages) | **GET** /wiki/categories/{wikiCategoryId}/pages | Returns all Wiki Pages in the given Category.
[**getWikiCategoriesWikiCategoryIdPagesIdentifier**](WikiApi.md#getwikicategorieswikicategoryidpagesidentifier) | **GET** /wiki/categories/{wikiCategoryId}/pages/{identifier} | Returns the latest version of the wiki page with the given identifier.
[**getWikiCategoriesWikiCategoryIdPagesIdentifierVersions**](WikiApi.md#getwikicategorieswikicategoryidpagesidentifierversions) | **GET** /wiki/categories/{wikiCategoryId}/pages/{identifier}/versions | Returns all version of the wiki page for the given
[**getWikiCategoriesWikiCategoryIdPagesVersionsVersion**](WikiApi.md#getwikicategorieswikicategoryidpagesversionsversion) | **GET** /wiki/categories/{wikiCategoryId}/pages/{identifier}/versions/{version} | Returns the wiki page with the given identifier and version.
[**getWikiCategoriesWikiCategoryIdSearch**](WikiApi.md#getwikicategorieswikicategoryidsearch) | **GET** /wiki/search | Your GET endpoint

# **getWikiCategories**
> \StevenBuehner\ChurchTools\Model\InlineResponse20085 getWikiCategories()

Get all wiki categories.

Get all wiki categories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\WikiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWikiCategories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WikiApi->getWikiCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20085**](../Model/InlineResponse20085.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWikiCategoriesWikiCategoryIdPages**
> \StevenBuehner\ChurchTools\Model\InlineResponse20088 getWikiCategoriesWikiCategoryIdPages($wiki_category_id)

Returns all Wiki Pages in the given Category.

Returns all Wiki Pages in the given Category. Only the latest version of each page is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\WikiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wiki_category_id = "wiki_category_id_example"; // string | 

try {
    $result = $apiInstance->getWikiCategoriesWikiCategoryIdPages($wiki_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WikiApi->getWikiCategoriesWikiCategoryIdPages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wiki_category_id** | **string**|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20088**](../Model/InlineResponse20088.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWikiCategoriesWikiCategoryIdPagesIdentifier**
> \StevenBuehner\ChurchTools\Model\InlineResponse20086 getWikiCategoriesWikiCategoryIdPagesIdentifier($wiki_category_id, $identifier)

Returns the latest version of the wiki page with the given identifier.

Returns the latest version of the wiki page with the given identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\WikiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wiki_category_id = "wiki_category_id_example"; // string | 
$identifier = "identifier_example"; // string | Can either be the pages identifier or its title

try {
    $result = $apiInstance->getWikiCategoriesWikiCategoryIdPagesIdentifier($wiki_category_id, $identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WikiApi->getWikiCategoriesWikiCategoryIdPagesIdentifier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wiki_category_id** | **string**|  |
 **identifier** | **string**| Can either be the pages identifier or its title |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20086**](../Model/InlineResponse20086.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWikiCategoriesWikiCategoryIdPagesIdentifierVersions**
> \StevenBuehner\ChurchTools\Model\InlineResponse20086 getWikiCategoriesWikiCategoryIdPagesIdentifierVersions($wiki_category_id, $identifier)

Returns all version of the wiki page for the given

Returns all version of the wiki page for the given identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\WikiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wiki_category_id = "wiki_category_id_example"; // string | 
$identifier = "identifier_example"; // string | Can either be the pages identifier or its title

try {
    $result = $apiInstance->getWikiCategoriesWikiCategoryIdPagesIdentifierVersions($wiki_category_id, $identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WikiApi->getWikiCategoriesWikiCategoryIdPagesIdentifierVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wiki_category_id** | **string**|  |
 **identifier** | **string**| Can either be the pages identifier or its title |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20086**](../Model/InlineResponse20086.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWikiCategoriesWikiCategoryIdPagesVersionsVersion**
> \StevenBuehner\ChurchTools\Model\InlineResponse20087 getWikiCategoriesWikiCategoryIdPagesVersionsVersion($wiki_category_id, $version, $identifier)

Returns the wiki page with the given identifier and version.

Returns the wiki page with the given identifier and version.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\WikiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wiki_category_id = "wiki_category_id_example"; // string | 
$version = "version_example"; // string | 
$identifier = "identifier_example"; // string | Can either be the pages identifier or its title

try {
    $result = $apiInstance->getWikiCategoriesWikiCategoryIdPagesVersionsVersion($wiki_category_id, $version, $identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WikiApi->getWikiCategoriesWikiCategoryIdPagesVersionsVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wiki_category_id** | **string**|  |
 **version** | **string**|  |
 **identifier** | **string**| Can either be the pages identifier or its title |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20087**](../Model/InlineResponse20087.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWikiCategoriesWikiCategoryIdSearch**
> \StevenBuehner\ChurchTools\Model\InlineResponse20089 getWikiCategoriesWikiCategoryIdSearch($query, $wiki_category_ids)

Your GET endpoint

Full text search in all wiki pages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\WikiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = "query_example"; // string | 
$wiki_category_ids = new \StevenBuehner\ChurchTools\Model\array(); // array | wiki categories that should be searched. if noone is given all categories are searched

try {
    $result = $apiInstance->getWikiCategoriesWikiCategoryIdSearch($query, $wiki_category_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WikiApi->getWikiCategoriesWikiCategoryIdSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**|  | [optional]
 **wiki_category_ids** | [**array**](../Model/.md)| wiki categories that should be searched. if noone is given all categories are searched | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20089**](../Model/InlineResponse20089.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

