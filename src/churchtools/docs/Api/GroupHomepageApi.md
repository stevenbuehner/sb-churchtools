# StevenBuehner\ChurchTools\GroupHomepageApi

All URIs are relative to *https://teambb.church.tools/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGroupForHomepage**](GroupHomepageApi.md#getgroupforhomepage) | **GET** /publicgroups/{id}/{hash} | Public information of group
[**getGroupHomepage**](GroupHomepageApi.md#getgrouphomepage) | **GET** /grouphomepages/{hash} | Get information about public groups with settings
[**getPublicgroupsGroupIdForm**](GroupHomepageApi.md#getpublicgroupsgroupidform) | **GET** /publicgroups/{groupId}/form | Get a Group Sign Up Form
[**issueSignUpToken**](GroupHomepageApi.md#issuesignuptoken) | **POST** /publicgroups/{groupId}/token | Issue new sign up token.
[**postPublicgroupsGroupIdMailToLeaders**](GroupHomepageApi.md#postpublicgroupsgroupidmailtoleaders) | **POST** /publicgroups/{groupId}/mailToLeaders | Send a Mail to Public Group Leaders
[**postPublicgroupsGroupIdSignup**](GroupHomepageApi.md#postpublicgroupsgroupidsignup) | **POST** /publicgroups/{groupId}/signup | Send a Sign Up Form to Get Signed Up into a Public Group

# **getGroupForHomepage**
> \StevenBuehner\ChurchTools\Model\PublicGroup getGroupForHomepage($hash, $id)

Public information of group

Request a group for a group homepage. Only necessary fields for a public group homepage are returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new StevenBuehner\ChurchTools\Api\GroupHomepageApi(
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
    echo 'Exception when calling GroupHomepageApi->getGroupForHomepage: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new StevenBuehner\ChurchTools\Api\GroupHomepageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = "hash_example"; // string | Random hash for public groups

try {
    $result = $apiInstance->getGroupHomepage($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupHomepageApi->getGroupHomepage: ', $e->getMessage(), PHP_EOL;
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

# **getPublicgroupsGroupIdForm**
> \StevenBuehner\ChurchTools\Model\InlineResponse20074 getPublicgroupsGroupIdForm($group_id, $token)

Get a Group Sign Up Form

When granted a sign up token, this endpoint returns all fields to display a sign up form for the user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new StevenBuehner\ChurchTools\Api\GroupHomepageApi(
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
    echo 'Exception when calling GroupHomepageApi->getPublicgroupsGroupIdForm: ', $e->getMessage(), PHP_EOL;
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

# **issueSignUpToken**
> \StevenBuehner\ChurchTools\Model\InlineResponse20073 issueSignUpToken($group_id, $body)

Issue new sign up token.

The sign up token is needed to sign up to a public or open group using the form. The token can be issued by person id or for an email. If the person id is given, the token and the form url is returned. If an eMail address is given, the system checks if a user exists with that eMail, if s/he is already in the group or if the eMail is new to the system, hence a new user account would be necessary. The mail is sent with detailed information and a link to the sign up form.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new StevenBuehner\ChurchTools\Api\GroupHomepageApi(
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
    echo 'Exception when calling GroupHomepageApi->issueSignUpToken: ', $e->getMessage(), PHP_EOL;
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

# **postPublicgroupsGroupIdMailToLeaders**
> postPublicgroupsGroupIdMailToLeaders($group_id, $body)

Send a Mail to Public Group Leaders

Sends a mail to each group leader of the public group who has an email address set.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new StevenBuehner\ChurchTools\Api\GroupHomepageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = "group_id_example"; // string | Group ID of the public group
$body = new \StevenBuehner\ChurchTools\Model\Body48(); // \StevenBuehner\ChurchTools\Model\Body48 | 

try {
    $apiInstance->postPublicgroupsGroupIdMailToLeaders($group_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling GroupHomepageApi->postPublicgroupsGroupIdMailToLeaders: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new StevenBuehner\ChurchTools\Api\GroupHomepageApi(
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
    echo 'Exception when calling GroupHomepageApi->postPublicgroupsGroupIdSignup: ', $e->getMessage(), PHP_EOL;
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

