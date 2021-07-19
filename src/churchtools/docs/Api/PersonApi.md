# StevenBuehner\ChurchTools\PersonApi

All URIs are relative to *https://teambb.church.tools/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPerson**](PersonApi.md#createperson) | **POST** /persons | Create new person
[**declineServiceRequestById**](PersonApi.md#declineservicerequestbyid) | **DELETE** /persons/{id}/servicerequests/{requestId} | Decline a service request for a person
[**deleteDeviceForPerson**](PersonApi.md#deletedeviceforperson) | **DELETE** /persons/{personId}/devices/{deviceId} | Remove device for person
[**deletePerson**](PersonApi.md#deleteperson) | **DELETE** /persons/{id} | Delete person
[**deletePersonSetting**](PersonApi.md#deletepersonsetting) | **DELETE** /persons/{id}/settings/{module}/{attribute} | Delete a person setting
[**getAllGroupsForPerson**](PersonApi.md#getallgroupsforperson) | **GET** /persons/{id}/groups | Get all groups a member is in
[**getAllPersonSettings**](PersonApi.md#getallpersonsettings) | **GET** /persons/{id}/settings | Get all person settings
[**getAllPersons**](PersonApi.md#getallpersons) | **GET** /persons | Get all persons
[**getDeviceForPerson**](PersonApi.md#getdeviceforperson) | **GET** /persons/{personId}/devices/{deviceId} | Fetch one device
[**getOpenServiceRequestsForPerson**](PersonApi.md#getopenservicerequestsforperson) | **GET** /persons/{id}/servicerequests | Get all service requests for a person
[**getPersonById**](PersonApi.md#getpersonbyid) | **GET** /persons/{id} | Get a person by ID or GUID
[**getPersonDevices**](PersonApi.md#getpersondevices) | **GET** /persons/{personId}/devices | Fetch all registered devices for person
[**getPersonEvents**](PersonApi.md#getpersonevents) | **GET** /persons/{id}/events | Get events that person is involved with
[**getPersonModuleSettings**](PersonApi.md#getpersonmodulesettings) | **GET** /persons/{id}/settings/{module} | Get all person settings of a module
[**getPersonProperties**](PersonApi.md#getpersonproperties) | **POST** /persons/properties | Retrieve people&#x27;s properties, whether they own an email adress
[**getPersonRelationships**](PersonApi.md#getpersonrelationships) | **GET** /persons/{id}/relationships | Get all relationships linked to this person
[**getPersonSetting**](PersonApi.md#getpersonsetting) | **GET** /persons/{id}/settings/{module}/{attribute} | Get person setting
[**getPersonTags**](PersonApi.md#getpersontags) | **GET** /persons/{id}/tags | Get all tags attached to a person
[**getPersonsBirthdays**](PersonApi.md#getpersonsbirthdays) | **GET** /persons/birthdays | Fetch Birthdays
[**getPersonsIdLogintoken**](PersonApi.md#getpersonsidlogintoken) | **GET** /persons/{id}/logintoken | Fetch Login Token
[**getServiceRequestById**](PersonApi.md#getservicerequestbyid) | **GET** /persons/{id}/servicerequests/{requestId} | Get a specific service request for a person
[**invitePerson**](PersonApi.md#inviteperson) | **POST** /persons/{personId}/invite | Invite Person to ChurchTools
[**patchPerson**](PersonApi.md#patchperson) | **PATCH** /persons/{id} | Updates a person
[**postPersonsPersonIdArchive**](PersonApi.md#postpersonspersonidarchive) | **POST** /persons/{personId}/archive | 
[**undoServiceRequestById**](PersonApi.md#undoservicerequestbyid) | **POST** /persons/{id}/servicerequests/{requestId}/undo | Undo last service request action
[**updateDeviceForPerson**](PersonApi.md#updatedeviceforperson) | **PUT** /persons/{personId}/devices/{deviceId} | Create / Update new device for person
[**updatePersonSetting**](PersonApi.md#updatepersonsetting) | **PUT** /persons/{id}/settings/{module}/{attribute} | Create/Update person setting
[**updateServiceRequestById**](PersonApi.md#updateservicerequestbyid) | **POST** /persons/{id}/servicerequests/{requestId} | Agree to a service request for a person

# **createPerson**
> \StevenBuehner\ChurchTools\Model\InlineResponse2001 createPerson($body, $force, $without_privacy_policy_agreement)

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
$body = new \StevenBuehner\ChurchTools\Model\Body5(); // \StevenBuehner\ChurchTools\Model\Body5 | Include those fields you want to add and are allowed to write.
$force = true; // bool | Force the action, which would otherwise fail.
$without_privacy_policy_agreement = true; // bool | If given fields for privacy policy agreements are not mandotory. Can only be used if setting is allowed in admin settings.

try {
    $result = $apiInstance->createPerson($body, $force, $without_privacy_policy_agreement);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->createPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body5**](../Model/Body5.md)| Include those fields you want to add and are allowed to write. |
 **force** | **bool**| Force the action, which would otherwise fail. | [optional]
 **without_privacy_policy_agreement** | **bool**| If given fields for privacy policy agreements are not mandotory. Can only be used if setting is allowed in admin settings. | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **declineServiceRequestById**
> declineServiceRequestById($id, $request_id, $comment)

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
$id = 56; // int | ID of person
$request_id = 56; // int | ID of a service request
$comment = "comment_example"; // string | Comment

try {
    $apiInstance->declineServiceRequestById($id, $request_id, $comment);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->declineServiceRequestById: ', $e->getMessage(), PHP_EOL;
}
?>
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
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDeviceForPerson**
> deleteDeviceForPerson($person_id, $device_id)

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
$person_id = 1.2; // float | 
$device_id = "device_id_example"; // string | 

try {
    $apiInstance->deleteDeviceForPerson($person_id, $device_id);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->deleteDeviceForPerson: ', $e->getMessage(), PHP_EOL;
}
?>
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

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePerson**
> deletePerson($id)

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
$id = 56; // int | ID of person

try {
    $apiInstance->deletePerson($id);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->deletePerson: ', $e->getMessage(), PHP_EOL;
}
?>
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

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePersonSetting**
> deletePersonSetting($id, $module, $attribute)

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
$id = 56; // int | ID of person
$module = "module_example"; // string | Module name like `churchdb` or `churchservice`
$attribute = "attribute_example"; // string | Attribute name of setting

try {
    $apiInstance->deletePersonSetting($id, $module, $attribute);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->deletePersonSetting: ', $e->getMessage(), PHP_EOL;
}
?>
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
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllGroupsForPerson**
> \StevenBuehner\ChurchTools\Model\InlineResponse20016 getAllGroupsForPerson($id, $show_overdue_groups, $show_inactive_groups)

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
$id = 56; // int | ID of person
$show_overdue_groups = true; // bool | Determines if groups with overdue enddate should still be shown. To the enddate x dates are added specified by the admin settings for person & groups
$show_inactive_groups = true; // bool | Determines if inactive groups should be returned

try {
    $result = $apiInstance->getAllGroupsForPerson($id, $show_overdue_groups, $show_inactive_groups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getAllGroupsForPerson: ', $e->getMessage(), PHP_EOL;
}
?>
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
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllPersonSettings**
> \StevenBuehner\ChurchTools\Model\InlineResponse20011 getAllPersonSettings($id)

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
$id = 56; // int | ID of person

try {
    $result = $apiInstance->getAllPersonSettings($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getAllPersonSettings: ', $e->getMessage(), PHP_EOL;
}
?>
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
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllPersons**
> \StevenBuehner\ChurchTools\Model\InlineResponse2007 getAllPersons($ids, $status_ids, $campus_ids, $birthday_before, $birthday_after, $is_archived, $page, $limit)

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
$birthday_before = new \DateTime("2013-10-20"); // \DateTime | Filter by birthdays before that date (Format: YYYY-MM-DD)
$birthday_after = new \DateTime("2013-10-20"); // \DateTime | Filter by birthdays after that date (Format: YYYY-MM-DD)
$is_archived = true; // bool | Show only archived or not archived people
$page = 1; // int | Page number to show page in pagenation. If empty, start at first page.
$limit = 10; // int | Number of results per page.

try {
    $result = $apiInstance->getAllPersons($ids, $status_ids, $campus_ids, $birthday_before, $birthday_after, $is_archived, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getAllPersons: ', $e->getMessage(), PHP_EOL;
}
?>
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
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeviceForPerson**
> \StevenBuehner\ChurchTools\Model\InlineResponse20077 getDeviceForPerson($person_id, $device_id)

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
$person_id = 1.2; // float | 
$device_id = "device_id_example"; // string | 

try {
    $result = $apiInstance->getDeviceForPerson($person_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getDeviceForPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **float**|  |
 **device_id** | **string**|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20077**](../Model/InlineResponse20077.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOpenServiceRequestsForPerson**
> \StevenBuehner\ChurchTools\Model\InlineResponse20014 getOpenServiceRequestsForPerson($id)

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
$id = 56; // int | ID of person

try {
    $result = $apiInstance->getOpenServiceRequestsForPerson($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getOpenServiceRequestsForPerson: ', $e->getMessage(), PHP_EOL;
}
?>
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
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonById**
> \StevenBuehner\ChurchTools\Model\InlineResponse2001 getPersonById($id)

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
$id = "id_example"; // string | ID or GUID of person

try {
    $result = $apiInstance->getPersonById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonById: ', $e->getMessage(), PHP_EOL;
}
?>
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
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonDevices**
> \StevenBuehner\ChurchTools\Model\InlineResponse20076 getPersonDevices($person_id)

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
$person_id = 1.2; // float | ID of Person

try {
    $result = $apiInstance->getPersonDevices($person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonDevices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **float**| ID of Person |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20076**](../Model/InlineResponse20076.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonEvents**
> \StevenBuehner\ChurchTools\Model\InlineResponse20013 getPersonEvents($id, $from)

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
$id = "id_example"; // string | ID of person
$from = new \DateTime("2013-10-20"); // \DateTime | Start date from when events are returned. Default value: today

try {
    $result = $apiInstance->getPersonEvents($id, $from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonEvents: ', $e->getMessage(), PHP_EOL;
}
?>
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
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonModuleSettings**
> \StevenBuehner\ChurchTools\Model\InlineResponse20011 getPersonModuleSettings($id, $module)

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
$id = 56; // int | ID of person
$module = "module_example"; // string | Module name like `churchdb` or `churchservice`

try {
    $result = $apiInstance->getPersonModuleSettings($id, $module);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonModuleSettings: ', $e->getMessage(), PHP_EOL;
}
?>
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
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonProperties**
> \StevenBuehner\ChurchTools\Model\InlineResponse2008 getPersonProperties($body)

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
$body = new \StevenBuehner\ChurchTools\Model\Body6(); // \StevenBuehner\ChurchTools\Model\Body6 | List all person IDs for which you want the property information. If empty, all person IDs are used

try {
    $result = $apiInstance->getPersonProperties($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body6**](../Model/Body6.md)| List all person IDs for which you want the property information. If empty, all person IDs are used | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonRelationships**
> \StevenBuehner\ChurchTools\Model\InlineResponse20010 getPersonRelationships($id)

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
$id = 56; // int | ID of person

try {
    $result = $apiInstance->getPersonRelationships($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonRelationships: ', $e->getMessage(), PHP_EOL;
}
?>
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
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonSetting**
> \StevenBuehner\ChurchTools\Model\InlineResponse20012 getPersonSetting($id, $module, $attribute)

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
$id = 56; // int | ID of person
$module = "module_example"; // string | Module name like `churchdb` or `churchservice`
$attribute = "attribute_example"; // string | Attribute name of setting

try {
    $result = $apiInstance->getPersonSetting($id, $module, $attribute);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonSetting: ', $e->getMessage(), PHP_EOL;
}
?>
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
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonTags**
> \StevenBuehner\ChurchTools\Model\InlineResponse2009 getPersonTags($id)

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
$id = 56; // int | ID of person

try {
    $result = $apiInstance->getPersonTags($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonTags: ', $e->getMessage(), PHP_EOL;
}
?>
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
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonsBirthdays**
> \StevenBuehner\ChurchTools\Model\InlineResponse200116 getPersonsBirthdays($start_date, $end_date)

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
$start_date = new \DateTime("2013-10-20"); // \DateTime | Birthdays from that date on
$end_date = new \DateTime("2013-10-20"); // \DateTime | Birthdays up to that date

try {
    $result = $apiInstance->getPersonsBirthdays($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonsBirthdays: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**| Birthdays from that date on | [optional]
 **end_date** | **\DateTime**| Birthdays up to that date | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse200116**](../Model/InlineResponse200116.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonsIdLogintoken**
> \StevenBuehner\ChurchTools\Model\InlineResponse200117 getPersonsIdLogintoken($id)

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
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getPersonsIdLogintoken($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonsIdLogintoken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse200117**](../Model/InlineResponse200117.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServiceRequestById**
> \StevenBuehner\ChurchTools\Model\InlineResponse20015 getServiceRequestById($id, $request_id)

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
$id = 56; // int | ID of person
$request_id = 56; // int | ID of a service request

try {
    $result = $apiInstance->getServiceRequestById($id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getServiceRequestById: ', $e->getMessage(), PHP_EOL;
}
?>
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
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invitePerson**
> invitePerson($person_id)

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
$person_id = "person_id_example"; // string | 

try {
    $apiInstance->invitePerson($person_id);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->invitePerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchPerson**
> \StevenBuehner\ChurchTools\Model\InlineResponse2001 patchPerson($body, $id)

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
$body = new \StevenBuehner\ChurchTools\Model\Body7(); // \StevenBuehner\ChurchTools\Model\Body7 | Include those fields you want to update and are allowed to write.
$id = 56; // int | ID of person

try {
    $result = $apiInstance->patchPerson($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->patchPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body7**](../Model/Body7.md)| Include those fields you want to update and are allowed to write. |
 **id** | **int**| ID of person |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPersonsPersonIdArchive**
> postPersonsPersonIdArchive($person_id, $body)



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
$person_id = "person_id_example"; // string | 
$body = new \StevenBuehner\ChurchTools\Model\Body68(); // \StevenBuehner\ChurchTools\Model\Body68 | 

try {
    $apiInstance->postPersonsPersonIdArchive($person_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->postPersonsPersonIdArchive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **string**|  |
 **body** | [**\StevenBuehner\ChurchTools\Model\Body68**](../Model/Body68.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **undoServiceRequestById**
> \StevenBuehner\ChurchTools\Model\InlineResponse20015 undoServiceRequestById($id, $request_id)

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
$id = 56; // int | ID of person
$request_id = 56; // int | ID of a service request

try {
    $result = $apiInstance->undoServiceRequestById($id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->undoServiceRequestById: ', $e->getMessage(), PHP_EOL;
}
?>
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
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDeviceForPerson**
> \StevenBuehner\ChurchTools\Model\InlineResponse20078 updateDeviceForPerson($person_id, $device_id, $body)

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
$person_id = 1.2; // float | 
$device_id = "device_id_example"; // string | 
$body = new \StevenBuehner\ChurchTools\Model\Body50(); // \StevenBuehner\ChurchTools\Model\Body50 | Device information.

try {
    $result = $apiInstance->updateDeviceForPerson($person_id, $device_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->updateDeviceForPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **float**|  |
 **device_id** | **string**|  |
 **body** | [**\StevenBuehner\ChurchTools\Model\Body50**](../Model/Body50.md)| Device information. | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20078**](../Model/InlineResponse20078.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePersonSetting**
> \StevenBuehner\ChurchTools\Model\InlineResponse20012 updatePersonSetting($id, $module, $attribute)

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
$id = 56; // int | ID of person
$module = "module_example"; // string | Module name like `churchdb` or `churchservice`
$attribute = "attribute_example"; // string | Attribute name of setting

try {
    $result = $apiInstance->updatePersonSetting($id, $module, $attribute);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->updatePersonSetting: ', $e->getMessage(), PHP_EOL;
}
?>
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
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateServiceRequestById**
> \StevenBuehner\ChurchTools\Model\InlineResponse20015 updateServiceRequestById($body, $id, $request_id)

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
$body = new \StevenBuehner\ChurchTools\Model\Body8(); // \StevenBuehner\ChurchTools\Model\Body8 | Send the agreed state and optionally a comment.
$id = 56; // int | ID of person
$request_id = 56; // int | ID of a service request

try {
    $result = $apiInstance->updateServiceRequestById($body, $id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->updateServiceRequestById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body8**](../Model/Body8.md)| Send the agreed state and optionally a comment. |
 **id** | **int**| ID of person |
 **request_id** | **int**| ID of a service request |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

