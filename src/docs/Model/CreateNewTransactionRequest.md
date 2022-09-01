# # CreateNewTransactionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** |  |
**amount** | **int** | Value is in cent. |
**cash_discount_amount** | **int** | Value is in cent. | [optional]
**cash_discount_id** | **int** |  | [optional]
**contra_account_id** | **int** |  |
**cost_center_id** | **int** |  | [optional]
**document_date** | **\DateTime** |  |
**document_number** | **string** |  |
**donator_id** | **int** |  | [optional]
**donator_spouse_id** | **int** |  | [optional]
**note** | **string** |  |
**split_transaction_id** | **int** |  | [optional]
**tax_rate_id** | **int** | If set, a corresponding tax split booking automatically gets created. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
