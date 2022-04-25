# StevenBuehner\ChurchTools\EventApi

All URIs are relative to /api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAgendaForEvent()**](EventApi.md#getAgendaForEvent) | **GET** /events/{eventId}/agenda | Get agenda for event
[**getAllEvents()**](EventApi.md#getAllEvents) | **GET** /events | Get all events
[**getEvent()**](EventApi.md#getEvent) | **GET** /events/{eventId} | Get a single event
[**getEventMasterdata()**](EventApi.md#getEventMasterdata) | **GET** /event/masterdata | Fetch MasterData for Module \&quot;Event\&quot;
[**getPersonEvents()**](EventApi.md#getPersonEvents) | **GET** /persons/{id}/events | Get events that person is involved with
[**getSongsOfAgenda()**](EventApi.md#getSongsOfAgenda) | **GET** /events/{eventId}/agenda/songs | Get All Songs of Agenda
[**sendAgendaEmail()**](EventApi.md#sendAgendaEmail) | **POST** /agendas/send | Send agenda email to recipients
[**sendEventEmail()**](EventApi.md#sendEventEmail) | **POST** /events/send | Send Mail to Event Participants
[**startStopChat()**](EventApi.md#startStopChat) | **POST** /events/{eventId}/chat | Start or stop an event chat


## `getAgendaForEvent()`

```php
getAgendaForEvent($event_id): \StevenBuehner\ChurchTools\Model\InlineResponse20037
```

Get agenda for event

Fetch all agenda items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 12; // int | ID of corresponding event

try {
    $result = $apiInstance->getAgendaForEvent($event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getAgendaForEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_id** | **int**| ID of corresponding event |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllEvents()`

```php
getAllEvents($from, $to, $canceled): \StevenBuehner\ChurchTools\Model\InlineResponse20036
```

Get all events

Gets a list of all events with services

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
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

try {
    $result = $apiInstance->getAllEvents($from, $to, $canceled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getAllEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| Start date from when events are returned. Default value: today | [optional]
 **to** | **\DateTime**| End date until when events are returned. Default value: two month from now | [optional]
 **canceled** | **bool**| If true, include also canceled events | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20036**](../Model/InlineResponse20036.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEvent()`

```php
getEvent($event_id): \StevenBuehner\ChurchTools\Model\InlineResponse20013
```

Get a single event

Get a event by id, with services

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 42; // string | ID of event

try {
    $result = $apiInstance->getEvent($event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_id** | **string**| ID of event |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

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


// Configure API key authorization: Login Token (Header)
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

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonEvents()`

```php
getPersonEvents($id, $from): \StevenBuehner\ChurchTools\Model\InlineResponse20013
```

Get events that person is involved with

Gets a list of all events that a person is involved

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // string | ID of person
$from = Thu Aug 08 02:00:00 CEST 2019; // \DateTime | Start date from when events are returned. Default value: today

try {
    $result = $apiInstance->getPersonEvents($id, $from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getPersonEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of person |
 **from** | **\DateTime**| Start date from when events are returned. Default value: today | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSongsOfAgenda()`

```php
getSongsOfAgenda($event_id): \StevenBuehner\ChurchTools\Model\InlineResponse200110
```

Get All Songs of Agenda

Get all songs of agenda for this event. Only those songs are returned, which the user may see. The user may see that the song is on the agenda, but s/he may not view all its details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string

try {
    $result = $apiInstance->getSongsOfAgenda($event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getSongsOfAgenda: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_id** | **string**|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse200110**](../Model/InlineResponse200110.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendAgendaEmail()`

```php
sendAgendaEmail($inline_object17): \StevenBuehner\ChurchTools\Model\InlineResponse20038
```

Send agenda email to recipients

A agenda can be sent to multiple people at once. Recipients can be participants of one of the events, whereby the user sending the mail MUST see the service groups, or the user can add additional recipients from the list of people the user can see. To send a mail the user MUST see the agenda.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object17 = new \StevenBuehner\ChurchTools\Model\InlineObject17(); // \StevenBuehner\ChurchTools\Model\InlineObject17

try {
    $result = $apiInstance->sendAgendaEmail($inline_object17);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->sendAgendaEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object17** | [**\StevenBuehner\ChurchTools\Model\InlineObject17**](../Model/InlineObject17.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20038**](../Model/InlineResponse20038.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendEventEmail()`

```php
sendEventEmail($inline_object53): \StevenBuehner\ChurchTools\Model\InlineResponse20038
```

Send Mail to Event Participants

A agenda can be sent to multiple people at once. Recipients can be participants of one of the events, whereby the user sending the mail MUST see the service groups, or the user can add additional recipients from the list of people the user can see. To send a mail the user MUST see the agenda.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object53 = new \StevenBuehner\ChurchTools\Model\InlineObject53(); // \StevenBuehner\ChurchTools\Model\InlineObject53

try {
    $result = $apiInstance->sendEventEmail($inline_object53);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->sendEventEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object53** | [**\StevenBuehner\ChurchTools\Model\InlineObject53**](../Model/InlineObject53.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20038**](../Model/InlineResponse20038.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startStopChat()`

```php
startStopChat($event_id, $inline_object16)
```

Start or stop an event chat

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 42; // string | ID of event
$inline_object16 = new \StevenBuehner\ChurchTools\Model\InlineObject16(); // \StevenBuehner\ChurchTools\Model\InlineObject16

try {
    $apiInstance->startStopChat($event_id, $inline_object16);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->startStopChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_id** | **string**| ID of event |
 **inline_object16** | [**\StevenBuehner\ChurchTools\Model\InlineObject16**](../Model/InlineObject16.md)|  |

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
