# # BatchTransactionRequestFiltersAnyOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accounting_period_id** | **int** | Filter by Accounting Period |
**created_pid** | **int** | Filter by person ID. Get all transactions the person has created. But only show those the user can see. | [optional]
**cost_center_ids** | **float[]** | Filter by Cost Centers. | [optional]
**donator_ids** | **float[]** | Filter by donator or donator spouse. Provide an array of person ids. | [optional]
**account_ids** | **float[]** | Filter by account/contra account. All transactions match, where either account or contra account is in the list. | [optional]
**is_donation** | **bool** | Filter by donations. &#x60;true&#x60; &#x3D; Only donations, &#x60;false&#x60; &#x3D; Other than donation. | [optional]
**is_income** | **bool** | Filter transactions by income or outcome transactions. An account group has a flag &#x60;cash asset account&#x60; to indicate accounts for income/outcome. | [optional]
**start_date** | **\DateTime** | Show transactions after this date. | [optional]
**end_date** | **\DateTime** | Show transactions before this date. | [optional]
**is_immutable** | **bool** | Filter transactions, whether transaction is immutable. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
