<?php
/**
 * PublicGroupSignUpConditions
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ChurchTools REST API
 *
 * The ChurchTools REST API is the best entry point for developers to access ChurchTools. <br><br> **Authentication:** You need to be authorized to use some endpoints. Those endpoints are marked by a gray lock symbol. If you view the documentation, while you are logged into ChurchTools, all requests are already authorized. If you want to authorized a request, you need to provide a `Login Token` as `Authorization` header in the format `Authorization: Login<token>` or send a valid cookie. You can use the green \"Authorize\" dialog to enter those details and see how a request would look like in detail. <br><br> **Missing Endpoints:** Not all features are yet available by our new REST API. This documentation will grow in the future. We are working hard to add new endpoints with every ChurchTools version. The documentation will always show only those endpoints you can use with your ChurchTools installation.
 *
 * The version of the OpenAPI document: 0.1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace StevenBuehner\ChurchTools\Model;

use \ArrayAccess;
use \StevenBuehner\ChurchTools\ObjectSerializer;

/**
 * PublicGroupSignUpConditions Class Doc Comment
 *
 * @category Class
 * @description Specifies conditions required to sign up in this group. Not all conditions apply to any user, e.g. some of the conditions only apply to users that are not logged in.
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PublicGroupSignUpConditions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PublicGroup_signUpConditions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'group_is_not_hidden' => 'bool',
        'group_is_active' => 'bool',
        'group_is_open_for_members' => 'bool',
        'group_is_not_full' => 'bool',
        'group_has_leader' => 'bool',
        'end_date_not_passed' => 'bool',
        'roles_set_in_group' => 'bool',
        'group_is_public' => 'bool',
        'can_contact_leader' => 'bool',
        'new_person_station_is_set' => 'bool',
        'new_person_status_is_set' => 'bool',
        'new_person_department_is_set' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'group_is_not_hidden' => null,
        'group_is_active' => null,
        'group_is_open_for_members' => null,
        'group_is_not_full' => null,
        'group_has_leader' => null,
        'end_date_not_passed' => null,
        'roles_set_in_group' => null,
        'group_is_public' => null,
        'can_contact_leader' => null,
        'new_person_station_is_set' => null,
        'new_person_status_is_set' => null,
        'new_person_department_is_set' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'group_is_not_hidden' => 'groupIsNotHidden',
        'group_is_active' => 'groupIsActive',
        'group_is_open_for_members' => 'groupIsOpenForMembers',
        'group_is_not_full' => 'groupIsNotFull',
        'group_has_leader' => 'groupHasLeader',
        'end_date_not_passed' => 'endDateNotPassed',
        'roles_set_in_group' => 'rolesSetInGroup',
        'group_is_public' => 'groupIsPublic',
        'can_contact_leader' => 'canContactLeader',
        'new_person_station_is_set' => 'newPersonStationIsSet',
        'new_person_status_is_set' => 'newPersonStatusIsSet',
        'new_person_department_is_set' => 'newPersonDepartmentIsSet'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'group_is_not_hidden' => 'setGroupIsNotHidden',
        'group_is_active' => 'setGroupIsActive',
        'group_is_open_for_members' => 'setGroupIsOpenForMembers',
        'group_is_not_full' => 'setGroupIsNotFull',
        'group_has_leader' => 'setGroupHasLeader',
        'end_date_not_passed' => 'setEndDateNotPassed',
        'roles_set_in_group' => 'setRolesSetInGroup',
        'group_is_public' => 'setGroupIsPublic',
        'can_contact_leader' => 'setCanContactLeader',
        'new_person_station_is_set' => 'setNewPersonStationIsSet',
        'new_person_status_is_set' => 'setNewPersonStatusIsSet',
        'new_person_department_is_set' => 'setNewPersonDepartmentIsSet'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'group_is_not_hidden' => 'getGroupIsNotHidden',
        'group_is_active' => 'getGroupIsActive',
        'group_is_open_for_members' => 'getGroupIsOpenForMembers',
        'group_is_not_full' => 'getGroupIsNotFull',
        'group_has_leader' => 'getGroupHasLeader',
        'end_date_not_passed' => 'getEndDateNotPassed',
        'roles_set_in_group' => 'getRolesSetInGroup',
        'group_is_public' => 'getGroupIsPublic',
        'can_contact_leader' => 'getCanContactLeader',
        'new_person_station_is_set' => 'getNewPersonStationIsSet',
        'new_person_status_is_set' => 'getNewPersonStatusIsSet',
        'new_person_department_is_set' => 'getNewPersonDepartmentIsSet'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['group_is_not_hidden'] = $data['group_is_not_hidden'] ?? null;
        $this->container['group_is_active'] = $data['group_is_active'] ?? null;
        $this->container['group_is_open_for_members'] = $data['group_is_open_for_members'] ?? null;
        $this->container['group_is_not_full'] = $data['group_is_not_full'] ?? null;
        $this->container['group_has_leader'] = $data['group_has_leader'] ?? null;
        $this->container['end_date_not_passed'] = $data['end_date_not_passed'] ?? null;
        $this->container['roles_set_in_group'] = $data['roles_set_in_group'] ?? null;
        $this->container['group_is_public'] = $data['group_is_public'] ?? null;
        $this->container['can_contact_leader'] = $data['can_contact_leader'] ?? null;
        $this->container['new_person_station_is_set'] = $data['new_person_station_is_set'] ?? null;
        $this->container['new_person_status_is_set'] = $data['new_person_status_is_set'] ?? null;
        $this->container['new_person_department_is_set'] = $data['new_person_department_is_set'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['group_is_not_hidden'] === null) {
            $invalidProperties[] = "'group_is_not_hidden' can't be null";
        }
        if ($this->container['group_is_active'] === null) {
            $invalidProperties[] = "'group_is_active' can't be null";
        }
        if ($this->container['group_is_open_for_members'] === null) {
            $invalidProperties[] = "'group_is_open_for_members' can't be null";
        }
        if ($this->container['group_is_not_full'] === null) {
            $invalidProperties[] = "'group_is_not_full' can't be null";
        }
        if ($this->container['group_has_leader'] === null) {
            $invalidProperties[] = "'group_has_leader' can't be null";
        }
        if ($this->container['end_date_not_passed'] === null) {
            $invalidProperties[] = "'end_date_not_passed' can't be null";
        }
        if ($this->container['roles_set_in_group'] === null) {
            $invalidProperties[] = "'roles_set_in_group' can't be null";
        }
        if ($this->container['group_is_public'] === null) {
            $invalidProperties[] = "'group_is_public' can't be null";
        }
        if ($this->container['can_contact_leader'] === null) {
            $invalidProperties[] = "'can_contact_leader' can't be null";
        }
        if ($this->container['new_person_station_is_set'] === null) {
            $invalidProperties[] = "'new_person_station_is_set' can't be null";
        }
        if ($this->container['new_person_status_is_set'] === null) {
            $invalidProperties[] = "'new_person_status_is_set' can't be null";
        }
        if ($this->container['new_person_department_is_set'] === null) {
            $invalidProperties[] = "'new_person_department_is_set' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets group_is_not_hidden
     *
     * @return bool
     */
    public function getGroupIsNotHidden()
    {
        return $this->container['group_is_not_hidden'];
    }

    /**
     * Sets group_is_not_hidden
     *
     * @param bool $group_is_not_hidden If false, the group is set to hidden and nobody can sign up.
     *
     * @return self
     */
    public function setGroupIsNotHidden($group_is_not_hidden)
    {
        $this->container['group_is_not_hidden'] = $group_is_not_hidden;

        return $this;
    }

    /**
     * Gets group_is_active
     *
     * @return bool
     */
    public function getGroupIsActive()
    {
        return $this->container['group_is_active'];
    }

    /**
     * Sets group_is_active
     *
     * @param bool $group_is_active If false, the group is not in active state and nobody can sign up.
     *
     * @return self
     */
    public function setGroupIsActive($group_is_active)
    {
        $this->container['group_is_active'] = $group_is_active;

        return $this;
    }

    /**
     * Gets group_is_open_for_members
     *
     * @return bool
     */
    public function getGroupIsOpenForMembers()
    {
        return $this->container['group_is_open_for_members'];
    }

    /**
     * Sets group_is_open_for_members
     *
     * @param bool $group_is_open_for_members If false, the group is not set to be open for members and nobody can sign up.
     *
     * @return self
     */
    public function setGroupIsOpenForMembers($group_is_open_for_members)
    {
        $this->container['group_is_open_for_members'] = $group_is_open_for_members;

        return $this;
    }

    /**
     * Gets group_is_not_full
     *
     * @return bool
     */
    public function getGroupIsNotFull()
    {
        return $this->container['group_is_not_full'];
    }

    /**
     * Sets group_is_not_full
     *
     * @param bool $group_is_not_full If false, the group's max number of members is reached and nobody can sign up.
     *
     * @return self
     */
    public function setGroupIsNotFull($group_is_not_full)
    {
        $this->container['group_is_not_full'] = $group_is_not_full;

        return $this;
    }

    /**
     * Gets group_has_leader
     *
     * @return bool
     */
    public function getGroupHasLeader()
    {
        return $this->container['group_has_leader'];
    }

    /**
     * Sets group_has_leader
     *
     * @param bool $group_has_leader If false, no leader is set for the group and nobody can sign up.
     *
     * @return self
     */
    public function setGroupHasLeader($group_has_leader)
    {
        $this->container['group_has_leader'] = $group_has_leader;

        return $this;
    }

    /**
     * Gets end_date_not_passed
     *
     * @return bool
     */
    public function getEndDateNotPassed()
    {
        return $this->container['end_date_not_passed'];
    }

    /**
     * Sets end_date_not_passed
     *
     * @param bool $end_date_not_passed If false, the group's end date has passed and nobody can sign up.
     *
     * @return self
     */
    public function setEndDateNotPassed($end_date_not_passed)
    {
        $this->container['end_date_not_passed'] = $end_date_not_passed;

        return $this;
    }

    /**
     * Gets roles_set_in_group
     *
     * @return bool
     */
    public function getRolesSetInGroup()
    {
        return $this->container['roles_set_in_group'];
    }

    /**
     * Sets roles_set_in_group
     *
     * @param bool $roles_set_in_group If false, the standard role and requester role are not set for the group and nobody can sign up.
     *
     * @return self
     */
    public function setRolesSetInGroup($roles_set_in_group)
    {
        $this->container['roles_set_in_group'] = $roles_set_in_group;

        return $this;
    }

    /**
     * Gets group_is_public
     *
     * @return bool
     */
    public function getGroupIsPublic()
    {
        return $this->container['group_is_public'];
    }

    /**
     * Sets group_is_public
     *
     * @param bool $group_is_public If false, the group is not public and only users already signed in are allowed to sign up.
     *
     * @return self
     */
    public function setGroupIsPublic($group_is_public)
    {
        $this->container['group_is_public'] = $group_is_public;

        return $this;
    }

    /**
     * Gets can_contact_leader
     *
     * @return bool
     */
    public function getCanContactLeader()
    {
        return $this->container['can_contact_leader'];
    }

    /**
     * Sets can_contact_leader
     *
     * @param bool $can_contact_leader If false, none of the group's leaders have an email address set. Only persons already signed in can sign up.
     *
     * @return self
     */
    public function setCanContactLeader($can_contact_leader)
    {
        $this->container['can_contact_leader'] = $can_contact_leader;

        return $this;
    }

    /**
     * Gets new_person_station_is_set
     *
     * @return bool
     */
    public function getNewPersonStationIsSet()
    {
        return $this->container['new_person_station_is_set'];
    }

    /**
     * Sets new_person_station_is_set
     *
     * @param bool $new_person_station_is_set If false, the default station for new users is not set. When persons without an account attempt to sign up, no new user accounts will be created but the group leader will be requested by mail.
     *
     * @return self
     */
    public function setNewPersonStationIsSet($new_person_station_is_set)
    {
        $this->container['new_person_station_is_set'] = $new_person_station_is_set;

        return $this;
    }

    /**
     * Gets new_person_status_is_set
     *
     * @return bool
     */
    public function getNewPersonStatusIsSet()
    {
        return $this->container['new_person_status_is_set'];
    }

    /**
     * Sets new_person_status_is_set
     *
     * @param bool $new_person_status_is_set If false, the default status for new users is not set. When persons without an account attempt to sign up, no new user accounts will be created but the group leader will be requested by mail.
     *
     * @return self
     */
    public function setNewPersonStatusIsSet($new_person_status_is_set)
    {
        $this->container['new_person_status_is_set'] = $new_person_status_is_set;

        return $this;
    }

    /**
     * Gets new_person_department_is_set
     *
     * @return bool
     */
    public function getNewPersonDepartmentIsSet()
    {
        return $this->container['new_person_department_is_set'];
    }

    /**
     * Sets new_person_department_is_set
     *
     * @param bool $new_person_department_is_set If false, the default department for new users is not set. When persons without an account attempt to sign up, no new user accounts will be created but the group leader will be requested by mail.
     *
     * @return self
     */
    public function setNewPersonDepartmentIsSet($new_person_department_is_set)
    {
        $this->container['new_person_department_is_set'] = $new_person_department_is_set;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


