# StevenBuehner\ChurchTools\PersonApi

All URIs are relative to /api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPerson()**](PersonApi.md#createPerson) | **POST** /persons | Create new person |
| [**declineServiceRequestById()**](PersonApi.md#declineServiceRequestById) | **DELETE** /persons/{personId}/servicerequests/{requestId} | Decline a service request for a person |
| [**deleteDeviceForPerson()**](PersonApi.md#deleteDeviceForPerson) | **DELETE** /persons/{personId}/devices/{deviceId} | Remove device for person |
| [**deletePerson()**](PersonApi.md#deletePerson) | **DELETE** /persons/{personId} | Delete person |
| [**deletePersonSetting()**](PersonApi.md#deletePersonSetting) | **DELETE** /persons/{personId}/settings/{module}/{attribute} | Delete a person setting |
| [**getAllGroupsForPerson()**](PersonApi.md#getAllGroupsForPerson) | **GET** /persons/{personId}/groups | Get all groups a member is in |
| [**getAllPersonSettings()**](PersonApi.md#getAllPersonSettings) | **GET** /persons/{personId}/settings | Get all person settings |
| [**getAllPersons()**](PersonApi.md#getAllPersons) | **GET** /persons | Get all persons |
| [**getDeviceForPerson()**](PersonApi.md#getDeviceForPerson) | **GET** /persons/{personId}/devices/{deviceId} | Fetch one device |
| [**getOpenServiceRequestsForPerson()**](PersonApi.md#getOpenServiceRequestsForPerson) | **GET** /persons/{personId}/servicerequests | Get all service requests for a person |
| [**getPersonById()**](PersonApi.md#getPersonById) | **GET** /persons/{personId} | Get a person by ID or GUID |
| [**getPersonDevices()**](PersonApi.md#getPersonDevices) | **GET** /persons/{personId}/devices | Fetch all registered devices for person |
| [**getPersonEvents()**](PersonApi.md#getPersonEvents) | **GET** /persons/{personId}/events | Get events that person is involved with |
| [**getPersonInformation()**](PersonApi.md#getPersonInformation) | **GET** /person/{personId}/information | Get PDF with privacy-information |
| [**getPersonMasterdata()**](PersonApi.md#getPersonMasterdata) | **GET** /person/masterdata | Get person &amp; groups masterdata |
| [**getPersonModuleSettings()**](PersonApi.md#getPersonModuleSettings) | **GET** /persons/{personId}/settings/{module} | Get all person settings of a module |
| [**getPersonProperties()**](PersonApi.md#getPersonProperties) | **POST** /persons/properties | Retrieve people&#39;s properties, whether they own an email adress |
| [**getPersonRelationships()**](PersonApi.md#getPersonRelationships) | **GET** /persons/{personId}/relationships | Get all relationships linked to this person |
| [**getPersonSetting()**](PersonApi.md#getPersonSetting) | **GET** /persons/{personId}/settings/{module}/{attribute} | Get person setting |
| [**getPersonTags()**](PersonApi.md#getPersonTags) | **GET** /persons/{personId}/tags | Get all tags attached to a person |
| [**getPersonsBirthdays()**](PersonApi.md#getPersonsBirthdays) | **GET** /persons/birthdays | Fetch Birthdays |
| [**getPersonsDuplicates()**](PersonApi.md#getPersonsDuplicates) | **GET** /persons/duplicates | get potential duplicates of persons |
| [**getPersonsIdLogintoken()**](PersonApi.md#getPersonsIdLogintoken) | **GET** /persons/{personId}/logintoken | Fetch Login Token |
| [**getPersonsPersonidMergeDuplicateid()**](PersonApi.md#getPersonsPersonidMergeDuplicateid) | **GET** /persons/{personId}/merge/{duplicateId} | Get information to compare two person records in order to prepare a  merge |
| [**getServiceRequestById()**](PersonApi.md#getServiceRequestById) | **GET** /persons/{personId}/servicerequests/{requestId} | Get a specific service request for a person |
| [**invitePerson()**](PersonApi.md#invitePerson) | **POST** /persons/{personId}/invite | Invite Person to ChurchTools |
| [**patchPerson()**](PersonApi.md#patchPerson) | **PATCH** /persons/{personId} | Updates a person |
| [**patchPersonsPersonidMergeDuplicateid()**](PersonApi.md#patchPersonsPersonidMergeDuplicateid) | **PATCH** /persons/{personId}/merge/{duplicateId} | Merge two person records |
| [**postPersonsPersonIdArchive()**](PersonApi.md#postPersonsPersonIdArchive) | **POST** /persons/{personId}/archive |  |
| [**undoServiceRequestById()**](PersonApi.md#undoServiceRequestById) | **POST** /persons/{personId}/servicerequests/{requestId}/undo | Undo last service request action |
| [**updateDeviceForPerson()**](PersonApi.md#updateDeviceForPerson) | **PUT** /persons/{personId}/devices/{deviceId} | Create / Update new device for person |
| [**updatePersonSetting()**](PersonApi.md#updatePersonSetting) | **PUT** /persons/{personId}/settings/{module}/{attribute} | Create/Update person setting |
| [**updateServiceRequestById()**](PersonApi.md#updateServiceRequestById) | **PUT** /persons/{personId}/servicerequests/{requestId} | Agree to a service request for a person |


## `createPerson()`

```php
createPerson($create_person_request, $force, $without_privacy_policy_agreement): \StevenBuehner\ChurchTools\Model\PutCheckinPersons200Response
```

Create new person

Endpoint to save a new person in ChurchTools. Generally, you can provide any information to save, but be aware that you can only save information for fields you have write access to. If the request fails because a duplicate is found (person with same name) use the `force` flag to create this person even if a duplicate is found.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_person_request = new \StevenBuehner\ChurchTools\Model\CreatePersonRequest(); // \StevenBuehner\ChurchTools\Model\CreatePersonRequest | Include those fields you want to add and are allowed to write.
$force = true; // bool | Force the action, which would otherwise fail.
$without_privacy_policy_agreement = false; // bool | If given fields for privacy policy agreements are not mandotory. Can only be used if setting is allowed in admin settings.

try {
    $result = $apiInstance->createPerson($create_person_request, $force, $without_privacy_policy_agreement);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->createPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_person_request** | [**\StevenBuehner\ChurchTools\Model\CreatePersonRequest**](../Model/CreatePersonRequest.md)| Include those fields you want to add and are allowed to write. | |
| **force** | **bool**| Force the action, which would otherwise fail. | [optional] |
| **without_privacy_policy_agreement** | **bool**| If given fields for privacy policy agreements are not mandotory. Can only be used if setting is allowed in admin settings. | [optional] |

### Return type

[**\StevenBuehner\ChurchTools\Model\PutCheckinPersons200Response**](../Model/PutCheckinPersons200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `declineServiceRequestById()`

```php
declineServiceRequestById($person_id, $request_id, $comment)
```

Decline a service request for a person

Use this endpoint to decline a service request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$request_id = 42; // int | ID of a service request
$comment = ; // string | Comment

try {
    $apiInstance->declineServiceRequestById($person_id, $request_id, $comment);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->declineServiceRequestById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **request_id** | **int**| ID of a service request | |
| **comment** | **string**| Comment | [optional] |

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


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$device_id = 'device_id_example'; // string

try {
    $apiInstance->deleteDeviceForPerson($person_id, $device_id);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->deleteDeviceForPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **device_id** | **string**|  | |

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

## `deletePerson()`

```php
deletePerson($person_id)
```

Delete person

Delete the Person

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person

try {
    $apiInstance->deletePerson($person_id);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->deletePerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |

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

## `deletePersonSetting()`

```php
deletePersonSetting($person_id, $attribute, $module)
```

Delete a person setting

Deleting settings is sometimes useful or necessary. This endpoint can be used to delete one specific setting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$attribute = 'attribute_example'; // string | Attribute name of setting
$module = 'module_example'; // string | Module name like `churchdb` or `churchservice`

try {
    $apiInstance->deletePersonSetting($person_id, $attribute, $module);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->deletePersonSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **attribute** | **string**| Attribute name of setting | |
| **module** | **string**| Module name like &#x60;churchdb&#x60; or &#x60;churchservice&#x60; | |

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

## `getAllGroupsForPerson()`

```php
getAllGroupsForPerson($person_id): \StevenBuehner\ChurchTools\Model\GetAllGroupsForPerson200Response
```

Get all groups a member is in

This endpoint returns an array with all groups the user is in.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person

try {
    $result = $apiInstance->getAllGroupsForPerson($person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getAllGroupsForPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAllGroupsForPerson200Response**](../Model/GetAllGroupsForPerson200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllPersonSettings()`

```php
getAllPersonSettings($person_id): \StevenBuehner\ChurchTools\Model\GetAllPersonSettings200Response
```

Get all person settings

Use this endpoint to get all person settings for this user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person

try {
    $result = $apiInstance->getAllPersonSettings($person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getAllPersonSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAllPersonSettings200Response**](../Model/GetAllPersonSettings200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllPersons()`

```php
getAllPersons($ids, $status_ids, $campus_ids, $birthday_before, $birthday_after, $is_archived, $page, $limit): \StevenBuehner\ChurchTools\Model\GetAllPersons200Response
```

Get all persons

This endpoint gives you all the people you are allowed to see. Each person object holds only those fields you may see. You will get at least an empty array even if you cannot see any person. The results are sorted by lastname, firstname.<br><br> We distinguish between `date` and `date-time` fields. `date` is a ISO representation like `YYYY-MM-DD`. On the other hand, for `date-time` we return and accept a <a href=\"https://www.w3.org/TR/NOTE-datetime\">W3C Zulu date string</a>. Example `1994-11-05T08:15:30Z`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**int[]**](../Model/int.md)| Array of person ids | [optional] |
| **status_ids** | [**int[]**](../Model/int.md)| Filter by status id | [optional] |
| **campus_ids** | [**int[]**](../Model/int.md)| Filter by campus id | [optional] |
| **birthday_before** | **\DateTime**| Filter by birthdays before that date (Format: YYYY-MM-DD) | [optional] |
| **birthday_after** | **\DateTime**| Filter by birthdays after that date (Format: YYYY-MM-DD) | [optional] |
| **is_archived** | **bool**| Show only archived or not archived people | [optional] |
| **page** | **int**| Page number to show page in pagenation. If empty, start at first page. | [optional] [default to 1] |
| **limit** | **int**| Number of results per page. | [optional] [default to 10] |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAllPersons200Response**](../Model/GetAllPersons200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceForPerson()`

```php
getDeviceForPerson($person_id, $device_id): \StevenBuehner\ChurchTools\Model\GetDeviceForPerson200Response
```

Fetch one device

If person ID and device ID are know you can fetch all information about one device using this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$device_id = 'device_id_example'; // string

try {
    $result = $apiInstance->getDeviceForPerson($person_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getDeviceForPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **device_id** | **string**|  | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetDeviceForPerson200Response**](../Model/GetDeviceForPerson200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOpenServiceRequestsForPerson()`

```php
getOpenServiceRequestsForPerson($person_id): \StevenBuehner\ChurchTools\Model\GetOpenServiceRequestsForPerson200Response
```

Get all service requests for a person

Use this endpoint to get all service requests for this user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person

try {
    $result = $apiInstance->getOpenServiceRequestsForPerson($person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getOpenServiceRequestsForPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetOpenServiceRequestsForPerson200Response**](../Model/GetOpenServiceRequestsForPerson200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonById()`

```php
getPersonById($person_id): \StevenBuehner\ChurchTools\Model\GetPersonById200Response
```

Get a person by ID or GUID

Each person as a unique numeric ID in ChurchTools. This ID is used all over in ChurchTools and in the API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person

try {
    $result = $apiInstance->getPersonById($person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetPersonById200Response**](../Model/GetPersonById200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonDevices()`

```php
getPersonDevices($person_id): \StevenBuehner\ChurchTools\Model\GetPersonDevices200Response
```

Fetch all registered devices for person

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person

try {
    $result = $apiInstance->getPersonDevices($person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetPersonDevices200Response**](../Model/GetPersonDevices200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

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


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
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
    echo 'Exception when calling PersonApi->getPersonEvents: ', $e->getMessage(), PHP_EOL;
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

## `getPersonInformation()`

```php
getPersonInformation($person_id): \StevenBuehner\ChurchTools\Model\GetPersonInformation200Response
```

Get PDF with privacy-information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
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

try {
    $result = $apiInstance->getPersonInformation($person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonInformation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **string**|  | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetPersonInformation200Response**](../Model/GetPersonInformation200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonMasterdata()`

```php
getPersonMasterdata(): \StevenBuehner\ChurchTools\Model\GetPersonMasterdata200Response
```

Get person & groups masterdata

Endpoint for getting all relevant masterdata for persons and groups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPersonMasterdata();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonMasterdata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\GetPersonMasterdata200Response**](../Model/GetPersonMasterdata200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonModuleSettings()`

```php
getPersonModuleSettings($person_id, $module): \StevenBuehner\ChurchTools\Model\GetAllPersonSettings200Response
```

Get all person settings of a module

Person settings are grouped per module. This endpoint returns an array of all user settings for a person of this module.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$module = 'module_example'; // string | Module name like `churchdb` or `churchservice`

try {
    $result = $apiInstance->getPersonModuleSettings($person_id, $module);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonModuleSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **module** | **string**| Module name like &#x60;churchdb&#x60; or &#x60;churchservice&#x60; | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAllPersonSettings200Response**](../Model/GetAllPersonSettings200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonProperties()`

```php
getPersonProperties($get_person_properties_request): \StevenBuehner\ChurchTools\Model\GetPersonProperties200Response
```

Retrieve people's properties, whether they own an email adress

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_person_properties_request = new \StevenBuehner\ChurchTools\Model\GetPersonPropertiesRequest(); // \StevenBuehner\ChurchTools\Model\GetPersonPropertiesRequest | List all person IDs for which you want the property information. If empty, all person IDs are used

try {
    $result = $apiInstance->getPersonProperties($get_person_properties_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonProperties: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_person_properties_request** | [**\StevenBuehner\ChurchTools\Model\GetPersonPropertiesRequest**](../Model/GetPersonPropertiesRequest.md)| List all person IDs for which you want the property information. If empty, all person IDs are used | [optional] |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetPersonProperties200Response**](../Model/GetPersonProperties200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonRelationships()`

```php
getPersonRelationships($person_id): \StevenBuehner\ChurchTools\Model\GetPersonRelationships200Response
```

Get all relationships linked to this person

This endpoint returns all relationships of this person. The result is sorted by 1. the `sortkey` of the relationship type, 2. last name, and 3. first name of a person.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person

try {
    $result = $apiInstance->getPersonRelationships($person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonRelationships: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetPersonRelationships200Response**](../Model/GetPersonRelationships200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonSetting()`

```php
getPersonSetting($person_id, $attribute, $module): \StevenBuehner\ChurchTools\Model\GetPersonSetting200Response
```

Get person setting

To retrieve a specific person setting, use this endpoint. A setting is identifies by `module` and `attribute`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$attribute = 'attribute_example'; // string | Attribute name of setting
$module = 'module_example'; // string | Module name like `churchdb` or `churchservice`

try {
    $result = $apiInstance->getPersonSetting($person_id, $attribute, $module);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **attribute** | **string**| Attribute name of setting | |
| **module** | **string**| Module name like &#x60;churchdb&#x60; or &#x60;churchservice&#x60; | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetPersonSetting200Response**](../Model/GetPersonSetting200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonTags()`

```php
getPersonTags($person_id): \StevenBuehner\ChurchTools\Model\GetPersonTags200Response
```

Get all tags attached to a person

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person

try {
    $result = $apiInstance->getPersonTags($person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetPersonTags200Response**](../Model/GetPersonTags200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonsBirthdays()`

```php
getPersonsBirthdays($start_date, $end_date, $campus_ids, $my_groups, $group_ids): \StevenBuehner\ChurchTools\Model\GetPersonsBirthdays200Response
```

Fetch Birthdays

This endpoint returns Birthdays within a specific time interval. The returned objects are ordered by MONTH-DAY, where the first birthday in the list, is the one next from the start date.  The API also returns the `age` of the birthday. That age is calculated based on the time interval. That means, it is not the current age and also not the next birthday, but the age, which the person had/will have with the end of the time interval.   The time intervall (`start_date`, `end_date`) may not be large than one year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = Sat Jan 01 01:00:00 CET 2000; // \DateTime | Birthdays from that date on defaults to yesterday
$end_date = Sun Dec 31 01:00:00 CET 2000; // \DateTime | Birthdays up to that date, defaults to 30 deays from now
$campus_ids = array(56); // int[] | filter by campus ids
$my_groups = True; // bool | filter by people in my groups
$group_ids = array(56); // int[] | filter by group ids

try {
    $result = $apiInstance->getPersonsBirthdays($start_date, $end_date, $campus_ids, $my_groups, $group_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonsBirthdays: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date** | **\DateTime**| Birthdays from that date on defaults to yesterday | [optional] |
| **end_date** | **\DateTime**| Birthdays up to that date, defaults to 30 deays from now | [optional] |
| **campus_ids** | [**int[]**](../Model/int.md)| filter by campus ids | [optional] |
| **my_groups** | **bool**| filter by people in my groups | [optional] |
| **group_ids** | [**int[]**](../Model/int.md)| filter by group ids | [optional] |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetPersonsBirthdays200Response**](../Model/GetPersonsBirthdays200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonsDuplicates()`

```php
getPersonsDuplicates($tolerance, $relation_name_for_duplicate): \StevenBuehner\ChurchTools\Model\GetPersonsDuplicates200Response
```

get potential duplicates of persons

**Caution:** This API is published as Beta and subject to be changed. It is published such that customers can play evaluate it with production data.  Provide a list of potential duplicate person records. You can suppress some duplicates  The other parameters are used to filter duplicates.  Returns an array of duplicates  * `p1` - properties of Person 1 * `p2` - properties of Person 2 * `d`  - distances of fields - this represents number of changes needed to convert P1 to P2           related to the length. e.g. `Maier` -> `Mayer` yields `d=20`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tolerance = 30; // int | Tolerance for matching; defaults to 30
$relation_name_for_duplicate = 'relation_name_for_duplicate_example'; // string | Name of `Duplicate` Relationship; Persons with this relationship will never be reported as duplicates.

try {
    $result = $apiInstance->getPersonsDuplicates($tolerance, $relation_name_for_duplicate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonsDuplicates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tolerance** | **int**| Tolerance for matching; defaults to 30 | [optional] [default to 30] |
| **relation_name_for_duplicate** | **string**| Name of &#x60;Duplicate&#x60; Relationship; Persons with this relationship will never be reported as duplicates. | [optional] |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetPersonsDuplicates200Response**](../Model/GetPersonsDuplicates200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonsIdLogintoken()`

```php
getPersonsIdLogintoken($person_id): \StevenBuehner\ChurchTools\Model\GetPersonsIdLogintoken200Response
```

Fetch Login Token

Fetch login token for person. If a token does not yet exists, a new one is created on the fly.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person

try {
    $result = $apiInstance->getPersonsIdLogintoken($person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonsIdLogintoken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetPersonsIdLogintoken200Response**](../Model/GetPersonsIdLogintoken200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonsPersonidMergeDuplicateid()`

```php
getPersonsPersonidMergeDuplicateid($duplicate_id, $person_id)
```

Get information to compare two person records in order to prepare a  merge

**Caution:** This API is published as Beta and subject to be changed. It is published such that customers can play evaluate it with production data.  This retrieves the basis for a merge of two person records You will receive person data, relationships, groups etc. for both persons.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$duplicate_id = 100; // string | Id of the doublette person
$person_id = 'person_id_example'; // string | id of the original person

try {
    $apiInstance->getPersonsPersonidMergeDuplicateid($duplicate_id, $person_id);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonsPersonidMergeDuplicateid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **duplicate_id** | **string**| Id of the doublette person | |
| **person_id** | **string**| id of the original person | |

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

## `getServiceRequestById()`

```php
getServiceRequestById($person_id, $request_id): \StevenBuehner\ChurchTools\Model\GetServiceRequestById200Response
```

Get a specific service request for a person

Use this endpoint to get a specific service request for this user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$request_id = 42; // int | ID of a service request

try {
    $result = $apiInstance->getServiceRequestById($person_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getServiceRequestById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **request_id** | **int**| ID of a service request | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetServiceRequestById200Response**](../Model/GetServiceRequestById200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

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


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$set_password_url_template = 'set_password_url_template_example'; // string | Url used in the mail sent to the user. Esample: https://homepage.de/$loginString/$userId

try {
    $apiInstance->invitePerson($person_id, $set_password_url_template);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->invitePerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **set_password_url_template** | **string**| Url used in the mail sent to the user. Esample: https://homepage.de/$loginString/$userId | [optional] |

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

## `patchPerson()`

```php
patchPerson($person_id, $patch_person_request): \StevenBuehner\ChurchTools\Model\PutCheckinPersons200Response
```

Updates a person

Endpoint to update a person in ChurchTools. Generally, you can provide any information to save, but be aware that you can only save information for fields you have write access to. Beware, that not all fields which are listed in the Person schema can be updated. E.g. `imageUrl` or `familyUrl`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$patch_person_request = new \StevenBuehner\ChurchTools\Model\PatchPersonRequest(); // \StevenBuehner\ChurchTools\Model\PatchPersonRequest | Include those fields you want to update and are allowed to write.

try {
    $result = $apiInstance->patchPerson($person_id, $patch_person_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->patchPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **patch_person_request** | [**\StevenBuehner\ChurchTools\Model\PatchPersonRequest**](../Model/PatchPersonRequest.md)| Include those fields you want to update and are allowed to write. | |

### Return type

[**\StevenBuehner\ChurchTools\Model\PutCheckinPersons200Response**](../Model/PutCheckinPersons200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchPersonsPersonidMergeDuplicateid()`

```php
patchPersonsPersonidMergeDuplicateid($duplicate_id, $person_id, $delete_duplicate, $patch_persons_personid_merge_duplicateid_request)
```

Merge two person records

**Caution:** This API is published as Beta and subject to be changed. It is published such that customers can play evaluate it with production data.  Generally, you can provide any person field to save, but be aware that write access to the provided ields is required. Beware, that not all fields which are listed in the Person schema can be updated. E.g. `imageUrl` or `familyUrl`  (see `PATCH /api/person/{id}`)  * using PATCH you can perform the eventual merge, it will   + patch the person record    + replace the personId of the doublette with the Original in all related records.     * Group memberships     * Person relation     * Bookings     * Wiki-Entries     * Financial transactions     * ... * delete the doublette if `deleteDuplicate` is true  all to be done within one transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$duplicate_id = 100; // string | Id of the doublette person
$person_id = 'person_id_example'; // string | id of the original person
$delete_duplicate = True; // bool | Flag to delete the doublette
$patch_persons_personid_merge_duplicateid_request = {}; // \StevenBuehner\ChurchTools\Model\PatchPersonsPersonidMergeDuplicateidRequest | * the fields to be changed in the original person * see also `Patch: updatePerson`

try {
    $apiInstance->patchPersonsPersonidMergeDuplicateid($duplicate_id, $person_id, $delete_duplicate, $patch_persons_personid_merge_duplicateid_request);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->patchPersonsPersonidMergeDuplicateid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **duplicate_id** | **string**| Id of the doublette person | |
| **person_id** | **string**| id of the original person | |
| **delete_duplicate** | **bool**| Flag to delete the doublette | [optional] |
| **patch_persons_personid_merge_duplicateid_request** | [**\StevenBuehner\ChurchTools\Model\PatchPersonsPersonidMergeDuplicateidRequest**](../Model/PatchPersonsPersonidMergeDuplicateidRequest.md)| * the fields to be changed in the original person * see also &#x60;Patch: updatePerson&#x60; | [optional] |

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

## `postPersonsPersonIdArchive()`

```php
postPersonsPersonIdArchive($person_id, $post_persons_person_id_archive_request)
```



archives or undos an archive of a person

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$post_persons_person_id_archive_request = new \StevenBuehner\ChurchTools\Model\PostPersonsPersonIdArchiveRequest(); // \StevenBuehner\ChurchTools\Model\PostPersonsPersonIdArchiveRequest

try {
    $apiInstance->postPersonsPersonIdArchive($person_id, $post_persons_person_id_archive_request);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->postPersonsPersonIdArchive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **post_persons_person_id_archive_request** | [**\StevenBuehner\ChurchTools\Model\PostPersonsPersonIdArchiveRequest**](../Model/PostPersonsPersonIdArchiveRequest.md)|  | [optional] |

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

## `undoServiceRequestById()`

```php
undoServiceRequestById($person_id, $request_id): \StevenBuehner\ChurchTools\Model\GetServiceRequestById200Response
```

Undo last service request action

This endpoint can undo either a declination or an acceptance. Only the requested person can issue this undo and the undo action is only possible within a specific time frame.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$request_id = 42; // int | ID of a service request

try {
    $result = $apiInstance->undoServiceRequestById($person_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->undoServiceRequestById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **request_id** | **int**| ID of a service request | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetServiceRequestById200Response**](../Model/GetServiceRequestById200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceForPerson()`

```php
updateDeviceForPerson($person_id, $device_id, $update_device_for_person_request): \StevenBuehner\ChurchTools\Model\UpdateDeviceForPerson200Response
```

Create / Update new device for person

Save a new device or update an existing using this endpoint. This endpoint is usually used to update the TTL. If the TTL is reached the device will be removed from ChurchTools, cause of inactivity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$device_id = 'device_id_example'; // string
$update_device_for_person_request = {"type":"Android"}; // \StevenBuehner\ChurchTools\Model\UpdateDeviceForPersonRequest | Device information.

try {
    $result = $apiInstance->updateDeviceForPerson($person_id, $device_id, $update_device_for_person_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->updateDeviceForPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **device_id** | **string**|  | |
| **update_device_for_person_request** | [**\StevenBuehner\ChurchTools\Model\UpdateDeviceForPersonRequest**](../Model/UpdateDeviceForPersonRequest.md)| Device information. | [optional] |

### Return type

[**\StevenBuehner\ChurchTools\Model\UpdateDeviceForPerson200Response**](../Model/UpdateDeviceForPerson200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePersonSetting()`

```php
updatePersonSetting($person_id, $attribute, $module): \StevenBuehner\ChurchTools\Model\GetPersonSetting200Response
```

Create/Update person setting

<strong>Important:</strong> Not all settings are supported to update over this endpoint. The API will tell you if you are allowed to update a setting.<br>This endpoint can be used to update a value of an existing setting or create it if it does not exists, yet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$attribute = 'attribute_example'; // string | Attribute name of setting
$module = 'module_example'; // string | Module name like `churchdb` or `churchservice`

try {
    $result = $apiInstance->updatePersonSetting($person_id, $attribute, $module);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->updatePersonSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **attribute** | **string**| Attribute name of setting | |
| **module** | **string**| Module name like &#x60;churchdb&#x60; or &#x60;churchservice&#x60; | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetPersonSetting200Response**](../Model/GetPersonSetting200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateServiceRequestById()`

```php
updateServiceRequestById($person_id, $request_id, $update_service_request_by_id_request): \StevenBuehner\ChurchTools\Model\GetServiceRequestById200Response
```

Agree to a service request for a person

Use this endpoint to agree to a service request. To decline a service request, use the DELETE method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$request_id = 42; // int | ID of a service request
$update_service_request_by_id_request = new \StevenBuehner\ChurchTools\Model\UpdateServiceRequestByIdRequest(); // \StevenBuehner\ChurchTools\Model\UpdateServiceRequestByIdRequest | Send the agreed state and optionally a comment.

try {
    $result = $apiInstance->updateServiceRequestById($person_id, $request_id, $update_service_request_by_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->updateServiceRequestById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **person_id** | **int**| ID of person | |
| **request_id** | **int**| ID of a service request | |
| **update_service_request_by_id_request** | [**\StevenBuehner\ChurchTools\Model\UpdateServiceRequestByIdRequest**](../Model/UpdateServiceRequestByIdRequest.md)| Send the agreed state and optionally a comment. | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetServiceRequestById200Response**](../Model/GetServiceRequestById200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
