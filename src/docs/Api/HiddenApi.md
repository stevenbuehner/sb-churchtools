# StevenBuehner\ChurchTools\HiddenApi

All URIs are relative to https://teambb.church.tools/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSyncExternalsystemsExternalSystemIdJobconfigsJobId()**](HiddenApi.md#deleteSyncExternalsystemsExternalSystemIdJobconfigsJobId) | **DELETE** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId} | Delete job config
[**deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter()**](HiddenApi.md#deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter) | **DELETE** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/filter | Delete all filter entities
[**deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties()**](HiddenApi.md#deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties) | **DELETE** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/properties | Delete all Properties for This Job
[**deleteSyncExternalsystemsId()**](HiddenApi.md#deleteSyncExternalsystemsId) | **DELETE** /sync/externalsystems/{id} | DELETE external system
[**deleteSyncFieldMappings()**](HiddenApi.md#deleteSyncFieldMappings) | **DELETE** /sync/externalsystems/{id}/fieldmappings/{domainType} | Delete Mapping for Domain Type
[**getGroupsGroupIdMeetingsMeetingIdMembers()**](HiddenApi.md#getGroupsGroupIdMeetingsMeetingIdMembers) | **GET** /groups/{groupId}/meetings/{meetingId}/members | Get Group Meeting Members
[**getSyncAdapters()**](HiddenApi.md#getSyncAdapters) | **GET** /sync/adapters | GET Sync Adapters
[**getSyncExecutions()**](HiddenApi.md#getSyncExecutions) | **GET** /sync/executions | Statistical Information about Sync Executions
[**getSyncExternalsystems()**](HiddenApi.md#getSyncExternalsystems) | **GET** /sync/externalsystems | GET External Systems
[**getSyncExternalsystemsExternalSystemIdJobconfigsJobId()**](HiddenApi.md#getSyncExternalsystemsExternalSystemIdJobconfigsJobId) | **GET** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId} | Your Job Configuration
[**getSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter()**](HiddenApi.md#getSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter) | **GET** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/filter | Fetch all entity filters for this job
[**getSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties()**](HiddenApi.md#getSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties) | **GET** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/properties | Fetch all Properties for This Job
[**getSyncExternalsystemsExternalSystemIdJobconfigurations()**](HiddenApi.md#getSyncExternalsystemsExternalSystemIdJobconfigurations) | **GET** /sync/externalsystems/{externalSystemId}/jobconfigs | GET Job configurations
[**getSyncExternalsystemsId()**](HiddenApi.md#getSyncExternalsystemsId) | **GET** /sync/externalsystems/{id} | GET an external system by id
[**getSyncExternalsystemsIdTest()**](HiddenApi.md#getSyncExternalsystemsIdTest) | **GET** /sync/externalsystems/{id}/test | Your GET endpoint
[**getSyncJobconfigs()**](HiddenApi.md#getSyncJobconfigs) | **GET** /sync/jobconfigs | Your GET endpoint
[**getSyncLogs()**](HiddenApi.md#getSyncLogs) | **GET** /sync/logs | Get Sync Logs
[**postSyncExternalsystemsExternalSystemIdJobconfigs()**](HiddenApi.md#postSyncExternalsystemsExternalSystemIdJobconfigs) | **POST** /sync/externalsystems/{externalSystemId}/jobconfigs | Create job configuration
[**postSyncExternalsystemsExternalSystemIdJobconfigsJobIdStart()**](HiddenApi.md#postSyncExternalsystemsExternalSystemIdJobconfigsJobIdStart) | **POST** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/start | Start Execution
[**postSyncExternalsystemsIdTest()**](HiddenApi.md#postSyncExternalsystemsIdTest) | **POST** /sync/externalsystems/{id}/test | Test the external system
[**postSyncLogs()**](HiddenApi.md#postSyncLogs) | **POST** /sync/logs | Save Sync Logs
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

[Login Token (Header)](../../README.md#Login Token (Header))

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

[Login Token (Header)](../../README.md#Login Token (Header))

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

## `getGroupsGroupIdMeetingsMeetingIdMembers()`

```php
getGroupsGroupIdMeetingsMeetingIdMembers($group_id, $meeting_id): \StevenBuehner\ChurchTools\Model\InlineResponse200106
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

[**\StevenBuehner\ChurchTools\Model\InlineResponse200106**](../Model/InlineResponse200106.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSyncAdapters()`

```php
getSyncAdapters(): \StevenBuehner\ChurchTools\Model\InlineResponse20094
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

[**\StevenBuehner\ChurchTools\Model\InlineResponse20094**](../Model/InlineResponse20094.md)

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
getSyncExecutions($es_ids, $job_ids, $start_date, $end_date, $statuses, $page, $limit, $is_dry_run): \StevenBuehner\ChurchTools\Model\InlineResponse200113
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
$es_ids = new \StevenBuehner\ChurchTools\Model\array(); // array | Filter by external system
$job_ids = new \StevenBuehner\ChurchTools\Model\array(); // array | Filter by sync job configuration
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Return executions after that date
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Return executions before that date
$statuses = new \StevenBuehner\ChurchTools\Model\array(); // array | Filter by status
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

[**\StevenBuehner\ChurchTools\Model\InlineResponse200113**](../Model/InlineResponse200113.md)

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
getSyncExternalsystems(): \StevenBuehner\ChurchTools\Model\InlineResponse20095
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

[**\StevenBuehner\ChurchTools\Model\InlineResponse20095**](../Model/InlineResponse20095.md)

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
getSyncExternalsystemsExternalSystemIdJobconfigsJobId($external_system_id, $job_id): \StevenBuehner\ChurchTools\Model\InlineResponse2014
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

[**\StevenBuehner\ChurchTools\Model\InlineResponse2014**](../Model/InlineResponse2014.md)

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
getSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter($external_system_id, $job_id): \StevenBuehner\ChurchTools\Model\InlineResponse200100
```

Fetch all entity filters for this job

Fetch all entity filters for this job.

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

[**\StevenBuehner\ChurchTools\Model\InlineResponse200100**](../Model/InlineResponse200100.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties()`

```php
getSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties($external_system_id, $job_id): \StevenBuehner\ChurchTools\Model\InlineResponse20099
```

Fetch all Properties for This Job

Fetch all properties (field mapping entries), which are checked for this particular job to be synced.

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

[**\StevenBuehner\ChurchTools\Model\InlineResponse20099**](../Model/InlineResponse20099.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSyncExternalsystemsExternalSystemIdJobconfigurations()`

```php
getSyncExternalsystemsExternalSystemIdJobconfigurations($external_system_id): \StevenBuehner\ChurchTools\Model\InlineResponse20097
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

[**\StevenBuehner\ChurchTools\Model\InlineResponse20097**](../Model/InlineResponse20097.md)

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
getSyncExternalsystemsId($id): \StevenBuehner\ChurchTools\Model\InlineResponse20096
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

[**\StevenBuehner\ChurchTools\Model\InlineResponse20096**](../Model/InlineResponse20096.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSyncExternalsystemsIdTest()`

```php
getSyncExternalsystemsIdTest($id)
```

Your GET endpoint

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
    $apiInstance->getSyncExternalsystemsIdTest($id);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->getSyncExternalsystemsIdTest: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSyncJobconfigs()`

```php
getSyncJobconfigs($external_system_ids): \StevenBuehner\ChurchTools\Model\InlineResponse20097
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
$external_system_ids = new \StevenBuehner\ChurchTools\Model\array(); // array

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

[**\StevenBuehner\ChurchTools\Model\InlineResponse20097**](../Model/InlineResponse20097.md)

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
getSyncLogs($page, $limit, $es_ids, $job_ids, $start_date, $end_date, $types, $query, $levels, $is_dry_run, $body): \StevenBuehner\ChurchTools\Model\InlineResponse200111
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
$end_date = Sun Jan 31 01:00:00 CET 2021; // \DateTime | Show Logs Until This Date
$types = array(56); // int[] | Filter by Types
$query = 'query_example'; // string | Search Through Log Messages
$levels = new \StevenBuehner\ChurchTools\Model\array(); // array | the log levels
$is_dry_run = True; // bool
$body = new \stdClass; // object

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
 **limit** | **float**| Number of Logs per Page | [optional]
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

[**\StevenBuehner\ChurchTools\Model\InlineResponse200111**](../Model/InlineResponse200111.md)

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
postSyncExternalsystemsExternalSystemIdJobconfigs($external_system_id, $job_configuration1): \StevenBuehner\ChurchTools\Model\InlineResponse2014
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

[**\StevenBuehner\ChurchTools\Model\InlineResponse2014**](../Model/InlineResponse2014.md)

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
postSyncExternalsystemsExternalSystemIdJobconfigsJobIdStart($external_system_id, $job_id, $inline_object63)
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
$inline_object63 = new \StevenBuehner\ChurchTools\Model\InlineObject63(); // \StevenBuehner\ChurchTools\Model\InlineObject63

try {
    $apiInstance->postSyncExternalsystemsExternalSystemIdJobconfigsJobIdStart($external_system_id, $job_id, $inline_object63);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postSyncExternalsystemsExternalSystemIdJobconfigsJobIdStart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_system_id** | **string**|  |
 **job_id** | **string**|  |
 **inline_object63** | [**\StevenBuehner\ChurchTools\Model\InlineObject63**](../Model/InlineObject63.md)|  | [optional]

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
postSyncLogs($inline_object62): \StevenBuehner\ChurchTools\Model\InlineResponse2017
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
$inline_object62 = new \StevenBuehner\ChurchTools\Model\InlineObject62(); // \StevenBuehner\ChurchTools\Model\InlineObject62

try {
    $result = $apiInstance->postSyncLogs($inline_object62);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->postSyncLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object62** | [**\StevenBuehner\ChurchTools\Model\InlineObject62**](../Model/InlineObject62.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2017**](../Model/InlineResponse2017.md)

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
putSyncExternalsystemsExternalSystemIdJobconfigs($external_system_id, $job_id, $job_configuration2): \StevenBuehner\ChurchTools\Model\InlineResponse20098
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
$job_configuration2 = new \StevenBuehner\ChurchTools\Model\JobConfiguration2(); // \StevenBuehner\ChurchTools\Model\JobConfiguration2

try {
    $result = $apiInstance->putSyncExternalsystemsExternalSystemIdJobconfigs($external_system_id, $job_id, $job_configuration2);
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
 **job_configuration2** | [**\StevenBuehner\ChurchTools\Model\JobConfiguration2**](../Model/JobConfiguration2.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20098**](../Model/InlineResponse20098.md)

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
putSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter($external_system_id, $job_id, $inline_object56): \StevenBuehner\ChurchTools\Model\InlineResponse200101
```

Save entity filters

Save entity filter for this job.

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
$external_system_id = 'external_system_id_example'; // string | External System ID
$job_id = 'job_id_example'; // string | Job Configuration ID
$inline_object56 = new \StevenBuehner\ChurchTools\Model\InlineObject56(); // \StevenBuehner\ChurchTools\Model\InlineObject56

try {
    $result = $apiInstance->putSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter($external_system_id, $job_id, $inline_object56);
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
 **inline_object56** | [**\StevenBuehner\ChurchTools\Model\InlineObject56**](../Model/InlineObject56.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse200101**](../Model/InlineResponse200101.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties()`

```php
putSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties($external_system_id, $job_id, $inline_object55): \StevenBuehner\ChurchTools\Model\InlineResponse20099
```

Save Properties, Which Should Be Synced

Save properties (field mapping entries) for this job. Those properties will be synced.

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
$external_system_id = 'external_system_id_example'; // string | External System ID
$job_id = 'job_id_example'; // string | Job Configuration ID
$inline_object55 = new \StevenBuehner\ChurchTools\Model\InlineObject55(); // \StevenBuehner\ChurchTools\Model\InlineObject55

try {
    $result = $apiInstance->putSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties($external_system_id, $job_id, $inline_object55);
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
 **inline_object55** | [**\StevenBuehner\ChurchTools\Model\InlineObject55**](../Model/InlineObject55.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20099**](../Model/InlineResponse20099.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putSyncExternalsystemsId()`

```php
putSyncExternalsystemsId($id, $external_system3)
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
$external_system3 = new \StevenBuehner\ChurchTools\Model\ExternalSystem3(); // \StevenBuehner\ChurchTools\Model\ExternalSystem3

try {
    $apiInstance->putSyncExternalsystemsId($id, $external_system3);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->putSyncExternalsystemsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the external system |
 **external_system3** | [**\StevenBuehner\ChurchTools\Model\ExternalSystem3**](../Model/ExternalSystem3.md)|  | [optional]

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