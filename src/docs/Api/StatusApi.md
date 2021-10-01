# StevenBuehner\ChurchTools\StatusApi

All URIs are relative to https://teambb.church.tools/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNewStatus()**](StatusApi.md#createNewStatus) | **POST** /statuses | Save new status
[**getAllStatuses()**](StatusApi.md#getAllStatuses) | **GET** /statuses | Get all statuses
[**statusesIdDelete()**](StatusApi.md#statusesIdDelete) | **DELETE** /statuses/{id} | Delete a status
[**statusesIdGet()**](StatusApi.md#statusesIdGet) | **GET** /statuses/{id} | Get a specific status
[**statusesIdPut()**](StatusApi.md#statusesIdPut) | **PUT** /statuses/{id} | Update status


## `createNewStatus()`

```php
createNewStatus($inline_object2): \StevenBuehner\ChurchTools\Model\InlineResponse2011
```

Save new status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\StatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object2 = new \StevenBuehner\ChurchTools\Model\InlineObject2(); // \StevenBuehner\ChurchTools\Model\InlineObject2

try {
    $result = $apiInstance->createNewStatus($inline_object2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusApi->createNewStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object2** | [**\StevenBuehner\ChurchTools\Model\InlineObject2**](../Model/InlineObject2.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllStatuses()`

```php
getAllStatuses(): \StevenBuehner\ChurchTools\Model\InlineResponse2005
```

Get all statuses

Returns an array of all statuses defined in ChurchTools. Statuses are sorted by its `sortKey` by default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\StatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllStatuses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusApi->getAllStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `statusesIdDelete()`

```php
statusesIdDelete($id)
```

Delete a status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\StatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of status

try {
    $apiInstance->statusesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling StatusApi->statusesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of status |

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `statusesIdGet()`

```php
statusesIdGet($id): \StevenBuehner\ChurchTools\Model\InlineResponse2006
```

Get a specific status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\StatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of status

try {
    $result = $apiInstance->statusesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusApi->statusesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of status |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `statusesIdPut()`

```php
statusesIdPut($id, $inline_object3): \StevenBuehner\ChurchTools\Model\InlineResponse2006
```

Update status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\StatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of status
$inline_object3 = new \StevenBuehner\ChurchTools\Model\InlineObject3(); // \StevenBuehner\ChurchTools\Model\InlineObject3

try {
    $result = $apiInstance->statusesIdPut($id, $inline_object3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusApi->statusesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of status |
 **inline_object3** | [**\StevenBuehner\ChurchTools\Model\InlineObject3**](../Model/InlineObject3.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
