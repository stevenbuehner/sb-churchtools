# AgendaItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**position** | **int** |  | [optional] 
**type** | **string** |  | [optional] 
**title** | **string** |  | [optional] 
**note** | **string** |  | [optional] 
**duration** | **int** | Duration of agenda item in seconds. | [optional] 
**start** | [**\DateTime**](\DateTime.md) | The start time of a position is dynamically calculated based on previous items and the start time of the event. | [optional] 
**is_before_event** | **bool** |  | [optional] 
**responsible** | [**\StevenBuehner\ChurchTools\Model\AgendaResponsible**](AgendaResponsible.md) |  | [optional] 
**service_group_notes** | [**\StevenBuehner\ChurchTools\Model\AgendaServiceGroupNotes[]**](AgendaServiceGroupNotes.md) | Array of notes per service group. You will only see the service groups, you are allowed to see. | [optional] 
**song** | [**\StevenBuehner\ChurchTools\Model\AgendaSong**](AgendaSong.md) |  | [optional] 
**meta** | [**\StevenBuehner\ChurchTools\Model\AgendaMeta**](AgendaMeta.md) |  | [optional] 
**start_times** | [**\StevenBuehner\ChurchTools\Model\AgendaStartTimes**](AgendaStartTimes.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

