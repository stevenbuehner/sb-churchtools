# StevenBuehner\ChurchTools\ContactLabelApi

All URIs are relative to /api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteContactlabel()**](ContactLabelApi.md#deleteContactlabel) | **DELETE** /contactlabels/{id} | Delete Contact Label
[**getContactlabel()**](ContactLabelApi.md#getContactlabel) | **GET** /contactlabels/{id} | Get Contact Label
[**getContactlabels()**](ContactLabelApi.md#getContactlabels) | **GET** /contactlabels | Get All Contact Labels
[**postContactlabels()**](ContactLabelApi.md#postContactlabels) | **POST** /contactlabels | Create new Contact Label
[**putContactlabel()**](ContactLabelApi.md#putContactlabel) | **PUT** /contactlabels/{id} | Update Contact Label


## `deleteContactlabel()`

```php
deleteContactlabel($id)
```

Delete Contact Label

Delete a contact label.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\ContactLabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Contact Label ID

try {
    $apiInstance->deleteContactlabel($id);
} catch (Exception $e) {
    echo 'Exception when calling ContactLabelApi->deleteContactlabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Contact Label ID |

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

## `getContactlabel()`

```php
getContactlabel($id): \StevenBuehner\ChurchTools\Model\InlineResponse200106
```

Get Contact Label

Fetch one specific contact label.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\ContactLabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Contact Label ID

try {
    $result = $apiInstance->getContactlabel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactLabelApi->getContactlabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Contact Label ID |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse200106**](../Model/InlineResponse200106.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactlabels()`

```php
getContactlabels(): \StevenBuehner\ChurchTools\Model\InlineResponse200105
```

Get All Contact Labels

Fetch all contact labels.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\ContactLabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getContactlabels();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactLabelApi->getContactlabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse200105**](../Model/InlineResponse200105.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postContactlabels()`

```php
postContactlabels($inline_object60): \StevenBuehner\ChurchTools\Model\InlineResponse2015
```

Create new Contact Label

Save new contact label.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\ContactLabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object60 = new \StevenBuehner\ChurchTools\Model\InlineObject60(); // \StevenBuehner\ChurchTools\Model\InlineObject60

try {
    $result = $apiInstance->postContactlabels($inline_object60);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactLabelApi->postContactlabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object60** | [**\StevenBuehner\ChurchTools\Model\InlineObject60**](../Model/InlineObject60.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2015**](../Model/InlineResponse2015.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putContactlabel()`

```php
putContactlabel($id, $inline_object61): \StevenBuehner\ChurchTools\Model\InlineResponse200106
```

Update Contact Label

Update contact label.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\ContactLabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Contact Label ID
$inline_object61 = new \StevenBuehner\ChurchTools\Model\InlineObject61(); // \StevenBuehner\ChurchTools\Model\InlineObject61

try {
    $result = $apiInstance->putContactlabel($id, $inline_object61);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactLabelApi->putContactlabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Contact Label ID |
 **inline_object61** | [**\StevenBuehner\ChurchTools\Model\InlineObject61**](../Model/InlineObject61.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse200106**](../Model/InlineResponse200106.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
