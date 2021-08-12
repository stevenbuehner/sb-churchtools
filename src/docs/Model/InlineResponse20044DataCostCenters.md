# # InlineResponse20044DataCostCenters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**number** | **string** |  | [optional]
**name** | **string** |  | [optional]
**budget** | **float** | Budget is in cent. | [optional]
**budget_balance** | **float** | Remaining amount. (Budget - Cost Center Expenses). Budget balance is in cent. | [optional]
**budget_spent** | **float** | Cost Center Expences. (Outcome - Income). In cent | [optional]
**budget_last_period** | **float** | Budget for the cost center with the same number in the previous accounting period. | [optional]
**accounting_period_id** | **int** |  | [optional]
**group** | [**\StevenBuehner\ChurchTools\Model\InlineResponse20044DataGroup**](InlineResponse20044DataGroup.md) |  | [optional]
**meta** | [**\StevenBuehner\ChurchTools\Model\EntityMetaData**](EntityMetaData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
