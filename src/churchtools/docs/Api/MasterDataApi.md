# StevenBuehner\ChurchTools\MasterDataApi

All URIs are relative to *https://teambb.church.tools/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchMasterDataPerson**](MasterDataApi.md#fetchmasterdataperson) | **GET** /masterdata/person | Fetch all master data for the module \&quot;People &amp; Groups\&quot;
[**getAllData**](MasterDataApi.md#getalldata) | **GET** /finance/masterdata | Get a master data for finance module
[**getAllGroupTypeRoles**](MasterDataApi.md#getallgrouptyperoles) | **GET** /masterdata/person/roles | Get all group type roles
[**getEventMasterdata**](MasterDataApi.md#geteventmasterdata) | **GET** /event/masterdata | Fetch MasterData for Module \&quot;Event\&quot;
[**getMasterDataPerson**](MasterDataApi.md#getmasterdataperson) | **GET** /person/masterdata | Fetch all master data for the module \&quot;People &amp; Groups\&quot;
[**masterdataPersonRolesRoleIdGet**](MasterDataApi.md#masterdatapersonrolesroleidget) | **GET** /masterdata/person/roles/{roleId} | Get a group type role

# **fetchMasterDataPerson**
> fetchMasterDataPerson()

Fetch all master data for the module \"People & Groups\"

Endpoint depreacted. Please use `/person/masterdata`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\MasterDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->fetchMasterDataPerson();
} catch (Exception $e) {
    echo 'Exception when calling MasterDataApi->fetchMasterDataPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllData**
> \StevenBuehner\ChurchTools\Model\InlineResponse20045 getAllData($accounting_period_id)

Get a master data for finance module

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\MasterDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 56; // int | ID of accounting period to get master data for

try {
    $result = $apiInstance->getAllData($accounting_period_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasterDataApi->getAllData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accounting_period_id** | **int**| ID of accounting period to get master data for |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20045**](../Model/InlineResponse20045.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllGroupTypeRoles**
> \StevenBuehner\ChurchTools\Model\InlineResponse20042 getAllGroupTypeRoles()

Get all group type roles

This endpoint returns an array with all roles of a group type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\MasterDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllGroupTypeRoles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasterDataApi->getAllGroupTypeRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20042**](../Model/InlineResponse20042.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEventMasterdata**
> \StevenBuehner\ChurchTools\Model\EventMasterData1 getEventMasterdata()

Fetch MasterData for Module \"Event\"

The master data are the backbone of ChurchTools. This endpoint returns all data for that module to work with. Different endpoints don't include the master data directly but only state the ID for this data and this endpoint provides the data with all its details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\MasterDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getEventMasterdata();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasterDataApi->getEventMasterdata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\EventMasterData1**](../Model/EventMasterData1.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMasterDataPerson**
> \StevenBuehner\ChurchTools\Model\InlineResponse20044 getMasterDataPerson()

Fetch all master data for the module \"People & Groups\"

The master data are the backbone of ChurchTools. You can add new db fields, or change the available countries. This endpoint returns all data for that module to work with. Different endpoints don't include the master data directly but only state the ID for this data and this endpoint provides the data with all its details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\MasterDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMasterDataPerson();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasterDataApi->getMasterDataPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20044**](../Model/InlineResponse20044.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **masterdataPersonRolesRoleIdGet**
> \StevenBuehner\ChurchTools\Model\InlineResponse20043 masterdataPersonRolesRoleIdGet($role_id)

Get a group type role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\MasterDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = 56; // int | ID of group type role

try {
    $result = $apiInstance->masterdataPersonRolesRoleIdGet($role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasterDataApi->masterdataPersonRolesRoleIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| ID of group type role |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20043**](../Model/InlineResponse20043.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

