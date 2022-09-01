# # BatchTransactionRequestFilters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_ids** | **int[]** | Filter by account/contra account. All transactions match, where either account or contra account is in the list. | [optional]
**accounting_period_id** | **int** | Filter by Accounting Period |
**cost_center_ids** | **int[]** | Filter by Cost Centers. | [optional]
**created_pid** | **int** | Filter by person ID. Get all transactions the person has created. But only show those the user can see. | [optional]
**donator_ids** | **int[]** | Filter by donator or donator spouse. Provide an array of person ids. | [optional]
**end_date** | **\DateTime** | Show transactions before this date. | [optional]
**is_donation** | **bool** | Filter by donations. &#x60;true&#x60; &#x3D; Only donations, &#x60;false&#x60; &#x3D; Other than donation. | [optional]
**is_immutable** | **bool** | Filter transactions, whether transaction is immutable. | [optional]
**is_income** | **bool** | Filter transactions by income or outcome transactions. An account group has a flag &#x60;cash asset account&#x60; to indicate accounts for income/outcome. | [optional]
**start_date** | **\DateTime** | Show transactions after this date. | [optional]
**include** | **int[]** | List of Transaction IDs. Only those Transactions are updated. |
**exclude** | **int[]** | List of Transaction IDs. All Transactions except this list of IDs are updated in the given Accouting Period. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
