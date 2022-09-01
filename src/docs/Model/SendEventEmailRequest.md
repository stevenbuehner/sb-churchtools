# # SendEventEmailRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**append_agenda_button** | **bool** | If an agenda exists for the event, a button with a link to that agenda is added to the mail body. |
**body** | **string** | E-Mail body. |
**event_ids** | **int[]** | Array of event IDs. Multiple event IDs MUST be integrated events, i.e. all events share the same agenda. |
**files** | **int[]** | List of file Ids. If the file is attached to the event it is added to the mail body. |
**recipients** | **int[]** | Array of person IDs. |
**send_copy_to_me** | **bool** | Flag if a mail should be send to the user sending the request. | [optional] [default to false]
**subject** | **string** | E-Mail subject. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
