# StevenBuehner\ChurchTools\FactApi

All URIs are relative to /api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteEventsEventIdFactsFactId()**](FactApi.md#deleteEventsEventIdFactsFactId) | **DELETE** /events/{eventId}/facts/{factId} | Delete event fact |
| [**deleteFactsId()**](FactApi.md#deleteFactsId) | **DELETE** /facts/{id} | Delete Fact |
| [**getEventsEventIdFacts()**](FactApi.md#getEventsEventIdFacts) | **GET** /events/{eventId}/facts | Read facts for event |
| [**getEventsEventIdFactsFactId()**](FactApi.md#getEventsEventIdFactsFactId) | **GET** /events/{eventId}/facts/{factId} | Read one event fact |
| [**getFacts()**](FactApi.md#getFacts) | **GET** /facts | Get all facts |
| [**getFactsId()**](FactApi.md#getFactsId) | **GET** /facts/{id} | Get One Fact |
| [**postFacts()**](FactApi.md#postFacts) | **POST** /facts | Create new fact |
| [**putEventsEventIdFactsFactId()**](FactApi.md#putEventsEventIdFactsFactId) | **PUT** /events/{eventId}/facts/{factId} | Create or update event fact |
| [**putFactsId()**](FactApi.md#putFactsId) | **PUT** /facts/{id} | Update Fact |


## `deleteEventsEventIdFactsFactId()`

```php
deleteEventsEventIdFactsFactId($event_id, $fact_id, $dry_run)
```

Delete event fact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$fact_id = 'fact_id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->deleteEventsEventIdFactsFactId($event_id, $fact_id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FactApi->deleteEventsEventIdFactsFactId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **fact_id** | **string**|  | |
| **dry_run** | **bool**|  | [optional] |

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

## `deleteFactsId()`

```php
deleteFactsId($id)
```

Delete Fact

Delete a fact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->deleteFactsId($id);
} catch (Exception $e) {
    echo 'Exception when calling FactApi->deleteFactsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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

## `getEventsEventIdFacts()`

```php
getEventsEventIdFacts($event_id): \StevenBuehner\ChurchTools\Model\GetEventsEventIdFacts200Response
```

Read facts for event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string

try {
    $result = $apiInstance->getEventsEventIdFacts($event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FactApi->getEventsEventIdFacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetEventsEventIdFacts200Response**](../Model/GetEventsEventIdFacts200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEventsEventIdFactsFactId()`

```php
getEventsEventIdFactsFactId($event_id, $fact_id): \StevenBuehner\ChurchTools\Model\GetEventsEventIdFactsFactId200Response
```

Read one event fact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$fact_id = 'fact_id_example'; // string

try {
    $result = $apiInstance->getEventsEventIdFactsFactId($event_id, $fact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FactApi->getEventsEventIdFactsFactId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **fact_id** | **string**|  | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetEventsEventIdFactsFactId200Response**](../Model/GetEventsEventIdFactsFactId200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFacts()`

```php
getFacts(): \StevenBuehner\ChurchTools\Model\GetFacts200Response
```

Get all facts

Fetch all facts (masterdata).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getFacts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FactApi->getFacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\GetFacts200Response**](../Model/GetFacts200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFactsId()`

```php
getFactsId($id): \StevenBuehner\ChurchTools\Model\PostFacts201Response
```

Get One Fact

Fetch one fact by its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getFactsId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FactApi->getFactsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\StevenBuehner\ChurchTools\Model\PostFacts201Response**](../Model/PostFacts201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFacts()`

```php
postFacts($post_facts_request): \StevenBuehner\ChurchTools\Model\PostFacts201Response
```

Create new fact

Save new fact master data entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_facts_request = new \StevenBuehner\ChurchTools\Model\PostFactsRequest(); // \StevenBuehner\ChurchTools\Model\PostFactsRequest | 

try {
    $result = $apiInstance->postFacts($post_facts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FactApi->postFacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_facts_request** | [**\StevenBuehner\ChurchTools\Model\PostFactsRequest**](../Model/PostFactsRequest.md)|  | [optional] |

### Return type

[**\StevenBuehner\ChurchTools\Model\PostFacts201Response**](../Model/PostFacts201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putEventsEventIdFactsFactId()`

```php
putEventsEventIdFactsFactId($event_id, $fact_id, $put_events_event_id_facts_fact_id_request): \StevenBuehner\ChurchTools\Model\GetEventsEventIdFactsFactId200Response
```

Create or update event fact



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$fact_id = 'fact_id_example'; // string
$put_events_event_id_facts_fact_id_request = new \StevenBuehner\ChurchTools\Model\PutEventsEventIdFactsFactIdRequest(); // \StevenBuehner\ChurchTools\Model\PutEventsEventIdFactsFactIdRequest | Pass the `value` for that fact as payload. The value is always a `string`. For numeric facts the value MUST be a numeric value. For select facts the value MUST be a valid option.

try {
    $result = $apiInstance->putEventsEventIdFactsFactId($event_id, $fact_id, $put_events_event_id_facts_fact_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FactApi->putEventsEventIdFactsFactId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **fact_id** | **string**|  | |
| **put_events_event_id_facts_fact_id_request** | [**\StevenBuehner\ChurchTools\Model\PutEventsEventIdFactsFactIdRequest**](../Model/PutEventsEventIdFactsFactIdRequest.md)| Pass the &#x60;value&#x60; for that fact as payload. The value is always a &#x60;string&#x60;. For numeric facts the value MUST be a numeric value. For select facts the value MUST be a valid option. | [optional] |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetEventsEventIdFactsFactId200Response**](../Model/GetEventsEventIdFactsFactId200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putFactsId()`

```php
putFactsId($id, $put_facts_id_request): \StevenBuehner\ChurchTools\Model\PostFacts201Response
```

Update Fact

Update a fact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$put_facts_id_request = new \StevenBuehner\ChurchTools\Model\PutFactsIdRequest(); // \StevenBuehner\ChurchTools\Model\PutFactsIdRequest

try {
    $result = $apiInstance->putFactsId($id, $put_facts_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FactApi->putFactsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **put_facts_id_request** | [**\StevenBuehner\ChurchTools\Model\PutFactsIdRequest**](../Model/PutFactsIdRequest.md)|  | [optional] |

### Return type

[**\StevenBuehner\ChurchTools\Model\PostFacts201Response**](../Model/PostFacts201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
