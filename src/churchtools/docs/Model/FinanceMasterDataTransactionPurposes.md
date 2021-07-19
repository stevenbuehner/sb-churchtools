# FinanceMasterDataTransactionPurposes

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**name** | **string** |  | [optional] 
**cost_center_id** | **int** |  | [optional] 
**purpose_account_id** | **int** | This will always be a single account. But it depends on the &#x60;isIncome&#x60; flag if this is the debit or the credit account. | [optional] 
**sort_key** | **int** |  | [optional] 
**is_income** | **bool** |  | [optional] 
**account_ids** | **int[]** |  | [optional] 
**meta** | [**\StevenBuehner\ChurchTools\Model\EntityMetaData**](EntityMetaData.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

