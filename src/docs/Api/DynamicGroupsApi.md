# StevenBuehner\ChurchTools\DynamicGroupsApi

All URIs are relative to /api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**editRuleset()**](DynamicGroupsApi.md#editRuleset) | **PUT** /dynamicgroups/{groupId}/ruleset | ut ruleset |
| [**getDynamicgroupRuleset()**](DynamicGroupsApi.md#getDynamicgroupRuleset) | **GET** /dynamicgroups/{groupId}/ruleset | get ruleset |
| [**getDynamicgroupStatus()**](DynamicGroupsApi.md#getDynamicgroupStatus) | **GET** /dynamicgroups/{groupId}/status | status of dynamic group |
| [**getDynamicgroups()**](DynamicGroupsApi.md#getDynamicgroups) | **GET** /dynamicgroups | get all dynamic groups |
| [**getDynamicgroups_0()**](DynamicGroupsApi.md#getDynamicgroups_0) | **POST** /dynamicgroups/refresh | refresh all dynamic groups |
| [**putDynamicgrouopStatus()**](DynamicGroupsApi.md#putDynamicgrouopStatus) | **PUT** /dynamicgroups/{groupId}/status | get status of dynamic Group |
| [**refreshDynamicgroups()**](DynamicGroupsApi.md#refreshDynamicgroups) | **POST** /dynamicgroups/{groupId}/refresh | refresh one dynamic Group |


## `editRuleset()`

```php
editRuleset($group_id, $edit_ruleset_request)
```

ut ruleset

> **Caution**: This is an preliminary API, and is subject to be changed.  adds or updates the ruleset of a dynamic group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\DynamicGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | id of the group
$edit_ruleset_request = {"dynamicGroupRuleSet":[{"description":"Test Suche über ChurchQuery","filter":{"method":"ChurchQuery","params":{"description":"Wir testen die Suche nach Personen","filter":{"or":[{"oneof":[{"var":"person.firstName"},["Adelheid"]]},{"==":[{"var":"person.firstName"},"Anette"]}]},"prefix":"person","responseFields":["person.id","person.birthday"],"title":"Suche nach Adelheid"},"shorty":"dafault"},"importance":0,"process":{"filterOnly":{"informLeader":true,"operation":"update","processWaitingList":true,"sendAutomaticMails":true},"groupAndFilter":{"informLeader":true,"operation":"update","processWaitingList":true,"sendAutomaticMails":true},"groupOnly":{"informLeader":true,"operation":"delete","processWaitingList":true,"sendAutomaticMails":true}},"shorty":"ChurchQuery","values":{"comment":"hinzugefügt {{person.id}}","fields":{"Birthday":"person.birthday"},"groupMemberStatus":"active","groupTypeRoleId":0,"memberEndDate":"2023-01-28","memberStartDate":"2023-01-28","personIdFieldName":"person.id","waitinglistPos":0}}]}; // \StevenBuehner\ChurchTools\Model\EditRulesetRequest

try {
    $apiInstance->editRuleset($group_id, $edit_ruleset_request);
} catch (Exception $e) {
    echo 'Exception when calling DynamicGroupsApi->editRuleset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| id of the group | |
| **edit_ruleset_request** | [**\StevenBuehner\ChurchTools\Model\EditRulesetRequest**](../Model/EditRulesetRequest.md)|  | [optional] |

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

## `getDynamicgroupRuleset()`

```php
getDynamicgroupRuleset($group_id)
```

get ruleset

> **Caution**: This is an preliminary API, and is subject to be changed.  returns the ruleset for a dynamyic group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\DynamicGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | id of the group

try {
    $apiInstance->getDynamicgroupRuleset($group_id);
} catch (Exception $e) {
    echo 'Exception when calling DynamicGroupsApi->getDynamicgroupRuleset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| id of the group | |

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

## `getDynamicgroupStatus()`

```php
getDynamicgroupStatus($group_id)
```

status of dynamic group

> **Caution**: This is an preliminary API, and is subject to be changed.  gets the refresh status of a dynamic group  * `active` the group is atomatically refreshed on a regular baseis * `inactive` the group is not refrehes automatically - note that inactive groups cannot even be refreshed manually * `manual` the group is refreshed only manally * `none` the group is not a dynamic group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\DynamicGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | id of the group

try {
    $apiInstance->getDynamicgroupStatus($group_id);
} catch (Exception $e) {
    echo 'Exception when calling DynamicGroupsApi->getDynamicgroupStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| id of the group | |

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

## `getDynamicgroups()`

```php
getDynamicgroups()
```

get all dynamic groups

> **Caution**: This is an preliminary API, and is subject to be changed.  Returns the id of all dynamic groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\DynamicGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getDynamicgroups();
} catch (Exception $e) {
    echo 'Exception when calling DynamicGroupsApi->getDynamicgroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `getDynamicgroups_0()`

```php
getDynamicgroups_0()
```

refresh all dynamic groups

> **Caution**: This is an preliminary API, and is subject to be changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\DynamicGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getDynamicgroups_0();
} catch (Exception $e) {
    echo 'Exception when calling DynamicGroupsApi->getDynamicgroups_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `putDynamicgrouopStatus()`

```php
putDynamicgrouopStatus($group_id, $put_dynamicgrouop_status_request)
```

get status of dynamic Group

> **Caution**: This is an preliminary API, and is subject to be changed. Sets the refresh status of a dynamic group * `active` the group is atomatically refreshed on a regular baseis * `inactive` the group is not refrehes automatically - note that inactive groups cannot even be refreshed manually * `manual` the group is refreshed only manally * `none` the group is not a dynamic group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\DynamicGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | id of the group
$put_dynamicgrouop_status_request = new \StevenBuehner\ChurchTools\Model\PutDynamicgrouopStatusRequest(); // \StevenBuehner\ChurchTools\Model\PutDynamicgrouopStatusRequest

try {
    $apiInstance->putDynamicgrouopStatus($group_id, $put_dynamicgrouop_status_request);
} catch (Exception $e) {
    echo 'Exception when calling DynamicGroupsApi->putDynamicgrouopStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| id of the group | |
| **put_dynamicgrouop_status_request** | [**\StevenBuehner\ChurchTools\Model\PutDynamicgrouopStatusRequest**](../Model/PutDynamicgrouopStatusRequest.md)|  | [optional] |

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

## `refreshDynamicgroups()`

```php
refreshDynamicgroups($group_id)
```

refresh one dynamic Group

> **Caution**: This is an preliminary API, and is subject to be changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\DynamicGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int

try {
    $apiInstance->refreshDynamicgroups($group_id);
} catch (Exception $e) {
    echo 'Exception when calling DynamicGroupsApi->refreshDynamicgroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**|  | |

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
