# StevenBuehner\ChurchTools\EventApi

All URIs are relative to /api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**agendaExport()**](EventApi.md#agendaExport) | **POST** /agendas/{agendaId}/export | Exports the agenda |
| [**deletePersonIdEventsEventIdServicesServiceIdExchangerequestsCopy()**](EventApi.md#deletePersonIdEventsEventIdServicesServiceIdExchangerequestsCopy) | **DELETE** /persons/{personId}/events/{eventId}/services/{serviceId}/exchangerequests/{requestId} | Delete a service exchange request |
| [**deletePersonIdExchangerequestsRequestId()**](EventApi.md#deletePersonIdExchangerequestsRequestId) | **DELETE** /persons/{personId}/exchangerequests/{requestId} | Decline a service exchange request |
| [**getAgendaForEvent()**](EventApi.md#getAgendaForEvent) | **GET** /events/{eventId}/agenda | Get agenda for event |
| [**getAllEvents()**](EventApi.md#getAllEvents) | **GET** /events | Get all events |
| [**getEvent()**](EventApi.md#getEvent) | **GET** /events/{eventId} | Get a single event |
| [**getEventIcal()**](EventApi.md#getEventIcal) | **GET** /events/ical |  |
| [**getEventMasterdata()**](EventApi.md#getEventMasterdata) | **GET** /event/masterdata | Fetch MasterData for Module \&quot;Event\&quot; |
| [**getPersonEvents()**](EventApi.md#getPersonEvents) | **GET** /persons/{personId}/events | Get events that person is involved with |
| [**getSongsOfAgenda()**](EventApi.md#getSongsOfAgenda) | **GET** /events/{eventId}/agenda/songs | Get All Songs of Agenda |
| [**personsPersonIdEventsEventIdServicesServiceIdExchangerequestsCandidatesGet()**](EventApi.md#personsPersonIdEventsEventIdServicesServiceIdExchangerequestsCandidatesGet) | **GET** /persons/{personId}/events/{eventId}/services/{serviceId}/exchangerequests/candidates | Get candidates for service exchange request |
| [**personsPersonIdEventsEventIdServicesServiceIdExchangerequestsGet()**](EventApi.md#personsPersonIdEventsEventIdServicesServiceIdExchangerequestsGet) | **GET** /persons/{personId}/events/{eventId}/services/{serviceId}/exchangerequests | Get all service exchange requests of a user for a service |
| [**personsPersonIdExchangerequestsGet()**](EventApi.md#personsPersonIdExchangerequestsGet) | **GET** /persons/{personId}/exchangerequests | Get all service exchange requests for a user |
| [**postPersonIdEventsEventIdServicesServiceIdExchangerequests()**](EventApi.md#postPersonIdEventsEventIdServicesServiceIdExchangerequests) | **POST** /persons/{personId}/events/{eventId}/services/{serviceId}/exchangerequests | Create a new service exchange request |
| [**putPersonIdExchangerequestsRequestId()**](EventApi.md#putPersonIdExchangerequestsRequestId) | **PUT** /persons/{personId}/exchangerequests/{requestId} | Accept a service exchange request |
| [**sendAgendaEmail()**](EventApi.md#sendAgendaEmail) | **POST** /agendas/send | Send agenda email to recipients |
| [**sendEventEmail()**](EventApi.md#sendEventEmail) | **POST** /events/send | Send Mail to Event Participants |
| [**startStopEventChat()**](EventApi.md#startStopEventChat) | **POST** /events/{eventId}/chat | Start or stop an event chat |


## `agendaExport()`

```php
agendaExport($agenda_id, $target, $agenda_export_request): \StevenBuehner\ChurchTools\Model\AgendaExport200Response
```

Exports the agenda

Exports the agenda as zip file for imports in presenter-programs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agenda_id = 'agenda_id_example'; // string
$target = 'target_example'; // string
$agenda_export_request = new \StevenBuehner\ChurchTools\Model\AgendaExportRequest(); // \StevenBuehner\ChurchTools\Model\AgendaExportRequest

try {
    $result = $apiInstance->agendaExport($agenda_id, $target, $agenda_export_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->agendaExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agenda_id** | **string**|  | |
| **target** | **string**|  | |
| **agenda_export_request** | [**\StevenBuehner\ChurchTools\Model\AgendaExportRequest**](../Model/AgendaExportRequest.md)|  | [optional] |

### Return type

[**\StevenBuehner\ChurchTools\Model\AgendaExport200Response**](../Model/AgendaExport200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePersonIdEventsEventIdServicesServiceIdExchangerequestsCopy()`

```php
deletePersonIdEventsEventIdServicesServiceIdExchangerequestsCopy($person_id, $event_id, $service_id, $request_id, $delete_person_id_events_event_id_services_service_id_exchangerequests_copy_request)
```

Delete a service exchange request



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$event_id = 42; // int | ID of Event
$service_id = 'service_id_example'; // string
$request_id = 'request_id_example'; // string
$delete_person_id_events_event_id_services_service_id_exchangerequests_copy_request = new \StevenBuehner\ChurchTools\Model\DeletePersonIdEventsEventIdServicesServiceIdExchangerequestsCopyRequest(); // \StevenBuehner\ChurchTools\Model\DeletePersonIdEventsEventIdServicesServiceIdExchangerequestsCopyRequest

try {
    $apiInstance->deletePersonIdEventsEventIdServicesServiceIdExchangerequestsCopy($person_id, $event_id, $service_id, $request_id, $delete_person_id_events_event_id_services_service_id_exchangerequests_copy_request);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->deletePersonIdEventsEventIdServicesServiceIdExchangerequestsCopy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **event_id** | **int**| ID of Event | |
| **service_id** | **string**|  | |
| **request_id** | **string**|  | |
| **delete_person_id_events_event_id_services_service_id_exchangerequests_copy_request** | [**\StevenBuehner\ChurchTools\Model\DeletePersonIdEventsEventIdServicesServiceIdExchangerequestsCopyRequest**](../Model/DeletePersonIdEventsEventIdServicesServiceIdExchangerequestsCopyRequest.md)|  | [optional] |

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

## `deletePersonIdExchangerequestsRequestId()`

```php
deletePersonIdExchangerequestsRequestId($person_id, $request_id)
```

Decline a service exchange request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$request_id = 'request_id_example'; // string

try {
    $apiInstance->deletePersonIdExchangerequestsRequestId($person_id, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->deletePersonIdExchangerequestsRequestId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **request_id** | **string**|  | |

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

## `getAgendaForEvent()`

```php
getAgendaForEvent($event_id): \StevenBuehner\ChurchTools\Model\GetAgendaForEvent200Response
```

Get agenda for event

Fetch all agenda items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 42; // int | ID of Event

try {
    $result = $apiInstance->getAgendaForEvent($event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getAgendaForEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **int**| ID of Event | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAgendaForEvent200Response**](../Model/GetAgendaForEvent200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllEvents()`

```php
getAllEvents($from, $to, $canceled, $direction, $page, $limit, $include): \StevenBuehner\ChurchTools\Model\GetAllEvents200Response
```

Get all events

Gets a list of all events with services

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = Thu Aug 08 02:00:00 CEST 2019; // \DateTime | Start date from when events are returned. Default value: today
$to = Thu Aug 08 02:00:00 CEST 2019; // \DateTime | End date until when events are returned. Default value: two month from now
$canceled = True; // bool | If true, include also canceled events
$direction = forward; // string
$page = 56; // int
$limit = 56; // int
$include = eventServices; // string | to include the eventServices

try {
    $result = $apiInstance->getAllEvents($from, $to, $canceled, $direction, $page, $limit, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getAllEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **\DateTime**| Start date from when events are returned. Default value: today | [optional] |
| **to** | **\DateTime**| End date until when events are returned. Default value: two month from now | [optional] |
| **canceled** | **bool**| If true, include also canceled events | [optional] |
| **direction** | **string**|  | [optional] |
| **page** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **include** | **string**| to include the eventServices | [optional] |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAllEvents200Response**](../Model/GetAllEvents200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEvent()`

```php
getEvent($event_id): \StevenBuehner\ChurchTools\Model\GetEvent200Response
```

Get a single event

Get a event by id, with services

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 42; // int | ID of Event

try {
    $result = $apiInstance->getEvent($event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **int**| ID of Event | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetEvent200Response**](../Model/GetEvent200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEventIcal()`

```php
getEventIcal($person_id): \StevenBuehner\ChurchTools\Model\GetEventIcal200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 56; // int

try {
    $result = $apiInstance->getEventIcal($person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getEventIcal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**|  | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetEventIcal200Response**](../Model/GetEventIcal200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEventMasterdata()`

```php
getEventMasterdata(): \StevenBuehner\ChurchTools\Model\EventMasterData1
```

Fetch MasterData for Module \"Event\"

The master data are the backbone of ChurchTools. This endpoint returns all data for that module to work with. Different endpoints don't include the master data directly but only state the ID for this data and this endpoint provides the data with all its details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getEventMasterdata();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getEventMasterdata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\EventMasterData1**](../Model/EventMasterData1.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonEvents()`

```php
getPersonEvents($person_id): \StevenBuehner\ChurchTools\Model\GetEvent200Response
```

Get events that person is involved with

Gets a list of all events that a person is involved

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person

try {
    $result = $apiInstance->getPersonEvents($person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getPersonEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetEvent200Response**](../Model/GetEvent200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSongsOfAgenda()`

```php
getSongsOfAgenda($event_id): \StevenBuehner\ChurchTools\Model\GetSongsOfAgenda200Response
```

Get All Songs of Agenda

Get all songs of agenda for this event. Only those songs are returned, which the user may see. The user may see that the song is on the agenda, but s/he may not view all its details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 42; // int | ID of Event

try {
    $result = $apiInstance->getSongsOfAgenda($event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getSongsOfAgenda: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **int**| ID of Event | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetSongsOfAgenda200Response**](../Model/GetSongsOfAgenda200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personsPersonIdEventsEventIdServicesServiceIdExchangerequestsCandidatesGet()`

```php
personsPersonIdEventsEventIdServicesServiceIdExchangerequestsCandidatesGet($person_id, $event_id, $service_id): \StevenBuehner\ChurchTools\Model\200Response
```

Get candidates for service exchange request

Returns all possible candidates for an exchange of a service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$event_id = 42; // int | ID of Event
$service_id = 'service_id_example'; // string

try {
    $result = $apiInstance->personsPersonIdEventsEventIdServicesServiceIdExchangerequestsCandidatesGet($person_id, $event_id, $service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->personsPersonIdEventsEventIdServicesServiceIdExchangerequestsCandidatesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **event_id** | **int**| ID of Event | |
| **service_id** | **string**|  | |

### Return type

[**\StevenBuehner\ChurchTools\Model\200Response**](../Model/200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personsPersonIdEventsEventIdServicesServiceIdExchangerequestsGet()`

```php
personsPersonIdEventsEventIdServicesServiceIdExchangerequestsGet($person_id, $event_id, $service_id, $incoming): \StevenBuehner\ChurchTools\Model\1[]
```

Get all service exchange requests of a user for a service

Returns all exchange requests that a user requested for a certain service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$event_id = 42; // int | ID of Event
$service_id = 'service_id_example'; // string
$incoming = false; // bool | If set to true, service exchange requests from other users for the user are returned. Otherwise (default) requests from this user for other users are returned.

try {
    $result = $apiInstance->personsPersonIdEventsEventIdServicesServiceIdExchangerequestsGet($person_id, $event_id, $service_id, $incoming);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->personsPersonIdEventsEventIdServicesServiceIdExchangerequestsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **event_id** | **int**| ID of Event | |
| **service_id** | **string**|  | |
| **incoming** | **bool**| If set to true, service exchange requests from other users for the user are returned. Otherwise (default) requests from this user for other users are returned. | [optional] |

### Return type

[**\StevenBuehner\ChurchTools\Model\1[]**](../Model/1.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `personsPersonIdExchangerequestsGet()`

```php
personsPersonIdExchangerequestsGet($person_id, $person_is_requester): \StevenBuehner\ChurchTools\Model\1[]
```

Get all service exchange requests for a user

Returns all exchange requests for a certain user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$person_is_requester = false; // bool | If set to true, service exchange requests that the user requested are returned. Otherwise (default) requests from other users for the user are returned.

try {
    $result = $apiInstance->personsPersonIdExchangerequestsGet($person_id, $person_is_requester);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->personsPersonIdExchangerequestsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **person_is_requester** | **bool**| If set to true, service exchange requests that the user requested are returned. Otherwise (default) requests from other users for the user are returned. | [optional] |

### Return type

[**\StevenBuehner\ChurchTools\Model\1[]**](../Model/1.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPersonIdEventsEventIdServicesServiceIdExchangerequests()`

```php
postPersonIdEventsEventIdServicesServiceIdExchangerequests($person_id, $event_id, $service_id, $incoming, $_1)
```

Create a new service exchange request

Creates a new service exchange request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$event_id = 42; // int | ID of Event
$service_id = 'service_id_example'; // string
$incoming = false; // bool | If set to true, service exchange requests from other users for the user are returned. Otherwise (default) requests from this user for other users are returned.
$_1 = new \StevenBuehner\ChurchTools\Model\1(); // \StevenBuehner\ChurchTools\Model\1

try {
    $apiInstance->postPersonIdEventsEventIdServicesServiceIdExchangerequests($person_id, $event_id, $service_id, $incoming, $_1);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->postPersonIdEventsEventIdServicesServiceIdExchangerequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **event_id** | **int**| ID of Event | |
| **service_id** | **string**|  | |
| **incoming** | **bool**| If set to true, service exchange requests from other users for the user are returned. Otherwise (default) requests from this user for other users are returned. | [optional] |
| **_1** | [**\StevenBuehner\ChurchTools\Model\1**](../Model/1.md)|  | [optional] |

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

## `putPersonIdExchangerequestsRequestId()`

```php
putPersonIdExchangerequestsRequestId($person_id, $request_id)
```

Accept a service exchange request



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$request_id = 'request_id_example'; // string

try {
    $apiInstance->putPersonIdExchangerequestsRequestId($person_id, $request_id);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->putPersonIdExchangerequestsRequestId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **request_id** | **string**|  | |

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

## `sendAgendaEmail()`

```php
sendAgendaEmail($send_agenda_email_request): \StevenBuehner\ChurchTools\Model\SendAgendaEmail200Response
```

Send agenda email to recipients

An agenda can be sent to multiple people at once. Recipients can be participants of one of the events, whereby the user sending the mail MUST see the service groups, or the user can add additional recipients from the list of people the user can see. To send a mail the user MUST see the agenda.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_agenda_email_request = new \StevenBuehner\ChurchTools\Model\SendAgendaEmailRequest(); // \StevenBuehner\ChurchTools\Model\SendAgendaEmailRequest | E-Mail information and recipients

try {
    $result = $apiInstance->sendAgendaEmail($send_agenda_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->sendAgendaEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send_agenda_email_request** | [**\StevenBuehner\ChurchTools\Model\SendAgendaEmailRequest**](../Model/SendAgendaEmailRequest.md)| E-Mail information and recipients | |

### Return type

[**\StevenBuehner\ChurchTools\Model\SendAgendaEmail200Response**](../Model/SendAgendaEmail200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendEventEmail()`

```php
sendEventEmail($send_event_email_request): \StevenBuehner\ChurchTools\Model\SendEventEmail200Response
```

Send Mail to Event Participants

A agenda can be sent to multiple people at once. Recipients can be participants of one of the events, whereby the user sending the mail MUST see the service groups, or the user can add additional recipients from the list of people the user can see. To send a mail the user MUST see the agenda.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_event_email_request = {"appendAgendaButton":false,"body":"I have a updated the agenda for the upcoming service. Please review the changes.","eventIds":[31,32],"files":[0],"recipients":[40,41,116],"sendCopyToMe":true,"subject":"Agenda Updated"}; // \StevenBuehner\ChurchTools\Model\SendEventEmailRequest | E-Mail information and recipients

try {
    $result = $apiInstance->sendEventEmail($send_event_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->sendEventEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send_event_email_request** | [**\StevenBuehner\ChurchTools\Model\SendEventEmailRequest**](../Model/SendEventEmailRequest.md)| E-Mail information and recipients | |

### Return type

[**\StevenBuehner\ChurchTools\Model\SendEventEmail200Response**](../Model/SendEventEmail200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startStopEventChat()`

```php
startStopEventChat($event_id, $start_stop_event_chat_request)
```

Start or stop an event chat

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 42; // int | ID of Event
$start_stop_event_chat_request = new \StevenBuehner\ChurchTools\Model\StartStopEventChatRequest(); // \StevenBuehner\ChurchTools\Model\StartStopEventChatRequest

try {
    $apiInstance->startStopEventChat($event_id, $start_stop_event_chat_request);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->startStopEventChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **int**| ID of Event | |
| **start_stop_event_chat_request** | [**\StevenBuehner\ChurchTools\Model\StartStopEventChatRequest**](../Model/StartStopEventChatRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
