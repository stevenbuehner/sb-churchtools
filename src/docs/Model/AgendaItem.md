# # AgendaItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**duration** | **int** | Duration of agenda item in seconds. | [optional]
**id** | **int** |  | [optional]
**is_before_event** | **bool** |  | [optional]
**meta** | [**\StevenBuehner\ChurchTools\Model\GetBookings200ResponseDataInnerBaseAdditionalsInnerMeta**](GetBookings200ResponseDataInnerBaseAdditionalsInnerMeta.md) |  | [optional]
**note** | **string** |  | [optional]
**position** | **int** |  | [optional]
**responsible** | [**\StevenBuehner\ChurchTools\Model\AgendaItemResponsible**](AgendaItemResponsible.md) |  | [optional]
**service_group_notes** | [**\StevenBuehner\ChurchTools\Model\AgendaItemServiceGroupNotesInner[]**](AgendaItemServiceGroupNotesInner.md) | Array of notes per service group. You will only see the service groups, you are allowed to see. | [optional]
**song** | [**\StevenBuehner\ChurchTools\Model\AgendaItemSong**](AgendaItemSong.md) |  | [optional]
**start** | **\DateTime** | The start time of a position is dynamically calculated based on previous items and the start time of the event. | [optional]
**start_times** | [**\StevenBuehner\ChurchTools\Model\AgendaItemStartTimes**](AgendaItemStartTimes.md) |  | [optional]
**title** | **string** |  | [optional]
**type** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
