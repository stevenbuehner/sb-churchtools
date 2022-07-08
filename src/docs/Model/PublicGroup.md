# # PublicGroup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **float** | The public group ID. |
**name** | **string** | Name of the group, e.g. to be displayed as title. |
**information** | [**\StevenBuehner\ChurchTools\Model\PublicGroupInformation**](PublicGroupInformation.md) |  |
**children** | **array** | Lists all (direct) child group IDs for the current group. | [optional]
**auto_accept** | **bool** | If true, group sign up requests will be accepted automatically. |
**allow_waitinglist** | **bool** | If true, group sign is allowed even if group is full. |
**max_member_count** | **float** | Maximum number of members until the group is considered as full. |
**current_member_count** | **float** | Current number of members in the group. |
**requested_places_count** | **float** | Number of member requests |
**requested_waitinglist_places_count** | **float** | Number of member requests with waiting list position |
**can_sign_up** | **bool** | Indicates if the current user (either logged in or not) can sign up. This summarizes the information in signUpConditions. |
**sign_up_conditions** | [**\StevenBuehner\ChurchTools\Model\PublicGroupSignUpConditions**](PublicGroupSignUpConditions.md) |  |
**sign_up_persons** | [**\StevenBuehner\ChurchTools\Model\PublicGroupSignUpPersonsInner[]**](PublicGroupSignUpPersonsInner.md) | Lists all persons the current user is allowed to sign up for. This includes spouses, children below the age of 16 and all persons with the same email address. | [optional]
**sign_up_headline** | **string** | Text which can be displayed as a headline for the sign up section | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
