# # GetGroupHomepage200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default_view** | **string** | Type how groups are listed on the page. | [optional]
**filter** | **object[]** | Specifies all filters that can be applied for this group homepage. | [optional]
**groups** | [**\StevenBuehner\ChurchTools\Model\PublicGroup1[]**](PublicGroup1.md) | Array of groups to be displayed on the group homepage. |
**id** | **int** | Group Homepage ID |
**is_enabled** | **bool** | Wheather the group homepage is enabled. Clients should not display the group homepage if it is not enabled. |
**meta** | **object** | Entity meta data |
**order_direction** | **string** | Direction if groups are sorted ascending or descending. | [optional]
**parent_group** | **int** | ID of the parent group of all groups that should be displayed in the group homepage |
**random_url** | **string** | The group homepage identifier (same as provided as hash request parameter). |
**show_filter** | **bool** | If true, selected filters are displayed. | [optional]
**show_group_images** | **bool** | If true, the group homepage is set to display group images. |
**show_leader** | **bool** | If true, the group homepage is set to display the leaders of each group. |
**show_map** | **bool** | If true, the group homepage is set to display an overview map of all groups. |
**sort_by** | **string** | Group field to sort list of groups by. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
