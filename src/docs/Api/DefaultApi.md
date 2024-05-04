# StevenBuehner\ChurchTools\DefaultApi

All URIs are relative to /api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteRuleset()**](DefaultApi.md#deleteRuleset) | **DELETE** /dynamicgroups/{groupId}/ruleset |  |
| [**getDbfieldsFieldId()**](DefaultApi.md#getDbfieldsFieldId) | **GET** /dbfields/{fieldId} | GET DB Field |
| [**getGroupsGroupIdTagsTagId()**](DefaultApi.md#getGroupsGroupIdTagsTagId) | **GET** /groups/{groupId}/tags/{tagId} | Your GET endpoint |


## `deleteRuleset()`

```php
deleteRuleset($group_id)
```



> **Caution**: This is an preliminary API, and is subject to be changed.  Delete the ruleset of a dynamic Group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | id of the group

try {
    $apiInstance->deleteRuleset($group_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteRuleset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| id of the group | |

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

## `getDbfieldsFieldId()`

```php
getDbfieldsFieldId($field_id): \StevenBuehner\ChurchTools\Model\PostApiDbfields200Response
```

GET DB Field

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string

try {
    $result = $apiInstance->getDbfieldsFieldId($field_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getDbfieldsFieldId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**|  | |

### Return type

[**\StevenBuehner\ChurchTools\Model\PostApiDbfields200Response**](../Model/PostApiDbfields200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsGroupIdTagsTagId()`

```php
getGroupsGroupIdTagsTagId($group_id, $tag_id)
```

Your GET endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string
$tag_id = 'tag_id_example'; // string

try {
    $apiInstance->getGroupsGroupIdTagsTagId($group_id, $tag_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getGroupsGroupIdTagsTagId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**|  | |
| **tag_id** | **string**|  | |

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
