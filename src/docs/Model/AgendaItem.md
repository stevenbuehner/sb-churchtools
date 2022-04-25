# # AgendaItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**position** | **int** |  | [optional]
**type** | **string** |  | [optional]
**title** | **string** |  | [optional]
**note** | **string** |  | [optional]
**duration** | **int** | Duration of agenda item in seconds. | [optional]
**start** | **\DateTime** | The start time of a position is dynamically calculated based on previous items and the start time of the event. | [optional]
**is_before_event** | **bool** |  | [optional]
**responsible** | [**\StevenBuehner\ChurchTools\Model\Agenda1Responsible**](Agenda1Responsible.md) |  | [optional]
**service_group_notes** | [**\StevenBuehner\ChurchTools\Model\Agenda1ServiceGroupNotes[]**](Agenda1ServiceGroupNotes.md) | Array of notes per service group. You will only see the service groups, you are allowed to see. | [optional]
**song** | [**\StevenBuehner\ChurchTools\Model\Agenda1Song**](Agenda1Song.md) |  | [optional]
**meta** | [**\StevenBuehner\ChurchTools\Model\Agenda1Meta**](Agenda1Meta.md) |  | [optional]
**start_times** | [**\StevenBuehner\ChurchTools\Model\Agenda1StartTimes**](Agenda1StartTimes.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
