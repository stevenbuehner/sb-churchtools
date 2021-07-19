# PublicGroup

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **float** | The public group ID. | 
**name** | **string** | Name of the group, e.g. to be displayed as title. | 
**information** | [**\StevenBuehner\ChurchTools\Model\InlineResponse20025Information**](InlineResponse20025Information.md) |  | 
**children** | [**array**](array.md) | Lists all (direct) child group IDs for the current group. | [optional] 
**auto_accept** | **bool** | If true, group sign up requests will be accepted automatically. | 
**allow_waitinglist** | **bool** | If true, group sign is allowed even if group is full. | 
**max_member_count** | **float** | Maximum number of members until the group is considered as full. | 
**current_member_count** | **float** | Current number of members in the group. | 
**requested_places_count** | **float** | Number of member requests | 
**requested_waitinglist_places_count** | **float** | Number of member requests with waiting list position | 
**can_sign_up** | **bool** | Indicates if the current user (either logged in or not) can sign up. This summarizes the information in signUpConditions. | 
**sign_up_conditions** | [**\StevenBuehner\ChurchTools\Model\InlineResponse20025SignUpConditions**](InlineResponse20025SignUpConditions.md) |  | 
**sign_up_persons** | [**\StevenBuehner\ChurchTools\Model\InlineResponse20025SignUpPersons[]**](InlineResponse20025SignUpPersons.md) | Lists all persons the current user is allowed to sign up for. This includes spouses, children below the age of 16 and all persons with the same email address. | [optional] 
**sign_up_headline** | **string** | Text which can be displayed as a headline for the sign up section | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

