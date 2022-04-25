# StevenBuehner\ChurchTools\SongApi

All URIs are relative to /api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSong()**](SongApi.md#getSong) | **GET** /songs/{songId} | Get Song
[**getSongs()**](SongApi.md#getSongs) | **GET** /songs | Get All Songs
[**getSongsOfAgenda()**](SongApi.md#getSongsOfAgenda) | **GET** /events/{eventId}/agenda/songs | Get All Songs of Agenda


## `getSong()`

```php
getSong($song_id): \StevenBuehner\ChurchTools\Model\InlineResponse200109
```

Get Song

Get one Song.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\SongApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$song_id = 'song_id_example'; // string

try {
    $result = $apiInstance->getSong($song_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SongApi->getSong: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **song_id** | **string**|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse200109**](../Model/InlineResponse200109.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSongs()`

```php
getSongs($song_category_ids, $ids, $practice, $key_of_arrangement, $name): \StevenBuehner\ChurchTools\Model\InlineResponse200108
```

Get All Songs

Get all Songs. Only those songs are returned, that the user may see and have the global permissions to view them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\SongApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$song_category_ids = array(56); // int[] | Filter response by category IDs.
$ids = array(56); // int[] | Filter by Song IDs.
$practice = True; // bool | Filter by field `shouldPractice`.
$key_of_arrangement = 'key_of_arrangement_example'; // string | Filter by arrangement key. (Song + all Arrangements are returned, if one arrangement fulfills the filter)
$name = 'name_example'; // string | Search by song title

try {
    $result = $apiInstance->getSongs($song_category_ids, $ids, $practice, $key_of_arrangement, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SongApi->getSongs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **song_category_ids** | [**int[]**](../Model/int.md)| Filter response by category IDs. | [optional]
 **ids** | [**int[]**](../Model/int.md)| Filter by Song IDs. | [optional]
 **practice** | **bool**| Filter by field &#x60;shouldPractice&#x60;. | [optional]
 **key_of_arrangement** | **string**| Filter by arrangement key. (Song + all Arrangements are returned, if one arrangement fulfills the filter) | [optional]
 **name** | **string**| Search by song title | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse200108**](../Model/InlineResponse200108.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

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


$apiInstance = new StevenBuehner\ChurchTools\Api\SongApi(
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
    echo 'Exception when calling SongApi->getSongsOfAgenda: ', $e->getMessage(), PHP_EOL;
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
