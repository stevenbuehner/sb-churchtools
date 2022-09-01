# # UpdateTransactionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** |  |
**amount** | **int** | Value is in cent. |
**cash_discount_amount** | **int** | Value is in cent. | [optional]
**cash_discount_id** | **int** |  | [optional]
**contra_account_id** | **int** |  |
**cost_center_id** | **int** |  |
**document_date** | **\DateTime** |  |
**document_number** | **string** |  |
**donator_id** | **int** |  | [optional]
**is_immutable** | **bool** | If &#x60;true&#x60; this transaction is immutable and cannot be edited or deleted. | [optional] [default to false]
**note** | **string** |  |
**split_transaction_id** | **int** |  | [optional]
**tax_rate_id** | **int** | If updated, the corresponding tax split booking automatically gets updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
