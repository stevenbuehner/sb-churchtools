# StevenBuehner\ChurchTools\ServiceServiceGroupsApi

All URIs are relative to *https://teambb.church.tools/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**declineServiceRequestById**](ServiceServiceGroupsApi.md#declineservicerequestbyid) | **DELETE** /persons/{id}/servicerequests/{requestId} | Decline a service request for a person
[**getAllServiceGroups**](ServiceServiceGroupsApi.md#getallservicegroups) | **GET** /servicegroups | Get all service groups
[**getAllServices**](ServiceServiceGroupsApi.md#getallservices) | **GET** /services | Get all services
[**getOpenServiceRequestsForPerson**](ServiceServiceGroupsApi.md#getopenservicerequestsforperson) | **GET** /persons/{id}/servicerequests | Get all service requests for a person
[**getServiceRequestById**](ServiceServiceGroupsApi.md#getservicerequestbyid) | **GET** /persons/{id}/servicerequests/{requestId} | Get a specific service request for a person
[**undoServiceRequestById**](ServiceServiceGroupsApi.md#undoservicerequestbyid) | **POST** /persons/{id}/servicerequests/{requestId}/undo | Undo last service request action
[**updateServiceRequestById**](ServiceServiceGroupsApi.md#updateservicerequestbyid) | **POST** /persons/{id}/servicerequests/{requestId} | Agree to a service request for a person

# **declineServiceRequestById**
> declineServiceRequestById($id, $request_id, $comment)

Decline a service request for a person

Use this endpoint to decline a service request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\ServiceServiceGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of person
$request_id = 56; // int | ID of a service request
$comment = "comment_example"; // string | Comment

try {
    $apiInstance->declineServiceRequestById($id, $request_id, $comment);
} catch (Exception $e) {
    echo 'Exception when calling ServiceServiceGroupsApi->declineServiceRequestById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of person |
 **request_id** | **int**| ID of a service request |
 **comment** | **string**| Comment | [optional]

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllServiceGroups**
> \StevenBuehner\ChurchTools\Model\InlineResponse20026 getAllServiceGroups()

Get all service groups

This endpoint returns an array with all service groups.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\ServiceServiceGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllServiceGroups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceServiceGroupsApi->getAllServiceGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllServices**
> \StevenBuehner\ChurchTools\Model\InlineResponse20027 getAllServices()

Get all services

This endpoint returns an array with all services.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\ServiceServiceGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllServices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceServiceGroupsApi->getAllServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOpenServiceRequestsForPerson**
> \StevenBuehner\ChurchTools\Model\InlineResponse20014 getOpenServiceRequestsForPerson($id)

Get all service requests for a person

Use this endpoint to get all service requests for this user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\ServiceServiceGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of person

try {
    $result = $apiInstance->getOpenServiceRequestsForPerson($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceServiceGroupsApi->getOpenServiceRequestsForPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of person |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServiceRequestById**
> \StevenBuehner\ChurchTools\Model\InlineResponse20015 getServiceRequestById($id, $request_id)

Get a specific service request for a person

Use this endpoint to get a specific service request for this user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\ServiceServiceGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of person
$request_id = 56; // int | ID of a service request

try {
    $result = $apiInstance->getServiceRequestById($id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceServiceGroupsApi->getServiceRequestById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of person |
 **request_id** | **int**| ID of a service request |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **undoServiceRequestById**
> \StevenBuehner\ChurchTools\Model\InlineResponse20015 undoServiceRequestById($id, $request_id)

Undo last service request action

This endpoint can undo either a declination or an acceptance. Only the requested person can issue this undo and the undo action is only possible within a specific time frame.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\ServiceServiceGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of person
$request_id = 56; // int | ID of a service request

try {
    $result = $apiInstance->undoServiceRequestById($id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceServiceGroupsApi->undoServiceRequestById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of person |
 **request_id** | **int**| ID of a service request |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateServiceRequestById**
> \StevenBuehner\ChurchTools\Model\InlineResponse20015 updateServiceRequestById($body, $id, $request_id)

Agree to a service request for a person

Use this endpoint to agree to a service request. To decline a service request, use the DELETE method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\ServiceServiceGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \StevenBuehner\ChurchTools\Model\Body8(); // \StevenBuehner\ChurchTools\Model\Body8 | Send the agreed state and optionally a comment.
$id = 56; // int | ID of person
$request_id = 56; // int | ID of a service request

try {
    $result = $apiInstance->updateServiceRequestById($body, $id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceServiceGroupsApi->updateServiceRequestById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body8**](../Model/Body8.md)| Send the agreed state and optionally a comment. |
 **id** | **int**| ID of person |
 **request_id** | **int**| ID of a service request |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

