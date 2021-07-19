# StevenBuehner\ChurchTools\CheckinApi

All URIs are relative to *https://teambb.church.tools/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkin**](CheckinApi.md#checkin) | **POST** /groups/{groupId}/checkin/{personId} | Checkin a person to a group
[**getQRCodeCheckin**](CheckinApi.md#getqrcodecheckin) | **GET** /groups/{groupId}/qrcodecheckin/{personId}/pdf | Get link to QR-Code for CheckIn PDF
[**postCheckinPersons**](CheckinApi.md#postcheckinpersons) | **POST** /checkin/persons | Create new person and add to group
[**putCheckinPersons**](CheckinApi.md#putcheckinpersons) | **PUT** /checkin/persons | Put existing person into group

# **checkin**
> \StevenBuehner\ChurchTools\Model\InlineResponse20024 checkin($body, $group_id, $person_id)

Checkin a person to a group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\CheckinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \StevenBuehner\ChurchTools\Model\Body12(); // \StevenBuehner\ChurchTools\Model\Body12 | 
$group_id = 56; // int | ID of group
$person_id = 56; // int | ID of person

try {
    $result = $apiInstance->checkin($body, $group_id, $person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckinApi->checkin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body12**](../Model/Body12.md)|  |
 **group_id** | **int**| ID of group |
 **person_id** | **int**| ID of person |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQRCodeCheckin**
> \StevenBuehner\ChurchTools\Model\InlineResponse20023 getQRCodeCheckin($group_id, $person_id)

Get link to QR-Code for CheckIn PDF

Get link to QR-Code for CheckIn PDF

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\CheckinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | ID of group
$person_id = 56; // int | ID of person

try {
    $result = $apiInstance->getQRCodeCheckin($group_id, $person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckinApi->getQRCodeCheckin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of group |
 **person_id** | **int**| ID of person |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCheckinPersons**
> \StevenBuehner\ChurchTools\Model\InlineResponse2001 postCheckinPersons($body)

Create new person and add to group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\CheckinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \StevenBuehner\ChurchTools\Model\Body67(); // \StevenBuehner\ChurchTools\Model\Body67 | 

try {
    $result = $apiInstance->postCheckinPersons($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckinApi->postCheckinPersons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body67**](../Model/Body67.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCheckinPersons**
> \StevenBuehner\ChurchTools\Model\InlineResponse2001 putCheckinPersons($body)

Put existing person into group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\CheckinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \StevenBuehner\ChurchTools\Model\Body66(); // \StevenBuehner\ChurchTools\Model\Body66 | 

try {
    $result = $apiInstance->putCheckinPersons($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckinApi->putCheckinPersons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body66**](../Model/Body66.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

