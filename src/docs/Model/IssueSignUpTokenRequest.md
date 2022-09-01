# # IssueSignUpTokenRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**clicked** | **mixed[]** | Array of person ids, which are clicked on group detail page. Those persons, will be also checked on the form site. The &#x60;clicked&#x60; field will be saved only in combination with &#x60;personId&#x60;. | [optional]
**email** | **string** | eMail address of not logged in user or new user. | [optional]
**group_homepage_hash** | **string** | The hash of the group homepage. If specified, the user can return to the group homepage after the sign up was successful. | [optional]
**person_id** | **int** | Person Id, which issues the token. | [optional]
**sign_up_url_template** | **string** | Url used in the mail sent to the user. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
