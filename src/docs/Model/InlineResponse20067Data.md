# # InlineResponse20067Data

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**document_date** | **\DateTime** |  | [optional]
**document_number** | **string** |  | [optional]
**account_id** | **int** |  | [optional]
**contra_account_id** | **int** |  | [optional]
**amount** | **float** | Value is in cent. | [optional]
**note** | **string** |  | [optional]
**is_immutable** | **bool** | If a transaction is immutable, no field can be change or deleted. | [optional]
**cost_center_id** | **int** |  | [optional]
**donator** | [**\StevenBuehner\ChurchTools\Model\InlineResponse20018Person**](InlineResponse20018Person.md) |  | [optional]
**donator_spouse** | [**\StevenBuehner\ChurchTools\Model\InlineResponse20018Person**](InlineResponse20018Person.md) |  | [optional]
**split_transaction_id** | **int** |  | [optional]
**tax_rate_id** | **float** | If a tax rate is set for the transaction, the corresponding tax transaction is returned in the field taxTransactionId. | [optional]
**tax_transaction_id** | **float** | Reference to the transaction which is a split booking for taxes. | [optional]
**cash_discount_id** | **int** |  | [optional]
**cash_discount_amount** | **float** | Value is in cent. | [optional]
**permissions** | [**\StevenBuehner\ChurchTools\Model\InlineResponse20067Permissions**](InlineResponse20067Permissions.md) |  | [optional]
**meta** | [**\StevenBuehner\ChurchTools\Model\EntityMetaData**](EntityMetaData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
