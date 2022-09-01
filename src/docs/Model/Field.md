# # Field

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**delete_on_archive** | **bool** | Whether the field should be deleted on person archive or not | [optional]
**field_category_code** | **string** | The intern code of the field category the field belongs to | [optional]
**field_type_code** | **string** | The intern code of the field type the field belongs to | [optional]
**hide_in_frontend** | **bool** | Should be hidden in frontend | [optional]
**id** | **int** | ID of field | [optional]
**is_active** | **bool** | Active Flag | [optional]
**is_new_person_field** | **bool** | Defines if the field can be used as parameter when creating new persons | [optional]
**key** | **string** | The key of the field. This is the name that is also used when using the person or group api | [optional]
**length** | **int** | The max length of the field | [optional]
**line_ending** | **string** | The line ending that should be used when displaying the field | [optional]
**name** | **string** | Field name | [optional]
**name_translated** | **string** | Field name translated | [optional]
**nullable** | **bool** | Should define if a field can be null. This is sadly not really enforced in the application right now. So don&#39;t bet on it. | [optional]
**options** | [**\StevenBuehner\ChurchTools\Model\GetAllFields200ResponseDataInnerOptionsInner[]**](GetAllFields200ResponseDataInnerOptionsInner.md) | Possible options for this field | [optional]
**sec_level** | **int** | The security level necessary to see this field | [optional]
**shorty** | **string** | Abbreviation | [optional]
**sort_key** | **int** | Used to sort all campuses | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
