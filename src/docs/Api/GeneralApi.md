# StevenBuehner\ChurchTools\GeneralApi

All URIs are relative to /api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteSimulate()**](GeneralApi.md#deleteSimulate) | **DELETE** /simulate |  |
| [**getApiInfo()**](GeneralApi.md#getApiInfo) | **GET** /info | Information about API |
| [**getCsrftoken()**](GeneralApi.md#getCsrftoken) | **GET** /csrftoken | CSRF token for the current user |
| [**getCurrentUser()**](GeneralApi.md#getCurrentUser) | **GET** /whoami | Currently logged in user. |
| [**getSearch()**](GeneralApi.md#getSearch) | **GET** /search | Global Search |
| [**postLogin()**](GeneralApi.md#postLogin) | **POST** /login | Login with username |
| [**postSimulate()**](GeneralApi.md#postSimulate) | **POST** /simulate |  |


## `deleteSimulate()`

```php
deleteSimulate(): \StevenBuehner\ChurchTools\Model\DeleteSimulate200Response
```



Stops the current simulation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->deleteSimulate();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->deleteSimulate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\DeleteSimulate200Response**](../Model/DeleteSimulate200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiInfo()`

```php
getApiInfo(): \StevenBuehner\ChurchTools\Model\GetApiInfo200Response
```

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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\GetApiInfo200Response**](../Model/GetApiInfo200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCsrftoken()`

```php
getCsrftoken(): \StevenBuehner\ChurchTools\Model\GetCsrftoken200Response
```

CSRF token for the current user

Returns the CSRF-Token for the current user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCsrftoken();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->getCsrftoken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\GetCsrftoken200Response**](../Model/GetCsrftoken200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCurrentUser()`

```php
getCurrentUser($only_allow_authenticated): \StevenBuehner\ChurchTools\Model\PutCheckinPersons200Response
```

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
$only_allow_authenticated = false; // bool | If set to `true` the route will return 401 Unauthorized if the user is not logged in.

try {
    $result = $apiInstance->getCurrentUser($only_allow_authenticated);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->getCurrentUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **only_allow_authenticated** | **bool**| If set to &#x60;true&#x60; the route will return 401 Unauthorized if the user is not logged in. | [optional] |

### Return type

[**\StevenBuehner\ChurchTools\Model\PutCheckinPersons200Response**](../Model/PutCheckinPersons200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSearch()`

```php
getSearch($query, $domain_types): \StevenBuehner\ChurchTools\Model\GetSearch200Response
```

Global Search

Search globally for different or all domainTypes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = max; // string
$domain_types = array('domain_types_example'); // string[]

try {
    $result = $apiInstance->getSearch($query, $domain_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->getSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**|  | |
| **domain_types** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetSearch200Response**](../Model/GetSearch200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postLogin()`

```php
postLogin($post_login_request): \StevenBuehner\ChurchTools\Model\PostLogin200Response
```

Login with username



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_login_request = new \StevenBuehner\ChurchTools\Model\PostLoginRequest(); // \StevenBuehner\ChurchTools\Model\PostLoginRequest

try {
    $result = $apiInstance->postLogin($post_login_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->postLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_login_request** | [**\StevenBuehner\ChurchTools\Model\PostLoginRequest**](../Model/PostLoginRequest.md)|  | [optional] |

### Return type

[**\StevenBuehner\ChurchTools\Model\PostLogin200Response**](../Model/PostLogin200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSimulate()`

```php
postSimulate($post_simulate_request)
```



Starts the simulation of another person

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_simulate_request = new \StevenBuehner\ChurchTools\Model\PostSimulateRequest(); // \StevenBuehner\ChurchTools\Model\PostSimulateRequest

try {
    $apiInstance->postSimulate($post_simulate_request);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->postSimulate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_simulate_request** | [**\StevenBuehner\ChurchTools\Model\PostSimulateRequest**](../Model/PostSimulateRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
