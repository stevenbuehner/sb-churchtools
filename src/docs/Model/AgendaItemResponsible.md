# # AgendaItemResponsible

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**text** | **string** | Raw text string. You need to search-replace the placeholders yourself. | [optional]
**persons** | [**\StevenBuehner\ChurchTools\Model\AgendaItemResponsiblePersonsInner[]**](AgendaItemResponsiblePersonsInner.md) | Array of all persons, who could be resolved from the text string. If a service has multiple positions, multiple objects are in the array with the same &#x60;service&#x60; text string. If a service is not yet set the &#x60;person&#x60; object will be null. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
