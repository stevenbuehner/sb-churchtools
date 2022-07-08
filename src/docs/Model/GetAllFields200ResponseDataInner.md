# # GetAllFields200ResponseDataInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID of field | [optional]
**key** | **string** | The key of the field. This is the name that is also used when using the person or group api | [optional]
**name** | **string** | Field name | [optional]
**name_translated** | **string** | Field name translated | [optional]
**shorty** | **string** | Abbreviation | [optional]
**field_category_code** | **string** | The intern code of the field category the field belongs to | [optional]
**field_type_code** | **string** | The intern code of the field type the field belongs to | [optional]
**is_active** | **bool** | Active Flag | [optional]
**is_new_person_field** | **bool** | Defines if the field can be used as parameter when creating new persons | [optional]
**line_ending** | **string** | The line ending that should be used when displaying the field | [optional]
**sec_level** | **int** | The security level necessary to see this field | [optional]
**length** | **int** | The max length of the field | [optional]
**delete_on_archive** | **bool** | Whether the field should be deleted on person archive or not | [optional]
**nullable** | **bool** | Should define if a field can be null. This is sadly not really enforced in the application right now. So don&#39;t bet on it. | [optional]
**sort_key** | **int** | Used to sort all campuses | [optional]
**hide_in_frontend** | **bool** | Should be hidden in frontend | [optional]
**options** | [**\StevenBuehner\ChurchTools\Model\GetAllFields200ResponseDataInnerOptionsInner[]**](GetAllFields200ResponseDataInnerOptionsInner.md) | Possible options for this field | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
