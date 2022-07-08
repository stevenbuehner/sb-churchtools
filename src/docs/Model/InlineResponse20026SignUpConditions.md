# # InlineResponse20026SignUpConditions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**group_is_not_hidden** | **bool** | If false, the group is set to hidden and nobody can sign up. |
**group_is_active** | **bool** | If false, the group is not in active state and nobody can sign up. |
**group_is_open_for_members** | **bool** | If false, the group is not set to be open for members and nobody can sign up. |
**group_is_not_full** | **bool** | If false, the group&#39;s max number of members is reached and nobody can sign up. |
**group_has_leader** | **bool** | If false, no leader is set for the group and nobody can sign up. |
**end_date_not_passed** | **bool** | If false, the group&#39;s end date has passed and nobody can sign up. |
**roles_set_in_group** | **bool** | If false, the standard role and requester role are not set for the group and nobody can sign up. |
**group_is_public** | **bool** | If false, the group is not public and only users already signed in are allowed to sign up. |
**can_contact_leader** | **bool** | If false, none of the group&#39;s leaders have an email address set. Only persons already signed in can sign up. |
**new_person_station_is_set** | **bool** | If false, the default station for new users is not set. When persons without an account attempt to sign up, no new user accounts will be created but the group leader will be requested by mail. |
**new_person_status_is_set** | **bool** | If false, the default status for new users is not set. When persons without an account attempt to sign up, no new user accounts will be created but the group leader will be requested by mail. |
**new_person_department_is_set** | **bool** | If false, the default department for new users is not set. When persons without an account attempt to sign up, no new user accounts will be created but the group leader will be requested by mail. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
