# StevenBuehner\ChurchTools\SyncApi

All URIs are relative to *https://teambb.church.tools/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSyncMapping**](SyncApi.md#createsyncmapping) | **POST** /sync/entitymappings | Create new mapping
[**deleteEntityMapping**](SyncApi.md#deleteentitymapping) | **DELETE** /sync/entitymappings/{id} | Delete Mapping from Database.
[**deleteSyncConflict**](SyncApi.md#deletesyncconflict) | **DELETE** /sync/conflicts/{id} | Delete Conflict
[**deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter**](SyncApi.md#deletesyncexternalsystemsexternalsystemidjobconfigsjobidfilter) | **DELETE** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/filter | Delete all filter entities
[**deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties**](SyncApi.md#deletesyncexternalsystemsexternalsystemidjobconfigsjobidproperties) | **DELETE** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/properties | Delete all Properties for This Job
[**getEntityMapping**](SyncApi.md#getentitymapping) | **GET** /sync/entitymappings/{id} | Get One Entity Mapping
[**getSyncConflict**](SyncApi.md#getsyncconflict) | **GET** /sync/conflicts/{id} | Fetch One Conflict
[**getSyncConflicts**](SyncApi.md#getsyncconflicts) | **GET** /sync/conflicts | Fetch all conflicts
[**getSyncExecutions**](SyncApi.md#getsyncexecutions) | **GET** /sync/executions | Statistical Information about Sync Executions
[**getSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter**](SyncApi.md#getsyncexternalsystemsexternalsystemidjobconfigsjobidfilter) | **GET** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/filter | Fetch all entity filters for this job
[**getSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties**](SyncApi.md#getsyncexternalsystemsexternalsystemidjobconfigsjobidproperties) | **GET** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/properties | Fetch all Properties for This Job
[**getSyncFieldMappings**](SyncApi.md#getsyncfieldmappings) | **GET** /sync/externalsystems/{id}/fieldmappings/{domainType} | Get Mapping for Domain Type
[**getSyncLogs**](SyncApi.md#getsynclogs) | **GET** /sync/logs | Get Sync Logs
[**getSyncMappings**](SyncApi.md#getsyncmappings) | **GET** /sync/entitymappings | Fetch all registered mappings
[**postSyncExternalsystems**](SyncApi.md#postsyncexternalsystems) | **POST** /sync/externalsystems | Create external system
[**postSyncExternalsystemsExternalSystemIdJobconfigsJobIdStart**](SyncApi.md#postsyncexternalsystemsexternalsystemidjobconfigsjobidstart) | **POST** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/start | Start Execution
[**postSyncLogs**](SyncApi.md#postsynclogs) | **POST** /sync/logs | Save Sync Logs
[**putSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter**](SyncApi.md#putsyncexternalsystemsexternalsystemidjobconfigsjobidfilter) | **PUT** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/filter | Save entity filters
[**putSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties**](SyncApi.md#putsyncexternalsystemsexternalsystemidjobconfigsjobidproperties) | **PUT** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/properties | Save Properties, Which Should Be Synced
[**putSyncFieldMappings**](SyncApi.md#putsyncfieldmappings) | **PUT** /sync/externalsystems/{id}/fieldmappings/{domainType} | Save Mapping for Domain Type
[**saveSyncConflict**](SyncApi.md#savesyncconflict) | **POST** /sync/conflicts | Save new detected conflict
[**updateEntityMapping**](SyncApi.md#updateentitymapping) | **PUT** /sync/entitymappings/{id} | Update or Create Mapping
[**updateSyncConflict**](SyncApi.md#updatesyncconflict) | **PUT** /sync/conflicts/{id} | Update Conflict

# **createSyncMapping**
> \StevenBuehner\ChurchTools\Model\SyncEntityMapping createSyncMapping($body)

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
$body = new \StevenBuehner\ChurchTools\Model\Body51(); // \StevenBuehner\ChurchTools\Model\Body51 | New Entity Mapping of a Person.

try {
    $result = $apiInstance->createSyncMapping($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->createSyncMapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body51**](../Model/Body51.md)| New Entity Mapping of a Person. | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\SyncEntityMapping**](../Model/SyncEntityMapping.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEntityMapping**
> deleteEntityMapping($id)

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
$id = "id_example"; // string | 

try {
    $apiInstance->deleteEntityMapping($id);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->deleteEntityMapping: ', $e->getMessage(), PHP_EOL;
}
?>
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

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSyncConflict**
> deleteSyncConflict($id)

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
$id = "id_example"; // string | 

try {
    $apiInstance->deleteSyncConflict($id);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->deleteSyncConflict: ', $e->getMessage(), PHP_EOL;
}
?>
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

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter**
> deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter($external_system_id, $job_id)

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

$apiInstance = new StevenBuehner\ChurchTools\Api\SyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_system_id = "external_system_id_example"; // string | External System ID
$job_id = "job_id_example"; // string | Job Configuration ID

try {
    $apiInstance->deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter($external_system_id, $job_id);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter: ', $e->getMessage(), PHP_EOL;
}
?>
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

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties**
> deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties($external_system_id, $job_id)

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

$apiInstance = new StevenBuehner\ChurchTools\Api\SyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_system_id = "external_system_id_example"; // string | External System ID
$job_id = "job_id_example"; // string | Job Configuration ID

try {
    $apiInstance->deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties($external_system_id, $job_id);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties: ', $e->getMessage(), PHP_EOL;
}
?>
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

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEntityMapping**
> \StevenBuehner\ChurchTools\Model\SyncEntityMapping getEntityMapping($id)

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
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getEntityMapping($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->getEntityMapping: ', $e->getMessage(), PHP_EOL;
}
?>
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
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSyncConflict**
> \StevenBuehner\ChurchTools\Model\InlineResponse2013 getSyncConflict($id)

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
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getSyncConflict($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->getSyncConflict: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2013**](../Model/InlineResponse2013.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSyncConflicts**
> \StevenBuehner\ChurchTools\Model\InlineResponse20082 getSyncConflicts($types, $domain_types, $source_ids)

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
$types = array("types_example"); // string[] | Filter Response by Conflict Type
$domain_types = array("domain_types_example"); // string[] | Filter Response by Domain Types of Related Entity Mappings
$source_ids = array(56); // int[] | Filter Response by Source Ids of Related Entity Mappings

try {
    $result = $apiInstance->getSyncConflicts($types, $domain_types, $source_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->getSyncConflicts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **types** | [**string[]**](../Model/string.md)| Filter Response by Conflict Type | [optional]
 **domain_types** | [**string[]**](../Model/string.md)| Filter Response by Domain Types of Related Entity Mappings | [optional]
 **source_ids** | [**int[]**](../Model/int.md)| Filter Response by Source Ids of Related Entity Mappings | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20082**](../Model/InlineResponse20082.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSyncExecutions**
> \StevenBuehner\ChurchTools\Model\InlineResponse200115 getSyncExecutions($es_ids, $job_ids, $start_date, $end_date, $statuses, $page, $limit, $is_dry_run)

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
$es_ids = new \StevenBuehner\ChurchTools\Model\array(); // array | Filter by external system
$job_ids = new \StevenBuehner\ChurchTools\Model\array(); // array | Filter by sync job configuration
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Return executions after that date
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Return executions before that date
$statuses = new \StevenBuehner\ChurchTools\Model\array(); // array | Filter by status
$page = 1.2; // float | Query page
$limit = 1.2; // float | Number of results per page
$is_dry_run = true; // bool | 

try {
    $result = $apiInstance->getSyncExecutions($es_ids, $job_ids, $start_date, $end_date, $statuses, $page, $limit, $is_dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->getSyncExecutions: ', $e->getMessage(), PHP_EOL;
}
?>
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

[**\StevenBuehner\ChurchTools\Model\InlineResponse200115**](../Model/InlineResponse200115.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter**
> \StevenBuehner\ChurchTools\Model\InlineResponse200102 getSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter($external_system_id, $job_id)

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

$apiInstance = new StevenBuehner\ChurchTools\Api\SyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_system_id = "external_system_id_example"; // string | External System ID
$job_id = "job_id_example"; // string | Job Configuration ID

try {
    $result = $apiInstance->getSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter($external_system_id, $job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->getSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_system_id** | **string**| External System ID |
 **job_id** | **string**| Job Configuration ID |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse200102**](../Model/InlineResponse200102.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties**
> \StevenBuehner\ChurchTools\Model\InlineResponse200101 getSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties($external_system_id, $job_id)

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

$apiInstance = new StevenBuehner\ChurchTools\Api\SyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_system_id = "external_system_id_example"; // string | External System ID
$job_id = "job_id_example"; // string | Job Configuration ID

try {
    $result = $apiInstance->getSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties($external_system_id, $job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->getSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_system_id** | **string**| External System ID |
 **job_id** | **string**| Job Configuration ID |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse200101**](../Model/InlineResponse200101.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSyncFieldMappings**
> \StevenBuehner\ChurchTools\Model\InlineResponse200104 getSyncFieldMappings($id, $domain_type)

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
$id = "id_example"; // string | ID of External System
$domain_type = "domain_type_example"; // string | Domatin Type

try {
    $result = $apiInstance->getSyncFieldMappings($id, $domain_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->getSyncFieldMappings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of External System |
 **domain_type** | **string**| Domatin Type |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse200104**](../Model/InlineResponse200104.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSyncLogs**
> \StevenBuehner\ChurchTools\Model\InlineResponse200113 getSyncLogs($body, $page, $limit, $es_ids, $job_ids, $start_date, $end_date, $types, $query, $levels, $is_dry_run)

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
$body = new \stdClass; // object | 
$page = 1; // float | Page Number
$limit = 1.2; // float | Number of Logs per Page
$es_ids = array(56); // int[] | Filter by External Systems
$job_ids = array(56); // int[] | Filter by Jobs
$start_date = new \DateTime("2013-10-20"); // \DateTime | Show Logs From This Date on
$end_date = new \DateTime("2013-10-20"); // \DateTime | Show Logs Until This Date
$types = array(56); // int[] | Filter by Types
$query = "query_example"; // string | Search Through Log Messages
$levels = new \StevenBuehner\ChurchTools\Model\array(); // array | the log levels
$is_dry_run = true; // bool | 

try {
    $result = $apiInstance->getSyncLogs($body, $page, $limit, $es_ids, $job_ids, $start_date, $end_date, $types, $query, $levels, $is_dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->getSyncLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  | [optional]
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

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse200113**](../Model/InlineResponse200113.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSyncMappings**
> \StevenBuehner\ChurchTools\Model\InlineResponse20079 getSyncMappings($domain_type, $domain_id, $source_id)

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
$domain_type = array("domain_type_example"); // string[] | Filter by Domain Types
$domain_id = "domain_id_example"; // string | Filter by Domain Id
$source_id = "source_id_example"; // string | Filter by Source Id

try {
    $result = $apiInstance->getSyncMappings($domain_type, $domain_id, $source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->getSyncMappings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain_type** | [**string[]**](../Model/string.md)| Filter by Domain Types | [optional]
 **domain_id** | **string**| Filter by Domain Id | [optional]
 **source_id** | **string**| Filter by Source Id | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20079**](../Model/InlineResponse20079.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSyncExternalsystems**
> postSyncExternalsystems($body)

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
$body = new \StevenBuehner\ChurchTools\Model\ExternalSystem1(); // \StevenBuehner\ChurchTools\Model\ExternalSystem1 | 

try {
    $apiInstance->postSyncExternalsystems($body);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->postSyncExternalsystems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\ExternalSystem1**](../Model/ExternalSystem1.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSyncExternalsystemsExternalSystemIdJobconfigsJobIdStart**
> postSyncExternalsystemsExternalSystemIdJobconfigsJobIdStart($external_system_id, $job_id, $body)

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
$external_system_id = "external_system_id_example"; // string | 
$job_id = "job_id_example"; // string | 
$body = new \StevenBuehner\ChurchTools\Model\Body65(); // \StevenBuehner\ChurchTools\Model\Body65 | 

try {
    $apiInstance->postSyncExternalsystemsExternalSystemIdJobconfigsJobIdStart($external_system_id, $job_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->postSyncExternalsystemsExternalSystemIdJobconfigsJobIdStart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_system_id** | **string**|  |
 **job_id** | **string**|  |
 **body** | [**\StevenBuehner\ChurchTools\Model\Body65**](../Model/Body65.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSyncLogs**
> \StevenBuehner\ChurchTools\Model\InlineResponse2017 postSyncLogs($body)

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
$body = new \StevenBuehner\ChurchTools\Model\Body64(); // \StevenBuehner\ChurchTools\Model\Body64 | 

try {
    $result = $apiInstance->postSyncLogs($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->postSyncLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body64**](../Model/Body64.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2017**](../Model/InlineResponse2017.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter**
> \StevenBuehner\ChurchTools\Model\InlineResponse200103 putSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter($external_system_id, $job_id, $body)

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

$apiInstance = new StevenBuehner\ChurchTools\Api\SyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_system_id = "external_system_id_example"; // string | External System ID
$job_id = "job_id_example"; // string | Job Configuration ID
$body = new \StevenBuehner\ChurchTools\Model\Body58(); // \StevenBuehner\ChurchTools\Model\Body58 | 

try {
    $result = $apiInstance->putSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter($external_system_id, $job_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->putSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_system_id** | **string**| External System ID |
 **job_id** | **string**| Job Configuration ID |
 **body** | [**\StevenBuehner\ChurchTools\Model\Body58**](../Model/Body58.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse200103**](../Model/InlineResponse200103.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties**
> \StevenBuehner\ChurchTools\Model\InlineResponse200101 putSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties($external_system_id, $job_id, $body)

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

$apiInstance = new StevenBuehner\ChurchTools\Api\SyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_system_id = "external_system_id_example"; // string | External System ID
$job_id = "job_id_example"; // string | Job Configuration ID
$body = new \StevenBuehner\ChurchTools\Model\Body57(); // \StevenBuehner\ChurchTools\Model\Body57 | 

try {
    $result = $apiInstance->putSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties($external_system_id, $job_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->putSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_system_id** | **string**| External System ID |
 **job_id** | **string**| Job Configuration ID |
 **body** | [**\StevenBuehner\ChurchTools\Model\Body57**](../Model/Body57.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse200101**](../Model/InlineResponse200101.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSyncFieldMappings**
> \StevenBuehner\ChurchTools\Model\InlineResponse200105 putSyncFieldMappings($id, $domain_type, $body)

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
$id = "id_example"; // string | ID of External System
$domain_type = "domain_type_example"; // string | Domatin Type
$body = new \StevenBuehner\ChurchTools\Model\Body59(); // \StevenBuehner\ChurchTools\Model\Body59 | 

try {
    $result = $apiInstance->putSyncFieldMappings($id, $domain_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->putSyncFieldMappings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of External System |
 **domain_type** | **string**| Domatin Type |
 **body** | [**\StevenBuehner\ChurchTools\Model\Body59**](../Model/Body59.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse200105**](../Model/InlineResponse200105.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveSyncConflict**
> \StevenBuehner\ChurchTools\Model\InlineResponse2013 saveSyncConflict($body)

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
$body = new \StevenBuehner\ChurchTools\Model\Body53(); // \StevenBuehner\ChurchTools\Model\Body53 | 

try {
    $result = $apiInstance->saveSyncConflict($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->saveSyncConflict: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body53**](../Model/Body53.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2013**](../Model/InlineResponse2013.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEntityMapping**
> \StevenBuehner\ChurchTools\Model\SyncEntityMapping updateEntityMapping($id, $body)

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
$id = "id_example"; // string | 
$body = new \StevenBuehner\ChurchTools\Model\Body52(); // \StevenBuehner\ChurchTools\Model\Body52 | 

try {
    $result = $apiInstance->updateEntityMapping($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->updateEntityMapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\StevenBuehner\ChurchTools\Model\Body52**](../Model/Body52.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\SyncEntityMapping**](../Model/SyncEntityMapping.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSyncConflict**
> \StevenBuehner\ChurchTools\Model\InlineResponse2013 updateSyncConflict($id, $body)

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
$id = "id_example"; // string | 
$body = new \StevenBuehner\ChurchTools\Model\Body54(); // \StevenBuehner\ChurchTools\Model\Body54 | 

try {
    $result = $apiInstance->updateSyncConflict($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->updateSyncConflict: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\StevenBuehner\ChurchTools\Model\Body54**](../Model/Body54.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2013**](../Model/InlineResponse2013.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

