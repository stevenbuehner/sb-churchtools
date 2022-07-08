# StevenBuehner\ChurchTools\DepartmentApi

All URIs are relative to /api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllDepartments()**](DepartmentApi.md#getAllDepartments) | **GET** /departments | Get all departments


## `getAllDepartments()`

```php
getAllDepartments(): \StevenBuehner\ChurchTools\Model\GetAllDepartments200Response
```

Get all departments

Returns an array of all departments defined in ChurchTools. Departments are sorted by its `sortKey` by default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\DepartmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllDepartments();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentApi->getAllDepartments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAllDepartments200Response**](../Model/GetAllDepartments200Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
