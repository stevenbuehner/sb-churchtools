# StevenBuehner\ChurchTools\CampusApi

All URIs are relative to /api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNewCampus()**](CampusApi.md#createNewCampus) | **POST** /campuses | 
[**deleteCampus()**](CampusApi.md#deleteCampus) | **DELETE** /campuses/{id} | 
[**getAllCampuses()**](CampusApi.md#getAllCampuses) | **GET** /campuses | Get all campuses
[**getCampus()**](CampusApi.md#getCampus) | **GET** /campuses/{id} | 
[**updateCampus()**](CampusApi.md#updateCampus) | **PUT** /campuses/{id} | 


## `createNewCampus()`

```php
createNewCampus($inline_object): \StevenBuehner\ChurchTools\Model\InlineResponse201
```



Save new campus

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\CampusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object = new \StevenBuehner\ChurchTools\Model\InlineObject(); // \StevenBuehner\ChurchTools\Model\InlineObject

try {
    $result = $apiInstance->createNewCampus($inline_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampusApi->createNewCampus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object** | [**\StevenBuehner\ChurchTools\Model\InlineObject**](../Model/InlineObject.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCampus()`

```php
deleteCampus($id)
```



Delete a campus

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\CampusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of campus

try {
    $apiInstance->deleteCampus($id);
} catch (Exception $e) {
    echo 'Exception when calling CampusApi->deleteCampus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of campus |

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

## `getAllCampuses()`

```php
getAllCampuses(): \StevenBuehner\ChurchTools\Model\InlineResponse2002
```

Get all campuses

Returns an array of all campuses defined in ChurchTools. Campuses are sorted by its `sortKey` by default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\CampusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllCampuses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampusApi->getAllCampuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampus()`

```php
getCampus($id): \StevenBuehner\ChurchTools\Model\InlineResponse2003
```



Get a specific campus

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\CampusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of campus

try {
    $result = $apiInstance->getCampus($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampusApi->getCampus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of campus |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCampus()`

```php
updateCampus($id, $inline_object1): \StevenBuehner\ChurchTools\Model\InlineResponse2003
```



Update campus

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\CampusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of campus
$inline_object1 = new \StevenBuehner\ChurchTools\Model\InlineObject1(); // \StevenBuehner\ChurchTools\Model\InlineObject1

try {
    $result = $apiInstance->updateCampus($id, $inline_object1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampusApi->updateCampus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of campus |
 **inline_object1** | [**\StevenBuehner\ChurchTools\Model\InlineObject1**](../Model/InlineObject1.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
