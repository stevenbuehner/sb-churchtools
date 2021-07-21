# # InlineObject42

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**document_date** | [**\DateTime**](\DateTime.md) |  |
**document_number** | **string** |  |
**account_id** | **int** |  |
**contra_account_id** | **int** |  |
**amount** | **float** | Value is in cent. |
**note** | **string** |  |
**cost_center_id** | **int** |  |
**donator_id** | **int** |  | [optional]
**split_transaction_id** | **int** |  | [optional]
**tax_rate_id** | **int** |  | [optional]
**tax_amount** | **float** | Value is in cent. | [optional]
**cash_discount_id** | **int** |  | [optional]
**cash_discount_amount** | **float** | Value is in cent. | [optional]
**is_immutable** | **bool** | If &#x60;true&#x60; this transaction is immutable and cannot be edited or deleted. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)