# StevenBuehner\ChurchTools\GroupApi

All URIs are relative to *https://teambb.church.tools/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkin**](GroupApi.md#checkin) | **POST** /groups/{groupId}/checkin/{personId} | Checkin a person to a group
[**createMeeting**](GroupApi.md#createmeeting) | **POST** /groups/{id}/meetings | Create a group meeting
[**createOrUpdateMember**](GroupApi.md#createorupdatemember) | **PUT** /groups/{id}/members/{personId} | Create/Update a group member
[**deleteGroupsGroupIdMeetingsMeetingIdMembersMemberId**](GroupApi.md#deletegroupsgroupidmeetingsmeetingidmembersmemberid) | **DELETE** /groups/{groupId}/meetings/{meetingId}/members/{memberId} | Revoke checkin
[**deleteMember**](GroupApi.md#deletemember) | **DELETE** /groups/{id}/members/{personId} | Delete a group member
[**getAllGroupMembers**](GroupApi.md#getallgroupmembers) | **GET** /groups/{id}/members | Get all group members
[**getAllGroupsForPerson**](GroupApi.md#getallgroupsforperson) | **GET** /persons/{id}/groups | Get all groups a member is in
[**getAllMeetings**](GroupApi.md#getallmeetings) | **GET** /groups/{id}/meetings | Get all group meetings for a specific group
[**getGroupForHomepage**](GroupApi.md#getgroupforhomepage) | **GET** /publicgroups/{id}/{hash} | Public information of group
[**getGroupHomepage**](GroupApi.md#getgrouphomepage) | **GET** /grouphomepages/{hash} | Get information about public groups with settings
[**getGroups**](GroupApi.md#getgroups) | **GET** /groups | Get all groups
[**getGroupsGroupIdMemberfields**](GroupApi.md#getgroupsgroupidmemberfields) | **GET** /groups/{groupId}/memberfields | Get Group member fields
[**getGroupsHierarchies**](GroupApi.md#getgroupshierarchies) | **GET** /groups/hierarchies | Get all group hierarchies
[**getGroupsMembers**](GroupApi.md#getgroupsmembers) | **GET** /groups/members | Get all group members
[**getPublicgroupsGroupIdForm**](GroupApi.md#getpublicgroupsgroupidform) | **GET** /publicgroups/{groupId}/form | Get a Group Sign Up Form
[**getQRCodeCheckin**](GroupApi.md#getqrcodecheckin) | **GET** /groups/{groupId}/qrcodecheckin/{personId}/pdf | Get link to QR-Code for CheckIn PDF
[**groupsIdGet**](GroupApi.md#groupsidget) | **GET** /groups/{id} | Get a group
[**issueSignUpToken**](GroupApi.md#issuesignuptoken) | **POST** /publicgroups/{groupId}/token | Issue new sign up token.
[**optIns**](GroupApi.md#optins) | **GET** /groups/{id}/optins | Get Opt In status of group members
[**postPublicgroupsGroupIdMailToLeaders**](GroupApi.md#postpublicgroupsgroupidmailtoleaders) | **POST** /publicgroups/{groupId}/mailToLeaders | Send a Mail to Public Group Leaders
[**postPublicgroupsGroupIdSignup**](GroupApi.md#postpublicgroupsgroupidsignup) | **POST** /publicgroups/{groupId}/signup | Send a Sign Up Form to Get Signed Up into a Public Group
[**startStopChat**](GroupApi.md#startstopchat) | **POST** /groups/{id}/chat | Start or stop an event chat

# **checkin**
> \StevenBuehner\ChurchTools\Model\InlineResponse20024 checkin($body, $group_id, $person_id)

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
$body = new \StevenBuehner\ChurchTools\Model\Body12(); // \StevenBuehner\ChurchTools\Model\Body12 | 
$group_id = 56; // int | ID of group
$person_id = 56; // int | ID of person

try {
    $result = $apiInstance->checkin($body, $group_id, $person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->checkin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body12**](../Model/Body12.md)|  |
 **group_id** | **int**| ID of group |
 **person_id** | **int**| ID of person |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMeeting**
> \StevenBuehner\ChurchTools\Model\InlineResponse20022 createMeeting($body, $id)

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
$body = new \StevenBuehner\ChurchTools\Model\Body11(); // \StevenBuehner\ChurchTools\Model\Body11 | 
$id = 56; // int | ID of group

try {
    $result = $apiInstance->createMeeting($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->createMeeting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body11**](../Model/Body11.md)|  |
 **id** | **int**| ID of group |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrUpdateMember**
> \StevenBuehner\ChurchTools\Model\InlineResponse20019 createOrUpdateMember($body, $id, $person_id)

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
$body = new \StevenBuehner\ChurchTools\Model\Body10(); // \StevenBuehner\ChurchTools\Model\Body10 | All fields are optional. If not set, default values are used. groupTypeRoleId defaults to the standard role of the group's grouptype, comment and member start/end dates default to null. Additional custom group fields are not yet supported through this API.
$id = 56; // int | ID of group
$person_id = 56; // int | ID of person

try {
    $result = $apiInstance->createOrUpdateMember($body, $id, $person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->createOrUpdateMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body10**](../Model/Body10.md)| All fields are optional. If not set, default values are used. groupTypeRoleId defaults to the standard role of the group&#x27;s grouptype, comment and member start/end dates default to null. Additional custom group fields are not yet supported through this API. |
 **id** | **int**| ID of group |
 **person_id** | **int**| ID of person |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGroupsGroupIdMeetingsMeetingIdMembersMemberId**
> deleteGroupsGroupIdMeetingsMeetingIdMembersMemberId($group_id, $meeting_id, $member_id)

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
$group_id = "group_id_example"; // string | 
$meeting_id = "meeting_id_example"; // string | 
$member_id = "member_id_example"; // string | 

try {
    $apiInstance->deleteGroupsGroupIdMeetingsMeetingIdMembersMemberId($group_id, $meeting_id, $member_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroupsGroupIdMeetingsMeetingIdMembersMemberId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**|  |
 **meeting_id** | **string**|  |
 **member_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMember**
> deleteMember($id, $person_id)

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
$id = 56; // int | ID of group
$person_id = 56; // int | ID of person

try {
    $apiInstance->deleteMember($id, $person_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteMember: ', $e->getMessage(), PHP_EOL;
}
?>
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
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllGroupMembers**
> \StevenBuehner\ChurchTools\Model\InlineResponse20018 getAllGroupMembers($id, $page, $limit, $role_ids, $allowed_chat_users_only)

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
$id = 56; // int | ID of group
$page = 1; // int | Page number to show page in pagenation. If empty, start at first page.
$limit = 10; // int | Number of results per page.
$role_ids = array(56); // int[] | roles to filter the members
$allowed_chat_users_only = true; // bool | If true, return only group members, that are allowed to chat in this group

try {
    $result = $apiInstance->getAllGroupMembers($id, $page, $limit, $role_ids, $allowed_chat_users_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getAllGroupMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of group |
 **page** | **int**| Page number to show page in pagenation. If empty, start at first page. | [optional] [default to 1]
 **limit** | **int**| Number of results per page. | [optional] [default to 10]
 **role_ids** | [**int[]**](../Model/int.md)| roles to filter the members | [optional]
 **allowed_chat_users_only** | **bool**| If true, return only group members, that are allowed to chat in this group | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

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

$apiInstance = new StevenBuehner\ChurchTools\Api\GroupApi(
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
    echo 'Exception when calling GroupApi->getAllGroupsForPerson: ', $e->getMessage(), PHP_EOL;
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

# **getAllMeetings**
> \StevenBuehner\ChurchTools\Model\InlineResponse20021 getAllMeetings($id)

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
$id = 56; // int | ID of group

try {
    $result = $apiInstance->getAllMeetings($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getAllMeetings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of group |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupForHomepage**
> \StevenBuehner\ChurchTools\Model\PublicGroup getGroupForHomepage($hash, $id)

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
$hash = "hash_example"; // string | Group Homepage Hash
$id = "id_example"; // string | Group ID

try {
    $result = $apiInstance->getGroupForHomepage($hash, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupForHomepage: ', $e->getMessage(), PHP_EOL;
}
?>
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
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupHomepage**
> \StevenBuehner\ChurchTools\Model\InlineResponse20025 getGroupHomepage($hash)

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
$hash = "hash_example"; // string | Random hash for public groups

try {
    $result = $apiInstance->getGroupHomepage($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupHomepage: ', $e->getMessage(), PHP_EOL;
}
?>
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
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroups**
> \StevenBuehner\ChurchTools\Model\InlineResponse20095 getGroups($ids, $campus_ids, $agegroup_ids, $group_status_ids, $group_category_ids, $target_group_ids, $weekdays, $group_type_ids, $is_open_for_members, $is_public, $show_overdue_groups, $show_inactive_groups, $without_my_groups, $query, $page, $limit)

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
$is_open_for_members = true; // bool | Filters groups by its open status
$is_public = true; // bool | Filters groups by its public status
$show_overdue_groups = true; // bool | Determines if groups with overdue enddate should still be shown. To the enddate x dates are added specified by the admin settings for person & groups
$show_inactive_groups = true; // bool | Determines if inactive groups should be returned
$without_my_groups = true; // bool | Determines if groups should be omitted where I am in
$query = "query_example"; // string | 
$page = 10; // float | Page number to show page in pagenation. If empty, start at first page.
$limit = 10; // float | Number of results per page.

try {
    $result = $apiInstance->getGroups($ids, $campus_ids, $agegroup_ids, $group_status_ids, $group_category_ids, $target_group_ids, $weekdays, $group_type_ids, $is_open_for_members, $is_public, $show_overdue_groups, $show_inactive_groups, $without_my_groups, $query, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroups: ', $e->getMessage(), PHP_EOL;
}
?>
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
 **page** | **float**| Page number to show page in pagenation. If empty, start at first page. | [optional] [default to 10]
 **limit** | **float**| Number of results per page. | [optional] [default to 10]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20095**](../Model/InlineResponse20095.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupsGroupIdMemberfields**
> \StevenBuehner\ChurchTools\Model\InlineResponse20090 getGroupsGroupIdMemberfields($group_id)

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
$group_id = "group_id_example"; // string | 

try {
    $result = $apiInstance->getGroupsGroupIdMemberfields($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupsGroupIdMemberfields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20090**](../Model/InlineResponse20090.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupsHierarchies**
> \StevenBuehner\ChurchTools\Model\InlineResponse20093 getGroupsHierarchies($ids, $campus_ids, $agegroup_ids, $group_status_ids, $group_category_ids, $target_group_ids, $weekday, $group_type_ids, $is_open_for_members, $is_public, $show_overdue_groups, $show_inactive_groups, $without_my_groups, $query)

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
$weekday = array(56); // int[] | Array of weekdays to filter the groups. Sunday = 0, Monday = 1 ...
$group_type_ids = array(56); // int[] | Array of group type ids to filter the groups
$is_open_for_members = true; // bool | Filters groups by its open status
$is_public = true; // bool | Filters groups by its public status
$show_overdue_groups = true; // bool | Determines if groups with overdue enddate should still be shown. To the enddate x dates are added specified by the admin settings for person & groups
$show_inactive_groups = true; // bool | Determines if inactive groups should be returned
$without_my_groups = true; // bool | Determines if groups should be omitted where I am in
$query = "query_example"; // string | 

try {
    $result = $apiInstance->getGroupsHierarchies($ids, $campus_ids, $agegroup_ids, $group_status_ids, $group_category_ids, $target_group_ids, $weekday, $group_type_ids, $is_open_for_members, $is_public, $show_overdue_groups, $show_inactive_groups, $without_my_groups, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupsHierarchies: ', $e->getMessage(), PHP_EOL;
}
?>
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
 **weekday** | [**int[]**](../Model/int.md)| Array of weekdays to filter the groups. Sunday &#x3D; 0, Monday &#x3D; 1 ... | [optional]
 **group_type_ids** | [**int[]**](../Model/int.md)| Array of group type ids to filter the groups | [optional]
 **is_open_for_members** | **bool**| Filters groups by its open status | [optional]
 **is_public** | **bool**| Filters groups by its public status | [optional]
 **show_overdue_groups** | **bool**| Determines if groups with overdue enddate should still be shown. To the enddate x dates are added specified by the admin settings for person &amp; groups | [optional]
 **show_inactive_groups** | **bool**| Determines if inactive groups should be returned | [optional]
 **without_my_groups** | **bool**| Determines if groups should be omitted where I am in | [optional]
 **query** | **string**|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20093**](../Model/InlineResponse20093.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupsMembers**
> \StevenBuehner\ChurchTools\Model\InlineResponse20094 getGroupsMembers($ids, $with_deleted)

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
$with_deleted = true; // bool | If true, return also deleted group members

try {
    $result = $apiInstance->getGroupsMembers($ids, $with_deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupsMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**int[]**](../Model/int.md)| Array of group ids | [optional]
 **with_deleted** | **bool**| If true, return also deleted group members | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20094**](../Model/InlineResponse20094.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublicgroupsGroupIdForm**
> \StevenBuehner\ChurchTools\Model\InlineResponse20074 getPublicgroupsGroupIdForm($group_id, $token)

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
$group_id = "group_id_example"; // string | Group ID of the public group
$token = "token_example"; // string | Sign Up Token

try {
    $result = $apiInstance->getPublicgroupsGroupIdForm($group_id, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getPublicgroupsGroupIdForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| Group ID of the public group |
 **token** | **string**| Sign Up Token |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20074**](../Model/InlineResponse20074.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQRCodeCheckin**
> \StevenBuehner\ChurchTools\Model\InlineResponse20023 getQRCodeCheckin($group_id, $person_id)

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
$group_id = 56; // int | ID of group
$person_id = 56; // int | ID of person

try {
    $result = $apiInstance->getQRCodeCheckin($group_id, $person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getQRCodeCheckin: ', $e->getMessage(), PHP_EOL;
}
?>
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
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupsIdGet**
> \StevenBuehner\ChurchTools\Model\InlineResponse20017 groupsIdGet($id)

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
$id = "id_example"; // string | ID or chat GUID of group

try {
    $result = $apiInstance->groupsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->groupsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
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
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **issueSignUpToken**
> \StevenBuehner\ChurchTools\Model\InlineResponse20073 issueSignUpToken($group_id, $body)

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
$group_id = 1.2; // float | Group id of public group
$body = new \StevenBuehner\ChurchTools\Model\Body47(); // \StevenBuehner\ChurchTools\Model\Body47 | You MUST provide either `personId` OR `email`. Both fields cannot be present at the same time.

try {
    $result = $apiInstance->issueSignUpToken($group_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->issueSignUpToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **float**| Group id of public group |
 **body** | [**\StevenBuehner\ChurchTools\Model\Body47**](../Model/Body47.md)| You MUST provide either &#x60;personId&#x60; OR &#x60;email&#x60;. Both fields cannot be present at the same time. | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20073**](../Model/InlineResponse20073.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **optIns**
> \StevenBuehner\ChurchTools\Model\InlineResponse20020 optIns($id)

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
$id = 56; // int | ID of group

try {
    $result = $apiInstance->optIns($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->optIns: ', $e->getMessage(), PHP_EOL;
}
?>
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
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPublicgroupsGroupIdMailToLeaders**
> postPublicgroupsGroupIdMailToLeaders($group_id, $body)

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
$group_id = "group_id_example"; // string | Group ID of the public group
$body = new \StevenBuehner\ChurchTools\Model\Body48(); // \StevenBuehner\ChurchTools\Model\Body48 | 

try {
    $apiInstance->postPublicgroupsGroupIdMailToLeaders($group_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->postPublicgroupsGroupIdMailToLeaders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| Group ID of the public group |
 **body** | [**\StevenBuehner\ChurchTools\Model\Body48**](../Model/Body48.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPublicgroupsGroupIdSignup**
> \StevenBuehner\ChurchTools\Model\InlineResponse20075 postPublicgroupsGroupIdSignup($group_id, $body)

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
$group_id = "group_id_example"; // string | Group ID of the public group
$body = new \StevenBuehner\ChurchTools\Model\Body49(); // \StevenBuehner\ChurchTools\Model\Body49 | 

try {
    $result = $apiInstance->postPublicgroupsGroupIdSignup($group_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->postPublicgroupsGroupIdSignup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| Group ID of the public group |
 **body** | [**\StevenBuehner\ChurchTools\Model\Body49**](../Model/Body49.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20075**](../Model/InlineResponse20075.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startStopChat**
> startStopChat($body, $id)

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
$body = new \StevenBuehner\ChurchTools\Model\Body9(); // \StevenBuehner\ChurchTools\Model\Body9 | 
$id = 56; // int | ID of group

try {
    $apiInstance->startStopChat($body, $id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->startStopChat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body9**](../Model/Body9.md)|  |
 **id** | **int**| ID of group |

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

