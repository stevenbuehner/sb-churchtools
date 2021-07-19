# Body55

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_ids** | **int[]** | Array of event IDs. Multiple event IDs MUST be integrated events, i.e. all events share the same agenda. | 
**recipients** | **int[]** | Array of person IDs. | 
**send_copy_to_me** | **bool** | Flag if a mail should be send to the user sending the request. | [optional] [default to false]
**subject** | **string** | E-Mail subject. | 
**body** | **string** | E-Mail body. | 
**append_agenda_button** | **bool** | If an agenda exists for the event, a button with a link to that agenda is added to the mail body. | 
**files** | **int[]** | List of file Ids. If the file is attached to the event it is added to the mail body. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

