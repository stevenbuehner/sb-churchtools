# StevenBuehner\ChurchTools\ResourceApi

All URIs are relative to http://localhost/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBookings()**](ResourceApi.md#getBookings) | **GET** /bookings | Your GET endpoint
[**getResourceMasterdata()**](ResourceApi.md#getResourceMasterdata) | **GET** /resource/masterdata | Your GET endpoint


## `getBookings()`

```php
getBookings($resource_ids, $from, $to, $status_ids): \StevenBuehner\ChurchTools\Model\InlineResponse200124
```

Your GET endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\ResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource_ids = NULL; // array
$from = Tue Mar 01 01:00:00 CET 2022; // \DateTime
$to = Wed Mar 30 02:00:00 CEST 2022; // \DateTime
$status_ids = NULL; // array | 1 Wartet auf Bestätigung 2 Bestätigt 3 Abgelehnt 99 Gelöscht

try {
    $result = $apiInstance->getBookings($resource_ids, $from, $to, $status_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceApi->getBookings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_ids** | [**array**](../Model/.md)|  | [optional]
 **from** | **\DateTime**|  | [optional]
 **to** | **\DateTime**|  | [optional]
 **status_ids** | [**array**](../Model/.md)| 1 Wartet auf Bestätigung 2 Bestätigt 3 Abgelehnt 99 Gelöscht | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse200124**](../Model/InlineResponse200124.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getResourceMasterdata()`

```php
getResourceMasterdata(): \StevenBuehner\ChurchTools\Model\InlineResponse200123
```

Your GET endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\ResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getResourceMasterdata();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceApi->getResourceMasterdata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse200123**](../Model/InlineResponse200123.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
