# # SendAgendaEmailRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**body** | **string** | E-Mail body. |
**event_ids** | **int[]** | Array of event IDs. Multiple event IDs MUST be integrated events, i.e. all events share the same agenda. |
**recipients** | **int[]** | Array of person IDs. |
**send_copy_to_me** | **bool** | Flag if a mail should be send to the user sending the request. | [optional] [default to false]
**subject** | **string** | E-Mail subject. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
