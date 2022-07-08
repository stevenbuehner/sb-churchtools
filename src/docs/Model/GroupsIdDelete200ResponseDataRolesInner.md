# # GroupsIdDelete200ResponseDataRolesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID of this group role. | [optional]
**group_type_role_id** | **int** | ID of the corresponding group type role. | [optional]
**group_type_id** | **int** | ID of corresponding group type. | [optional]
**name** | **string** | Name of role. | [optional]
**shorty** | **string** | Abbreviation of the name. | [optional]
**sort_key** | **int** | Number used for sorting roles. | [optional]
**to_delete** | **bool** | Flag, if members of this role can be deleted or removed from the group. | [optional]
**has_requested** | **bool** | Flag, if group member is requesting group access. | [optional]
**is_leader** | **bool** | Flag, this role is a leader. | [optional]
**is_default** | **bool** | Indicator of default roles. | [optional]
**is_hidden** | **bool** | Flag, if this role is hidden in groups. | [optional]
**grow_path_id** | **int** | ID of the grow path. The id is either given from the group type role. But a group can override the grow path. In this case the group role specific ID is used. | [optional]
**force_two_factor_auth** | **bool** | Flag, if members with this role have to use two factor authentication. | [optional]
**receive_qr_code** | **bool** | Flag, if members with this role can get a QR code. | [optional]
**is_active** | **bool** | Flag, if this role is active in this group. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
