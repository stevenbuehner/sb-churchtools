# # GetAllData200ResponseDataTransactionPurposesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_ids** | **int[]** |  | [optional]
**cost_center_id** | **int** |  | [optional]
**id** | **int** |  | [optional]
**is_income** | **bool** |  | [optional]
**meta** | [**\StevenBuehner\ChurchTools\Model\GetBookings200ResponseMeta**](GetBookings200ResponseMeta.md) |  | [optional]
**name** | **string** |  | [optional]
**purpose_account_id** | **int** | This will always be a single account. But it depends on the &#x60;isIncome&#x60; flag if this is the debit or the credit account. | [optional]
**sort_key** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
