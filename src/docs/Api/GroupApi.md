# StevenBuehner\ChurchTools\GroupApi

All URIs are relative to /api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkin()**](GroupApi.md#checkin) | **POST** /groups/{groupId}/checkin | Checkin a person to a group
[**createMeeting()**](GroupApi.md#createMeeting) | **POST** /groups/{groupId}/meetings | Create a group meeting
[**createOrUpdateMember()**](GroupApi.md#createOrUpdateMember) | **PUT** /groups/members/{personId} | Create/Update a group member
[**deleteAutomaticEmail()**](GroupApi.md#deleteAutomaticEmail) | **DELETE** /groups/{groupId}/emails/{emailId} | Delete automatic email
[**deleteGroup()**](GroupApi.md#deleteGroup) | **DELETE** /groups/{groupId} | 
[**deleteGroupsGroupIdMeetingsMeetingId()**](GroupApi.md#deleteGroupsGroupIdMeetingsMeetingId) | **DELETE** /groups/{groupId}/meetings/{meetingId} | 
[**deleteGroupsGroupIdMeetingsMeetingIdMembersMemberId()**](GroupApi.md#deleteGroupsGroupIdMeetingsMeetingIdMembersMemberId) | **DELETE** /groups/{groupId}/meetings/{meetingId}/members/{memberId} | Revoke checkin
[**deleteMember()**](GroupApi.md#deleteMember) | **DELETE** /groups/members/{personId} | Delete a group member
[**getAllGroupMembers()**](GroupApi.md#getAllGroupMembers) | **GET** /groups/{groupId}/members | Get all group members
[**getAllGroupsForPerson()**](GroupApi.md#getAllGroupsForPerson) | **GET** /persons/{personId}/groups | Get all groups a member is in
[**getAllMeetings()**](GroupApi.md#getAllMeetings) | **GET** /groups/{groupId}/meetings | Get all group meetings for a specific group
[**getAutomaticEmail()**](GroupApi.md#getAutomaticEmail) | **GET** /groups/{groupId}/emails/{emailId} | Get one automatic email
[**getAutomaticEmails()**](GroupApi.md#getAutomaticEmails) | **GET** /groups/{groupId}/emails | Get all automatic emails of a group
[**getGroup()**](GroupApi.md#getGroup) | **GET** /groups/{groupId} | Get a group
[**getGroupForHomepage()**](GroupApi.md#getGroupForHomepage) | **GET** /publicgroups/{groupId}/{hash} | Public information of group
[**getGroupHomepage()**](GroupApi.md#getGroupHomepage) | **GET** /grouphomepages/{hash} | Get information about public groups with settings
[**getGroupRoles()**](GroupApi.md#getGroupRoles) | **GET** /groups/{groupId}/roles | Get all roles for this group
[**getGroupStatistics()**](GroupApi.md#getGroupStatistics) | **GET** /groups/{groupId}/statistics | Fetch facts about group
[**getGroups()**](GroupApi.md#getGroups) | **GET** /groups | Get all groups
[**getGroupsGroupIdMeetingsMeetingIdMembers()**](GroupApi.md#getGroupsGroupIdMeetingsMeetingIdMembers) | **GET** /groups/{groupId}/meetings/{meetingId}/members | Get Group Meeting Members
[**getGroupsGroupIdMemberfields()**](GroupApi.md#getGroupsGroupIdMemberfields) | **GET** /groups/{groupId}/memberfields | Get Group member fields
[**getGroupsGroupIdMembersStatistics()**](GroupApi.md#getGroupsGroupIdMembersStatistics) | **GET** /groups/{groupId}/members/statistics | Get statistics for group members
[**getGroupsGroupIdTags()**](GroupApi.md#getGroupsGroupIdTags) | **GET** /groups/{groupId}/tags | Fetch group tags
[**getGroupsHierarchies()**](GroupApi.md#getGroupsHierarchies) | **GET** /groups/hierarchies | Get all group hierarchies
[**getGroupsMembers()**](GroupApi.md#getGroupsMembers) | **GET** /groups/members | Get all group members
[**getGrupsIdPlaces()**](GroupApi.md#getGrupsIdPlaces) | **GET** /groups/{groupId}/places | Get all places of a group
[**getPersonMasterdata()**](GroupApi.md#getPersonMasterdata) | **GET** /person/masterdata | Get person &amp; groups masterdata
[**getPublicgroupsGroupIdForm()**](GroupApi.md#getPublicgroupsGroupIdForm) | **GET** /publicgroups/{groupId}/form | Get a Group Sign Up Form
[**getQRCodeCheckin()**](GroupApi.md#getQRCodeCheckin) | **GET** /groups/{groupId}/qrcodecheckin/{personId}/pdf | Get link to QR-Code for CheckIn PDF
[**issueSignUpToken()**](GroupApi.md#issueSignUpToken) | **POST** /publicgroups/{groupId}/token | Issue new sign up token.
[**optIns()**](GroupApi.md#optIns) | **GET** /groups/{groupId}/optins | Get Opt In status of group members
[**patchGroupsGroupIdRolesRoleId()**](GroupApi.md#patchGroupsGroupIdRolesRoleId) | **PATCH** /groups/{groupId}/roles/{roleId} | save role
[**postAutomaticEmail()**](GroupApi.md#postAutomaticEmail) | **POST** /groups/{groupId}/emails | Save new automatic email for a group role
[**postGroups()**](GroupApi.md#postGroups) | **POST** /groups | Create Group
[**postGroupsGroupIdMeetingsMeetingIdMembersMissing()**](GroupApi.md#postGroupsGroupIdMeetingsMeetingIdMembersMissing) | **POST** /groups/{groupId}/meetings/{meetingId}/members/missing | 
[**postPublicgroupsGroupIdMailToLeaders()**](GroupApi.md#postPublicgroupsGroupIdMailToLeaders) | **POST** /publicgroups/{groupId}/mailToLeaders | Send a Mail to Public Group Leaders
[**postPublicgroupsGroupIdSignup()**](GroupApi.md#postPublicgroupsGroupIdSignup) | **POST** /publicgroups/{groupId}/signup | Send a Sign Up Form to Get Signed Up into a Public Group
[**putAutomaticEmail()**](GroupApi.md#putAutomaticEmail) | **PUT** /groups/{groupId}/emails/{emailId} | Update automatic email
[**putGroupsGroupIdMeetingsMeetingId()**](GroupApi.md#putGroupsGroupIdMeetingsMeetingId) | **PUT** /groups/{groupId}/meetings/{meetingId} | 
[**startStopGroupChat()**](GroupApi.md#startStopGroupChat) | **POST** /groups/{groupId}/chat | Start or stop an event chat


## `checkin()`

```php
checkin($group_id, $checkin_request): \StevenBuehner\ChurchTools\Model\Checkin200Response
```

Checkin a person to a group

Checkin a person to a group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$checkin_request = new \StevenBuehner\ChurchTools\Model\CheckinRequest(); // \StevenBuehner\ChurchTools\Model\CheckinRequest

try {
    $result = $apiInstance->checkin($group_id, $checkin_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->checkin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of group |
 **checkin_request** | [**\StevenBuehner\ChurchTools\Model\CheckinRequest**](../Model/CheckinRequest.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\Checkin200Response**](../Model/Checkin200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMeeting()`

```php
createMeeting($group_id, $create_meeting_request): \StevenBuehner\ChurchTools\Model\CreateMeeting200Response
```

Create a group meeting

Create a group meeting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$create_meeting_request = new \StevenBuehner\ChurchTools\Model\CreateMeetingRequest(); // \StevenBuehner\ChurchTools\Model\CreateMeetingRequest

try {
    $result = $apiInstance->createMeeting($group_id, $create_meeting_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->createMeeting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of group |
 **create_meeting_request** | [**\StevenBuehner\ChurchTools\Model\CreateMeetingRequest**](../Model/CreateMeetingRequest.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\CreateMeeting200Response**](../Model/CreateMeeting200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrUpdateMember()`

```php
createOrUpdateMember($person_id, $create_or_update_member_request): \StevenBuehner\ChurchTools\Model\CreateOrUpdateMember200Response
```

Create/Update a group member

Add or update a group member.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$create_or_update_member_request = new \StevenBuehner\ChurchTools\Model\CreateOrUpdateMemberRequest(); // \StevenBuehner\ChurchTools\Model\CreateOrUpdateMemberRequest | All fields are optional. If not set, default values are used. groupTypeRoleId defaults to the standard role of the group's grouptype, comment and member start/end dates default to null. Additional custom group fields are not yet supported through this API.

try {
    $result = $apiInstance->createOrUpdateMember($person_id, $create_or_update_member_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->createOrUpdateMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **int**| ID of person |
 **create_or_update_member_request** | [**\StevenBuehner\ChurchTools\Model\CreateOrUpdateMemberRequest**](../Model/CreateOrUpdateMemberRequest.md)| All fields are optional. If not set, default values are used. groupTypeRoleId defaults to the standard role of the group&#39;s grouptype, comment and member start/end dates default to null. Additional custom group fields are not yet supported through this API. |

### Return type

[**\StevenBuehner\ChurchTools\Model\CreateOrUpdateMember200Response**](../Model/CreateOrUpdateMember200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAutomaticEmail()`

```php
deleteAutomaticEmail($email_id, $group_id)
```

Delete automatic email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_id = 'email_id_example'; // string
$group_id = 42; // int | ID or chat GUID of group

try {
    $apiInstance->deleteAutomaticEmail($email_id, $group_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteAutomaticEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | **string**|  |
 **group_id** | **int**| ID or chat GUID of group |

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

## `deleteGroup()`

```php
deleteGroup($group_id, $dry_run)
```



Delete a group. This will remove all people from this group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteGroup($group_id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of group |
 **dry_run** | **bool**| If set to true, the deletion is simulated but nothing will be deleted. | [optional]

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

## `deleteGroupsGroupIdMeetingsMeetingId()`

```php
deleteGroupsGroupIdMeetingsMeetingId($group_id, $meeting_id)
```



delete group meeting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$meeting_id = 'meeting_id_example'; // string

try {
    $apiInstance->deleteGroupsGroupIdMeetingsMeetingId($group_id, $meeting_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroupsGroupIdMeetingsMeetingId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of group |
 **meeting_id** | **string**|  |

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

## `deleteGroupsGroupIdMeetingsMeetingIdMembersMemberId()`

```php
deleteGroupsGroupIdMeetingsMeetingIdMembersMemberId($group_id, $meeting_id, $member_id)
```

Revoke checkin

Revoke the checkin for a previously checked-in group member.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$meeting_id = 'meeting_id_example'; // string
$member_id = 'member_id_example'; // string

try {
    $apiInstance->deleteGroupsGroupIdMeetingsMeetingIdMembersMemberId($group_id, $meeting_id, $member_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroupsGroupIdMeetingsMeetingIdMembersMemberId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of group |
 **meeting_id** | **string**|  |
 **member_id** | **string**|  |

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

## `deleteMember()`

```php
deleteMember($person_id)
```

Delete a group member

Removes a group member from the group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person

try {
    $apiInstance->deleteMember($person_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **int**| ID of person |

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

## `getAllGroupMembers()`

```php
getAllGroupMembers($group_id, $page, $limit, $role_ids, $allowed_chat_users_only, $query): \StevenBuehner\ChurchTools\Model\GetAllGroupMembers200Response
```

Get all group members

This endpoint returns an array with all group members of one group. The members can be filtered by the group member fields as query params.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$page = 1; // int | Page number to show page in pagenation. If empty, start at first page.
$limit = 10; // int | Number of results per page.
$role_ids = array(56); // int[] | roles to filter the members
$allowed_chat_users_only = false; // bool | If true, return only group members, that are allowed to chat in this group
$query = Peter Maier; // string | searches in first and second name of group member

try {
    $result = $apiInstance->getAllGroupMembers($group_id, $page, $limit, $role_ids, $allowed_chat_users_only, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getAllGroupMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of group |
 **page** | **int**| Page number to show page in pagenation. If empty, start at first page. | [optional] [default to 1]
 **limit** | **int**| Number of results per page. | [optional] [default to 10]
 **role_ids** | [**int[]**](../Model/int.md)| roles to filter the members | [optional]
 **allowed_chat_users_only** | **bool**| If true, return only group members, that are allowed to chat in this group | [optional]
 **query** | **string**| searches in first and second name of group member | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAllGroupMembers200Response**](../Model/GetAllGroupMembers200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

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


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
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
    echo 'Exception when calling GroupApi->getAllGroupsForPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **int**| ID of person |

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

## `getAllMeetings()`

```php
getAllMeetings($group_id, $is_canceled, $is_completed): \StevenBuehner\ChurchTools\Model\GetAllMeetings200Response
```

Get all group meetings for a specific group

Get all group meetings for a specific group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$is_canceled = True; // bool | Whether to show canceled group meetings
$is_completed = True; // bool | Whether to show done group meetings

try {
    $result = $apiInstance->getAllMeetings($group_id, $is_canceled, $is_completed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getAllMeetings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of group |
 **is_canceled** | **bool**| Whether to show canceled group meetings | [optional]
 **is_completed** | **bool**| Whether to show done group meetings | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAllMeetings200Response**](../Model/GetAllMeetings200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutomaticEmail()`

```php
getAutomaticEmail($group_id, $email_id): \StevenBuehner\ChurchTools\Model\GetAutomaticEmail200Response
```

Get one automatic email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$email_id = 'email_id_example'; // string

try {
    $result = $apiInstance->getAutomaticEmail($group_id, $email_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getAutomaticEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of group |
 **email_id** | **string**|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAutomaticEmail200Response**](../Model/GetAutomaticEmail200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutomaticEmails()`

```php
getAutomaticEmails($group_id): \StevenBuehner\ChurchTools\Model\GetAutomaticEmails200Response
```

Get all automatic emails of a group



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group

try {
    $result = $apiInstance->getAutomaticEmails($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getAutomaticEmails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of group |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAutomaticEmails200Response**](../Model/GetAutomaticEmails200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroup()`

```php
getGroup($group_id): \StevenBuehner\ChurchTools\Model\PostGroups201Response
```

Get a group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 42; // int | ID or chat GUID of group

try {
    $result = $apiInstance->getGroup($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID or chat GUID of group |

### Return type

[**\StevenBuehner\ChurchTools\Model\PostGroups201Response**](../Model/PostGroups201Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupForHomepage()`

```php
getGroupForHomepage($hash, $group_id): \StevenBuehner\ChurchTools\Model\PublicGroup1
```

Public information of group

Request a group for a group homepage. Only necessary fields for a public group homepage are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Group Homepage Hash
$group_id = 'group_id_example'; // string | Group ID

try {
    $result = $apiInstance->getGroupForHomepage($hash, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupForHomepage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| Group Homepage Hash |
 **group_id** | **string**| Group ID |

### Return type

[**\StevenBuehner\ChurchTools\Model\PublicGroup1**](../Model/PublicGroup1.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupHomepage()`

```php
getGroupHomepage($hash): \StevenBuehner\ChurchTools\Model\GetGroupHomepage200Response
```

Get information about public groups with settings

Get all information necessary to display public groups. The response will provide setting information and all public groups with information for the page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hash = RNdjTK0tGp1N1afoblczGbFb8ikLfa9b; // string | Random hash for public groups

try {
    $result = $apiInstance->getGroupHomepage($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupHomepage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| Random hash for public groups |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetGroupHomepage200Response**](../Model/GetGroupHomepage200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupRoles()`

```php
getGroupRoles($group_id): \StevenBuehner\ChurchTools\Model\GetGroupRoles200Response
```

Get all roles for this group

Get all the roles with definitions for the given group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group

try {
    $result = $apiInstance->getGroupRoles($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of group |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetGroupRoles200Response**](../Model/GetGroupRoles200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupStatistics()`

```php
getGroupStatistics($group_id): \StevenBuehner\ChurchTools\Model\GetGroupStatistics200Response
```

Fetch facts about group

Fetch calculated facts about group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group

try {
    $result = $apiInstance->getGroupStatistics($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupStatistics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of group |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetGroupStatistics200Response**](../Model/GetGroupStatistics200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroups()`

```php
getGroups($ids, $campus_ids, $agegroup_ids, $group_status_ids, $group_category_ids, $target_group_ids, $weekdays, $group_type_ids, $is_open_for_members, $is_public, $show_overdue_groups, $show_overdue_groups_respect_settings, $show_inactive_groups, $without_my_groups, $query, $page, $limit): \StevenBuehner\ChurchTools\Model\GetGroups200Response
```

Get all groups

This endpoint returns an array with all groups the user can see. This includes groups the user     is a member of as well as subordinate groups the user is allowed to see.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array(56); // int[] | Array of group ids
$campus_ids = array(56); // int[] | Array of campus ids to filter the groups
$agegroup_ids = array(56); // int[] | Array of age group ids to filter the groups
$group_status_ids = array(56); // int[] | Array of group status ids to filter the groups
$group_category_ids = array(56); // int[] | Array of group category ids to filter the groups
$target_group_ids = array(56); // int[] | Array of target group ids to filter the groups
$weekdays = array(56); // int[] | Array of weekdays to filter the groups. Sunday = 0, Monday = 1 ...
$group_type_ids = array(56); // int[] | Array of group type ids to filter the groups
$is_open_for_members = True; // bool | Filters groups by its open status
$is_public = True; // bool | Filters groups by its public status
$show_overdue_groups = True; // bool | Determines if groups with overdue enddate should still be shown.
$show_overdue_groups_respect_settings = True; // bool | Determines if groups with overdue enddate should still be shown. To the enddate x dates are added specified by the admin settings for person & groups.
$show_inactive_groups = True; // bool | Determines if inactive groups should be returned
$without_my_groups = True; // bool | Determines if groups should be omitted where I am in
$query = 'query_example'; // string
$page = 1; // int | Page number to show page in pagenation. If empty, start at first page.
$limit = 10; // int | Number of results per page.

try {
    $result = $apiInstance->getGroups($ids, $campus_ids, $agegroup_ids, $group_status_ids, $group_category_ids, $target_group_ids, $weekdays, $group_type_ids, $is_open_for_members, $is_public, $show_overdue_groups, $show_overdue_groups_respect_settings, $show_inactive_groups, $without_my_groups, $query, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**int[]**](../Model/int.md)| Array of group ids | [optional]
 **campus_ids** | [**int[]**](../Model/int.md)| Array of campus ids to filter the groups | [optional]
 **agegroup_ids** | [**int[]**](../Model/int.md)| Array of age group ids to filter the groups | [optional]
 **group_status_ids** | [**int[]**](../Model/int.md)| Array of group status ids to filter the groups | [optional]
 **group_category_ids** | [**int[]**](../Model/int.md)| Array of group category ids to filter the groups | [optional]
 **target_group_ids** | [**int[]**](../Model/int.md)| Array of target group ids to filter the groups | [optional]
 **weekdays** | [**int[]**](../Model/int.md)| Array of weekdays to filter the groups. Sunday &#x3D; 0, Monday &#x3D; 1 ... | [optional]
 **group_type_ids** | [**int[]**](../Model/int.md)| Array of group type ids to filter the groups | [optional]
 **is_open_for_members** | **bool**| Filters groups by its open status | [optional]
 **is_public** | **bool**| Filters groups by its public status | [optional]
 **show_overdue_groups** | **bool**| Determines if groups with overdue enddate should still be shown. | [optional]
 **show_overdue_groups_respect_settings** | **bool**| Determines if groups with overdue enddate should still be shown. To the enddate x dates are added specified by the admin settings for person &amp; groups. | [optional]
 **show_inactive_groups** | **bool**| Determines if inactive groups should be returned | [optional]
 **without_my_groups** | **bool**| Determines if groups should be omitted where I am in | [optional]
 **query** | **string**|  | [optional]
 **page** | **int**| Page number to show page in pagenation. If empty, start at first page. | [optional] [default to 1]
 **limit** | **int**| Number of results per page. | [optional] [default to 10]

### Return type

[**\StevenBuehner\ChurchTools\Model\GetGroups200Response**](../Model/GetGroups200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsGroupIdMeetingsMeetingIdMembers()`

```php
getGroupsGroupIdMeetingsMeetingIdMembers($group_id, $meeting_id): \StevenBuehner\ChurchTools\Model\GetGroupsGroupIdMeetingsMeetingIdMembers200Response
```

Get Group Meeting Members

Get all group members that the current user can see and is able to check in.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$meeting_id = 'meeting_id_example'; // string

try {
    $result = $apiInstance->getGroupsGroupIdMeetingsMeetingIdMembers($group_id, $meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupsGroupIdMeetingsMeetingIdMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of group |
 **meeting_id** | **string**|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetGroupsGroupIdMeetingsMeetingIdMembers200Response**](../Model/GetGroupsGroupIdMeetingsMeetingIdMembers200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsGroupIdMemberfields()`

```php
getGroupsGroupIdMemberfields($group_id): \StevenBuehner\ChurchTools\Model\GetGroupsGroupIdMemberfields200Response
```

Get Group member fields

Returns the configured group member fields for the given group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group

try {
    $result = $apiInstance->getGroupsGroupIdMemberfields($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupsGroupIdMemberfields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of group |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetGroupsGroupIdMemberfields200Response**](../Model/GetGroupsGroupIdMemberfields200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsGroupIdMembersStatistics()`

```php
getGroupsGroupIdMembersStatistics($group_id, $group_type_role_ids, $person_fields, $group_member_fields): \StevenBuehner\ChurchTools\Model\GetGroupsGroupIdMembersStatistics200Response
```

Get statistics for group members

Gets statistics for the group members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$group_type_role_ids = array(56); // int[] | 
$person_fields = array('person_fields_example'); // string[] | person field keys
$group_member_fields = array(56); // int[] | group member field ids

try {
    $result = $apiInstance->getGroupsGroupIdMembersStatistics($group_id, $group_type_role_ids, $person_fields, $group_member_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupsGroupIdMembersStatistics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of group |
 **group_type_role_ids** | [**int[]**](../Model/int.md)|  | [optional]
 **person_fields** | [**string[]**](../Model/string.md)| person field keys | [optional]
 **group_member_fields** | [**int[]**](../Model/int.md)| group member field ids | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\GetGroupsGroupIdMembersStatistics200Response**](../Model/GetGroupsGroupIdMembersStatistics200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsGroupIdTags()`

```php
getGroupsGroupIdTags($group_id): \StevenBuehner\ChurchTools\Model\GetGroupsGroupIdTags200Response
```

Fetch group tags

Get tags for the specific group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group

try {
    $result = $apiInstance->getGroupsGroupIdTags($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupsGroupIdTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of group |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetGroupsGroupIdTags200Response**](../Model/GetGroupsGroupIdTags200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsHierarchies()`

```php
getGroupsHierarchies($ids, $campus_ids, $agegroup_ids, $group_status_ids, $group_category_ids, $target_group_ids, $weekdays, $group_type_ids, $is_open_for_members, $is_public, $show_overdue_groups, $show_overdue_groups_respect_settings, $show_inactive_groups, $without_my_groups, $query): \StevenBuehner\ChurchTools\Model\GetGroupsHierarchies200Response
```

Get all group hierarchies

Returns all group hierarchies. The groups not visible for the user only show ids

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array(56); // int[] | Array of group ids
$campus_ids = array(56); // int[] | Array of campus ids to filter the groups
$agegroup_ids = array(56); // int[] | Array of age group ids to filter the groups
$group_status_ids = array(56); // int[] | Array of group status ids to filter the groups
$group_category_ids = array(56); // int[] | Array of group category ids to filter the groups
$target_group_ids = array(56); // int[] | Array of target group ids to filter the groups
$weekdays = array(56); // int[] | Array of weekdays to filter the groups. Sunday = 0, Monday = 1 ...
$group_type_ids = array(56); // int[] | Array of group type ids to filter the groups
$is_open_for_members = True; // bool | Filters groups by its open status
$is_public = True; // bool | Filters groups by its public status
$show_overdue_groups = True; // bool | Determines if groups with overdue enddate should still be shown. To the enddate x dates are added specified by the admin settings for person & groups
$show_overdue_groups_respect_settings = True; // bool | Determines if groups with overdue enddate should still be shown. To the enddate x dates are added specified by the admin settings for person & groups.
$show_inactive_groups = True; // bool | Determines if inactive groups should be returned
$without_my_groups = True; // bool | Determines if groups should be omitted where I am in
$query = 'query_example'; // string

try {
    $result = $apiInstance->getGroupsHierarchies($ids, $campus_ids, $agegroup_ids, $group_status_ids, $group_category_ids, $target_group_ids, $weekdays, $group_type_ids, $is_open_for_members, $is_public, $show_overdue_groups, $show_overdue_groups_respect_settings, $show_inactive_groups, $without_my_groups, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupsHierarchies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**int[]**](../Model/int.md)| Array of group ids | [optional]
 **campus_ids** | [**int[]**](../Model/int.md)| Array of campus ids to filter the groups | [optional]
 **agegroup_ids** | [**int[]**](../Model/int.md)| Array of age group ids to filter the groups | [optional]
 **group_status_ids** | [**int[]**](../Model/int.md)| Array of group status ids to filter the groups | [optional]
 **group_category_ids** | [**int[]**](../Model/int.md)| Array of group category ids to filter the groups | [optional]
 **target_group_ids** | [**int[]**](../Model/int.md)| Array of target group ids to filter the groups | [optional]
 **weekdays** | [**int[]**](../Model/int.md)| Array of weekdays to filter the groups. Sunday &#x3D; 0, Monday &#x3D; 1 ... | [optional]
 **group_type_ids** | [**int[]**](../Model/int.md)| Array of group type ids to filter the groups | [optional]
 **is_open_for_members** | **bool**| Filters groups by its open status | [optional]
 **is_public** | **bool**| Filters groups by its public status | [optional]
 **show_overdue_groups** | **bool**| Determines if groups with overdue enddate should still be shown. To the enddate x dates are added specified by the admin settings for person &amp; groups | [optional]
 **show_overdue_groups_respect_settings** | **bool**| Determines if groups with overdue enddate should still be shown. To the enddate x dates are added specified by the admin settings for person &amp; groups. | [optional]
 **show_inactive_groups** | **bool**| Determines if inactive groups should be returned | [optional]
 **without_my_groups** | **bool**| Determines if groups should be omitted where I am in | [optional]
 **query** | **string**|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\GetGroupsHierarchies200Response**](../Model/GetGroupsHierarchies200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsMembers()`

```php
getGroupsMembers($ids, $with_deleted): \StevenBuehner\ChurchTools\Model\GetGroupsMembers200Response
```

Get all group members

Returns all group members. Only accessible for users with right \"administer persons\"

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array(56); // int[] | Array of group ids
$with_deleted = false; // bool | If true, return also deleted group members

try {
    $result = $apiInstance->getGroupsMembers($ids, $with_deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupsMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**int[]**](../Model/int.md)| Array of group ids | [optional]
 **with_deleted** | **bool**| If true, return also deleted group members | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\GetGroupsMembers200Response**](../Model/GetGroupsMembers200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGrupsIdPlaces()`

```php
getGrupsIdPlaces($group_id): \StevenBuehner\ChurchTools\Model\GetGrupsIdPlaces200Response
```

Get all places of a group

Returns an array of places

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group

try {
    $result = $apiInstance->getGrupsIdPlaces($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGrupsIdPlaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of group |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetGrupsIdPlaces200Response**](../Model/GetGrupsIdPlaces200Response.md)

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


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPersonMasterdata();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getPersonMasterdata: ', $e->getMessage(), PHP_EOL;
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

## `getPublicgroupsGroupIdForm()`

```php
getPublicgroupsGroupIdForm($group_id, $token, $person_id): \StevenBuehner\ChurchTools\Model\GetPublicgroupsGroupIdForm200Response
```

Get a Group Sign Up Form

When granted a sign up token, this endpoint returns all fields to display a sign up form for the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 'group_id_example'; // string | Group ID of the public group
$token = 'token_example'; // string | Sign Up Token
$person_id = 'person_id_example'; // string | The name for which the signup should be made

try {
    $result = $apiInstance->getPublicgroupsGroupIdForm($group_id, $token, $person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getPublicgroupsGroupIdForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| Group ID of the public group |
 **token** | **string**| Sign Up Token |
 **person_id** | **string**| The name for which the signup should be made |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetPublicgroupsGroupIdForm200Response**](../Model/GetPublicgroupsGroupIdForm200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getQRCodeCheckin()`

```php
getQRCodeCheckin($group_id, $person_id): \StevenBuehner\ChurchTools\Model\GetQRCodeCheckin200Response
```

Get link to QR-Code for CheckIn PDF

Get link to QR-Code for CheckIn PDF

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$person_id = 42; // int | ID of person

try {
    $result = $apiInstance->getQRCodeCheckin($group_id, $person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getQRCodeCheckin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of group |
 **person_id** | **int**| ID of person |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetQRCodeCheckin200Response**](../Model/GetQRCodeCheckin200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueSignUpToken()`

```php
issueSignUpToken($group_id, $issue_sign_up_token_request): \StevenBuehner\ChurchTools\Model\IssueSignUpToken200Response
```

Issue new sign up token.

The sign up token is needed to sign up to a public or open group using the form. The token can be issued by person id or for an email. If the person id is given, the token and the form url is returned. If an eMail address is given, the system checks if a user exists with that eMail, if s/he is already in the group or if the eMail is new to the system, hence a new user account would be necessary. The mail is sent with detailed information and a link to the sign up form.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 56; // int | Group id of public group
$issue_sign_up_token_request = {"email":"jean-de-martin@rau-en.fr","groupHomepageHash":"kukiOq4WofxbacqWFEa3FgbioX0kUr6p"}; // \StevenBuehner\ChurchTools\Model\IssueSignUpTokenRequest | You MUST provide either `personId` OR `email`. Both fields cannot be present at the same time.

try {
    $result = $apiInstance->issueSignUpToken($group_id, $issue_sign_up_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->issueSignUpToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Group id of public group |
 **issue_sign_up_token_request** | [**\StevenBuehner\ChurchTools\Model\IssueSignUpTokenRequest**](../Model/IssueSignUpTokenRequest.md)| You MUST provide either &#x60;personId&#x60; OR &#x60;email&#x60;. Both fields cannot be present at the same time. | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\IssueSignUpToken200Response**](../Model/IssueSignUpToken200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `optIns()`

```php
optIns($group_id): \StevenBuehner\ChurchTools\Model\OptIns200Response
```

Get Opt In status of group members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 42; // int | ID of group

try {
    $result = $apiInstance->optIns($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->optIns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of group |

### Return type

[**\StevenBuehner\ChurchTools\Model\OptIns200Response**](../Model/OptIns200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchGroupsGroupIdRolesRoleId()`

```php
patchGroupsGroupIdRolesRoleId($group_id, $role_id, $patch_groups_group_id_roles_role_id_request)
```

save role

Save role specific settings for this group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$role_id = 1; // int | ID of group type role
$patch_groups_group_id_roles_role_id_request = new \StevenBuehner\ChurchTools\Model\PatchGroupsGroupIdRolesRoleIdRequest(); // \StevenBuehner\ChurchTools\Model\PatchGroupsGroupIdRolesRoleIdRequest

try {
    $apiInstance->patchGroupsGroupIdRolesRoleId($group_id, $role_id, $patch_groups_group_id_roles_role_id_request);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->patchGroupsGroupIdRolesRoleId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of group |
 **role_id** | **int**| ID of group type role |
 **patch_groups_group_id_roles_role_id_request** | [**\StevenBuehner\ChurchTools\Model\PatchGroupsGroupIdRolesRoleIdRequest**](../Model/PatchGroupsGroupIdRolesRoleIdRequest.md)|  | [optional]

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

## `postAutomaticEmail()`

```php
postAutomaticEmail($group_id, $post_automatic_email_request): \StevenBuehner\ChurchTools\Model\PostAutomaticEmail201Response
```

Save new automatic email for a group role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$post_automatic_email_request = new \StevenBuehner\ChurchTools\Model\PostAutomaticEmailRequest(); // \StevenBuehner\ChurchTools\Model\PostAutomaticEmailRequest

try {
    $result = $apiInstance->postAutomaticEmail($group_id, $post_automatic_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->postAutomaticEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of group |
 **post_automatic_email_request** | [**\StevenBuehner\ChurchTools\Model\PostAutomaticEmailRequest**](../Model/PostAutomaticEmailRequest.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\PostAutomaticEmail201Response**](../Model/PostAutomaticEmail201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postGroups()`

```php
postGroups($post_groups_request): \StevenBuehner\ChurchTools\Model\PostGroups201Response
```

Create Group

Create new group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_groups_request = new \StevenBuehner\ChurchTools\Model\PostGroupsRequest(); // \StevenBuehner\ChurchTools\Model\PostGroupsRequest

try {
    $result = $apiInstance->postGroups($post_groups_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->postGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_groups_request** | [**\StevenBuehner\ChurchTools\Model\PostGroupsRequest**](../Model/PostGroupsRequest.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\PostGroups201Response**](../Model/PostGroups201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postGroupsGroupIdMeetingsMeetingIdMembersMissing()`

```php
postGroupsGroupIdMeetingsMeetingIdMembersMissing($group_id, $meeting_id, $post_groups_group_id_meetings_meeting_id_members_missing_request)
```



Set group meeting status for unsure members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string
$meeting_id = 'meeting_id_example'; // string
$post_groups_group_id_meetings_meeting_id_members_missing_request = new \StevenBuehner\ChurchTools\Model\PostGroupsGroupIdMeetingsMeetingIdMembersMissingRequest(); // \StevenBuehner\ChurchTools\Model\PostGroupsGroupIdMeetingsMeetingIdMembersMissingRequest

try {
    $apiInstance->postGroupsGroupIdMeetingsMeetingIdMembersMissing($group_id, $meeting_id, $post_groups_group_id_meetings_meeting_id_members_missing_request);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->postGroupsGroupIdMeetingsMeetingIdMembersMissing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**|  |
 **meeting_id** | **string**|  |
 **post_groups_group_id_meetings_meeting_id_members_missing_request** | [**\StevenBuehner\ChurchTools\Model\PostGroupsGroupIdMeetingsMeetingIdMembersMissingRequest**](../Model/PostGroupsGroupIdMeetingsMeetingIdMembersMissingRequest.md)|  | [optional]

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

## `postPublicgroupsGroupIdMailToLeaders()`

```php
postPublicgroupsGroupIdMailToLeaders($group_id, $post_publicgroups_group_id_mail_to_leaders_request)
```

Send a Mail to Public Group Leaders

Sends a mail to each group leader of the public group who has an email address set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 'group_id_example'; // string | Group ID of the public group
$post_publicgroups_group_id_mail_to_leaders_request = new \StevenBuehner\ChurchTools\Model\PostPublicgroupsGroupIdMailToLeadersRequest(); // \StevenBuehner\ChurchTools\Model\PostPublicgroupsGroupIdMailToLeadersRequest

try {
    $apiInstance->postPublicgroupsGroupIdMailToLeaders($group_id, $post_publicgroups_group_id_mail_to_leaders_request);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->postPublicgroupsGroupIdMailToLeaders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| Group ID of the public group |
 **post_publicgroups_group_id_mail_to_leaders_request** | [**\StevenBuehner\ChurchTools\Model\PostPublicgroupsGroupIdMailToLeadersRequest**](../Model/PostPublicgroupsGroupIdMailToLeadersRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPublicgroupsGroupIdSignup()`

```php
postPublicgroupsGroupIdSignup($group_id, $post_publicgroups_group_id_signup_request): \StevenBuehner\ChurchTools\Model\PostPublicgroupsGroupIdSignup200Response
```

Send a Sign Up Form to Get Signed Up into a Public Group

To sign a user up into a group, the form data has to be send to this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 'group_id_example'; // string | Group ID of the public group
$post_publicgroups_group_id_signup_request = new \StevenBuehner\ChurchTools\Model\PostPublicgroupsGroupIdSignupRequest(); // \StevenBuehner\ChurchTools\Model\PostPublicgroupsGroupIdSignupRequest

try {
    $result = $apiInstance->postPublicgroupsGroupIdSignup($group_id, $post_publicgroups_group_id_signup_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->postPublicgroupsGroupIdSignup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| Group ID of the public group |
 **post_publicgroups_group_id_signup_request** | [**\StevenBuehner\ChurchTools\Model\PostPublicgroupsGroupIdSignupRequest**](../Model/PostPublicgroupsGroupIdSignupRequest.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\PostPublicgroupsGroupIdSignup200Response**](../Model/PostPublicgroupsGroupIdSignup200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putAutomaticEmail()`

```php
putAutomaticEmail($group_id, $email_id, $put_automatic_email_request)
```

Update automatic email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$email_id = 'email_id_example'; // string
$put_automatic_email_request = new \StevenBuehner\ChurchTools\Model\PutAutomaticEmailRequest(); // \StevenBuehner\ChurchTools\Model\PutAutomaticEmailRequest

try {
    $apiInstance->putAutomaticEmail($group_id, $email_id, $put_automatic_email_request);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->putAutomaticEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of group |
 **email_id** | **string**|  |
 **put_automatic_email_request** | [**\StevenBuehner\ChurchTools\Model\PutAutomaticEmailRequest**](../Model/PutAutomaticEmailRequest.md)|  | [optional]

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

## `putGroupsGroupIdMeetingsMeetingId()`

```php
putGroupsGroupIdMeetingsMeetingId($group_id, $meeting_id, $put_groups_group_id_meetings_meeting_id_request)
```



Update group meeting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$meeting_id = 'meeting_id_example'; // string
$put_groups_group_id_meetings_meeting_id_request = new \StevenBuehner\ChurchTools\Model\PutGroupsGroupIdMeetingsMeetingIdRequest(); // \StevenBuehner\ChurchTools\Model\PutGroupsGroupIdMeetingsMeetingIdRequest

try {
    $apiInstance->putGroupsGroupIdMeetingsMeetingId($group_id, $meeting_id, $put_groups_group_id_meetings_meeting_id_request);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->putGroupsGroupIdMeetingsMeetingId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of group |
 **meeting_id** | **string**|  |
 **put_groups_group_id_meetings_meeting_id_request** | [**\StevenBuehner\ChurchTools\Model\PutGroupsGroupIdMeetingsMeetingIdRequest**](../Model/PutGroupsGroupIdMeetingsMeetingIdRequest.md)|  | [optional]

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

## `startStopGroupChat()`

```php
startStopGroupChat($group_id, $start_stop_event_chat_request)
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


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 42; // int | ID of group
$start_stop_event_chat_request = new \StevenBuehner\ChurchTools\Model\StartStopEventChatRequest(); // \StevenBuehner\ChurchTools\Model\StartStopEventChatRequest

try {
    $apiInstance->startStopGroupChat($group_id, $start_stop_event_chat_request);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->startStopGroupChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of group |
 **start_stop_event_chat_request** | [**\StevenBuehner\ChurchTools\Model\StartStopEventChatRequest**](../Model/StartStopEventChatRequest.md)|  |

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
