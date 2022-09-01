# StevenBuehner\ChurchTools\CalendarApi

All URIs are relative to /api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTemplate()**](CalendarApi.md#createTemplate) | **POST** /calendars/appointments/templates | Create new appointment template
[**deleteTemplate()**](CalendarApi.md#deleteTemplate) | **DELETE** /calendars/appointments/templates/{templateId} | Delete a appointment template identified by id
[**getAllTemplates()**](CalendarApi.md#getAllTemplates) | **GET** /calendars/appointments/templates | get all appointment templates
[**getCalendars()**](CalendarApi.md#getCalendars) | **GET** /calendars | Your GET endpoint
[**getCalendarsAppointments()**](CalendarApi.md#getCalendarsAppointments) | **GET** /calendars/appointments | Your GET endpoint
[**getCalendarsCalendarIdAppointmentsAppointmentIdStartDate()**](CalendarApi.md#getCalendarsCalendarIdAppointmentsAppointmentIdStartDate) | **GET** /calendars/{calendarId}/appointments/{appointmentId}/{startDate} | Your GET endpoint
[**getTemplateById()**](CalendarApi.md#getTemplateById) | **GET** /calendars/appointments/templates/{templateId} | get a appointment template
[**postCalendarsCalendarIdAppointments()**](CalendarApi.md#postCalendarsCalendarIdAppointments) | **POST** /calendars/{calendarId}/appointments | 
[**updateTemplate()**](CalendarApi.md#updateTemplate) | **PUT** /calendars/appointments/templates/{templateId} | update a appointment template identified by id


## `createTemplate()`

```php
createTemplate($create_template_request): \StevenBuehner\ChurchTools\Model\GetAllTemplates200Response
```

Create new appointment template

Create new appointment template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_template_request = new \StevenBuehner\ChurchTools\Model\CreateTemplateRequest(); // \StevenBuehner\ChurchTools\Model\CreateTemplateRequest | appointment template data

try {
    $result = $apiInstance->createTemplate($create_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->createTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_template_request** | [**\StevenBuehner\ChurchTools\Model\CreateTemplateRequest**](../Model/CreateTemplateRequest.md)| appointment template data |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAllTemplates200Response**](../Model/GetAllTemplates200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

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

Delete a appointment template identified by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
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

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllTemplates()`

```php
getAllTemplates(): \StevenBuehner\ChurchTools\Model\GetAllTemplates200Response
```

get all appointment templates

get all appointment templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
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

[**\StevenBuehner\ChurchTools\Model\GetAllTemplates200Response**](../Model/GetAllTemplates200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCalendars()`

```php
getCalendars(): \StevenBuehner\ChurchTools\Model\GetCalendars200Response
```

Your GET endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
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

[**\StevenBuehner\ChurchTools\Model\GetCalendars200Response**](../Model/GetCalendars200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCalendarsAppointments()`

```php
getCalendarsAppointments($calendar_ids, $from, $to): \StevenBuehner\ChurchTools\Model\GetCalendarsAppointments200Response
```

Your GET endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calendar_ids = array(56); // int[]
$from = Sat Jan 01 01:00:00 CET 2022; // \DateTime | 
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
 **calendar_ids** | [**int[]**](../Model/int.md)|  |
 **from** | **\DateTime**|  | [optional]
 **to** | **\DateTime**|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\GetCalendarsAppointments200Response**](../Model/GetCalendarsAppointments200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCalendarsCalendarIdAppointmentsAppointmentIdStartDate()`

```php
getCalendarsCalendarIdAppointmentsAppointmentIdStartDate($calendar_id, $appointment_id, $start_date): \StevenBuehner\ChurchTools\Model\GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200Response
```

Your GET endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calendar_id = 42; // int | ID of Calendar
$appointment_id = 'appointment_id_example'; // string
$start_date = 'start_date_example'; // string

try {
    $result = $apiInstance->getCalendarsCalendarIdAppointmentsAppointmentIdStartDate($calendar_id, $appointment_id, $start_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->getCalendarsCalendarIdAppointmentsAppointmentIdStartDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **calendar_id** | **int**| ID of Calendar |
 **appointment_id** | **string**|  |
 **start_date** | **string**|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200Response**](../Model/GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTemplateById()`

```php
getTemplateById($template_id): \StevenBuehner\ChurchTools\Model\GetTemplateById200Response
```

get a appointment template

getTemplateById

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
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

[**\StevenBuehner\ChurchTools\Model\GetTemplateById200Response**](../Model/GetTemplateById200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCalendarsCalendarIdAppointments()`

```php
postCalendarsCalendarIdAppointments($calendar_id, $post_calendars_calendar_id_appointments_request)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calendar_id = 42; // int | ID of Calendar
$post_calendars_calendar_id_appointments_request = new \StevenBuehner\ChurchTools\Model\PostCalendarsCalendarIdAppointmentsRequest(); // \StevenBuehner\ChurchTools\Model\PostCalendarsCalendarIdAppointmentsRequest

try {
    $apiInstance->postCalendarsCalendarIdAppointments($calendar_id, $post_calendars_calendar_id_appointments_request);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->postCalendarsCalendarIdAppointments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **calendar_id** | **int**| ID of Calendar |
 **post_calendars_calendar_id_appointments_request** | [**\StevenBuehner\ChurchTools\Model\PostCalendarsCalendarIdAppointmentsRequest**](../Model/PostCalendarsCalendarIdAppointmentsRequest.md)|  | [optional]

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

## `updateTemplate()`

```php
updateTemplate($template_id, $create_template_request): \StevenBuehner\ChurchTools\Model\GetTemplateById200Response
```

update a appointment template identified by id

update a appointment template identified by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
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
$create_template_request = new \StevenBuehner\ChurchTools\Model\CreateTemplateRequest(); // \StevenBuehner\ChurchTools\Model\CreateTemplateRequest | appointment template data

try {
    $result = $apiInstance->updateTemplate($template_id, $create_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->updateTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **int**| ID of appointment template |
 **create_template_request** | [**\StevenBuehner\ChurchTools\Model\CreateTemplateRequest**](../Model/CreateTemplateRequest.md)| appointment template data |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetTemplateById200Response**](../Model/GetTemplateById200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
