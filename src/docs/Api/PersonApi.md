# StevenBuehner\ChurchTools\PersonApi

All URIs are relative to /api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPerson()**](PersonApi.md#createPerson) | **POST** /persons | Create new person
[**declineServiceRequestById()**](PersonApi.md#declineServiceRequestById) | **DELETE** /persons/{id}/servicerequests/{requestId} | Decline a service request for a person
[**deleteDeviceForPerson()**](PersonApi.md#deleteDeviceForPerson) | **DELETE** /persons/{personId}/devices/{deviceId} | Remove device for person
[**deletePerson()**](PersonApi.md#deletePerson) | **DELETE** /persons/{id} | Delete person
[**deletePersonSetting()**](PersonApi.md#deletePersonSetting) | **DELETE** /persons/{id}/settings/{module}/{attribute} | Delete a person setting
[**getAllGroupsForPerson()**](PersonApi.md#getAllGroupsForPerson) | **GET** /persons/{id}/groups | Get all groups a member is in
[**getAllPersonSettings()**](PersonApi.md#getAllPersonSettings) | **GET** /persons/{id}/settings | Get all person settings
[**getAllPersons()**](PersonApi.md#getAllPersons) | **GET** /persons | Get all persons
[**getDeviceForPerson()**](PersonApi.md#getDeviceForPerson) | **GET** /persons/{personId}/devices/{deviceId} | Fetch one device
[**getOpenServiceRequestsForPerson()**](PersonApi.md#getOpenServiceRequestsForPerson) | **GET** /persons/{id}/servicerequests | Get all service requests for a person
[**getPersonById()**](PersonApi.md#getPersonById) | **GET** /persons/{id} | Get a person by ID or GUID
[**getPersonDevices()**](PersonApi.md#getPersonDevices) | **GET** /persons/{personId}/devices | Fetch all registered devices for person
[**getPersonEvents()**](PersonApi.md#getPersonEvents) | **GET** /persons/{id}/events | Get events that person is involved with
[**getPersonModuleSettings()**](PersonApi.md#getPersonModuleSettings) | **GET** /persons/{id}/settings/{module} | Get all person settings of a module
[**getPersonProperties()**](PersonApi.md#getPersonProperties) | **POST** /persons/properties | Retrieve people&#39;s properties, whether they own an email adress
[**getPersonRelationships()**](PersonApi.md#getPersonRelationships) | **GET** /persons/{id}/relationships | Get all relationships linked to this person
[**getPersonSetting()**](PersonApi.md#getPersonSetting) | **GET** /persons/{id}/settings/{module}/{attribute} | Get person setting
[**getPersonTags()**](PersonApi.md#getPersonTags) | **GET** /persons/{id}/tags | Get all tags attached to a person
[**getPersonsBirthdays()**](PersonApi.md#getPersonsBirthdays) | **GET** /persons/birthdays | Fetch Birthdays
[**getPersonsIdLogintoken()**](PersonApi.md#getPersonsIdLogintoken) | **GET** /persons/{id}/logintoken | Fetch Login Token
[**getServiceRequestById()**](PersonApi.md#getServiceRequestById) | **GET** /persons/{id}/servicerequests/{requestId} | Get a specific service request for a person
[**invitePerson()**](PersonApi.md#invitePerson) | **POST** /persons/{personId}/invite | Invite Person to ChurchTools
[**patchPerson()**](PersonApi.md#patchPerson) | **PATCH** /persons/{id} | Updates a person
[**postPersonsPersonIdArchive()**](PersonApi.md#postPersonsPersonIdArchive) | **POST** /persons/{personId}/archive | 
[**undoServiceRequestById()**](PersonApi.md#undoServiceRequestById) | **POST** /persons/{id}/servicerequests/{requestId}/undo | Undo last service request action
[**updateDeviceForPerson()**](PersonApi.md#updateDeviceForPerson) | **PUT** /persons/{personId}/devices/{deviceId} | Create / Update new device for person
[**updatePersonSetting()**](PersonApi.md#updatePersonSetting) | **PUT** /persons/{id}/settings/{module}/{attribute} | Create/Update person setting
[**updateServiceRequestById()**](PersonApi.md#updateServiceRequestById) | **PUT** /persons/{id}/servicerequests/{requestId} | Agree to a service request for a person


## `createPerson()`

```php
createPerson($inline_object4, $force, $without_privacy_policy_agreement): \StevenBuehner\ChurchTools\Model\InlineResponse2001
```

Create new person

Endpoint to save a new person in ChurchTools. Generally, you can provide any information to save, but be aware that you can only save information for fields you have write access to. If the request fails because a duplicate is found (person with same name) use the `force` flag to create this person even if a duplicate is found.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object4 = new \StevenBuehner\ChurchTools\Model\InlineObject4(); // \StevenBuehner\ChurchTools\Model\InlineObject4
$force = true; // bool | Force the action, which would otherwise fail.
$without_privacy_policy_agreement = false; // bool | If given fields for privacy policy agreements are not mandotory. Can only be used if setting is allowed in admin settings.

try {
    $result = $apiInstance->createPerson($inline_object4, $force, $without_privacy_policy_agreement);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->createPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object4** | [**\StevenBuehner\ChurchTools\Model\InlineObject4**](../Model/InlineObject4.md)|  |
 **force** | **bool**| Force the action, which would otherwise fail. | [optional]
 **without_privacy_policy_agreement** | **bool**| If given fields for privacy policy agreements are not mandotory. Can only be used if setting is allowed in admin settings. | [optional]

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

## `declineServiceRequestById()`

```php
declineServiceRequestById($id, $request_id, $comment)
```

Decline a service request for a person

Use this endpoint to decline a service request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | ID of person
$request_id = 42; // int | ID of a service request
$comment = ; // string | Comment

try {
    $apiInstance->declineServiceRequestById($id, $request_id, $comment);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->declineServiceRequestById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of person |
 **request_id** | **int**| ID of a service request |
 **comment** | **string**| Comment | [optional]

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

## `deleteDeviceForPerson()`

```php
deleteDeviceForPerson($person_id, $device_id)
```

Remove device for person

Remove a device from ChurchTools.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 3.4; // float
$device_id = 'device_id_example'; // string

try {
    $apiInstance->deleteDeviceForPerson($person_id, $device_id);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->deleteDeviceForPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **float**|  |
 **device_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePerson()`

```php
deletePerson($id)
```

Delete person

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | ID of person

try {
    $apiInstance->deletePerson($id);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->deletePerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of person |

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePersonSetting()`

```php
deletePersonSetting($id, $module, $attribute)
```

Delete a person setting

Deleting settings is sometimes useful or necessary. This endpoint can be used to delete one specific setting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | ID of person
$module = 'module_example'; // string | Module name like `churchdb` or `churchservice`
$attribute = 'attribute_example'; // string | Attribute name of setting

try {
    $apiInstance->deletePersonSetting($id, $module, $attribute);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->deletePersonSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of person |
 **module** | **string**| Module name like &#x60;churchdb&#x60; or &#x60;churchservice&#x60; |
 **attribute** | **string**| Attribute name of setting |

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

## `getAllGroupsForPerson()`

```php
getAllGroupsForPerson($id, $show_overdue_groups, $show_inactive_groups): \StevenBuehner\ChurchTools\Model\InlineResponse20016
```

Get all groups a member is in

This endpoint returns an array with all groups the user is in.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | ID of person
$show_overdue_groups = True; // bool | Determines if groups with overdue enddate should still be shown. To the enddate x dates are added specified by the admin settings for person & groups
$show_inactive_groups = True; // bool | Determines if inactive groups should be returned

try {
    $result = $apiInstance->getAllGroupsForPerson($id, $show_overdue_groups, $show_inactive_groups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getAllGroupsForPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of person |
 **show_overdue_groups** | **bool**| Determines if groups with overdue enddate should still be shown. To the enddate x dates are added specified by the admin settings for person &amp; groups | [optional]
 **show_inactive_groups** | **bool**| Determines if inactive groups should be returned | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllPersonSettings()`

```php
getAllPersonSettings($id): \StevenBuehner\ChurchTools\Model\InlineResponse20011
```

Get all person settings

Use this endpoint to get all person settings for this user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | ID of person

try {
    $result = $apiInstance->getAllPersonSettings($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getAllPersonSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of person |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllPersons()`

```php
getAllPersons($ids, $status_ids, $campus_ids, $birthday_before, $birthday_after, $is_archived, $page, $limit): \StevenBuehner\ChurchTools\Model\InlineResponse2007
```

Get all persons

This endpoint gives you all the people you are allowed to see. Each person object holds only those fields you may see. You will get at least an empty array even if you cannot see any person. The results are sorted by lastname, firstname.<br><br> We distinguish between `date` and `date-time` fields. `date` is a ISO representation like `YYYY-MM-DD`. On the other hand, for `date-time` we return and accept a <a href=\"https://www.w3.org/TR/NOTE-datetime\">W3C Zulu date string</a>. Example `1994-11-05T08:15:30Z`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array(56); // int[] | Array of person ids
$status_ids = array(56); // int[] | Filter by status id
$campus_ids = array(56); // int[] | Filter by campus id
$birthday_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by birthdays before that date (Format: YYYY-MM-DD)
$birthday_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by birthdays after that date (Format: YYYY-MM-DD)
$is_archived = True; // bool | Show only archived or not archived people
$page = 1; // int | Page number to show page in pagenation. If empty, start at first page.
$limit = 10; // int | Number of results per page.

try {
    $result = $apiInstance->getAllPersons($ids, $status_ids, $campus_ids, $birthday_before, $birthday_after, $is_archived, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getAllPersons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**int[]**](../Model/int.md)| Array of person ids | [optional]
 **status_ids** | [**int[]**](../Model/int.md)| Filter by status id | [optional]
 **campus_ids** | [**int[]**](../Model/int.md)| Filter by campus id | [optional]
 **birthday_before** | **\DateTime**| Filter by birthdays before that date (Format: YYYY-MM-DD) | [optional]
 **birthday_after** | **\DateTime**| Filter by birthdays after that date (Format: YYYY-MM-DD) | [optional]
 **is_archived** | **bool**| Show only archived or not archived people | [optional]
 **page** | **int**| Page number to show page in pagenation. If empty, start at first page. | [optional] [default to 1]
 **limit** | **int**| Number of results per page. | [optional] [default to 10]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceForPerson()`

```php
getDeviceForPerson($person_id, $device_id): \StevenBuehner\ChurchTools\Model\InlineResponse20075
```

Fetch one device

If person ID and device ID are know you can fetch all information about one device using this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 3.4; // float
$device_id = 'device_id_example'; // string

try {
    $result = $apiInstance->getDeviceForPerson($person_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getDeviceForPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **float**|  |
 **device_id** | **string**|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20075**](../Model/InlineResponse20075.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOpenServiceRequestsForPerson()`

```php
getOpenServiceRequestsForPerson($id): \StevenBuehner\ChurchTools\Model\InlineResponse20014
```

Get all service requests for a person

Use this endpoint to get all service requests for this user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | ID of person

try {
    $result = $apiInstance->getOpenServiceRequestsForPerson($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getOpenServiceRequestsForPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of person |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonById()`

```php
getPersonById($id): \StevenBuehner\ChurchTools\Model\InlineResponse2001
```

Get a person by ID or GUID

Each person as a unique numeric ID in ChurchTools. This ID is used all over in ChurchTools and in the API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // string | ID or GUID of person

try {
    $result = $apiInstance->getPersonById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID or GUID of person |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonDevices()`

```php
getPersonDevices($person_id): \StevenBuehner\ChurchTools\Model\InlineResponse20074
```

Fetch all registered devices for person

This endpoint returns all in ChurchTools registered devices (Smartphones or Tablets with CT App) for a person.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 3.4; // float | ID of Person

try {
    $result = $apiInstance->getPersonDevices($person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **float**| ID of Person |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20074**](../Model/InlineResponse20074.md)

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


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
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
    echo 'Exception when calling PersonApi->getPersonEvents: ', $e->getMessage(), PHP_EOL;
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

## `getPersonModuleSettings()`

```php
getPersonModuleSettings($id, $module): \StevenBuehner\ChurchTools\Model\InlineResponse20011
```

Get all person settings of a module

Person settings are grouped per module. This endpoint returns an array of all user settings for a person of this module.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | ID of person
$module = 'module_example'; // string | Module name like `churchdb` or `churchservice`

try {
    $result = $apiInstance->getPersonModuleSettings($id, $module);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonModuleSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of person |
 **module** | **string**| Module name like &#x60;churchdb&#x60; or &#x60;churchservice&#x60; |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonProperties()`

```php
getPersonProperties($inline_object5): \StevenBuehner\ChurchTools\Model\InlineResponse2008
```

Retrieve people's properties, whether they own an email adress

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object5 = new \StevenBuehner\ChurchTools\Model\InlineObject5(); // \StevenBuehner\ChurchTools\Model\InlineObject5

try {
    $result = $apiInstance->getPersonProperties($inline_object5);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonProperties: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object5** | [**\StevenBuehner\ChurchTools\Model\InlineObject5**](../Model/InlineObject5.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonRelationships()`

```php
getPersonRelationships($id): \StevenBuehner\ChurchTools\Model\InlineResponse20010
```

Get all relationships linked to this person

This endpoint returns all relationships of this person. The result is sorted by 1. the `sortkey` of the relationship type, 2. last name, and 3. first name of a person.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | ID of person

try {
    $result = $apiInstance->getPersonRelationships($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonRelationships: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of person |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonSetting()`

```php
getPersonSetting($id, $module, $attribute): \StevenBuehner\ChurchTools\Model\InlineResponse20012
```

Get person setting

To retrieve a specific person setting, use this endpoint. A setting is identifies by `module` and `attribute`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | ID of person
$module = 'module_example'; // string | Module name like `churchdb` or `churchservice`
$attribute = 'attribute_example'; // string | Attribute name of setting

try {
    $result = $apiInstance->getPersonSetting($id, $module, $attribute);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of person |
 **module** | **string**| Module name like &#x60;churchdb&#x60; or &#x60;churchservice&#x60; |
 **attribute** | **string**| Attribute name of setting |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonTags()`

```php
getPersonTags($id): \StevenBuehner\ChurchTools\Model\InlineResponse2009
```

Get all tags attached to a person

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | ID of person

try {
    $result = $apiInstance->getPersonTags($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of person |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonsBirthdays()`

```php
getPersonsBirthdays($start_date, $end_date, $campus_ids, $my_groups, $group_ids, $body): \StevenBuehner\ChurchTools\Model\InlineResponse200114
```

Fetch Birthdays

This endpoint returns Birthdays within a specific time interval. The returned objects are ordered by MONTH-DAY, where the first birthday in the list, is the one next from the start date.  The API also returns the `age` of the birthday. That age is calculated based on the time interval. That means, it is not the current age and also not the next birthday, but the age, which the person had/will have with the end of the time interval.   The time intervall (`start_date`, `end_date`) may not be large than one year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = Sat Jan 01 01:00:00 CET 2000; // \DateTime | Birthdays from that date on
$end_date = Sun Dec 31 01:00:00 CET 2000; // \DateTime | Birthdays up to that date
$campus_ids = NULL; // array | filter by campus ids
$my_groups = True; // bool | filter by people in my groups
$group_ids = NULL; // array | filter by group ids
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->getPersonsBirthdays($start_date, $end_date, $campus_ids, $my_groups, $group_ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonsBirthdays: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**| Birthdays from that date on | [optional]
 **end_date** | **\DateTime**| Birthdays up to that date | [optional]
 **campus_ids** | [**array**](../Model/.md)| filter by campus ids | [optional]
 **my_groups** | **bool**| filter by people in my groups | [optional]
 **group_ids** | [**array**](../Model/.md)| filter by group ids | [optional]
 **body** | **object**|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse200114**](../Model/InlineResponse200114.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonsIdLogintoken()`

```php
getPersonsIdLogintoken($id): \StevenBuehner\ChurchTools\Model\InlineResponse200115
```

Fetch Login Token

Fetch login token for person. If a token does not yet exists, a new one is created on the fly.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getPersonsIdLogintoken($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonsIdLogintoken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse200115**](../Model/InlineResponse200115.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServiceRequestById()`

```php
getServiceRequestById($id, $request_id): \StevenBuehner\ChurchTools\Model\InlineResponse20015
```

Get a specific service request for a person

Use this endpoint to get a specific service request for this user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | ID of person
$request_id = 42; // int | ID of a service request

try {
    $result = $apiInstance->getServiceRequestById($id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getServiceRequestById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of person |
 **request_id** | **int**| ID of a service request |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invitePerson()`

```php
invitePerson($person_id, $set_password_url_template)
```

Invite Person to ChurchTools

Invite person to ChurchTools. Calling this API will send an invitation Mail to that person.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 'person_id_example'; // string
$set_password_url_template = 'set_password_url_template_example'; // string | Url used in the mail sent to the user. Esample: https://homepage.de/$loginString/$userId

try {
    $apiInstance->invitePerson($person_id, $set_password_url_template);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->invitePerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **string**|  |
 **set_password_url_template** | **string**| Url used in the mail sent to the user. Esample: https://homepage.de/$loginString/$userId | [optional]

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchPerson()`

```php
patchPerson($id, $inline_object6): \StevenBuehner\ChurchTools\Model\InlineResponse2001
```

Updates a person

Endpoint to update a person in ChurchTools. Generally, you can provide any information to save, but be aware that you can only save information for fields you have write access to. Beware, that not all fields which are listed in the Person schema can be updated. E.g. `imageUrl` or `familyUrl`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | ID of person
$inline_object6 = new \StevenBuehner\ChurchTools\Model\InlineObject6(); // \StevenBuehner\ChurchTools\Model\InlineObject6

try {
    $result = $apiInstance->patchPerson($id, $inline_object6);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->patchPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of person |
 **inline_object6** | [**\StevenBuehner\ChurchTools\Model\InlineObject6**](../Model/InlineObject6.md)|  |

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

## `postPersonsPersonIdArchive()`

```php
postPersonsPersonIdArchive($person_id, $inline_object68)
```



archives or undos an archive of a person

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 'person_id_example'; // string
$inline_object68 = new \StevenBuehner\ChurchTools\Model\InlineObject68(); // \StevenBuehner\ChurchTools\Model\InlineObject68

try {
    $apiInstance->postPersonsPersonIdArchive($person_id, $inline_object68);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->postPersonsPersonIdArchive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **string**|  |
 **inline_object68** | [**\StevenBuehner\ChurchTools\Model\InlineObject68**](../Model/InlineObject68.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `undoServiceRequestById()`

```php
undoServiceRequestById($id, $request_id): \StevenBuehner\ChurchTools\Model\InlineResponse20015
```

Undo last service request action

This endpoint can undo either a declination or an acceptance. Only the requested person can issue this undo and the undo action is only possible within a specific time frame.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | ID of person
$request_id = 42; // int | ID of a service request

try {
    $result = $apiInstance->undoServiceRequestById($id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->undoServiceRequestById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of person |
 **request_id** | **int**| ID of a service request |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceForPerson()`

```php
updateDeviceForPerson($person_id, $device_id, $inline_object48): \StevenBuehner\ChurchTools\Model\InlineResponse20076
```

Create / Update new device for person

Save a new device or update an existing using this endpoint. This endpoint is usually used to update the TTL. If the TTL is reached the device will be removed from ChurchTools, cause of inactivity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 3.4; // float
$device_id = 'device_id_example'; // string
$inline_object48 = new \StevenBuehner\ChurchTools\Model\InlineObject48(); // \StevenBuehner\ChurchTools\Model\InlineObject48

try {
    $result = $apiInstance->updateDeviceForPerson($person_id, $device_id, $inline_object48);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->updateDeviceForPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **float**|  |
 **device_id** | **string**|  |
 **inline_object48** | [**\StevenBuehner\ChurchTools\Model\InlineObject48**](../Model/InlineObject48.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20076**](../Model/InlineResponse20076.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePersonSetting()`

```php
updatePersonSetting($id, $module, $attribute): \StevenBuehner\ChurchTools\Model\InlineResponse20012
```

Create/Update person setting

<strong>Important:</strong> Not all settings are supported to update over this endpoint. The API will tell you if you are allowed to update a setting.<br>This endpoint can be used to update a value of an existing setting or create it if it does not exists, yet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | ID of person
$module = 'module_example'; // string | Module name like `churchdb` or `churchservice`
$attribute = 'attribute_example'; // string | Attribute name of setting

try {
    $result = $apiInstance->updatePersonSetting($id, $module, $attribute);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->updatePersonSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of person |
 **module** | **string**| Module name like &#x60;churchdb&#x60; or &#x60;churchservice&#x60; |
 **attribute** | **string**| Attribute name of setting |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateServiceRequestById()`

```php
updateServiceRequestById($id, $request_id, $inline_object7): \StevenBuehner\ChurchTools\Model\InlineResponse20015
```

Agree to a service request for a person

Use this endpoint to agree to a service request. To decline a service request, use the DELETE method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | ID of person
$request_id = 42; // int | ID of a service request
$inline_object7 = new \StevenBuehner\ChurchTools\Model\InlineObject7(); // \StevenBuehner\ChurchTools\Model\InlineObject7

try {
    $result = $apiInstance->updateServiceRequestById($id, $request_id, $inline_object7);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->updateServiceRequestById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of person |
 **request_id** | **int**| ID of a service request |
 **inline_object7** | [**\StevenBuehner\ChurchTools\Model\InlineObject7**](../Model/InlineObject7.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
