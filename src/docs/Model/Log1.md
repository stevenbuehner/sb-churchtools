# # Log1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**level** | **int** | The log level indicates the importance. 1 &#x3D; Warning, 2 &#x3D; Notice, 3 &#x3D; Info. | [optional]
**date** | [**\DateTime**](\DateTime.md) | Timestamp of log | [optional]
**person_id** | **int** | If the person ID is &#x60;-1&#x60;, that means, no person but the system itself has logged that message. | [optional]
**simulte_person_id** | **int** | If a person is simulated by an administrator, we log the personId as well. This makes it possible to see if a person did the action or an admin, who simulated that person. | [optional]
**domain_type** | **string** | The domain type tells us, where in ChurchTools the action was performed. | [optional]
**domain_id** | **int** | Analog to the domain type, the ID is the explicit resource. | [optional]
**message** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
