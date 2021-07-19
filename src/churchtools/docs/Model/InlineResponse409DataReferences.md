# InlineResponse409DataReferences

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**table_name** | **string** | Table name, with reference / foreign key constraint. | [optional] 
**column_name** | **string** | Column name of the reference / foreign key. | [optional] 
**count** | **int** | Number of references in that table. | [optional] 
**type** | **string** | Type of reference. &#x27;ENTRY&#x27; (entry links to this object) or &#x27;REFERENCE&#x27; (this object has a foreign key to this table) | [optional] 
**blocks_deletion** | **bool** | Indicator if those references are blocking the deletion. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

