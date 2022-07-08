# StevenBuehner\ChurchTools\StatusApi

All URIs are relative to /api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNewStatus()**](StatusApi.md#createNewStatus) | **POST** /statuses | Save new status
[**getAllStatuses()**](StatusApi.md#getAllStatuses) | **GET** /statuses | Get all statuses
[**statusesIdDelete()**](StatusApi.md#statusesIdDelete) | **DELETE** /statuses/{id} | Delete a status
[**statusesIdGet()**](StatusApi.md#statusesIdGet) | **GET** /statuses/{id} | Get a specific status
[**statusesIdPut()**](StatusApi.md#statusesIdPut) | **PUT** /statuses/{id} | Update status


## `createNewStatus()`

```php
createNewStatus($create_new_status_request): \StevenBuehner\ChurchTools\Model\CreateNewStatus201Response
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
$create_new_status_request = new \StevenBuehner\ChurchTools\Model\CreateNewStatusRequest(); // \StevenBuehner\ChurchTools\Model\CreateNewStatusRequest | Status to add

try {
    $result = $apiInstance->createNewStatus($create_new_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusApi->createNewStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_new_status_request** | [**\StevenBuehner\ChurchTools\Model\CreateNewStatusRequest**](../Model/CreateNewStatusRequest.md)| Status to add |

### Return type

[**\StevenBuehner\ChurchTools\Model\CreateNewStatus201Response**](../Model/CreateNewStatus201Response.md)

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
getAllStatuses(): \StevenBuehner\ChurchTools\Model\GetAllStatuses200Response
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

[**\StevenBuehner\ChurchTools\Model\GetAllStatuses200Response**](../Model/GetAllStatuses200Response.md)

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
statusesIdGet($id): \StevenBuehner\ChurchTools\Model\StatusesIdDelete200Response
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

[**\StevenBuehner\ChurchTools\Model\StatusesIdDelete200Response**](../Model/StatusesIdDelete200Response.md)

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
statusesIdPut($id, $statuses_id_delete_request): \StevenBuehner\ChurchTools\Model\StatusesIdDelete200Response
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
$statuses_id_delete_request = new \StevenBuehner\ChurchTools\Model\StatusesIdDeleteRequest(); // \StevenBuehner\ChurchTools\Model\StatusesIdDeleteRequest | New values for status

try {
    $result = $apiInstance->statusesIdPut($id, $statuses_id_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusApi->statusesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of status |
 **statuses_id_delete_request** | [**\StevenBuehner\ChurchTools\Model\StatusesIdDeleteRequest**](../Model/StatusesIdDeleteRequest.md)| New values for status |

### Return type

[**\StevenBuehner\ChurchTools\Model\StatusesIdDelete200Response**](../Model/StatusesIdDelete200Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
