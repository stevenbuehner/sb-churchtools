# # InlineResponse20073

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**token** | **string** | The sign up token. |
**group** | [**\StevenBuehner\ChurchTools\Model\PublicGroup**](PublicGroup.md) |  |
**form** | [**\StevenBuehner\ChurchTools\Model\InlineResponse20073Form[]**](InlineResponse20073Form.md) | List of form fields. |
**email** | **string** | If the user is not yet signed in, this specifies the email address the user has provided. | [optional]
**requester_id** | **float** | If the user is signed in, this specifies the user ID of the requester. | [optional]
**sign_up_persons** | [**\StevenBuehner\ChurchTools\Model\InlineResponse20073SignUpPersons[]**](InlineResponse20073SignUpPersons.md) | Lists all persons the current user is allowed to sign up for. This includes spouses, children below the age of 16 and all persons with the same email address. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
