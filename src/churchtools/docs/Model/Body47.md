# Body47

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**person_id** | **float** | Person Id, which issues the token. | [optional] 
**email** | **string** | eMail address of not logged in user or new user. | [optional] 
**clicked** | [**null[]**](.md) | Array of person ids, which are clicked on group detail page. Those persons, will be also checked on the form site. The &#x60;clicked&#x60; field will be saved only in combination with &#x60;personId&#x60;. | [optional] 
**group_homepage_hash** | **string** | The hash of the group homepage. If specified, the user can return to the group homepage after the sign up was successful. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

