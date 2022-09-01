# # GetAllTransactions200ResponseDataInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** |  | [optional]
**amount** | **int** | Value is in cent. | [optional]
**cash_discount_amount** | **int** | Value is in cent. | [optional]
**cash_discount_id** | **int** |  | [optional]
**contra_account_id** | **int** |  | [optional]
**cost_center_id** | **int** |  | [optional]
**document_date** | **\DateTime** |  | [optional]
**document_number** | **string** |  | [optional]
**donator** | [**\StevenBuehner\ChurchTools\Model\GetAllCampuses200ResponseDataInnerTeamInnerPerson**](GetAllCampuses200ResponseDataInnerTeamInnerPerson.md) |  | [optional]
**donator_spouse** | [**\StevenBuehner\ChurchTools\Model\GetAllCampuses200ResponseDataInnerTeamInnerPerson**](GetAllCampuses200ResponseDataInnerTeamInnerPerson.md) |  | [optional]
**id** | **int** |  | [optional]
**is_immutable** | **bool** | If a transaction is immutable, no field can be change or deleted. | [optional]
**meta** | [**\StevenBuehner\ChurchTools\Model\GetBookings200ResponseMeta**](GetBookings200ResponseMeta.md) |  | [optional]
**note** | **string** |  | [optional]
**permissions** | [**\StevenBuehner\ChurchTools\Model\GetAllTransactions200ResponseDataInnerPermissions**](GetAllTransactions200ResponseDataInnerPermissions.md) |  | [optional]
**split_transaction_id** | **int** |  | [optional]
**tax_rate_id** | **int** | If a tax rate is set for the transaction, the corresponding tax transaction is returned in the field taxTransactionId. | [optional]
**tax_transaction_id** | **int** | Reference to the transaction which is a split booking for taxes. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
