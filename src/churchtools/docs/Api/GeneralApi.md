# StevenBuehner\ChurchTools\GeneralApi

All URIs are relative to *https://teambb.church.tools/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiInfo**](GeneralApi.md#getapiinfo) | **GET** /info | Information about API
[**getCurrentUser**](GeneralApi.md#getcurrentuser) | **GET** /whoami | Currently logged in user.

# **getApiInfo**
> \StevenBuehner\ChurchTools\Model\InlineResponse200 getApiInfo()

Information about API

The API envoles and dependes on the ChurchTools version. This endpoint provides the build version and CT version.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new StevenBuehner\ChurchTools\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getApiInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->getApiInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrentUser**
> \StevenBuehner\ChurchTools\Model\InlineResponse2001 getCurrentUser($only_allow_authenticated)

Currently logged in user.

This endpoint returns the current user. If the request is unauthorized, the anonymous user (aka public user) is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new StevenBuehner\ChurchTools\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$only_allow_authenticated = true; // bool | If set to `true` the route will return 401 Unauthorized if the user is not logged in.

try {
    $result = $apiInstance->getCurrentUser($only_allow_authenticated);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->getCurrentUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **only_allow_authenticated** | **bool**| If set to &#x60;true&#x60; the route will return 401 Unauthorized if the user is not logged in. | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

