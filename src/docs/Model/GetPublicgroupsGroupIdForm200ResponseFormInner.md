# # GetPublicgroupsGroupIdForm200ResponseFormInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default** | **string** | The default value set when the user does not set this value. | [optional]
**field_type_code** | **string** | One of: checkbox, date, multiselect, number, radioselect, select, text, textarea |
**id** | **int** | ID of the form field. Only IDs within the same form field type are unique, i.e. a form field is identified by its type and its ID. |
**label** | **string** | A human readable label for the form field. |
**madatory** | **bool** | If this is true, the field is required. |
**name** | **string** | The field&#39;s internal name. Not intended to be displayed. |
**options** | [**\StevenBuehner\ChurchTools\Model\GetPublicgroupsGroupIdForm200ResponseFormInnerOptionsInner[]**](GetPublicgroupsGroupIdForm200ResponseFormInnerOptionsInner.md) | Provides the set of allowed options for select fields. | [optional]
**sort_key** | **int** | Form fields should be sorted by this key ascending. |
**type** | **string** | One of: \&quot;person\&quot; (person fields), \&quot;custom\&quot; (custom group member fields), \&quot;relation\&quot; (when new family members should be signed up, can be \&quot;spouse\&quot; or \&quot;child\&quot;), \&quot;comment\&quot; (general comment field), \&quot;privacy\&quot; (privacy agreement for new users) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
