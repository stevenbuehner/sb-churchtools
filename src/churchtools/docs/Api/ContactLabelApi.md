# StevenBuehner\ChurchTools\ContactLabelApi

All URIs are relative to *https://teambb.church.tools/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteContactlabel**](ContactLabelApi.md#deletecontactlabel) | **DELETE** /contactlabels/{id} | Delete Contact Label
[**getContactlabel**](ContactLabelApi.md#getcontactlabel) | **GET** /contactlabels/{id} | Get Contact Label
[**getContactlabels**](ContactLabelApi.md#getcontactlabels) | **GET** /contactlabels | Get All Contact Labels
[**postContactlabels**](ContactLabelApi.md#postcontactlabels) | **POST** /contactlabels | Create new Contact Label
[**putContactlabel**](ContactLabelApi.md#putcontactlabel) | **PUT** /contactlabels/{id} | Update Contact Label

# **deleteContactlabel**
> deleteContactlabel($id)

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
$id = "id_example"; // string | Contact Label ID

try {
    $apiInstance->deleteContactlabel($id);
} catch (Exception $e) {
    echo 'Exception when calling ContactLabelApi->deleteContactlabel: ', $e->getMessage(), PHP_EOL;
}
?>
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

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactlabel**
> \StevenBuehner\ChurchTools\Model\InlineResponse200107 getContactlabel($id)

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
$id = "id_example"; // string | Contact Label ID

try {
    $result = $apiInstance->getContactlabel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactLabelApi->getContactlabel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Contact Label ID |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse200107**](../Model/InlineResponse200107.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactlabels**
> \StevenBuehner\ChurchTools\Model\InlineResponse200106 getContactlabels()

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
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse200106**](../Model/InlineResponse200106.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postContactlabels**
> \StevenBuehner\ChurchTools\Model\InlineResponse2015 postContactlabels($body)

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
$body = new \StevenBuehner\ChurchTools\Model\Body60(); // \StevenBuehner\ChurchTools\Model\Body60 | 

try {
    $result = $apiInstance->postContactlabels($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactLabelApi->postContactlabels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body60**](../Model/Body60.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2015**](../Model/InlineResponse2015.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putContactlabel**
> \StevenBuehner\ChurchTools\Model\InlineResponse200107 putContactlabel($id, $body)

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
$id = "id_example"; // string | Contact Label ID
$body = new \StevenBuehner\ChurchTools\Model\Body61(); // \StevenBuehner\ChurchTools\Model\Body61 | 

try {
    $result = $apiInstance->putContactlabel($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactLabelApi->putContactlabel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Contact Label ID |
 **body** | [**\StevenBuehner\ChurchTools\Model\Body61**](../Model/Body61.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse200107**](../Model/InlineResponse200107.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

