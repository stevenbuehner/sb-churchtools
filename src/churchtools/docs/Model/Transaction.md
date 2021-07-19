# Transaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**document_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**document_number** | **string** |  | [optional] 
**account_id** | **int** |  | [optional] 
**contra_account_id** | **int** |  | [optional] 
**amount** | **float** | Value is in cent. | [optional] 
**note** | **string** |  | [optional] 
**is_immutable** | **bool** | If a transaction is immutable, no field can be change or deleted. | [optional] 
**cost_center_id** | **int** |  | [optional] 
**donator** | [**\StevenBuehner\ChurchTools\Model\GroupMemberPerson**](GroupMemberPerson.md) |  | [optional] 
**donator_spouse** | [**\StevenBuehner\ChurchTools\Model\GroupMemberPerson**](GroupMemberPerson.md) |  | [optional] 
**split_transaction_id** | **int** |  | [optional] 
**tax_rate_id** | **int** |  | [optional] 
**tax_amount** | **float** | Value is in cent. | [optional] 
**cash_discount_id** | **int** |  | [optional] 
**cash_discount_amount** | **float** | Value is in cent. | [optional] 
**permissions** | [**\StevenBuehner\ChurchTools\Model\TransactionPermissions**](TransactionPermissions.md) |  | [optional] 
**meta** | [**\StevenBuehner\ChurchTools\Model\EntityMetaData**](EntityMetaData.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

