# StevenBuehner\ChurchTools\GroupHomepageApi

All URIs are relative to /api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGroupForHomepage()**](GroupHomepageApi.md#getGroupForHomepage) | **GET** /publicgroups/{id}/{hash} | Public information of group
[**getGroupHomepage()**](GroupHomepageApi.md#getGroupHomepage) | **GET** /grouphomepages/{hash} | Get information about public groups with settings
[**getPublicgroupsGroupIdForm()**](GroupHomepageApi.md#getPublicgroupsGroupIdForm) | **GET** /publicgroups/{groupId}/form | Get a Group Sign Up Form
[**issueSignUpToken()**](GroupHomepageApi.md#issueSignUpToken) | **POST** /publicgroups/{groupId}/token | Issue new sign up token.
[**postPublicgroupsGroupIdMailToLeaders()**](GroupHomepageApi.md#postPublicgroupsGroupIdMailToLeaders) | **POST** /publicgroups/{groupId}/mailToLeaders | Send a Mail to Public Group Leaders
[**postPublicgroupsGroupIdSignup()**](GroupHomepageApi.md#postPublicgroupsGroupIdSignup) | **POST** /publicgroups/{groupId}/signup | Send a Sign Up Form to Get Signed Up into a Public Group


## `getGroupForHomepage()`

```php
getGroupForHomepage($hash, $id): \StevenBuehner\ChurchTools\Model\PublicGroup
```

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
$hash = 'hash_example'; // string | Group Homepage Hash
$id = 'id_example'; // string | Group ID

try {
    $result = $apiInstance->getGroupForHomepage($hash, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupHomepageApi->getGroupForHomepage: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupHomepage()`

```php
getGroupHomepage($hash): \StevenBuehner\ChurchTools\Model\GetGroupHomepage200Response
```

Get information about public groups with settings

Get all information necessary to display public groups. The response will provide setting information and all public groups with information for the page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\GroupHomepageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hash = RNdjTK0tGp1N1afoblczGbFb8ikLfa9b; // string | Random hash for public groups

try {
    $result = $apiInstance->getGroupHomepage($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupHomepageApi->getGroupHomepage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| Random hash for public groups |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetGroupHomepage200Response**](../Model/GetGroupHomepage200Response.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPublicgroupsGroupIdForm()`

```php
getPublicgroupsGroupIdForm($group_id, $token, $person_id): \StevenBuehner\ChurchTools\Model\GetPublicgroupsGroupIdForm200Response
```

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
$group_id = 'group_id_example'; // string | Group ID of the public group
$token = 'token_example'; // string | Sign Up Token
$person_id = 'person_id_example'; // string | The name for which the signup should be made

try {
    $result = $apiInstance->getPublicgroupsGroupIdForm($group_id, $token, $person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupHomepageApi->getPublicgroupsGroupIdForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| Group ID of the public group |
 **token** | **string**| Sign Up Token |
 **person_id** | **string**| The name for which the signup should be made |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetPublicgroupsGroupIdForm200Response**](../Model/GetPublicgroupsGroupIdForm200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueSignUpToken()`

```php
issueSignUpToken($group_id, $issue_sign_up_token_request): \StevenBuehner\ChurchTools\Model\IssueSignUpToken200Response
```

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
$group_id = 3.4; // float | Group id of public group
$issue_sign_up_token_request = {"personId":1,"clicked":[1,2],"groupHomepageHash":"kukiOq4WofxbacqWFEa3FgbioX0kUr6p"}; // \StevenBuehner\ChurchTools\Model\IssueSignUpTokenRequest | You MUST provide either `personId` OR `email`. Both fields cannot be present at the same time.

try {
    $result = $apiInstance->issueSignUpToken($group_id, $issue_sign_up_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupHomepageApi->issueSignUpToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **float**| Group id of public group |
 **issue_sign_up_token_request** | [**\StevenBuehner\ChurchTools\Model\IssueSignUpTokenRequest**](../Model/IssueSignUpTokenRequest.md)| You MUST provide either &#x60;personId&#x60; OR &#x60;email&#x60;. Both fields cannot be present at the same time. | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\IssueSignUpToken200Response**](../Model/IssueSignUpToken200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPublicgroupsGroupIdMailToLeaders()`

```php
postPublicgroupsGroupIdMailToLeaders($group_id, $post_publicgroups_group_id_mail_to_leaders_request)
```

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
$group_id = 'group_id_example'; // string | Group ID of the public group
$post_publicgroups_group_id_mail_to_leaders_request = new \StevenBuehner\ChurchTools\Model\PostPublicgroupsGroupIdMailToLeadersRequest(); // \StevenBuehner\ChurchTools\Model\PostPublicgroupsGroupIdMailToLeadersRequest

try {
    $apiInstance->postPublicgroupsGroupIdMailToLeaders($group_id, $post_publicgroups_group_id_mail_to_leaders_request);
} catch (Exception $e) {
    echo 'Exception when calling GroupHomepageApi->postPublicgroupsGroupIdMailToLeaders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| Group ID of the public group |
 **post_publicgroups_group_id_mail_to_leaders_request** | [**\StevenBuehner\ChurchTools\Model\PostPublicgroupsGroupIdMailToLeadersRequest**](../Model/PostPublicgroupsGroupIdMailToLeadersRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPublicgroupsGroupIdSignup()`

```php
postPublicgroupsGroupIdSignup($group_id, $post_publicgroups_group_id_signup_request): \StevenBuehner\ChurchTools\Model\PostPublicgroupsGroupIdSignup200Response
```

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
$group_id = 'group_id_example'; // string | Group ID of the public group
$post_publicgroups_group_id_signup_request = new \StevenBuehner\ChurchTools\Model\PostPublicgroupsGroupIdSignupRequest(); // \StevenBuehner\ChurchTools\Model\PostPublicgroupsGroupIdSignupRequest

try {
    $result = $apiInstance->postPublicgroupsGroupIdSignup($group_id, $post_publicgroups_group_id_signup_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupHomepageApi->postPublicgroupsGroupIdSignup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| Group ID of the public group |
 **post_publicgroups_group_id_signup_request** | [**\StevenBuehner\ChurchTools\Model\PostPublicgroupsGroupIdSignupRequest**](../Model/PostPublicgroupsGroupIdSignupRequest.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\PostPublicgroupsGroupIdSignup200Response**](../Model/PostPublicgroupsGroupIdSignup200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
