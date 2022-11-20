# StevenBuehner\ChurchTools\CheckinApi

All URIs are relative to /api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkin()**](CheckinApi.md#checkin) | **POST** /groups/{groupId}/checkin | Checkin a person to a group |
| [**getQRCodeCheckin()**](CheckinApi.md#getQRCodeCheckin) | **GET** /groups/{groupId}/qrcodecheckin/{personId}/pdf | Get link to QR-Code for CheckIn PDF |
| [**postCheckinPersons()**](CheckinApi.md#postCheckinPersons) | **POST** /checkin/persons | Create new person and add to group |
| [**putCheckinPersons()**](CheckinApi.md#putCheckinPersons) | **PUT** /checkin/persons | Put existing person into group |


## `checkin()`

```php
checkin($group_id, $checkin_request): \StevenBuehner\ChurchTools\Model\Checkin200Response
```

Checkin a person to a group

Checkin a person to a group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
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
$checkin_request = new \StevenBuehner\ChurchTools\Model\CheckinRequest(); // \StevenBuehner\ChurchTools\Model\CheckinRequest

try {
    $result = $apiInstance->checkin($group_id, $checkin_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckinApi->checkin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **checkin_request** | [**\StevenBuehner\ChurchTools\Model\CheckinRequest**](../Model/CheckinRequest.md)|  | |

### Return type

[**\StevenBuehner\ChurchTools\Model\Checkin200Response**](../Model/Checkin200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getQRCodeCheckin()`

```php
getQRCodeCheckin($group_id, $person_id): \StevenBuehner\ChurchTools\Model\GetQRCodeCheckin200Response
```

Get link to QR-Code for CheckIn PDF

Get link to QR-Code for CheckIn PDF

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| ID of group | |
| **person_id** | **int**| ID of person | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetQRCodeCheckin200Response**](../Model/GetQRCodeCheckin200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCheckinPersons()`

```php
postCheckinPersons($post_checkin_persons_request): \StevenBuehner\ChurchTools\Model\PutCheckinPersons200Response
```

Create new person and add to group



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\CheckinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_checkin_persons_request = new \StevenBuehner\ChurchTools\Model\PostCheckinPersonsRequest(); // \StevenBuehner\ChurchTools\Model\PostCheckinPersonsRequest | 

try {
    $result = $apiInstance->postCheckinPersons($post_checkin_persons_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckinApi->postCheckinPersons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_checkin_persons_request** | [**\StevenBuehner\ChurchTools\Model\PostCheckinPersonsRequest**](../Model/PostCheckinPersonsRequest.md)|  | [optional] |

### Return type

[**\StevenBuehner\ChurchTools\Model\PutCheckinPersons200Response**](../Model/PutCheckinPersons200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putCheckinPersons()`

```php
putCheckinPersons($put_checkin_persons_request): \StevenBuehner\ChurchTools\Model\PutCheckinPersons200Response
```

Put existing person into group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\CheckinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$put_checkin_persons_request = new \StevenBuehner\ChurchTools\Model\PutCheckinPersonsRequest(); // \StevenBuehner\ChurchTools\Model\PutCheckinPersonsRequest | 

try {
    $result = $apiInstance->putCheckinPersons($put_checkin_persons_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckinApi->putCheckinPersons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **put_checkin_persons_request** | [**\StevenBuehner\ChurchTools\Model\PutCheckinPersonsRequest**](../Model/PutCheckinPersonsRequest.md)|  | [optional] |

### Return type

[**\StevenBuehner\ChurchTools\Model\PutCheckinPersons200Response**](../Model/PutCheckinPersons200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
