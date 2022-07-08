# # InlineResponse20075Form

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **float** | ID of the form field. Only IDs within the same form field type are unique, i.e. a form field is identified by its type and its ID. |
**name** | **string** | The field&#39;s internal name. Not intended to be displayed. |
**label** | **string** | A human readable label for the form field. |
**field_type_code** | **string** | One of: checkbox, date, multiselect, number, radioselect, select, text, textarea |
**type** | **string** | One of: \&quot;person\&quot; (person fields), \&quot;custom\&quot; (custom group member fields), \&quot;relation\&quot; (when new family members should be signed up, can be \&quot;spouse\&quot; or \&quot;child\&quot;), \&quot;comment\&quot; (general comment field), \&quot;privacy\&quot; (privacy agreement for new users) |
**options** | [**\StevenBuehner\ChurchTools\Model\InlineResponse20075Options[]**](InlineResponse20075Options.md) | Provides the set of allowed options for select fields. | [optional]
**default** | **string** | The default value set when the user does not set this value. | [optional]
**sort_key** | **float** | Form fields should be sorted by this key ascending. |
**madatory** | **bool** | If this is true, the field is required. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
