# StevenBuehner\ChurchTools\CalendarApi

All URIs are relative to http://localhost/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTemplate()**](CalendarApi.md#createTemplate) | **POST** /calendars/appointments/templates | Create new appointment template
[**deleteTemplate()**](CalendarApi.md#deleteTemplate) | **DELETE** /calendars/appointments/templates/{templateId} | Delete a appointment template identified by id
[**getAllTemplates()**](CalendarApi.md#getAllTemplates) | **GET** /calendars/appointments/templates | get all appointment templates
[**getCalendars()**](CalendarApi.md#getCalendars) | **GET** /calendars | Your GET endpoint
[**getCalendarsAppointments()**](CalendarApi.md#getCalendarsAppointments) | **GET** /calendars/appointments | Your GET endpoint
[**getTemplateById()**](CalendarApi.md#getTemplateById) | **GET** /calendars/appointments/templates/{templateId} | get a appointment template
[**updateTemplate()**](CalendarApi.md#updateTemplate) | **PUT** /calendars/appointments/templates/{templateId} | update a appointment template identified by id


## `createTemplate()`

```php
createTemplate($inline_object14): \StevenBuehner\ChurchTools\Model\InlineResponse20034
```

Create new appointment template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object14 = new \StevenBuehner\ChurchTools\Model\InlineObject14(); // \StevenBuehner\ChurchTools\Model\InlineObject14

try {
    $result = $apiInstance->createTemplate($inline_object14);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->createTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object14** | [**\StevenBuehner\ChurchTools\Model\InlineObject14**](../Model/InlineObject14.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTemplate()`

```php
deleteTemplate($template_id)
```

Delete a appointment template identified by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 1; // int | ID of appointment template

try {
    $apiInstance->deleteTemplate($template_id);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->deleteTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **int**| ID of appointment template |

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllTemplates()`

```php
getAllTemplates(): \StevenBuehner\ChurchTools\Model\InlineResponse20034
```

get all appointment templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->getAllTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCalendars()`

```php
getCalendars(): \StevenBuehner\ChurchTools\Model\InlineResponse200126
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


$apiInstance = new StevenBuehner\ChurchTools\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCalendars();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->getCalendars: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse200126**](../Model/InlineResponse200126.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCalendarsAppointments()`

```php
getCalendarsAppointments($calendar_ids, $from, $to): \StevenBuehner\ChurchTools\Model\InlineResponse200125
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


$apiInstance = new StevenBuehner\ChurchTools\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calendar_ids = NULL; // array
$from = Sat Jan 01 01:00:00 CET 2022; // \DateTime
$to = Wed Mar 30 02:00:00 CEST 2022; // \DateTime

try {
    $result = $apiInstance->getCalendarsAppointments($calendar_ids, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->getCalendarsAppointments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **calendar_ids** | [**array**](../Model/.md)|  | [optional]
 **from** | **\DateTime**|  | [optional]
 **to** | **\DateTime**|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse200125**](../Model/InlineResponse200125.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTemplateById()`

```php
getTemplateById($template_id): \StevenBuehner\ChurchTools\Model\InlineResponse20035
```

get a appointment template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 1; // int | ID of appointment template

try {
    $result = $apiInstance->getTemplateById($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->getTemplateById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **int**| ID of appointment template |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20035**](../Model/InlineResponse20035.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTemplate()`

```php
updateTemplate($template_id, $inline_object15): \StevenBuehner\ChurchTools\Model\InlineResponse20035
```

update a appointment template identified by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 1; // int | ID of appointment template
$inline_object15 = new \StevenBuehner\ChurchTools\Model\InlineObject15(); // \StevenBuehner\ChurchTools\Model\InlineObject15

try {
    $result = $apiInstance->updateTemplate($template_id, $inline_object15);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->updateTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **int**| ID of appointment template |
 **inline_object15** | [**\StevenBuehner\ChurchTools\Model\InlineObject15**](../Model/InlineObject15.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20035**](../Model/InlineResponse20035.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
