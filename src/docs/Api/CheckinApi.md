# StevenBuehner\ChurchTools\CheckinApi

All URIs are relative to /api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkin()**](CheckinApi.md#checkin) | **POST** /groups/{groupId}/checkin/{personId} | Checkin a person to a group
[**getQRCodeCheckin()**](CheckinApi.md#getQRCodeCheckin) | **GET** /groups/{groupId}/qrcodecheckin/{personId}/pdf | Get link to QR-Code for CheckIn PDF
[**postCheckinPersons()**](CheckinApi.md#postCheckinPersons) | **POST** /checkin/persons | Create new person and add to group
[**putCheckinPersons()**](CheckinApi.md#putCheckinPersons) | **PUT** /checkin/persons | Put existing person into group


## `checkin()`

```php
checkin($group_id, $person_id, $inline_object11): \StevenBuehner\ChurchTools\Model\InlineResponse20024
```

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
$group_id = 42; // int | ID of group
$person_id = 7; // int | ID of person
$inline_object11 = new \StevenBuehner\ChurchTools\Model\InlineObject11(); // \StevenBuehner\ChurchTools\Model\InlineObject11

try {
    $result = $apiInstance->checkin($group_id, $person_id, $inline_object11);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckinApi->checkin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of group |
 **person_id** | **int**| ID of person |
 **inline_object11** | [**\StevenBuehner\ChurchTools\Model\InlineObject11**](../Model/InlineObject11.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getQRCodeCheckin()`

```php
getQRCodeCheckin($group_id, $person_id): \StevenBuehner\ChurchTools\Model\InlineResponse20023
```

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
$group_id = 42; // int | ID of group
$person_id = 42; // int | ID of person

try {
    $result = $apiInstance->getQRCodeCheckin($group_id, $person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckinApi->getQRCodeCheckin: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCheckinPersons()`

```php
postCheckinPersons($inline_object67): \StevenBuehner\ChurchTools\Model\InlineResponse2001
```

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
$inline_object67 = new \StevenBuehner\ChurchTools\Model\InlineObject67(); // \StevenBuehner\ChurchTools\Model\InlineObject67

try {
    $result = $apiInstance->postCheckinPersons($inline_object67);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckinApi->postCheckinPersons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object67** | [**\StevenBuehner\ChurchTools\Model\InlineObject67**](../Model/InlineObject67.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putCheckinPersons()`

```php
putCheckinPersons($inline_object66): \StevenBuehner\ChurchTools\Model\InlineResponse2001
```

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
$inline_object66 = new \StevenBuehner\ChurchTools\Model\InlineObject66(); // \StevenBuehner\ChurchTools\Model\InlineObject66

try {
    $result = $apiInstance->putCheckinPersons($inline_object66);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckinApi->putCheckinPersons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object66** | [**\StevenBuehner\ChurchTools\Model\InlineObject66**](../Model/InlineObject66.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
