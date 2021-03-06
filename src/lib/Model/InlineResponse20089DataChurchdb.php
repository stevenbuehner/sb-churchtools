<?php
/**
 * InlineResponse20089DataChurchdb
 *
 * PHP version 7.3
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
 * OpenAPI Generator version: 5.4.0
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
 * InlineResponse20089DataChurchdb Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineResponse20089DataChurchdb implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_89_data_churchdb';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'see_persons' => 'int',
        'see_group' => 'int',
        'see_group_tags' => 'bool',
        'add_person' => 'bool',
        'edit_groupmemberstatus' => 'bool',
        'get_emails' => 'bool',
        'do_followup' => 'bool',
        'do_group_meeting' => 'bool',
        'export_group_members' => 'bool',
        'edit_group_hierachy' => 'bool',
        'see_hidden_group' => 'bool',
        'edit_group' => 'bool',
        'admin_group_fields' => 'bool',
        'admin_automatic_emails' => 'bool',
        'remove_from_group' => 'bool',
        'admin_group_chat' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'see_persons' => null,
        'see_group' => null,
        'see_group_tags' => null,
        'add_person' => null,
        'edit_groupmemberstatus' => null,
        'get_emails' => null,
        'do_followup' => null,
        'do_group_meeting' => null,
        'export_group_members' => null,
        'edit_group_hierachy' => null,
        'see_hidden_group' => null,
        'edit_group' => null,
        'admin_group_fields' => null,
        'admin_automatic_emails' => null,
        'remove_from_group' => null,
        'admin_group_chat' => null
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
        'see_persons' => '+see persons',
        'see_group' => '+see group',
        'see_group_tags' => '+see group tags',
        'add_person' => '+add person',
        'edit_groupmemberstatus' => '+edit groupmemberstatus',
        'get_emails' => '+get emails',
        'do_followup' => '+do followup',
        'do_group_meeting' => '+do group meeting',
        'export_group_members' => '+export group members',
        'edit_group_hierachy' => '+edit group hierachy',
        'see_hidden_group' => '+see hidden group',
        'edit_group' => '+edit group',
        'admin_group_fields' => '+admin group fields',
        'admin_automatic_emails' => '+admin automatic emails',
        'remove_from_group' => '+remove from group',
        'admin_group_chat' => '+admin group chat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'see_persons' => 'setSeePersons',
        'see_group' => 'setSeeGroup',
        'see_group_tags' => 'setSeeGroupTags',
        'add_person' => 'setAddPerson',
        'edit_groupmemberstatus' => 'setEditGroupmemberstatus',
        'get_emails' => 'setGetEmails',
        'do_followup' => 'setDoFollowup',
        'do_group_meeting' => 'setDoGroupMeeting',
        'export_group_members' => 'setExportGroupMembers',
        'edit_group_hierachy' => 'setEditGroupHierachy',
        'see_hidden_group' => 'setSeeHiddenGroup',
        'edit_group' => 'setEditGroup',
        'admin_group_fields' => 'setAdminGroupFields',
        'admin_automatic_emails' => 'setAdminAutomaticEmails',
        'remove_from_group' => 'setRemoveFromGroup',
        'admin_group_chat' => 'setAdminGroupChat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'see_persons' => 'getSeePersons',
        'see_group' => 'getSeeGroup',
        'see_group_tags' => 'getSeeGroupTags',
        'add_person' => 'getAddPerson',
        'edit_groupmemberstatus' => 'getEditGroupmemberstatus',
        'get_emails' => 'getGetEmails',
        'do_followup' => 'getDoFollowup',
        'do_group_meeting' => 'getDoGroupMeeting',
        'export_group_members' => 'getExportGroupMembers',
        'edit_group_hierachy' => 'getEditGroupHierachy',
        'see_hidden_group' => 'getSeeHiddenGroup',
        'edit_group' => 'getEditGroup',
        'admin_group_fields' => 'getAdminGroupFields',
        'admin_automatic_emails' => 'getAdminAutomaticEmails',
        'remove_from_group' => 'getRemoveFromGroup',
        'admin_group_chat' => 'getAdminGroupChat'
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
        $this->container['see_persons'] = $data['see_persons'] ?? null;
        $this->container['see_group'] = $data['see_group'] ?? null;
        $this->container['see_group_tags'] = $data['see_group_tags'] ?? null;
        $this->container['add_person'] = $data['add_person'] ?? null;
        $this->container['edit_groupmemberstatus'] = $data['edit_groupmemberstatus'] ?? null;
        $this->container['get_emails'] = $data['get_emails'] ?? null;
        $this->container['do_followup'] = $data['do_followup'] ?? null;
        $this->container['do_group_meeting'] = $data['do_group_meeting'] ?? null;
        $this->container['export_group_members'] = $data['export_group_members'] ?? null;
        $this->container['edit_group_hierachy'] = $data['edit_group_hierachy'] ?? null;
        $this->container['see_hidden_group'] = $data['see_hidden_group'] ?? null;
        $this->container['edit_group'] = $data['edit_group'] ?? null;
        $this->container['admin_group_fields'] = $data['admin_group_fields'] ?? null;
        $this->container['admin_automatic_emails'] = $data['admin_automatic_emails'] ?? null;
        $this->container['remove_from_group'] = $data['remove_from_group'] ?? null;
        $this->container['admin_group_chat'] = $data['admin_group_chat'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets see_persons
     *
     * @return int|null
     */
    public function getSeePersons()
    {
        return $this->container['see_persons'];
    }

    /**
     * Sets see_persons
     *
     * @param int|null $see_persons see_persons
     *
     * @return self
     */
    public function setSeePersons($see_persons)
    {
        $this->container['see_persons'] = $see_persons;

        return $this;
    }

    /**
     * Gets see_group
     *
     * @return int|null
     */
    public function getSeeGroup()
    {
        return $this->container['see_group'];
    }

    /**
     * Sets see_group
     *
     * @param int|null $see_group see_group
     *
     * @return self
     */
    public function setSeeGroup($see_group)
    {
        $this->container['see_group'] = $see_group;

        return $this;
    }

    /**
     * Gets see_group_tags
     *
     * @return bool|null
     */
    public function getSeeGroupTags()
    {
        return $this->container['see_group_tags'];
    }

    /**
     * Sets see_group_tags
     *
     * @param bool|null $see_group_tags see_group_tags
     *
     * @return self
     */
    public function setSeeGroupTags($see_group_tags)
    {
        $this->container['see_group_tags'] = $see_group_tags;

        return $this;
    }

    /**
     * Gets add_person
     *
     * @return bool|null
     */
    public function getAddPerson()
    {
        return $this->container['add_person'];
    }

    /**
     * Sets add_person
     *
     * @param bool|null $add_person add_person
     *
     * @return self
     */
    public function setAddPerson($add_person)
    {
        $this->container['add_person'] = $add_person;

        return $this;
    }

    /**
     * Gets edit_groupmemberstatus
     *
     * @return bool|null
     */
    public function getEditGroupmemberstatus()
    {
        return $this->container['edit_groupmemberstatus'];
    }

    /**
     * Sets edit_groupmemberstatus
     *
     * @param bool|null $edit_groupmemberstatus edit_groupmemberstatus
     *
     * @return self
     */
    public function setEditGroupmemberstatus($edit_groupmemberstatus)
    {
        $this->container['edit_groupmemberstatus'] = $edit_groupmemberstatus;

        return $this;
    }

    /**
     * Gets get_emails
     *
     * @return bool|null
     */
    public function getGetEmails()
    {
        return $this->container['get_emails'];
    }

    /**
     * Sets get_emails
     *
     * @param bool|null $get_emails get_emails
     *
     * @return self
     */
    public function setGetEmails($get_emails)
    {
        $this->container['get_emails'] = $get_emails;

        return $this;
    }

    /**
     * Gets do_followup
     *
     * @return bool|null
     */
    public function getDoFollowup()
    {
        return $this->container['do_followup'];
    }

    /**
     * Sets do_followup
     *
     * @param bool|null $do_followup do_followup
     *
     * @return self
     */
    public function setDoFollowup($do_followup)
    {
        $this->container['do_followup'] = $do_followup;

        return $this;
    }

    /**
     * Gets do_group_meeting
     *
     * @return bool|null
     */
    public function getDoGroupMeeting()
    {
        return $this->container['do_group_meeting'];
    }

    /**
     * Sets do_group_meeting
     *
     * @param bool|null $do_group_meeting do_group_meeting
     *
     * @return self
     */
    public function setDoGroupMeeting($do_group_meeting)
    {
        $this->container['do_group_meeting'] = $do_group_meeting;

        return $this;
    }

    /**
     * Gets export_group_members
     *
     * @return bool|null
     */
    public function getExportGroupMembers()
    {
        return $this->container['export_group_members'];
    }

    /**
     * Sets export_group_members
     *
     * @param bool|null $export_group_members export_group_members
     *
     * @return self
     */
    public function setExportGroupMembers($export_group_members)
    {
        $this->container['export_group_members'] = $export_group_members;

        return $this;
    }

    /**
     * Gets edit_group_hierachy
     *
     * @return bool|null
     */
    public function getEditGroupHierachy()
    {
        return $this->container['edit_group_hierachy'];
    }

    /**
     * Sets edit_group_hierachy
     *
     * @param bool|null $edit_group_hierachy edit_group_hierachy
     *
     * @return self
     */
    public function setEditGroupHierachy($edit_group_hierachy)
    {
        $this->container['edit_group_hierachy'] = $edit_group_hierachy;

        return $this;
    }

    /**
     * Gets see_hidden_group
     *
     * @return bool|null
     */
    public function getSeeHiddenGroup()
    {
        return $this->container['see_hidden_group'];
    }

    /**
     * Sets see_hidden_group
     *
     * @param bool|null $see_hidden_group see_hidden_group
     *
     * @return self
     */
    public function setSeeHiddenGroup($see_hidden_group)
    {
        $this->container['see_hidden_group'] = $see_hidden_group;

        return $this;
    }

    /**
     * Gets edit_group
     *
     * @return bool|null
     */
    public function getEditGroup()
    {
        return $this->container['edit_group'];
    }

    /**
     * Sets edit_group
     *
     * @param bool|null $edit_group edit_group
     *
     * @return self
     */
    public function setEditGroup($edit_group)
    {
        $this->container['edit_group'] = $edit_group;

        return $this;
    }

    /**
     * Gets admin_group_fields
     *
     * @return bool|null
     */
    public function getAdminGroupFields()
    {
        return $this->container['admin_group_fields'];
    }

    /**
     * Sets admin_group_fields
     *
     * @param bool|null $admin_group_fields admin_group_fields
     *
     * @return self
     */
    public function setAdminGroupFields($admin_group_fields)
    {
        $this->container['admin_group_fields'] = $admin_group_fields;

        return $this;
    }

    /**
     * Gets admin_automatic_emails
     *
     * @return bool|null
     */
    public function getAdminAutomaticEmails()
    {
        return $this->container['admin_automatic_emails'];
    }

    /**
     * Sets admin_automatic_emails
     *
     * @param bool|null $admin_automatic_emails admin_automatic_emails
     *
     * @return self
     */
    public function setAdminAutomaticEmails($admin_automatic_emails)
    {
        $this->container['admin_automatic_emails'] = $admin_automatic_emails;

        return $this;
    }

    /**
     * Gets remove_from_group
     *
     * @return bool|null
     */
    public function getRemoveFromGroup()
    {
        return $this->container['remove_from_group'];
    }

    /**
     * Sets remove_from_group
     *
     * @param bool|null $remove_from_group remove_from_group
     *
     * @return self
     */
    public function setRemoveFromGroup($remove_from_group)
    {
        $this->container['remove_from_group'] = $remove_from_group;

        return $this;
    }

    /**
     * Gets admin_group_chat
     *
     * @return bool|null
     */
    public function getAdminGroupChat()
    {
        return $this->container['admin_group_chat'];
    }

    /**
     * Sets admin_group_chat
     *
     * @param bool|null $admin_group_chat admin_group_chat
     *
     * @return self
     */
    public function setAdminGroupChat($admin_group_chat)
    {
        $this->container['admin_group_chat'] = $admin_group_chat;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


