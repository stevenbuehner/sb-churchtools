# StevenBuehner\ChurchTools\QueueApi

All URIs are relative to *https://teambb.church.tools/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getQueueJobGroupsStatus**](QueueApi.md#getqueuejobgroupsstatus) | **GET** /queues/{queue}/jobgroups/status | Status Information About Job Groups in Queue
[**startQueueWorker**](QueueApi.md#startqueueworker) | **POST** /queues/{queue} | Start Worker For Queue

# **getQueueJobGroupsStatus**
> \StevenBuehner\ChurchTools\Model\InlineResponse20081 getQueueJobGroupsStatus($queue, $job_groups)

Status Information About Job Groups in Queue

Job in a queue can belong to a job group to categorize a job. This endpoint counts jobs in queue and groups them by they status.  Use this endpoint to check if all jobs are processed or if still jobs are pending and wait to be processed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queue = "queue_example"; // string | 
$job_groups = "job_groups_example"; // string | Limit result to this job group.

try {
    $result = $apiInstance->getQueueJobGroupsStatus($queue, $job_groups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->getQueueJobGroupsStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue** | **string**|  |
 **job_groups** | **string**| Limit result to this job group. | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20081**](../Model/InlineResponse20081.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startQueueWorker**
> \StevenBuehner\ChurchTools\Model\InlineResponse20080 startQueueWorker($queue)

Start Worker For Queue

ChurchTools utilizes a queueing system to offload time-intensive or processing-intensive work. Calling this endpoint will start a worker, which grabs pending jobs and processing them. If the queue has still jobs pending the worker starts a new worker to continue the work.  Existing Queues:  * `default`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new StevenBuehner\ChurchTools\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$queue = "queue_example"; // string | 

try {
    $result = $apiInstance->startQueueWorker($queue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->startQueueWorker: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue** | **string**|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20080**](../Model/InlineResponse20080.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

