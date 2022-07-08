# StevenBuehner\ChurchTools\HiddenApi

All URIs are relative to /api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSyncExternalsystemsExternalSystemIdJobconfigsJobId()**](HiddenApi.md#deleteSyncExternalsystemsExternalSystemIdJobconfigsJobId) | **DELETE** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId} | Delete job config
[**deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter()**](HiddenApi.md#deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter) | **DELETE** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/filter | Delete all filter entities
[**deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties()**](HiddenApi.md#deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties) | **DELETE** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/properties | Delete all Properties for This Job
[**deleteSyncExternalsystemsId()**](HiddenApi.md#deleteSyncExternalsystemsId) | **DELETE** /sync/externalsystems/{id} | DELETE external system
[**deleteSyncFieldMappings()**](HiddenApi.md#deleteSyncFieldMappings) | **DELETE** /sync/externalsystems/{id}/fieldmappings/{domainType} | Delete Mapping for Domain Type
[**getApiProfiles()**](HiddenApi.md#getApiProfiles) | **GET** /profiles | Get all profiles
[**getGroupsGroupIdMeetingsMeetingIdMembers()**](HiddenApi.md#getGroupsGroupIdMeetingsMeetingIdMembers) | **GET** /groups/{groupId}/meetings/{meetingId}/members | Get Group Meeting Members
[**getProfilesChurch()**](HiddenApi.md#getProfilesChurch) | **GET** /profiles/church | Get a profile
[**getSlugcheck()**](HiddenApi.md#getSlugcheck) | **GET** /profiles/slugcheck/{slug} | Check if a finder slug is free
[**getSyncAdapters()**](HiddenApi.md#getSyncAdapters) | **GET** /sync/adapters | GET Sync Adapters
[**getSyncExecutions()**](HiddenApi.md#getSyncExecutions) | **GET** /sync/executions | Statistical Information about Sync Executions
[**getSyncExternalsystems()**](HiddenApi.md#getSyncExternalsystems) | **GET** /sync/externalsystems | GET External Systems
[**getSyncExternalsystemsExternalSystemIdJobconfigsJobId()**](HiddenApi.md#getSyncExternalsystemsExternalSystemIdJobconfigsJobId) | **GET** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId} | Your Job Configuration
[**getSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter()**](HiddenApi.md#getSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter) | **GET** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/filter | Fetch all entity filters for this job
[**getSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties()**](HiddenApi.md#getSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties) | **GET** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/properties | Fetch all Properties for This Job
[**getSyncExternalsystemsExternalSystemIdJobconfigurations()**](HiddenApi.md#getSyncExternalsystemsExternalSystemIdJobconfigurations) | **GET** /sync/externalsystems/{externalSystemId}/jobconfigs | GET Job configurations
[**getSyncExternalsystemsId()**](HiddenApi.md#getSyncExternalsystemsId) | **GET** /sync/externalsystems/{id} | GET an external system by id
[**getSyncJobconfigs()**](HiddenApi.md#getSyncJobconfigs) | **GET** /sync/jobconfigs | Your GET endpoint
[**getSyncLogs()**](HiddenApi.md#getSyncLogs) | **GET** /sync/logs | Get Sync Logs
[**postNps()**](HiddenApi.md#postNps) | **POST** /nps | Save NPS score
[**postSyncExternalsystemsExternalSystemIdJobconfigs()**](HiddenApi.md#postSyncExternalsystemsExternalSystemIdJobconfigs) | **POST** /sync/externalsystems/{externalSystemId}/jobconfigs | Create job configuration
[**postSyncExternalsystemsExternalSystemIdJobconfigsJobIdStart()**](HiddenApi.md#postSyncExternalsystemsExternalSystemIdJobconfigsJobIdStart) | **POST** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/start | Start Execution
[**postSyncExternalsystemsIdTest()**](HiddenApi.md#postSyncExternalsystemsIdTest) | **POST** /sync/externalsystems/{id}/test | Test the external system
[**postSyncLogs()**](HiddenApi.md#postSyncLogs) | **POST** /sync/logs | Save Sync Logs
[**putProfilesChurch()**](HiddenApi.md#putProfilesChurch) | **PUT** /profiles/church | 
[**putSyncExternalsystemsExternalSystemIdJobconfigs()**](HiddenApi.md#putSyncExternalsystemsExternalSystemIdJobconfigs) | **PUT** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId} | Update job configuration
[**putSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter()**](HiddenApi.md#putSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter) | **PUT** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/filter | Save entity filters
[**putSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties()**](HiddenApi.md#putSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties) | **PUT** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/properties | Save Properties, Which Should Be Synced
[**putSyncExternalsystemsId()**](HiddenApi.md#putSyncExternalsystemsId) | **PUT** /sync/externalsystems/{id} | Update external system


## `deleteSyncExternalsystemsExternalSystemIdJobconfigsJobId()`

```php
deleteSyncExternalsystemsExternalSystemIdJobconfigsJobId($external_system_id, $job_id)
```

Delete job config

Delete sync job config

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_system_id = 'external_system_id_example'; // string
$job_id = 'job_id_example'; // string

try {
    $apiInstance->deleteSyncExternalsystemsExternalSystemIdJobconfigsJobId($external_system_id, $job_id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->deleteSyncExternalsystemsExternalSystemIdJobconfigsJobId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_system_id** | **string**|  |
 **job_id** | **string**|  |

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

## `deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter()`

```php
deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter($external_system_id, $job_id)
```

Delete all filter entities

Delete all saved filters for this job configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StevenBuehner\ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_system_id = 'external_system_id_example'; // string | External System ID
$job_id = 'job_id_example'; // string | Job Configuration ID

try {
    $apiInstance->deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter($external_system_id, $job_id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_system_id** | **string**| External System ID |
 **job_id** | **string**| Job Configuration ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties()`

```php
deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties($external_system_id, $job_id)
```

Delete all Properties for This Job

Delete all saved properties for this job configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StevenBuehner\ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_system_id = 'external_system_id_example'; // string | External System ID
$job_id = 'job_id_example'; // string | Job Configuration ID

try {
    $apiInstance->deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties($external_system_id, $job_id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_system_id** | **string**| External System ID |
 **job_id** | **string**| Job Configuration ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSyncExternalsystemsId()`

```php
deleteSyncExternalsystemsId($id)
```

DELETE external system

Delete an external system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the external system

try {
    $apiInstance->deleteSyncExternalsystemsId($id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->deleteSyncExternalsystemsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the external system |

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

## `deleteSyncFieldMappings()`

```php
deleteSyncFieldMappings($id, $domain_type)
```

Delete Mapping for Domain Type

Delete Mapping for domain type of external system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of External System
$domain_type = 'domain_type_example'; // string | Domatin Type

try {
    $apiInstance->deleteSyncFieldMappings($id, $domain_type);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->deleteSyncFieldMappings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of External System |
 **domain_type** | **string**| Domatin Type |

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

## `getApiProfiles()`

```php
getApiProfiles(): \StevenBuehner\ChurchTools\Model\GetApiProfiles200Response
```

Get all profiles

This endpoint returns all profiles for logged in users with permissions. All others (incl. public access) will only get publisehd profiles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getApiProfiles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getApiProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\GetApiProfiles200Response**](../Model/GetApiProfiles200Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

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


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string
$meeting_id = 'meeting_id_example'; // string

try {
    $result = $apiInstance->getGroupsGroupIdMeetingsMeetingIdMembers($group_id, $meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getGroupsGroupIdMeetingsMeetingIdMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**|  |
 **meeting_id** | **string**|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetGroupsGroupIdMeetingsMeetingIdMembers200Response**](../Model/GetGroupsGroupIdMeetingsMeetingIdMembers200Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesChurch()`

```php
getProfilesChurch(): \StevenBuehner\ChurchTools\Model\GetCampus200Response
```

Get a profile

Get church profile information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getProfilesChurch();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getProfilesChurch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\GetCampus200Response**](../Model/GetCampus200Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSlugcheck()`

```php
getSlugcheck($slug)
```

Check if a finder slug is free

Published profiles are visibale in ChurchTools Finder. Each profile has an unique slug (URI). This endpoint can be used to check if a slug is free.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = 'slug_example'; // string | Slug to check

try {
    $apiInstance->getSlugcheck($slug);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getSlugcheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**| Slug to check |

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

## `getSyncAdapters()`

```php
getSyncAdapters(): \StevenBuehner\ChurchTools\Model\GetSyncAdapters200Response
```

GET Sync Adapters

Returns the available sync adapters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSyncAdapters();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getSyncAdapters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\GetSyncAdapters200Response**](../Model/GetSyncAdapters200Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSyncExecutions()`

```php
getSyncExecutions($es_ids, $job_ids, $start_date, $end_date, $statuses, $page, $limit, $is_dry_run): \StevenBuehner\ChurchTools\Model\GetSyncExecutions200Response
```

Statistical Information about Sync Executions

Fetch statistical information about sync executions, like count of created entities, linked ones, etc.  Result is ordered by execution start date.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$es_ids = NULL; // array | Filter by external system
$job_ids = NULL; // array | Filter by sync job configuration
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Return executions after that date
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Return executions before that date
$statuses = NULL; // array | Filter by status
$page = 3.4; // float | Query page
$limit = 3.4; // float | Number of results per page
$is_dry_run = True; // bool

try {
    $result = $apiInstance->getSyncExecutions($es_ids, $job_ids, $start_date, $end_date, $statuses, $page, $limit, $is_dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getSyncExecutions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **es_ids** | [**array**](../Model/.md)| Filter by external system | [optional]
 **job_ids** | [**array**](../Model/.md)| Filter by sync job configuration | [optional]
 **start_date** | **\DateTime**| Return executions after that date | [optional]
 **end_date** | **\DateTime**| Return executions before that date | [optional]
 **statuses** | [**array**](../Model/.md)| Filter by status | [optional]
 **page** | **float**| Query page | [optional]
 **limit** | **float**| Number of results per page | [optional]
 **is_dry_run** | **bool**|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\GetSyncExecutions200Response**](../Model/GetSyncExecutions200Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSyncExternalsystems()`

```php
getSyncExternalsystems(): \StevenBuehner\ChurchTools\Model\GetSyncExternalsystems200Response
```

GET External Systems

Returns all external systems

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSyncExternalsystems();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getSyncExternalsystems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\GetSyncExternalsystems200Response**](../Model/GetSyncExternalsystems200Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSyncExternalsystemsExternalSystemIdJobconfigsJobId()`

```php
getSyncExternalsystemsExternalSystemIdJobconfigsJobId($external_system_id, $job_id): \StevenBuehner\ChurchTools\Model\PostSyncExternalsystemsExternalSystemIdJobconfigs201Response
```

Your Job Configuration

Get the configuration for a sync job

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_system_id = 'external_system_id_example'; // string
$job_id = 'job_id_example'; // string

try {
    $result = $apiInstance->getSyncExternalsystemsExternalSystemIdJobconfigsJobId($external_system_id, $job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getSyncExternalsystemsExternalSystemIdJobconfigsJobId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_system_id** | **string**|  |
 **job_id** | **string**|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\PostSyncExternalsystemsExternalSystemIdJobconfigs201Response**](../Model/PostSyncExternalsystemsExternalSystemIdJobconfigs201Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter()`

```php
getSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter($external_system_id, $job_id): \StevenBuehner\ChurchTools\Model\GetSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter200Response
```

Fetch all entity filters for this job

Fetch all entity filters for this job.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StevenBuehner\ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_system_id = 'external_system_id_example'; // string | External System ID
$job_id = 'job_id_example'; // string | Job Configuration ID

try {
    $result = $apiInstance->getSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter($external_system_id, $job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_system_id** | **string**| External System ID |
 **job_id** | **string**| Job Configuration ID |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter200Response**](../Model/GetSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties()`

```php
getSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties($external_system_id, $job_id): \StevenBuehner\ChurchTools\Model\GetSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties200Response
```

Fetch all Properties for This Job

Fetch all properties (field mapping entries), which are checked for this particular job to be synced.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StevenBuehner\ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_system_id = 'external_system_id_example'; // string | External System ID
$job_id = 'job_id_example'; // string | Job Configuration ID

try {
    $result = $apiInstance->getSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties($external_system_id, $job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_system_id** | **string**| External System ID |
 **job_id** | **string**| Job Configuration ID |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties200Response**](../Model/GetSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSyncExternalsystemsExternalSystemIdJobconfigurations()`

```php
getSyncExternalsystemsExternalSystemIdJobconfigurations($external_system_id): \StevenBuehner\ChurchTools\Model\GetSyncExternalsystemsExternalSystemIdJobconfigurations200Response
```

GET Job configurations

Get all job configurations for an external system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_system_id = 'external_system_id_example'; // string

try {
    $result = $apiInstance->getSyncExternalsystemsExternalSystemIdJobconfigurations($external_system_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getSyncExternalsystemsExternalSystemIdJobconfigurations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_system_id** | **string**|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetSyncExternalsystemsExternalSystemIdJobconfigurations200Response**](../Model/GetSyncExternalsystemsExternalSystemIdJobconfigurations200Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSyncExternalsystemsId()`

```php
getSyncExternalsystemsId($id): \StevenBuehner\ChurchTools\Model\GetSyncExternalsystemsId200Response
```

GET an external system by id

Returns an external system by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the external system

try {
    $result = $apiInstance->getSyncExternalsystemsId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getSyncExternalsystemsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the external system |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetSyncExternalsystemsId200Response**](../Model/GetSyncExternalsystemsId200Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSyncJobconfigs()`

```php
getSyncJobconfigs($external_system_ids): \StevenBuehner\ChurchTools\Model\GetSyncExternalsystemsExternalSystemIdJobconfigurations200Response
```

Your GET endpoint

Get all job configs for the sync

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_system_ids = NULL; // array

try {
    $result = $apiInstance->getSyncJobconfigs($external_system_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getSyncJobconfigs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_system_ids** | [**array**](../Model/.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\GetSyncExternalsystemsExternalSystemIdJobconfigurations200Response**](../Model/GetSyncExternalsystemsExternalSystemIdJobconfigurations200Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSyncLogs()`

```php
getSyncLogs($page, $limit, $es_ids, $job_ids, $start_date, $end_date, $types, $query, $levels, $is_dry_run, $body): \StevenBuehner\ChurchTools\Model\GetSyncLogs200Response
```

Get Sync Logs

Fetch all

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // float | Page Number
$limit = 10; // float | Number of Logs per Page
$es_ids = array(56); // int[] | Filter by External Systems
$job_ids = array(56); // int[] | Filter by Jobs
$start_date = Mon Feb 01 01:00:00 CET 2021; // \DateTime | Show Logs From This Date on
$end_date = Mon Feb 01 01:00:00 CET 2021; // \DateTime | Show Logs Until This Date
$types = array(56); // int[] | Filter by Types
$query = 'query_example'; // string | Search Through Log Messages
$levels = NULL; // array | the log levels
$is_dry_run = True; // bool
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->getSyncLogs($page, $limit, $es_ids, $job_ids, $start_date, $end_date, $types, $query, $levels, $is_dry_run, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getSyncLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **float**| Page Number | [optional] [default to 1]
 **limit** | **float**| Number of Logs per Page | [optional] [default to 10]
 **es_ids** | [**int[]**](../Model/int.md)| Filter by External Systems | [optional]
 **job_ids** | [**int[]**](../Model/int.md)| Filter by Jobs | [optional]
 **start_date** | **\DateTime**| Show Logs From This Date on | [optional]
 **end_date** | **\DateTime**| Show Logs Until This Date | [optional]
 **types** | [**int[]**](../Model/int.md)| Filter by Types | [optional]
 **query** | **string**| Search Through Log Messages | [optional]
 **levels** | [**array**](../Model/.md)| the log levels | [optional]
 **is_dry_run** | **bool**|  | [optional]
 **body** | **object**|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\GetSyncLogs200Response**](../Model/GetSyncLogs200Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postNps()`

```php
postNps($post_nps_request): \StevenBuehner\ChurchTools\Model\PostNps201Response
```

Save NPS score

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_nps_request = new \StevenBuehner\ChurchTools\Model\PostNpsRequest(); // \StevenBuehner\ChurchTools\Model\PostNpsRequest | A valid score between 1 and 10 is stored to the database. Any other number than that is intepreted as decline. Thas means, no score is saved but the user is marked as he has voted.

try {
    $result = $apiInstance->postNps($post_nps_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postNps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_nps_request** | [**\StevenBuehner\ChurchTools\Model\PostNpsRequest**](../Model/PostNpsRequest.md)| A valid score between 1 and 10 is stored to the database. Any other number than that is intepreted as decline. Thas means, no score is saved but the user is marked as he has voted. | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\PostNps201Response**](../Model/PostNps201Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSyncExternalsystemsExternalSystemIdJobconfigs()`

```php
postSyncExternalsystemsExternalSystemIdJobconfigs($external_system_id, $job_configuration1): \StevenBuehner\ChurchTools\Model\PostSyncExternalsystemsExternalSystemIdJobconfigs201Response
```

Create job configuration

Create job configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_system_id = 'external_system_id_example'; // string
$job_configuration1 = new \StevenBuehner\ChurchTools\Model\JobConfiguration1(); // \StevenBuehner\ChurchTools\Model\JobConfiguration1

try {
    $result = $apiInstance->postSyncExternalsystemsExternalSystemIdJobconfigs($external_system_id, $job_configuration1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postSyncExternalsystemsExternalSystemIdJobconfigs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_system_id** | **string**|  |
 **job_configuration1** | [**\StevenBuehner\ChurchTools\Model\JobConfiguration1**](../Model/JobConfiguration1.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\PostSyncExternalsystemsExternalSystemIdJobconfigs201Response**](../Model/PostSyncExternalsystemsExternalSystemIdJobconfigs201Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSyncExternalsystemsExternalSystemIdJobconfigsJobIdStart()`

```php
postSyncExternalsystemsExternalSystemIdJobconfigsJobIdStart($external_system_id, $job_id, $post_sync_externalsystems_external_system_id_jobconfigs_job_id_start_request)
```

Start Execution

Start Execution of specific Job Configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_system_id = 'external_system_id_example'; // string
$job_id = 'job_id_example'; // string
$post_sync_externalsystems_external_system_id_jobconfigs_job_id_start_request = new \StevenBuehner\ChurchTools\Model\PostSyncExternalsystemsExternalSystemIdJobconfigsJobIdStartRequest(); // \StevenBuehner\ChurchTools\Model\PostSyncExternalsystemsExternalSystemIdJobconfigsJobIdStartRequest

try {
    $apiInstance->postSyncExternalsystemsExternalSystemIdJobconfigsJobIdStart($external_system_id, $job_id, $post_sync_externalsystems_external_system_id_jobconfigs_job_id_start_request);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postSyncExternalsystemsExternalSystemIdJobconfigsJobIdStart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_system_id** | **string**|  |
 **job_id** | **string**|  |
 **post_sync_externalsystems_external_system_id_jobconfigs_job_id_start_request** | [**\StevenBuehner\ChurchTools\Model\PostSyncExternalsystemsExternalSystemIdJobconfigsJobIdStartRequest**](../Model/PostSyncExternalsystemsExternalSystemIdJobconfigsJobIdStartRequest.md)|  | [optional]

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

## `postSyncExternalsystemsIdTest()`

```php
postSyncExternalsystemsIdTest($id)
```

Test the external system

Tests if the external system is configured correctly

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->postSyncExternalsystemsIdTest($id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postSyncExternalsystemsIdTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSyncLogs()`

```php
postSyncLogs($post_sync_logs_request): \StevenBuehner\ChurchTools\Model\PostSyncLogs201Response
```

Save Sync Logs

Save many sync log entries in one request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_sync_logs_request = new \StevenBuehner\ChurchTools\Model\PostSyncLogsRequest(); // \StevenBuehner\ChurchTools\Model\PostSyncLogsRequest | 

try {
    $result = $apiInstance->postSyncLogs($post_sync_logs_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postSyncLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_sync_logs_request** | [**\StevenBuehner\ChurchTools\Model\PostSyncLogsRequest**](../Model/PostSyncLogsRequest.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\PostSyncLogs201Response**](../Model/PostSyncLogs201Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putProfilesChurch()`

```php
putProfilesChurch($update_campus_request): \StevenBuehner\ChurchTools\Model\GetCampus200Response
```



Update church information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_campus_request = new \StevenBuehner\ChurchTools\Model\UpdateCampusRequest(); // \StevenBuehner\ChurchTools\Model\UpdateCampusRequest

try {
    $result = $apiInstance->putProfilesChurch($update_campus_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->putProfilesChurch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_campus_request** | [**\StevenBuehner\ChurchTools\Model\UpdateCampusRequest**](../Model/UpdateCampusRequest.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\GetCampus200Response**](../Model/GetCampus200Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putSyncExternalsystemsExternalSystemIdJobconfigs()`

```php
putSyncExternalsystemsExternalSystemIdJobconfigs($external_system_id, $job_id, $job_configuration1): \StevenBuehner\ChurchTools\Model\PutSyncExternalsystemsExternalSystemIdJobconfigs200Response
```

Update job configuration

Update job configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_system_id = 'external_system_id_example'; // string
$job_id = 'job_id_example'; // string
$job_configuration1 = new \StevenBuehner\ChurchTools\Model\JobConfiguration1(); // \StevenBuehner\ChurchTools\Model\JobConfiguration1

try {
    $result = $apiInstance->putSyncExternalsystemsExternalSystemIdJobconfigs($external_system_id, $job_id, $job_configuration1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->putSyncExternalsystemsExternalSystemIdJobconfigs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_system_id** | **string**|  |
 **job_id** | **string**|  |
 **job_configuration1** | [**\StevenBuehner\ChurchTools\Model\JobConfiguration1**](../Model/JobConfiguration1.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\PutSyncExternalsystemsExternalSystemIdJobconfigs200Response**](../Model/PutSyncExternalsystemsExternalSystemIdJobconfigs200Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter()`

```php
putSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter($external_system_id, $job_id, $put_sync_externalsystems_external_system_id_jobconfigs_job_id_filter_request): \StevenBuehner\ChurchTools\Model\PutSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter200Response
```

Save entity filters

Save entity filter for this job.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StevenBuehner\ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_system_id = 'external_system_id_example'; // string | External System ID
$job_id = 'job_id_example'; // string | Job Configuration ID
$put_sync_externalsystems_external_system_id_jobconfigs_job_id_filter_request = new \StevenBuehner\ChurchTools\Model\PutSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilterRequest(); // \StevenBuehner\ChurchTools\Model\PutSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilterRequest

try {
    $result = $apiInstance->putSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter($external_system_id, $job_id, $put_sync_externalsystems_external_system_id_jobconfigs_job_id_filter_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->putSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_system_id** | **string**| External System ID |
 **job_id** | **string**| Job Configuration ID |
 **put_sync_externalsystems_external_system_id_jobconfigs_job_id_filter_request** | [**\StevenBuehner\ChurchTools\Model\PutSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilterRequest**](../Model/PutSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilterRequest.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\PutSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter200Response**](../Model/PutSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties()`

```php
putSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties($external_system_id, $job_id, $put_sync_externalsystems_external_system_id_jobconfigs_job_id_properties_request): \StevenBuehner\ChurchTools\Model\GetSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties200Response
```

Save Properties, Which Should Be Synced

Save properties (field mapping entries) for this job. Those properties will be synced.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StevenBuehner\ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_system_id = 'external_system_id_example'; // string | External System ID
$job_id = 'job_id_example'; // string | Job Configuration ID
$put_sync_externalsystems_external_system_id_jobconfigs_job_id_properties_request = new \StevenBuehner\ChurchTools\Model\PutSyncExternalsystemsExternalSystemIdJobconfigsJobIdPropertiesRequest(); // \StevenBuehner\ChurchTools\Model\PutSyncExternalsystemsExternalSystemIdJobconfigsJobIdPropertiesRequest

try {
    $result = $apiInstance->putSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties($external_system_id, $job_id, $put_sync_externalsystems_external_system_id_jobconfigs_job_id_properties_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->putSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_system_id** | **string**| External System ID |
 **job_id** | **string**| Job Configuration ID |
 **put_sync_externalsystems_external_system_id_jobconfigs_job_id_properties_request** | [**\StevenBuehner\ChurchTools\Model\PutSyncExternalsystemsExternalSystemIdJobconfigsJobIdPropertiesRequest**](../Model/PutSyncExternalsystemsExternalSystemIdJobconfigsJobIdPropertiesRequest.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\GetSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties200Response**](../Model/GetSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putSyncExternalsystemsId()`

```php
putSyncExternalsystemsId($id, $external_system2)
```

Update external system

Update an external system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the external system
$external_system2 = new \StevenBuehner\ChurchTools\Model\ExternalSystem2(); // \StevenBuehner\ChurchTools\Model\ExternalSystem2

try {
    $apiInstance->putSyncExternalsystemsId($id, $external_system2);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->putSyncExternalsystemsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the external system |
 **external_system2** | [**\StevenBuehner\ChurchTools\Model\ExternalSystem2**](../Model/ExternalSystem2.md)|  | [optional]

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
