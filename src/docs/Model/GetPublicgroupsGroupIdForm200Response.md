# # GetPublicgroupsGroupIdForm200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | If the user is not yet signed in, this specifies the email address the user has provided. | [optional]
**form** | [**\StevenBuehner\ChurchTools\Model\GetPublicgroupsGroupIdForm200ResponseFormInner[]**](GetPublicgroupsGroupIdForm200ResponseFormInner.md) | List of form fields. |
**group** | [**\StevenBuehner\ChurchTools\Model\PublicGroup1**](PublicGroup1.md) |  |
**requester_id** | **int** | If the user is signed in, this specifies the user ID of the requester. | [optional]
**sign_up_persons** | [**\StevenBuehner\ChurchTools\Model\GetPublicgroupsGroupIdForm200ResponseSignUpPersonsInner[]**](GetPublicgroupsGroupIdForm200ResponseSignUpPersonsInner.md) | Lists all persons the current user is allowed to sign up for. This includes spouses, children below the age of 16 and all persons with the same email address. | [optional]
**token** | **string** | The sign up token. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
