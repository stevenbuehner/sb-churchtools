# StevenBuehner\ChurchTools\GroupApi

All URIs are relative to http://localhost/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkin()**](GroupApi.md#checkin) | **POST** /groups/{groupId}/checkin/{personId} | Checkin a person to a group
[**createMeeting()**](GroupApi.md#createMeeting) | **POST** /groups/{id}/meetings | Create a group meeting
[**createOrUpdateMember()**](GroupApi.md#createOrUpdateMember) | **PUT** /groups/{id}/members/{personId} | Create/Update a group member
[**deleteAutomaticEmail()**](GroupApi.md#deleteAutomaticEmail) | **DELETE** /groups/{groupId}/emails/{emailId} | Delete automatic email
[**deleteGroup()**](GroupApi.md#deleteGroup) | **DELETE** /groups/{id} | 
[**deleteGroupsGroupIdMeetingsMeetingId()**](GroupApi.md#deleteGroupsGroupIdMeetingsMeetingId) | **DELETE** /groups/{groupId}/meetings/{meetingId} | 
[**deleteGroupsGroupIdMeetingsMeetingIdMembersMemberId()**](GroupApi.md#deleteGroupsGroupIdMeetingsMeetingIdMembersMemberId) | **DELETE** /groups/{groupId}/meetings/{meetingId}/members/{memberId} | Revoke checkin
[**deleteMember()**](GroupApi.md#deleteMember) | **DELETE** /groups/{id}/members/{personId} | Delete a group member
[**getAllGroupMembers()**](GroupApi.md#getAllGroupMembers) | **GET** /groups/{id}/members | Get all group members
[**getAllGroupsForPerson()**](GroupApi.md#getAllGroupsForPerson) | **GET** /persons/{id}/groups | Get all groups a member is in
[**getAllMeetings()**](GroupApi.md#getAllMeetings) | **GET** /groups/{id}/meetings | Get all group meetings for a specific group
[**getAutomaticEmail()**](GroupApi.md#getAutomaticEmail) | **GET** /groups/{groupId}/emails/{emailId} | Get one automatic email
[**getAutomaticEmails()**](GroupApi.md#getAutomaticEmails) | **GET** /groups/{groupId}/emails | Get all automatic emails of a group
[**getGroupForHomepage()**](GroupApi.md#getGroupForHomepage) | **GET** /publicgroups/{id}/{hash} | Public information of group
[**getGroupHomepage()**](GroupApi.md#getGroupHomepage) | **GET** /grouphomepages/{hash} | Get information about public groups with settings
[**getGroupStatistics()**](GroupApi.md#getGroupStatistics) | **GET** /groups/{groupId}/statistics | Fetch calculated facts about group
[**getGroups()**](GroupApi.md#getGroups) | **GET** /groups | Get all groups
[**getGroupsGroupIdMemberfields()**](GroupApi.md#getGroupsGroupIdMemberfields) | **GET** /groups/{groupId}/memberfields | Get Group member fields
[**getGroupsGroupIdMembersStatistics()**](GroupApi.md#getGroupsGroupIdMembersStatistics) | **GET** /groups/{groupId}/members/statistics | Get statistics for group members
[**getGroupsHierarchies()**](GroupApi.md#getGroupsHierarchies) | **GET** /groups/hierarchies | Get all group hierarchies
[**getGroupsMembers()**](GroupApi.md#getGroupsMembers) | **GET** /groups/members | Get all group members
[**getPublicgroupsGroupIdForm()**](GroupApi.md#getPublicgroupsGroupIdForm) | **GET** /publicgroups/{groupId}/form | Get a Group Sign Up Form
[**getQRCodeCheckin()**](GroupApi.md#getQRCodeCheckin) | **GET** /groups/{groupId}/qrcodecheckin/{personId}/pdf | Get link to QR-Code for CheckIn PDF
[**groupsIdGet()**](GroupApi.md#groupsIdGet) | **GET** /groups/{id} | Get a group
[**issueSignUpToken()**](GroupApi.md#issueSignUpToken) | **POST** /publicgroups/{groupId}/token | Issue new sign up token.
[**optIns()**](GroupApi.md#optIns) | **GET** /groups/{id}/optins | Get Opt In status of group members
[**postAutomaticEmail()**](GroupApi.md#postAutomaticEmail) | **POST** /groups/{groupId}/emails | Save new automatic email for a group role
[**postGroups()**](GroupApi.md#postGroups) | **POST** /groups | Create Group
[**postGroupsGroupIdMeetingsMeetingIdMembersMissing()**](GroupApi.md#postGroupsGroupIdMeetingsMeetingIdMembersMissing) | **POST** /groups/{groupId}/meetings/{meetingId}/members/missing | 
[**postPublicgroupsGroupIdMailToLeaders()**](GroupApi.md#postPublicgroupsGroupIdMailToLeaders) | **POST** /publicgroups/{groupId}/mailToLeaders | Send a Mail to Public Group Leaders
[**postPublicgroupsGroupIdSignup()**](GroupApi.md#postPublicgroupsGroupIdSignup) | **POST** /publicgroups/{groupId}/signup | Send a Sign Up Form to Get Signed Up into a Public Group
[**putAutomaticEmail()**](GroupApi.md#putAutomaticEmail) | **PUT** /groups/{groupId}/emails/{emailId} | Update automatic email
[**putGroupsGroupIdMeetingsMeetingId()**](GroupApi.md#putGroupsGroupIdMeetingsMeetingId) | **PUT** /groups/{groupId}/meetings/{meetingId} | 
[**startStopChat()**](GroupApi.md#startStopChat) | **POST** /groups/{id}/chat | Start or stop an event chat


## `checkin()`

```php
checkin($group_id, $person_id, $inline_object11): \StevenBuehner\ChurchTools\Model\InlineResponse20024
```

Checkin a person to a group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
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
$person_id = 7; // int | ID of person
$inline_object11 = new \StevenBuehner\ChurchTools\Model\InlineObject11(); // \StevenBuehner\ChurchTools\Model\InlineObject11

try {
    $result = $apiInstance->checkin($group_id, $person_id, $inline_object11);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->checkin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of group |
 **person_id** | **int**| ID of person |
 **inline_object11** | [**\StevenBuehner\ChurchTools\Model\InlineObject11**](../Model/InlineObject11.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMeeting()`

```php
createMeeting($id, $inline_object10): \StevenBuehner\ChurchTools\Model\InlineResponse20022
```

Create a group meeting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | ID of group
$inline_object10 = new \StevenBuehner\ChurchTools\Model\InlineObject10(); // \StevenBuehner\ChurchTools\Model\InlineObject10

try {
    $result = $apiInstance->createMeeting($id, $inline_object10);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->createMeeting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of group |
 **inline_object10** | [**\StevenBuehner\ChurchTools\Model\InlineObject10**](../Model/InlineObject10.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrUpdateMember()`

```php
createOrUpdateMember($id, $person_id, $inline_object9): \StevenBuehner\ChurchTools\Model\InlineResponse20019
```

Create/Update a group member

Add or update a group member.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | ID of group
$person_id = 42; // int | ID of person
$inline_object9 = new \StevenBuehner\ChurchTools\Model\InlineObject9(); // \StevenBuehner\ChurchTools\Model\InlineObject9

try {
    $result = $apiInstance->createOrUpdateMember($id, $person_id, $inline_object9);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->createOrUpdateMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of group |
 **person_id** | **int**| ID of person |
 **inline_object9** | [**\StevenBuehner\ChurchTools\Model\InlineObject9**](../Model/InlineObject9.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAutomaticEmail()`

```php
deleteAutomaticEmail($group_id, $email_id, $dry_run)
```

Delete automatic email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
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
$email_id = 'email_id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->deleteAutomaticEmail($group_id, $email_id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteAutomaticEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**|  |
 **email_id** | **string**|  |
 **dry_run** | **bool**|  | [optional]

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

## `deleteGroup()`

```php
deleteGroup($dry_run)
```



Delete a group. This will remove all people from this group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dry_run = True; // bool

try {
    $apiInstance->deleteGroup($dry_run);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dry_run** | **bool**|  | [optional]

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

## `deleteGroupsGroupIdMeetingsMeetingId()`

```php
deleteGroupsGroupIdMeetingsMeetingId($group_id, $meeting_id)
```



delete group meeting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
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

try {
    $apiInstance->deleteGroupsGroupIdMeetingsMeetingId($group_id, $meeting_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroupsGroupIdMeetingsMeetingId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**|  |
 **meeting_id** | **string**|  |

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

## `deleteGroupsGroupIdMeetingsMeetingIdMembersMemberId()`

```php
deleteGroupsGroupIdMeetingsMeetingIdMembersMemberId($group_id, $meeting_id, $member_id, $inline_object61)
```

Revoke checkin

Revoke the checkin for a previously checked-in group member.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
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
$member_id = 'member_id_example'; // string
$inline_object61 = new \StevenBuehner\ChurchTools\Model\InlineObject61(); // \StevenBuehner\ChurchTools\Model\InlineObject61

try {
    $apiInstance->deleteGroupsGroupIdMeetingsMeetingIdMembersMemberId($group_id, $meeting_id, $member_id, $inline_object61);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroupsGroupIdMeetingsMeetingIdMembersMemberId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**|  |
 **meeting_id** | **string**|  |
 **member_id** | **string**|  |
 **inline_object61** | [**\StevenBuehner\ChurchTools\Model\InlineObject61**](../Model/InlineObject61.md)|  | [optional]

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

## `deleteMember()`

```php
deleteMember($id, $person_id)
```

Delete a group member

Removes a group member from the group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | ID of group
$person_id = 42; // int | ID of person

try {
    $apiInstance->deleteMember($id, $person_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of group |
 **person_id** | **int**| ID of person |

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

## `getAllGroupMembers()`

```php
getAllGroupMembers($id, $page, $limit, $role_ids, $allowed_chat_users_only, $query): \StevenBuehner\ChurchTools\Model\InlineResponse20018
```

Get all group members

This endpoint returns an array with all group members of one group. The members can be filtered by the group member fields as query params.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | ID of group
$page = 1; // int | Page number to show page in pagenation. If empty, start at first page.
$limit = 10; // int | Number of results per page.
$role_ids = array(56); // int[] | roles to filter the members
$allowed_chat_users_only = false; // bool | If true, return only group members, that are allowed to chat in this group
$query = Peter Maier; // string | searches in first and second name of group member

try {
    $result = $apiInstance->getAllGroupMembers($id, $page, $limit, $role_ids, $allowed_chat_users_only, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getAllGroupMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of group |
 **page** | **int**| Page number to show page in pagenation. If empty, start at first page. | [optional] [default to 1]
 **limit** | **int**| Number of results per page. | [optional] [default to 10]
 **role_ids** | [**int[]**](../Model/int.md)| roles to filter the members | [optional]
 **allowed_chat_users_only** | **bool**| If true, return only group members, that are allowed to chat in this group | [optional]
 **query** | **string**| searches in first and second name of group member | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

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


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
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
    echo 'Exception when calling GroupApi->getAllGroupsForPerson: ', $e->getMessage(), PHP_EOL;
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

## `getAllMeetings()`

```php
getAllMeetings($id, $is_canceled, $is_completed): \StevenBuehner\ChurchTools\Model\InlineResponse20021
```

Get all group meetings for a specific group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | ID of group
$is_canceled = True; // bool | Whether to show canceled group meetings
$is_completed = True; // bool | Whether to show done group meetings

try {
    $result = $apiInstance->getAllMeetings($id, $is_canceled, $is_completed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getAllMeetings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of group |
 **is_canceled** | **bool**| Whether to show canceled group meetings | [optional]
 **is_completed** | **bool**| Whether to show done group meetings | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutomaticEmail()`

```php
getAutomaticEmail($group_id, $email_id): \StevenBuehner\ChurchTools\Model\InlineResponse200120
```

Get one automatic email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
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
 **group_id** | **string**|  |
 **email_id** | **string**|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse200120**](../Model/InlineResponse200120.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutomaticEmails()`

```php
getAutomaticEmails($group_id): \StevenBuehner\ChurchTools\Model\InlineResponse200119
```

Get all automatic emails of a group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
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
 **group_id** | **string**|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse200119**](../Model/InlineResponse200119.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupForHomepage()`

```php
getGroupForHomepage($hash, $id): \StevenBuehner\ChurchTools\Model\PublicGroup
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
$id = 'id_example'; // string | Group ID

try {
    $result = $apiInstance->getGroupForHomepage($hash, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupForHomepage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| Group Homepage Hash |
 **id** | **string**| Group ID |

### Return type

[**\StevenBuehner\ChurchTools\Model\PublicGroup**](../Model/PublicGroup.md)

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
getGroupHomepage($hash): \StevenBuehner\ChurchTools\Model\InlineResponse20025
```

Get information about public groups with settings

Get all information necessary to display public groups. The response will provide setting information and all public groups with information for the page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

[**\StevenBuehner\ChurchTools\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupStatistics()`

```php
getGroupStatistics($group_id): \StevenBuehner\ChurchTools\Model\InlineResponse200116
```

Fetch calculated facts about group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
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
 **group_id** | **string**|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse200116**](../Model/InlineResponse200116.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroups()`

```php
getGroups($ids, $campus_ids, $agegroup_ids, $group_status_ids, $group_category_ids, $target_group_ids, $weekdays, $group_type_ids, $is_open_for_members, $is_public, $show_overdue_groups, $show_inactive_groups, $without_my_groups, $query, $page, $limit): \StevenBuehner\ChurchTools\Model\InlineResponse20093
```

Get all groups

This endpoint returns an array with all groups the user can see. This includes groups the user     is a member of as well as subordinate groups the user is allowed to see.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
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
$show_inactive_groups = True; // bool | Determines if inactive groups should be returned
$without_my_groups = True; // bool | Determines if groups should be omitted where I am in
$query = 'query_example'; // string
$page = 1; // float | Page number to show page in pagenation. If empty, start at first page.
$limit = 10; // float | Number of results per page.

try {
    $result = $apiInstance->getGroups($ids, $campus_ids, $agegroup_ids, $group_status_ids, $group_category_ids, $target_group_ids, $weekdays, $group_type_ids, $is_open_for_members, $is_public, $show_overdue_groups, $show_inactive_groups, $without_my_groups, $query, $page, $limit);
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
 **show_overdue_groups** | **bool**| Determines if groups with overdue enddate should still be shown. To the enddate x dates are added specified by the admin settings for person &amp; groups | [optional]
 **show_inactive_groups** | **bool**| Determines if inactive groups should be returned | [optional]
 **without_my_groups** | **bool**| Determines if groups should be omitted where I am in | [optional]
 **query** | **string**|  | [optional]
 **page** | **float**| Page number to show page in pagenation. If empty, start at first page. | [optional] [default to 1]
 **limit** | **float**| Number of results per page. | [optional] [default to 10]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20093**](../Model/InlineResponse20093.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsGroupIdMemberfields()`

```php
getGroupsGroupIdMemberfields($group_id): \StevenBuehner\ChurchTools\Model\InlineResponse20088
```

Get Group member fields

Returns the configured group member fields for the given group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
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
 **group_id** | **string**|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20088**](../Model/InlineResponse20088.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsGroupIdMembersStatistics()`

```php
getGroupsGroupIdMembersStatistics($group_id, $group_type_role_ids, $person_fields, $group_member_fields): \StevenBuehner\ChurchTools\Model\InlineResponse200121
```

Get statistics for group members

Gets statistics for the group members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
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
$group_type_role_ids = NULL; // array
$person_fields = NULL; // array | person field keys
$group_member_fields = NULL; // array | group member field ids

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
 **group_id** | **string**|  |
 **group_type_role_ids** | [**array**](../Model/.md)|  | [optional]
 **person_fields** | [**array**](../Model/.md)| person field keys | [optional]
 **group_member_fields** | [**array**](../Model/.md)| group member field ids | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse200121**](../Model/InlineResponse200121.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsHierarchies()`

```php
getGroupsHierarchies($ids, $campus_ids, $agegroup_ids, $group_status_ids, $group_category_ids, $target_group_ids, $weekdays, $group_type_ids, $is_open_for_members, $is_public, $show_overdue_groups, $show_inactive_groups, $without_my_groups, $query): \StevenBuehner\ChurchTools\Model\InlineResponse20091
```

Get all group hierarchies

Returns all group hierarchies. The groups not visible for the user only show ids

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
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
$show_inactive_groups = True; // bool | Determines if inactive groups should be returned
$without_my_groups = True; // bool | Determines if groups should be omitted where I am in
$query = 'query_example'; // string

try {
    $result = $apiInstance->getGroupsHierarchies($ids, $campus_ids, $agegroup_ids, $group_status_ids, $group_category_ids, $target_group_ids, $weekdays, $group_type_ids, $is_open_for_members, $is_public, $show_overdue_groups, $show_inactive_groups, $without_my_groups, $query);
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
 **show_inactive_groups** | **bool**| Determines if inactive groups should be returned | [optional]
 **without_my_groups** | **bool**| Determines if groups should be omitted where I am in | [optional]
 **query** | **string**|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20091**](../Model/InlineResponse20091.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsMembers()`

```php
getGroupsMembers($ids, $with_deleted): \StevenBuehner\ChurchTools\Model\InlineResponse20092
```

Get all group members

Returns all group members. Only accessible for users with right \"administer persons\"

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
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

[**\StevenBuehner\ChurchTools\Model\InlineResponse20092**](../Model/InlineResponse20092.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPublicgroupsGroupIdForm()`

```php
getPublicgroupsGroupIdForm($group_id, $token, $person_id): \StevenBuehner\ChurchTools\Model\InlineResponse20072
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

[**\StevenBuehner\ChurchTools\Model\InlineResponse20072**](../Model/InlineResponse20072.md)

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
getQRCodeCheckin($group_id, $person_id): \StevenBuehner\ChurchTools\Model\InlineResponse20023
```

Get link to QR-Code for CheckIn PDF

Get link to QR-Code for CheckIn PDF

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
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

[**\StevenBuehner\ChurchTools\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupsIdGet()`

```php
groupsIdGet($id): \StevenBuehner\ChurchTools\Model\InlineResponse20017
```

Get a group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // string | ID or chat GUID of group

try {
    $result = $apiInstance->groupsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->groupsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID or chat GUID of group |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueSignUpToken()`

```php
issueSignUpToken($group_id, $inline_object45): \StevenBuehner\ChurchTools\Model\InlineResponse20071
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
$group_id = 3.4; // float | Group id of public group
$inline_object45 = new \StevenBuehner\ChurchTools\Model\InlineObject45(); // \StevenBuehner\ChurchTools\Model\InlineObject45

try {
    $result = $apiInstance->issueSignUpToken($group_id, $inline_object45);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->issueSignUpToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **float**| Group id of public group |
 **inline_object45** | [**\StevenBuehner\ChurchTools\Model\InlineObject45**](../Model/InlineObject45.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20071**](../Model/InlineResponse20071.md)

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
optIns($id): \StevenBuehner\ChurchTools\Model\InlineResponse20020
```

Get Opt In status of group members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | ID of group

try {
    $result = $apiInstance->optIns($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->optIns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of group |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAutomaticEmail()`

```php
postAutomaticEmail($group_id, $inline_object71): \StevenBuehner\ChurchTools\Model\InlineResponse2019
```

Save new automatic email for a group role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
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
$inline_object71 = new \StevenBuehner\ChurchTools\Model\InlineObject71(); // \StevenBuehner\ChurchTools\Model\InlineObject71

try {
    $result = $apiInstance->postAutomaticEmail($group_id, $inline_object71);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->postAutomaticEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**|  |
 **inline_object71** | [**\StevenBuehner\ChurchTools\Model\InlineObject71**](../Model/InlineObject71.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2019**](../Model/InlineResponse2019.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postGroups()`

```php
postGroups($inline_object55): \StevenBuehner\ChurchTools\Model\InlineResponse20017
```

Create Group

Create new group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object55 = new \StevenBuehner\ChurchTools\Model\InlineObject55(); // \StevenBuehner\ChurchTools\Model\InlineObject55

try {
    $result = $apiInstance->postGroups($inline_object55);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->postGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object55** | [**\StevenBuehner\ChurchTools\Model\InlineObject55**](../Model/InlineObject55.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postGroupsGroupIdMeetingsMeetingIdMembersMissing()`

```php
postGroupsGroupIdMeetingsMeetingIdMembersMissing($group_id, $meeting_id, $inline_object74)
```



Set group meeting status for unsure members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
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
$inline_object74 = new \StevenBuehner\ChurchTools\Model\InlineObject74(); // \StevenBuehner\ChurchTools\Model\InlineObject74

try {
    $apiInstance->postGroupsGroupIdMeetingsMeetingIdMembersMissing($group_id, $meeting_id, $inline_object74);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->postGroupsGroupIdMeetingsMeetingIdMembersMissing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**|  |
 **meeting_id** | **string**|  |
 **inline_object74** | [**\StevenBuehner\ChurchTools\Model\InlineObject74**](../Model/InlineObject74.md)|  | [optional]

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

## `postPublicgroupsGroupIdMailToLeaders()`

```php
postPublicgroupsGroupIdMailToLeaders($group_id, $inline_object46)
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
$inline_object46 = new \StevenBuehner\ChurchTools\Model\InlineObject46(); // \StevenBuehner\ChurchTools\Model\InlineObject46

try {
    $apiInstance->postPublicgroupsGroupIdMailToLeaders($group_id, $inline_object46);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->postPublicgroupsGroupIdMailToLeaders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| Group ID of the public group |
 **inline_object46** | [**\StevenBuehner\ChurchTools\Model\InlineObject46**](../Model/InlineObject46.md)|  | [optional]

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
postPublicgroupsGroupIdSignup($group_id, $inline_object47): \StevenBuehner\ChurchTools\Model\InlineResponse20073
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
$inline_object47 = new \StevenBuehner\ChurchTools\Model\InlineObject47(); // \StevenBuehner\ChurchTools\Model\InlineObject47

try {
    $result = $apiInstance->postPublicgroupsGroupIdSignup($group_id, $inline_object47);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->postPublicgroupsGroupIdSignup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| Group ID of the public group |
 **inline_object47** | [**\StevenBuehner\ChurchTools\Model\InlineObject47**](../Model/InlineObject47.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20073**](../Model/InlineResponse20073.md)

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
putAutomaticEmail($group_id, $email_id, $inline_object72)
```

Update automatic email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
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
$email_id = 'email_id_example'; // string
$inline_object72 = new \StevenBuehner\ChurchTools\Model\InlineObject72(); // \StevenBuehner\ChurchTools\Model\InlineObject72

try {
    $apiInstance->putAutomaticEmail($group_id, $email_id, $inline_object72);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->putAutomaticEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**|  |
 **email_id** | **string**|  |
 **inline_object72** | [**\StevenBuehner\ChurchTools\Model\InlineObject72**](../Model/InlineObject72.md)|  | [optional]

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

## `putGroupsGroupIdMeetingsMeetingId()`

```php
putGroupsGroupIdMeetingsMeetingId($group_id, $meeting_id, $inline_object73)
```



Update group meeting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
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
$inline_object73 = new \StevenBuehner\ChurchTools\Model\InlineObject73(); // \StevenBuehner\ChurchTools\Model\InlineObject73

try {
    $apiInstance->putGroupsGroupIdMeetingsMeetingId($group_id, $meeting_id, $inline_object73);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->putGroupsGroupIdMeetingsMeetingId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**|  |
 **meeting_id** | **string**|  |
 **inline_object73** | [**\StevenBuehner\ChurchTools\Model\InlineObject73**](../Model/InlineObject73.md)|  | [optional]

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

## `startStopChat()`

```php
startStopChat($id, $inline_object8)
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


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | ID of group
$inline_object8 = new \StevenBuehner\ChurchTools\Model\InlineObject8(); // \StevenBuehner\ChurchTools\Model\InlineObject8

try {
    $apiInstance->startStopChat($id, $inline_object8);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->startStopChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of group |
 **inline_object8** | [**\StevenBuehner\ChurchTools\Model\InlineObject8**](../Model/InlineObject8.md)|  |

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
