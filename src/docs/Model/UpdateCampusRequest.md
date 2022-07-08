# # UpdateCampusRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**short_name** | **string** |  |
**shorty** | **string** |  |
**slug** | **string** |  |
**sort_key** | **float** |  | [default to 0]
**is_published** | **bool** |  |
**description** | **string** |  |
**website** | **string** |  |
**email** | **string** |  |
**phone** | **string** |  |
**denomination** | **string** | Either exact string or denomination object with name property |
**association_id** | **float** |  |
**address** | [**\StevenBuehner\ChurchTools\Model\UpdateCampusRequestAddress**](UpdateCampusRequestAddress.md) |  |
**social_media** | [**\StevenBuehner\ChurchTools\Model\UpdateCampusRequestSocialMedia**](UpdateCampusRequestSocialMedia.md) |  |
**tags** | **string[]** | List of tags. |
**groups** | [**\StevenBuehner\ChurchTools\Model\UpdateCampusRequestGroupsInner[]**](UpdateCampusRequestGroupsInner.md) | Either array of group IDs or array of objects with group-property, which is a domain object wiht &#39;domainIdentifier&#39; |
**visitors** | **float** | Single integer, which represents a range. |
**sign_up_group** | [**\StevenBuehner\ChurchTools\Model\UpdateCampusRequestSignUpGroup**](UpdateCampusRequestSignUpGroup.md) |  |
**services** | [**\StevenBuehner\ChurchTools\Model\UpdateCampusRequestServicesInner[]**](UpdateCampusRequestServicesInner.md) |  |
**team_title** | **string** |  |
**team** | [**\StevenBuehner\ChurchTools\Model\UpdateCampusRequestTeamInner[]**](UpdateCampusRequestTeamInner.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
