# StevenBuehner\ChurchTools\DefaultApi

All URIs are relative to /api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGroupsGroupIdTags()**](DefaultApi.md#getGroupsGroupIdTags) | **GET** /groups/{groupId}/tags | Fetch group tags
[**getPublicgroupsGroupIdPossiblerequesters()**](DefaultApi.md#getPublicgroupsGroupIdPossiblerequesters) | **GET** /publicgroups/{groupId}/possiblerequesters | Your GET endpoint
[**patchGroupsGroupIdRolesRoleId()**](DefaultApi.md#patchGroupsGroupIdRolesRoleId) | **PATCH** /groups/{groupId}/roles/{roleId} | 


## `getGroupsGroupIdTags()`

```php
getGroupsGroupIdTags($group_id): \StevenBuehner\ChurchTools\Model\GetGroupsGroupIdTags200Response
```

Fetch group tags

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string

try {
    $result = $apiInstance->getGroupsGroupIdTags($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getGroupsGroupIdTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetGroupsGroupIdTags200Response**](../Model/GetGroupsGroupIdTags200Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPublicgroupsGroupIdPossiblerequesters()`

```php
getPublicgroupsGroupIdPossiblerequesters($group_id, $token): \StevenBuehner\ChurchTools\Model\GetPublicgroupsGroupIdPossiblerequesters200Response
```

Your GET endpoint

Get a list of persons which could be the requester of the signup. More than one is possible because signup wirks with emails and they are not unique in ChurchTools

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string
$token = 'token_example'; // string | The signup token for the registration

try {
    $result = $apiInstance->getPublicgroupsGroupIdPossiblerequesters($group_id, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPublicgroupsGroupIdPossiblerequesters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**|  |
 **token** | **string**| The signup token for the registration |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetPublicgroupsGroupIdPossiblerequesters200Response**](../Model/GetPublicgroupsGroupIdPossiblerequesters200Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchGroupsGroupIdRolesRoleId()`

```php
patchGroupsGroupIdRolesRoleId($group_id, $role_id, $patch_groups_group_id_roles_role_id_request)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string
$role_id = 'role_id_example'; // string
$patch_groups_group_id_roles_role_id_request = new \StevenBuehner\ChurchTools\Model\PatchGroupsGroupIdRolesRoleIdRequest(); // \StevenBuehner\ChurchTools\Model\PatchGroupsGroupIdRolesRoleIdRequest

try {
    $apiInstance->patchGroupsGroupIdRolesRoleId($group_id, $role_id, $patch_groups_group_id_roles_role_id_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->patchGroupsGroupIdRolesRoleId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**|  |
 **role_id** | **string**|  |
 **patch_groups_group_id_roles_role_id_request** | [**\StevenBuehner\ChurchTools\Model\PatchGroupsGroupIdRolesRoleIdRequest**](../Model/PatchGroupsGroupIdRolesRoleIdRequest.md)|  | [optional]

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
