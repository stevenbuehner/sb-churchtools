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


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\ContactLabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $apiInstance->deleteContactlabel($id);
} catch (Exception $e) {
    echo 'Exception when calling ContactLabelApi->deleteContactlabel: ', $e->getMessage(), PHP_EOL;
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

## `getContactlabel()`

```php
getContactlabel($id): \StevenBuehner\ChurchTools\Model\GetContactlabel200Response
```

Get Contact Label

Fetch one specific contact label.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\ContactLabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

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
 **id** | **int**| ID of Entity |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetContactlabel200Response**](../Model/GetContactlabel200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactlabels()`

```php
getContactlabels(): \StevenBuehner\ChurchTools\Model\GetContactlabels200Response
```

Get All Contact Labels

Fetch all contact labels.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
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

[**\StevenBuehner\ChurchTools\Model\GetContactlabels200Response**](../Model/GetContactlabels200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postContactlabels()`

```php
postContactlabels($post_contactlabels_request): \StevenBuehner\ChurchTools\Model\PostContactlabels201Response
```

Create new Contact Label

Save new contact label.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\ContactLabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_contactlabels_request = new \StevenBuehner\ChurchTools\Model\PostContactlabelsRequest(); // \StevenBuehner\ChurchTools\Model\PostContactlabelsRequest | 

try {
    $result = $apiInstance->postContactlabels($post_contactlabels_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactLabelApi->postContactlabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_contactlabels_request** | [**\StevenBuehner\ChurchTools\Model\PostContactlabelsRequest**](../Model/PostContactlabelsRequest.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\PostContactlabels201Response**](../Model/PostContactlabels201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putContactlabel()`

```php
putContactlabel($id, $put_contactlabel_request): \StevenBuehner\ChurchTools\Model\GetContactlabel200Response
```

Update Contact Label

Update contact label.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\ContactLabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$put_contactlabel_request = new \StevenBuehner\ChurchTools\Model\PutContactlabelRequest(); // \StevenBuehner\ChurchTools\Model\PutContactlabelRequest | 

try {
    $result = $apiInstance->putContactlabel($id, $put_contactlabel_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactLabelApi->putContactlabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Entity |
 **put_contactlabel_request** | [**\StevenBuehner\ChurchTools\Model\PutContactlabelRequest**](../Model/PutContactlabelRequest.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\GetContactlabel200Response**](../Model/GetContactlabel200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
