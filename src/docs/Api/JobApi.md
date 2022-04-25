# StevenBuehner\ChurchTools\JobApi

All URIs are relative to /api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getJobs()**](JobApi.md#getJobs) | **GET** /jobs | Your GET endpoint


## `getJobs()`

```php
getJobs($status, $identifier, $name, $domain_ids, $created_start_date, $created_end_date, $modified_start_date, $modified_end_date): \StevenBuehner\ChurchTools\Model\InlineResponse200112
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


$apiInstance = new StevenBuehner\ChurchTools\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = NULL; // array
$identifier = 'identifier_example'; // string
$name = 'name_example'; // string
$domain_ids = NULL; // array
$created_start_date = 'created_start_date_example'; // string
$created_end_date = 'created_end_date_example'; // string
$modified_start_date = 'modified_start_date_example'; // string
$modified_end_date = 'modified_end_date_example'; // string

try {
    $result = $apiInstance->getJobs($status, $identifier, $name, $domain_ids, $created_start_date, $created_end_date, $modified_start_date, $modified_end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getJobs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | [**array**](../Model/.md)|  | [optional]
 **identifier** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **domain_ids** | [**array**](../Model/.md)|  | [optional]
 **created_start_date** | **string**|  | [optional]
 **created_end_date** | **string**|  | [optional]
 **modified_start_date** | **string**|  | [optional]
 **modified_end_date** | **string**|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse200112**](../Model/InlineResponse200112.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
