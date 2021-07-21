# StevenBuehner\ChurchTools\PermissionApi

All URIs are relative to https://teambb.church.tools/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGlobalPermissions()**](PermissionApi.md#getGlobalPermissions) | **GET** /permissions/global | All Permissions for the Current User
[**getInternalPermissionsForPerson()**](PermissionApi.md#getInternalPermissionsForPerson) | **GET** /permissions/internal/persons/{personId} | Lookup Person-Related Group Internal Permissions
[**getPermissionsInternalGroupsGroupId()**](PermissionApi.md#getPermissionsInternalGroupsGroupId) | **GET** /permissions/internal/groups/{groupId} | Lookup Group-Related Group Internal Permissions


## `getGlobalPermissions()`

```php
getGlobalPermissions(): \StevenBuehner\ChurchTools\Model\InlineResponse20081
```

All Permissions for the Current User

This endpoint returns a set of all permissions grouped by modulename for the current user. Use this endpoint to check if the user has a specific permission set or is allowed to perform an action based on global permissions.  If a module is deactivated its permissions are not returned by the API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PermissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getGlobalPermissions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionApi->getGlobalPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20081**](../Model/InlineResponse20081.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInternalPermissionsForPerson()`

```php
getInternalPermissionsForPerson($person_id): \StevenBuehner\ChurchTools\Model\InlineResponse20082
```

Lookup Person-Related Group Internal Permissions

Group internal permissions can affect different entities in ChurchTools such as `Person`. This endpoint calculates the result of all group internal permissions with regard to a person. That mean, the response is the result for the current user, to find out if s/he can do certain actions based on group internal permissions.  Example: The API response has `+invite persons: true`. This means, the current user can invite the person with `{personId}` to ChurchTools based on this group internal permissions. That could mean, the user can the person are in the same group or the user is in an superior groups, which inherits permissions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PermissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 'person_id_example'; // string

try {
    $result = $apiInstance->getInternalPermissionsForPerson($person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionApi->getInternalPermissionsForPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **string**|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20082**](../Model/InlineResponse20082.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPermissionsInternalGroupsGroupId()`

```php
getPermissionsInternalGroupsGroupId($group_id): \StevenBuehner\ChurchTools\Model\InlineResponse20089
```

Lookup Group-Related Group Internal Permissions

Group internal permissions can affect different entities in ChurchTools such as `Group`. This endpoint calculates the result of all group internal permissions with regard to a group. That means, the response is the result for the current user, to find out if s/he can do certain actions based on group internal permissions.  Example: The API response has `+add person: true`. This means, the current user can add persons to this group based on this group internal permissions on that group or superior groups through inheritance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\PermissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string

try {
    $result = $apiInstance->getPermissionsInternalGroupsGroupId($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionApi->getPermissionsInternalGroupsGroupId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20089**](../Model/InlineResponse20089.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
