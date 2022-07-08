# StevenBuehner\ChurchTools\SyncApi

All URIs are relative to /api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSyncMapping()**](SyncApi.md#createSyncMapping) | **POST** /sync/entitymappings | Create new mapping
[**deleteEntityMapping()**](SyncApi.md#deleteEntityMapping) | **DELETE** /sync/entitymappings/{id} | Delete Mapping from Database.
[**deleteSyncConflict()**](SyncApi.md#deleteSyncConflict) | **DELETE** /sync/conflicts/{id} | Delete Conflict
[**deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter()**](SyncApi.md#deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter) | **DELETE** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/filter | Delete all filter entities
[**deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties()**](SyncApi.md#deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties) | **DELETE** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/properties | Delete all Properties for This Job
[**getEntityMapping()**](SyncApi.md#getEntityMapping) | **GET** /sync/entitymappings/{id} | Get One Entity Mapping
[**getSyncConflict()**](SyncApi.md#getSyncConflict) | **GET** /sync/conflicts/{id} | Fetch One Conflict
[**getSyncConflicts()**](SyncApi.md#getSyncConflicts) | **GET** /sync/conflicts | Fetch all conflicts
[**getSyncExecutions()**](SyncApi.md#getSyncExecutions) | **GET** /sync/executions | Statistical Information about Sync Executions
[**getSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter()**](SyncApi.md#getSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter) | **GET** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/filter | Fetch all entity filters for this job
[**getSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties()**](SyncApi.md#getSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties) | **GET** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/properties | Fetch all Properties for This Job
[**getSyncFieldMappings()**](SyncApi.md#getSyncFieldMappings) | **GET** /sync/externalsystems/{id}/fieldmappings/{domainType} | Get Mapping for Domain Type
[**getSyncLogs()**](SyncApi.md#getSyncLogs) | **GET** /sync/logs | Get Sync Logs
[**getSyncMappings()**](SyncApi.md#getSyncMappings) | **GET** /sync/entitymappings | Fetch all registered mappings
[**postSyncExternalsystems()**](SyncApi.md#postSyncExternalsystems) | **POST** /sync/externalsystems | Create external system
[**postSyncExternalsystemsExternalSystemIdJobconfigsJobIdStart()**](SyncApi.md#postSyncExternalsystemsExternalSystemIdJobconfigsJobIdStart) | **POST** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/start | Start Execution
[**postSyncLogs()**](SyncApi.md#postSyncLogs) | **POST** /sync/logs | Save Sync Logs
[**putSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter()**](SyncApi.md#putSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter) | **PUT** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/filter | Save entity filters
[**putSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties()**](SyncApi.md#putSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties) | **PUT** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/properties | Save Properties, Which Should Be Synced
[**putSyncFieldMappings()**](SyncApi.md#putSyncFieldMappings) | **PUT** /sync/externalsystems/{id}/fieldmappings/{domainType} | Save Mapping for Domain Type
[**saveSyncConflict()**](SyncApi.md#saveSyncConflict) | **POST** /sync/conflicts | Save new detected conflict
[**updateEntityMapping()**](SyncApi.md#updateEntityMapping) | **PUT** /sync/entitymappings/{id} | Update or Create Mapping
[**updateSyncConflict()**](SyncApi.md#updateSyncConflict) | **PUT** /sync/conflicts/{id} | Update Conflict


## `createSyncMapping()`

```php
createSyncMapping($create_sync_mapping_request): \StevenBuehner\ChurchTools\Model\SyncEntityMapping
```

Create new mapping

Save new entity mapping.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\SyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_sync_mapping_request = new \StevenBuehner\ChurchTools\Model\CreateSyncMappingRequest(); // \StevenBuehner\ChurchTools\Model\CreateSyncMappingRequest | New Entity Mapping of a Person.

try {
    $result = $apiInstance->createSyncMapping($create_sync_mapping_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->createSyncMapping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_sync_mapping_request** | [**\StevenBuehner\ChurchTools\Model\CreateSyncMappingRequest**](../Model/CreateSyncMappingRequest.md)| New Entity Mapping of a Person. | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\SyncEntityMapping**](../Model/SyncEntityMapping.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEntityMapping()`

```php
deleteEntityMapping($id)
```

Delete Mapping from Database.

Delete one entity mapping from database. The mapping will be delete but the entity, for example the person object, will remain as it is. This will break the relationship to an external system.  If no entity mapping is found the endpoint will also return 204 No Content.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\SyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->deleteEntityMapping($id);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->deleteEntityMapping: ', $e->getMessage(), PHP_EOL;
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

## `deleteSyncConflict()`

```php
deleteSyncConflict($id)
```

Delete Conflict

Delete Conflict from Database.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\SyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->deleteSyncConflict($id);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->deleteSyncConflict: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new StevenBuehner\ChurchTools\Api\SyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_system_id = 'external_system_id_example'; // string | External System ID
$job_id = 'job_id_example'; // string | Job Configuration ID

try {
    $apiInstance->deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter($external_system_id, $job_id);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new StevenBuehner\ChurchTools\Api\SyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_system_id = 'external_system_id_example'; // string | External System ID
$job_id = 'job_id_example'; // string | Job Configuration ID

try {
    $apiInstance->deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties($external_system_id, $job_id);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties: ', $e->getMessage(), PHP_EOL;
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

## `getEntityMapping()`

```php
getEntityMapping($id): \StevenBuehner\ChurchTools\Model\SyncEntityMapping
```

Get One Entity Mapping

Fetch one entity mapping form database.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\SyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getEntityMapping($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->getEntityMapping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\SyncEntityMapping**](../Model/SyncEntityMapping.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSyncConflict()`

```php
getSyncConflict($id): \StevenBuehner\ChurchTools\Model\SaveSyncConflict201Response
```

Fetch One Conflict

Fetch one specific conflict.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\SyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getSyncConflict($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->getSyncConflict: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\SaveSyncConflict201Response**](../Model/SaveSyncConflict201Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSyncConflicts()`

```php
getSyncConflicts($types, $domain_types, $source_ids): \StevenBuehner\ChurchTools\Model\GetSyncConflicts200Response
```

Fetch all conflicts

When synchronizing two systems conflicts may appear. You can fetch know conflicts using this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\SyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$types = array('types_example'); // string[] | Filter Response by Conflict Type
$domain_types = array('domain_types_example'); // string[] | Filter Response by Domain Types of Related Entity Mappings
$source_ids = array(56); // int[] | Filter Response by Source Ids of Related Entity Mappings

try {
    $result = $apiInstance->getSyncConflicts($types, $domain_types, $source_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->getSyncConflicts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **types** | [**string[]**](../Model/string.md)| Filter Response by Conflict Type | [optional]
 **domain_types** | [**string[]**](../Model/string.md)| Filter Response by Domain Types of Related Entity Mappings | [optional]
 **source_ids** | [**int[]**](../Model/int.md)| Filter Response by Source Ids of Related Entity Mappings | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\GetSyncConflicts200Response**](../Model/GetSyncConflicts200Response.md)

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


$apiInstance = new StevenBuehner\ChurchTools\Api\SyncApi(
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
    echo 'Exception when calling SyncApi->getSyncExecutions: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new StevenBuehner\ChurchTools\Api\SyncApi(
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
    echo 'Exception when calling SyncApi->getSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new StevenBuehner\ChurchTools\Api\SyncApi(
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
    echo 'Exception when calling SyncApi->getSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties: ', $e->getMessage(), PHP_EOL;
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

## `getSyncFieldMappings()`

```php
getSyncFieldMappings($id, $domain_type): \StevenBuehner\ChurchTools\Model\GetSyncFieldMappings200Response
```

Get Mapping for Domain Type

Get Sync Field Mappings for an external system of a specific domain type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\SyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of External System
$domain_type = 'domain_type_example'; // string | Domatin Type

try {
    $result = $apiInstance->getSyncFieldMappings($id, $domain_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->getSyncFieldMappings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of External System |
 **domain_type** | **string**| Domatin Type |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetSyncFieldMappings200Response**](../Model/GetSyncFieldMappings200Response.md)

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


$apiInstance = new StevenBuehner\ChurchTools\Api\SyncApi(
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
    echo 'Exception when calling SyncApi->getSyncLogs: ', $e->getMessage(), PHP_EOL;
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

## `getSyncMappings()`

```php
getSyncMappings($domain_type, $domain_id, $source_id): \StevenBuehner\ChurchTools\Model\GetSyncMappings200Response
```

Fetch all registered mappings

The Sync module saved a mapping relationship for every entity. This mapping consists of a `domainType` like `person` oder `transaction` (ChurchTools domain type) and its `domainId` to identify the entity. And secondly, the corresponding entity on the third party system with its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\SyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_type = array('domain_type_example'); // string[] | Filter by Domain Types
$domain_id = 'domain_id_example'; // string | Filter by Domain Id
$source_id = 'source_id_example'; // string | Filter by Source Id

try {
    $result = $apiInstance->getSyncMappings($domain_type, $domain_id, $source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->getSyncMappings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain_type** | [**string[]**](../Model/string.md)| Filter by Domain Types | [optional]
 **domain_id** | **string**| Filter by Domain Id | [optional]
 **source_id** | **string**| Filter by Source Id | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\GetSyncMappings200Response**](../Model/GetSyncMappings200Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSyncExternalsystems()`

```php
postSyncExternalsystems($external_system2)
```

Create external system

Create an external system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\SyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_system2 = new \StevenBuehner\ChurchTools\Model\ExternalSystem2(); // \StevenBuehner\ChurchTools\Model\ExternalSystem2

try {
    $apiInstance->postSyncExternalsystems($external_system2);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->postSyncExternalsystems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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


$apiInstance = new StevenBuehner\ChurchTools\Api\SyncApi(
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
    echo 'Exception when calling SyncApi->postSyncExternalsystemsExternalSystemIdJobconfigsJobIdStart: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new StevenBuehner\ChurchTools\Api\SyncApi(
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
    echo 'Exception when calling SyncApi->postSyncLogs: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new StevenBuehner\ChurchTools\Api\SyncApi(
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
    echo 'Exception when calling SyncApi->putSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new StevenBuehner\ChurchTools\Api\SyncApi(
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
    echo 'Exception when calling SyncApi->putSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties: ', $e->getMessage(), PHP_EOL;
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

## `putSyncFieldMappings()`

```php
putSyncFieldMappings($id, $domain_type, $put_sync_field_mappings_request): \StevenBuehner\ChurchTools\Model\PutSyncFieldMappings200Response
```

Save Mapping for Domain Type

Save Mapping for External System of Domain Type. Existing mappings will be removed beforehand.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\SyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of External System
$domain_type = 'domain_type_example'; // string | Domatin Type
$put_sync_field_mappings_request = {"domainType":"person","propertyMappingsMasterToES":[{"from":"lastName","to":"nachname"},{"from":"firstName","to":"vorname"},{"from":"sexId","to":"geschlecht","valueMapping":{"unbekannt":["0"],"männlich":["1"],"weiblich":["2"],"divers":["1"]}},{"from":"status","to":"kategorie","valueMapping":{"1":[1],"2":[2],"5":[3]},"others":[0,4]},{"from":"groups","fromAttributes":{"id":36},"to":"kategorie","valueMapping":{"15":[757],"16":[758]},"others":[null,759,760]}],"propertyMappingsESToMaster":[{"from":"nachname","to":"lastName"},{"from":"vorname","to":"firstName"},{"from":"geschlecht","to":"sexId","valueMapping":{"0":["unbekannt","divers"],"1":["männlich"],"2":["weiblich"]},"others":["alien","gott"]},{"from":"kategorie","to":"status","valueMapping":{"1":[1],"2":[2,4],"3":[5]},"others":[0,4]},{"from":"kategorie","to":"group","toAttributes":{"id":36},"valueMapping":{"757":[15],"758":[16]},"others":[null]}]}; // \StevenBuehner\ChurchTools\Model\PutSyncFieldMappingsRequest | 

try {
    $result = $apiInstance->putSyncFieldMappings($id, $domain_type, $put_sync_field_mappings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->putSyncFieldMappings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of External System |
 **domain_type** | **string**| Domatin Type |
 **put_sync_field_mappings_request** | [**\StevenBuehner\ChurchTools\Model\PutSyncFieldMappingsRequest**](../Model/PutSyncFieldMappingsRequest.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\PutSyncFieldMappings200Response**](../Model/PutSyncFieldMappings200Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `saveSyncConflict()`

```php
saveSyncConflict($save_sync_conflict_request): \StevenBuehner\ChurchTools\Model\SaveSyncConflict201Response
```

Save new detected conflict

Save new sync conflict in ChurchTools.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\SyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$save_sync_conflict_request = new \StevenBuehner\ChurchTools\Model\SaveSyncConflictRequest(); // \StevenBuehner\ChurchTools\Model\SaveSyncConflictRequest | 

try {
    $result = $apiInstance->saveSyncConflict($save_sync_conflict_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->saveSyncConflict: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **save_sync_conflict_request** | [**\StevenBuehner\ChurchTools\Model\SaveSyncConflictRequest**](../Model/SaveSyncConflictRequest.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\SaveSyncConflict201Response**](../Model/SaveSyncConflict201Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEntityMapping()`

```php
updateEntityMapping($id, $update_entity_mapping_request): \StevenBuehner\ChurchTools\Model\SyncEntityMapping
```

Update or Create Mapping

Update or Create New Entity Mapping.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\SyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$update_entity_mapping_request = new \StevenBuehner\ChurchTools\Model\UpdateEntityMappingRequest(); // \StevenBuehner\ChurchTools\Model\UpdateEntityMappingRequest | 

try {
    $result = $apiInstance->updateEntityMapping($id, $update_entity_mapping_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->updateEntityMapping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **update_entity_mapping_request** | [**\StevenBuehner\ChurchTools\Model\UpdateEntityMappingRequest**](../Model/UpdateEntityMappingRequest.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\SyncEntityMapping**](../Model/SyncEntityMapping.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSyncConflict()`

```php
updateSyncConflict($id, $update_sync_conflict_request): \StevenBuehner\ChurchTools\Model\SaveSyncConflict201Response
```

Update Conflict

Depending on the conflicting situation, a conflict needs to be updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\SyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$update_sync_conflict_request = new \StevenBuehner\ChurchTools\Model\UpdateSyncConflictRequest(); // \StevenBuehner\ChurchTools\Model\UpdateSyncConflictRequest

try {
    $result = $apiInstance->updateSyncConflict($id, $update_sync_conflict_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->updateSyncConflict: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **update_sync_conflict_request** | [**\StevenBuehner\ChurchTools\Model\UpdateSyncConflictRequest**](../Model/UpdateSyncConflictRequest.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\SaveSyncConflict201Response**](../Model/SaveSyncConflict201Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
